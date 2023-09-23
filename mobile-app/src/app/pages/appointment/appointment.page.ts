import { Component } from '@angular/core';
import { Router } from '@angular/router';
import { NavController } from '@ionic/angular';
import { DummyService } from './../../services/dummy.service';
import * as moment from 'moment';

interface ServiceItem {
  name: string;
  img: string;
}

interface DateItem {
  date: number;
  day: string;
  val: string;
  selectDay: string;
  month: string;
}

@Component({
  selector: 'app-appointment',
  templateUrl: './appointment.page.html',
  styleUrls: ['./appointment.page.scss'],
})
export class AppointmentPage {
  currentWeek = 0;
  days: DateItem[] = [];
  initDate: any;
  selectedDate: any;
  currentDate: any;
  month: string = ''; // Initialize the month variable
  activeSlot: number = 0;
  services: ServiceItem[] = [];

  slots = [
    '10:00 AM', '11:00 AM', '11:30 AM', '12:00 PM', '01:00 PM', '02:00 PM', '03:30 PM', '04:00 PM'
  ];

  constructor(
    private navCtrl: NavController,
    private router: Router,
    private dummy: DummyService
  ) {
    this.services = this.dummy.services;
  }

  ionViewDidEnter() {
    this.dateConfig();
  }

  dateConfig() {
    setTimeout(() => {
      // this.dateslide.lockSwipes(true); // No longer needed
    }, 150);
    this.selectedDate = moment().format().split('T')[0];
    this.currentDate = moment().format().split('T')[0];

    this.days = [];

    this.initDate = moment().format();

    const startOfWeek = moment().startOf('week');
    const endOfWeek = moment().endOf('week');

    let day = startOfWeek;
    while (day <= endOfWeek) {
      const data: DateItem = {
        date: day.toDate().getDate(),
        day: day.format('ddd'),
        val: day.format(),
        selectDay: day.format('dddd DD MMMM'),
        month: day.format('MMMM')
      };
      this.days.push(data);
      day = day.clone().add(1, 'd');
    }
    this.month = this.days[3].month;
  }

  selectDate(date: DateItem) {
    if (this.currentDate <= date.val.split('T')[0]) {
      this.selectedDate = date.val.split('T')[0];
    }
  }

  previousWeek() {
    if (this.currentWeek !== 0) {
      // this.dateslide.update(); // No longer needed
      this.days = [];
      this.currentWeek = this.currentWeek - 1;
      const startOfWeek = moment().add(this.currentWeek, 'weeks').startOf('week');
      const endOfWeek = moment().add(this.currentWeek, 'weeks').endOf('week');
      let day = startOfWeek;
      while (day <= endOfWeek) {
        const data: DateItem = {
          date: day.toDate().getDate(),
          day: day.format('ddd'),
          val: day.format(),
          selectDay: day.format('dddd DD MMMM'),
          month: day.format('MMMM')
        };
        this.days.push(data);
        day = day.clone().add(1, 'd');
      }
      this.month = this.days[3].month;
    }
  }

  nextWeek() {
    // this.dateslide.update(); // No longer needed
    this.days = [];
    this.currentWeek++;
    const startOfWeek = moment().add(this.currentWeek, 'weeks').startOf('week');
    const endOfWeek = moment().add(this.currentWeek, 'weeks').endOf('week');
    let day = startOfWeek;
    while (day <= endOfWeek) {
      const data: DateItem = {
        date: day.toDate().getDate(),
        day: day.format('ddd'),
        val: day.format(),
        selectDay: day.format('dddd DD MMMM'),
        month: day.format('MMMM')
      };
      this.days.push(data);
      day = day.clone().add(1, 'd');
    }
    this.month = this.days[3].month;
  }

  onBack() {
    this.navCtrl.back();
  }

  viewProfile() {
    this.router.navigate(['/doctor']);
  }

  getDirection() {
    this.router.navigate(['/get-direction']);
  }

  bookAppointment() {
    this.router.navigate(['/appointment']);
  }

  getArticles() {
    this.router.navigate(['/appointment-end']);
  }
}

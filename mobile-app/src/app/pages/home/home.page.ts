import { Component, OnInit, AfterViewInit, ViewChild } from '@angular/core';
import { NavController } from '@ionic/angular';
import { Router } from '@angular/router';
import { Swiper } from 'swiper';

@Component({
  selector: 'app-home',
  templateUrl: './home.page.html',
  styleUrls: ['./home.page.scss'],
})
export class HomePage implements OnInit {

  @ViewChild('swiperContainer') swiperContainer: any;
  @ViewChild('swiperContainer2') swiperContainer2: any;

  selectedEmotions: number[] = [];

  constructor(
    private router: Router,
    private navCtrl: NavController
  ) {}

  ngOnInit() {
  }
  onBack(){
    this['navCtrl'].back();
  }

  knowYourSelf(){
    this.router.navigate(['/questions']);
  }
  bookAppointment(){
    this.router.navigate(['/appointment']);
  }
  
  ngAfterViewInit() {
    this.initSwipers();
  }

  goToChat(){
    this.router.navigate(['/conversations']);
  }

  private initSwipers() {
    const swiper1 = new Swiper(this.swiperContainer.nativeElement, {
      slidesPerView: 2, // Number of slides to show at once
      spaceBetween: 10, // Space between slides
      navigation: {
        nextEl: '.swiper-button-next', // Next button selector
        prevEl: '.swiper-button-prev', // Previous button selector
      },
    });

    const swiper2 = new Swiper(this.swiperContainer2.nativeElement, {
      slidesPerView: 1, // Number of slides to show at once
      spaceBetween: 10, // Space between slides
      navigation: {
        nextEl: '.swiper-button-next', // Next button selector
        prevEl: '.swiper-button-prev', // Previous button selector
      },
    });
  }

  toggleEmotion(index: number) {
    const isSelected = this.isSelected(index);

    if (isSelected) {
      this.selectedEmotions = this.selectedEmotions.filter((emotion) => emotion !== index);
    } else {
      if (this.selectedEmotions.length < 3) {
        this.selectedEmotions.push(index);
      }
    }
  }

  isSelected(index: number): boolean {
    return this.selectedEmotions.includes(index);
  }

}

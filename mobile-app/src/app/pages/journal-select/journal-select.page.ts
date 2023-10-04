import { Router } from '@angular/router';
import { Component, OnInit } from '@angular/core';
import { NavController } from '@ionic/angular';
import { AngularFireAuth } from '@angular/fire/compat/auth';
import { AlertController } from '@ionic/angular';
import { AngularFireDatabase } from '@angular/fire/compat/database';
@Component({
  selector: 'app-journal-select',
  templateUrl: './journal-select.page.html',
  styleUrls: ['./journal-select.page.scss'],
})
export class JournalSelectPage implements OnInit {
  selectedDate: string = new Date().toISOString(); 
  calendarOptions: any = {
    pickMode: 'single', // You can change this to 'range' for multiple selections
    title: 'Select a Date',
}
  email: string | null = null;
  firstName: string = '';
  selectedEmotions: string[] = [];
  selectedOptions = {
    option1: false,
    option2: false,
    option3: false,
  };

  constructor(
    private router: Router,
    private navCtrl: NavController,
    private afAuth: AngularFireAuth,
    private alertController: AlertController,
    private db: AngularFireDatabase,
  ) {}

  ngOnInit() {
    this.afAuth.authState.subscribe((user) => {
      if (user) {
        this.email = user.email;
        console.log('login as', this.email);

        this.db
          .object(`patients/${user.uid}/patient_first_name`)
          .valueChanges()
          .subscribe((firstName: string | unknown) => {
            if (typeof firstName === 'string') {
              this.firstName = firstName;
              console.log('username is', this.firstName);
            }
          });
      }
    });
  }

  toggleEmotion(emotionName: string) {
    const isSelected = this.isSelected(emotionName);

    if (isSelected) {
      this.selectedEmotions = this.selectedEmotions.filter(
        (emotion) => emotion !== emotionName
      );
    } else {
      if (this.selectedEmotions.length < 9) {
        this.selectedEmotions.push(emotionName);
      }
    }
  }

  isSelected(emotionName: string): boolean {
    return this.selectedEmotions.includes(emotionName);
  }

  onBack() {
    this.navCtrl.back();
  }
}
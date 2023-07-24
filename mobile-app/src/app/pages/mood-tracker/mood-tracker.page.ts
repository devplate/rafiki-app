import { Router } from '@angular/router';
import { Component, OnInit } from '@angular/core';
import { NavController } from '@ionic/angular';

@Component({
  selector: 'app-mood-tracker',
  templateUrl: './mood-tracker.page.html',
  styleUrls: ['./mood-tracker.page.scss'],
})
export class MoodTrackerPage implements OnInit {

  selectedEmotions: number[] = [];

  constructor(
    private router: Router,
    private navCtrl: NavController
  ) {}

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

}

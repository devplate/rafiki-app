import { Component, NgZone } from '@angular/core';
import { Router } from '@angular/router';
import { Gesture, GestureController } from '@ionic/angular';

@Component({
  selector: 'app-intro',
  templateUrl: 'intro.page.html',
  styleUrls: ['intro.page.scss'],
})
export class IntroPage {
  constructor(private router: Router, private gestureCtrl: GestureController, private ngZone: NgZone) {}

  ionViewDidEnter() {
    const gesture: Gesture = this.gestureCtrl.create({
      el: document.querySelector('ion-content'),
      gestureName: 'swipe',
      direction: 'x',
      onMove: ev => this.onSwipe(ev),
    });
    gesture.enable();
  }

  onSwipe(event: any) {
    if (event.deltaX < -150) {
      this.ngZone.run(() => {
        // Navigate to the "LoginPage" when swiped left
        this.router.navigate(['/login']);
      });
    }
  }
}

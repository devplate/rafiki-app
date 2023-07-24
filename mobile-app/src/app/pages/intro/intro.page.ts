import { Component, ViewChild, NgZone } from '@angular/core';
import { Router } from '@angular/router';
import { GestureController, Gesture } from '@ionic/angular';

@Component({
  selector: 'app-intro',
  templateUrl: 'intro.page.html',
  styleUrls: ['intro.page.scss'],
})
export class IntroPage {

  constructor(private router: Router, private gestureCtrl: GestureController, private ngZone: NgZone) {}

  async ionViewDidEnter() {
    const gesture: Gesture = await this.gestureCtrl.create({
      el: document.querySelector('ion-content') as any, // Type-cast to 'any'
      gestureName: 'swipe',
      direction: 'x',
      onMove: ev => this.onSwipe(ev),
    });
    gesture.enable(true);
  }

  onSwipe(event: any) {
    if (event.deltaX < -150) {
      this.ngZone.run(() => {
        // Navigate to the "NextPage" when swiped left
        this.router.navigate(['/login']);
      });
    }
  }
}

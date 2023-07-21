import { Component, ViewChild } from '@angular/core';
import { IonSlides, NavController } from '@ionic/angular';

@Component({
  selector: 'app-intro',
  templateUrl: 'intro.page.html',
  styleUrls: ['intro.page.scss'],
})
export class IntroPage {
  @ViewChild(IonSlides) slides: IonSlides;

  constructor(private navCtrl: NavController) {}

  async onSlideTransitionEnd() {
    const activeIndex = await this.slides.getActiveIndex();
    const slidesLength = await this.slides.length();
    
    if (activeIndex === slidesLength - 1) {
      this.openVerifyPage();
    }
  }

  openVerifyPage() {
    this.navCtrl.navigateForward('/terms');
  }
}

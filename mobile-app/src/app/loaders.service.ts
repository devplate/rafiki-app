import { Injectable } from '@angular/core';
import { LoadingController } from '@ionic/angular';
import { NavigationStart, NavigationEnd, Router } from '@angular/router';

@Injectable({
  providedIn: 'root'
})
export class LoadersService {
  private loader: HTMLIonLoadingElement | undefined;

  constructor(
    private loadingController: LoadingController,
    private router: Router
  ) {
    this.router.events.subscribe((event) => {
      if (event instanceof NavigationStart) {
        this.presentLoader();
      } else if (event instanceof NavigationEnd) {
        this.dismissLoader();
      }
    });
  }

  async presentLoader() {
    this.loader = await this.loadingController.create({
      message: 'Loading...',
      spinner: 'crescent',
      translucent: true,
    });
    await this.loader.present();
  }

  async dismissLoader() {
    if (this.loader) {
      await this.loader.dismiss();
    }
  }
}

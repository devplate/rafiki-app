import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';
import { NavController } from '@ionic/angular';

@Component({
  selector: 'app-login',
  templateUrl: './login.page.html',
  styleUrls: ['./login.page.scss'],
})
export class LoginPage implements OnInit {
  email: string ;
  password: string ;

  constructor(
    private router: Router,
    private navCtrl: NavController
  ) {}

  ngOnInit() {}

  onBack() {
    this.navCtrl.back();
  }

  goToVerify() {
    this.router.navigate(['/verify-identity']);
  }

  goToReset() {
    this.router.navigate(['/forget-password']);
  }

  onBackIntro() {
    this.navCtrl.navigateBack('');
  }

  isValidForm(): boolean {
    return !!this.email && !!this.password;
  }
}

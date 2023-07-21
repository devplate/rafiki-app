import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';
import { NavController } from '@ionic/angular';

@Component({
  selector: 'app-update-password',
  templateUrl: './update-password.page.html',
  styleUrls: ['./update-password.page.scss'],
})
export class UpdatePasswordPage implements OnInit {

  password: string;
  confirmpassword: string;

  constructor(
    private router: Router,
    private navCtrl: NavController
  ) {}

  ngOnInit() {
  }

  onBack() {
    this.navCtrl.back();
  }

  goToVerify() {
    this.router.navigate(['/signin']);
  }

  goToSignIn() {
    this.router.navigate(['/signin']);
  }

  onBackIntro() {
    this.navCtrl.navigateBack('signin');
  }

  isValidForm(): boolean {
    return !!this.password && !!this.confirmpassword;
  }
  
}

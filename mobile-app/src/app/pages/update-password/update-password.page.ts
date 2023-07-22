import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';
import { NavController } from '@ionic/angular';

@Component({
  selector: 'app-update-password',
  templateUrl: './update-password.page.html',
  styleUrls: ['./update-password.page.scss'],
})
export class UpdatePasswordPage implements OnInit {

  password: string ='';
  confirmpassword: string ='';

  constructor(
    private router: Router,
    private navCtrl: NavController
  ) {}

  ngOnInit() {
  }

  onBack() {
    this['navCtrl'].back();
  }

  goToVerify() {
    this.router.navigate(['/login']);
  }

  goToSignIn() {
    this.router.navigate(['/login']);
  }

  onBackIntro() {
    this.navCtrl.navigateBack('login');
  }

  isValidForm(): boolean {
    return !!this.password && !!this.confirmpassword;
  }
  
}

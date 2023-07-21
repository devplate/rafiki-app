
import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';
import { NavController } from '@ionic/angular';

@Component({
  selector: 'app-verify-identity',
  templateUrl: './verify-identity.page.html',
  styleUrls: ['./verify-identity.page.scss'],
})
export class VerifyIdentityPage implements OnInit {

  config = {
    length: 4,
    allowNumbersOnly: true,
    disableAutoFocus: true
};

  constructor(
    private router: Router,
    private NavCtrl: NavController
  ) { }

  ngOnInit() {
  }
  onBack() {
    this.NavCtrl.back();
  }
  onBackSignIn(){
    this.NavCtrl.navigateBack('/signin');
  }
  goToMoodTracker(){
    this.router.navigate(['/mood-tracker']);
  }

  goToResend(){
    this.router.navigate(['/resend-code']);
  }

}
import { NavController } from '@ionic/angular';
import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';

@Component({
  selector: 'app-resend-code',
  templateUrl: './resend-code.page.html',
  styleUrls: ['./resend-code.page.scss'],
})
export class ResendCodePage implements OnInit {
  [x: string]: any;
  phoneNumber: string;

  constructor(
    private router: Router,
    private NavCtrl: NavController
    ) {}

  ngOnInit() {
  }

  goToVerify(){
    this.router.navigate(['/verify-identity']);
  }
  onBackSignIn(){
    this.NavCtrl.navigateBack('/signin');
  }

  isValidForm(): boolean {
    return !!this.phoneNumber;
  }

}

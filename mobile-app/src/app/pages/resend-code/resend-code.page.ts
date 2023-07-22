import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';
import { NavController } from '@ionic/angular';

@Component({
  selector: 'app-resend-code',
  templateUrl: './resend-code.page.html',
  styleUrls: ['./resend-code.page.scss'],
})
export class ResendCodePage implements OnInit {
  [x: string]: any;
  phoneNumber: string ='';

  constructor(
    private router: Router,
    private navCtrl: NavController // Fixed the property name here
  ) {}

  ngOnInit() {
  }
  
  onBackPage() {
    this['navCtrl'].back(); // Use bracket notation here
  }
  
  goToVerify() {
    this.router.navigate(['/verify-identity']);
  }

  isValidForm(): boolean {
    return !!this.phoneNumber;
  }
}

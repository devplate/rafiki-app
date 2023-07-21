import { NavController } from '@ionic/angular';
import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';

@Component({
  selector: 'app-forgot-password',
  templateUrl: './forgot-password.page.html',
  styleUrls: ['./forgot-password.page.scss'],
})

export class ForgotPasswordPage implements OnInit {
  [x: string]: any;
  email: string;

  constructor(
    private router: Router,
    private NavCtrl: NavController
    ) {}

  ngOnInit() {
  }

  goToVerify(){
    this.router.navigate(['/update-password']);
  }

  isValidForm(): boolean {
    return !!this.email;
  }

}

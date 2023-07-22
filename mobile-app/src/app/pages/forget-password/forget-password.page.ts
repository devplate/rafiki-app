import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';
import { NavController } from '@ionic/angular';

@Component({
  selector: 'app-forget-password',
  templateUrl: './forget-password.page.html',
  styleUrls: ['./forget-password.page.scss'],
})
export class ForgetPasswordPage implements OnInit {

    [x: string]: any;
    email: string = '';
  
    constructor(
    private router: Router,
    private navCtrl: NavController
  ) {}
  
      ngOnInit() {
      }
    
      onBack() {
        this['navCtrl'].back();
      }

    goToVerify(){
      this.router.navigate(['/update-password']);
    }
  
    isValidForm(): boolean {
      return !!this.email;
    }
  
  }
  
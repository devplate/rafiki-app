import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';
import { NavController } from '@ionic/angular';

@Component({
  selector: 'app-terms',
  templateUrl: './terms.page.html',
  styleUrls: ['./terms.page.scss'],
})
export class TermsPage implements OnInit {

  accepted: boolean = false;

  constructor(
    private router: Router,
    private navCtrl: NavController
  ) {}

  ngOnInit() {
  }
  
  onBack() {
    this.navCtrl.back();
  }

  login() {
    this.router.navigate(['/signin']);
  }
}
import { NavController } from '@ionic/angular';
import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';

@Component({
  selector: 'app-appointment-end',
  templateUrl: './appointment-end.page.html',
  styleUrls: ['./appointment-end.page.scss'],
})
export class AppointmentEndPage implements OnInit {

  constructor(
    private router: Router,
    private NavCtrl: NavController
    ) {}

  ngOnInit() {
  }
  getArticles(){
    this.router.navigate(['/aid-center']);
  }
  onBack() {
    this.NavCtrl.back();
  }
}

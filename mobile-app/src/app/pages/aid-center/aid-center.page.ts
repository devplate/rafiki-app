import { Component, OnInit } from '@angular/core';
import { NavController } from '@ionic/angular';
import { Router } from '@angular/router';

@Component({
  selector: 'app-aid-center',
  templateUrl: './aid-center.page.html',
  styleUrls: ['./aid-center.page.scss'],
})
export class AidCenterPage implements OnInit {

  constructor(
    private router: Router,
    private NavCtrl: NavController
    ) {}

  ngOnInit() {
  }
  onBack() {
    this.NavCtrl.back();
  }
}

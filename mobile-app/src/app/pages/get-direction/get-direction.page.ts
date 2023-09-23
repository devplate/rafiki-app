import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';
import { NavController } from '@ionic/angular';

@Component({
  selector: 'app-get-direction',
  templateUrl: './get-direction.page.html',
  styleUrls: ['./get-direction.page.scss'],
})
export class GetDirectionPage implements OnInit {
  
  constructor(
    private NavCtrl: NavController,
    private router: Router
  ) { }

  ngOnInit() {
  }
  onBack() {
    this.NavCtrl.back();
  }
}

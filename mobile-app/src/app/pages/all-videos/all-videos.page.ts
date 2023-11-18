import { Component, OnInit, ViewChild } from '@angular/core';
import { NavController } from '@ionic/angular';
import { Router } from '@angular/router';

@Component({
  selector: 'app-all-videos',
  templateUrl: './all-videos.page.html',
  styleUrls: ['./all-videos.page.scss'],
})
export class AllVideosPage implements OnInit {
  
  constructor(private router: Router, private navCtrl: NavController) {}

  ngOnInit() {}

  onBack() {
    this.navCtrl.back();
  }

}
import { Component, OnInit, ViewChild } from '@angular/core';
import { NavController } from '@ionic/angular';
import { Router } from '@angular/router';

@Component({
  selector: 'app-all-audios',
  templateUrl: './all-audios.page.html',
  styleUrls: ['./all-audios.page.scss'],
})
export class AllAudiosPage implements OnInit {
  
  constructor(private router: Router, private navCtrl: NavController) {}

  ngOnInit() {}

  onBack() {
    this.navCtrl.back();
  }

}
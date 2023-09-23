import { Component, OnInit, ViewChild } from '@angular/core';
import { NavController } from '@ionic/angular';
import { Router } from '@angular/router';

@Component({
  selector: 'app-all-blog',
  templateUrl: './all-blog.page.html',
  styleUrls: ['./all-blog.page.scss'],
})
export class AllBlogPage implements OnInit {
  
    constructor(private router: Router, private navCtrl: NavController) {}
  
    ngOnInit() {}
  
    onBack() {
      this.navCtrl.back();
    }
  
  }
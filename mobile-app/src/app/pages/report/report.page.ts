import { NavController } from '@ionic/angular';
import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';

@Component({
  selector: 'app-report',
  templateUrl: './report.page.html',
  styleUrls: ['./report.page.scss'],
})
export class ReportPage implements OnInit {

  progress: number = 0;

  constructor(
    private router: Router,
    private NavCtrl: NavController
    ) {}

    ngOnInit() {
    }
  
  onBack() {
    this.NavCtrl.back();
    }
    onSelectDoctor() {
      this.router.navigate(['/select-doctor']);
      }
  }
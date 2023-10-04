import { NavController } from '@ionic/angular';
import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';

@Component({
  selector: 'app-journal-done',
  templateUrl: './journal-done.page.html',
  styleUrls: ['./journal-done.page.scss'],
})
export class JournalDonePage implements OnInit {

  constructor(
    private router: Router,
    private NavCtrl: NavController
    ) {}

  ngOnInit() {
  }
  getJournals(){
    this.router.navigate(['/journal-list']);
  }
  onBack() {
    this.NavCtrl.back();
  }
}
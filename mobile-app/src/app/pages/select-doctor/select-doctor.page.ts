import { Router } from '@angular/router';
import { Component, OnInit } from '@angular/core';
import { ModalController, NavController } from '@ionic/angular';

@Component({
  selector: 'app-select-doctor',
  templateUrl: './select-doctor.page.html',
  styleUrls: ['./select-doctor.page.scss'],
})
export class SelectDoctorPage implements OnInit {

  constructor(
    private router: Router,
    private NavCtrl: NavController,
    private modalController: ModalController
  ) { }

  ngOnInit() {
  }
  vieProfile(){
    this.router.navigate(['doctor']);
  }
  onBack() {
    this.NavCtrl.back();
  }
  viewAppointment(){
    this.router.navigate(['/appointment']);
  }
}

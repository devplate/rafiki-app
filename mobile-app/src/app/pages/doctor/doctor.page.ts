import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';
import { NavController } from '@ionic/angular';

@Component({
  selector: 'app-doctor',
  templateUrl: './doctor.page.html',
  styleUrls: ['./doctor.page.scss'],
})
export class DoctorPage implements OnInit {

  constructor(
    private NavCtrl: NavController,
    private router: Router
  ) { }

  ngOnInit() {
  }
  onBack() {
    this.NavCtrl.back();
  }
  bookAppointment(){
    this.router.navigate(['/appointment']);
  }
  viewProfile(){
    this.router.navigate(['/doctor']);
  }
  getDirection(){
    this.router.navigate(['/doctor-direction'])
  }
}

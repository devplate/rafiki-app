
import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';
import { NavController } from '@ionic/angular';

@Component({
  selector: 'app-verify-identity',
  templateUrl: './verify-identity.page.html',
  styleUrls: ['./verify-identity.page.scss'],
})
export class VerifyIdentityPage implements OnInit {
  
  
  config = {
    length: 4,
    allowNumbersOnly: true,
    disableAutoFocus: true
  };
  
  remainingSeconds: number;
  private interval: any;

  constructor(
    private router: Router,
    private NavCtrl: NavController
  ) { 
    this.remainingSeconds = 30;
  }
  ngOnInit() {
    this.startTimer();
  }

  startTimer() {
    this.interval = setInterval(() => {
      if (this.remainingSeconds > 0) {
        this.remainingSeconds--;
      } else {
        // Stop the timer when it reaches 0
        this.stopTimer();
      }
    }, 1000); // Update every 1 second
  }
  
  stopTimer() {
    // Clear the interval to stop the timer
    clearInterval(this.interval);
  }
  
  onBack() {
    this.NavCtrl.back();
  }
  
  goToMoodTracker(){
    this.router.navigate(['/mood-tracker']);
  }

  goToResend(){
    this.router.navigate(['/resend-code']);
  }

}
import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';
import { NavController } from '@ionic/angular';
import { AngularFireAuth } from '@angular/fire/compat/auth';
import { AlertController } from '@ionic/angular'; // Import AlertController

@Component({
  selector: 'app-login',
  templateUrl: './login.page.html',
  styleUrls: ['./login.page.scss'],
})
export class LoginPage implements OnInit {
  email: string = ''; // Initialize with an empty string
  password: string = ''; // Initialize with an empty string
  errorMessage: string = ''; // Define errorMessage as a string

  constructor(
    private router: Router,
    private navCtrl: NavController,
    private afAuth: AngularFireAuth,
    private alertController: AlertController // Inject AlertController
  ) {}

  ngOnInit() {}

  onBack() {
    this.navCtrl.back();
  }

  async goToMoodTracker() {
    // Implement login logic using AngularFireAuth
    try {
      const userCredential = await this.afAuth.signInWithEmailAndPassword(
        this.email,
        this.password
      );

      if (userCredential.user) {

        // User is logged in successfully, you can navigate to the moodtracker or another page.
        this.router.navigate(['/mood-tracker']);
        
        // console the username and id for the login
        console.log("login as", this.email );
      }
    } catch (error) {
      console.error('Login error:', error);
      this.errorMessage = 'Hello Rafiki, Please check your email and password.';
      this.showErrorAlert('Login Failed', this.errorMessage);
    }
  }

  goToReset() {
    this.router.navigate(['/forget-password']);

  }

  onBackIntro() {
    this.navCtrl.navigateBack('');
  }

  isValidForm(): boolean {
    return !!this.email && !!this.password;
  }

  async showErrorAlert(title: string, message: string) {
    const alert = await this.alertController.create({
      header: title,
      message: message,
      buttons: ['OK'],
    });

    await alert.present();
  }
}

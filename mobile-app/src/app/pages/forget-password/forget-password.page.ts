import { Router } from '@angular/router';
import { Component, OnInit } from '@angular/core';
import { NavController } from '@ionic/angular';
import { AngularFireAuth } from '@angular/fire/compat/auth';
import { AlertController } from '@ionic/angular';
import { AngularFireDatabase } from '@angular/fire/compat/database'; // Import AngularFireDatabase

@Component({
  selector: 'app-forget-password',
  templateUrl: './forget-password.page.html',
  styleUrls: ['./forget-password.page.scss'],
})
export class ForgetPasswordPage implements OnInit {
  email: string = '';
  errorMessage: string = '';
  resetInProgress: boolean = false;

  constructor(
    private router: Router,
    private navCtrl: NavController,
    private afAuth: AngularFireAuth,
    private alertController: AlertController,
    private db: AngularFireDatabase // Inject AngularFireDatabase
  ) {}

  ngOnInit() {}

  onBack() {
    this.navCtrl.back();
  }

  async resetPassword() {
    try {
      if (!this.email) {
        this.showErrorAlert('Reset Password', 'Please enter your email address.');
        return;
      }

      this.resetInProgress = true;

      // Check if the email exists in Firebase Authentication
      const signInMethods = await this.afAuth.fetchSignInMethodsForEmail(this.email);

      if (signInMethods.length === 0) {

        // Check if the email exists in the Realtime Database
        const snapshot = await this.db.database.ref('patients')
          .orderByChild('patient_email')
          .equalTo(this.email)
          .once('value');

        if (!snapshot.exists()) {
          // Email doesn't exist in the Realtime Database
          this.showErrorAlert(
            'Reset Password',
            'We do not have your email in our records.'
          );

          // console we don't found you are email
          console.log("We do not have your email in our records");

        } else {
          // Email exists in the Realtime Database, send the password reset email
          await this.afAuth.sendPasswordResetEmail(this.email);

          this.showSuccessAlert(
            'Reset Password',
            'Password reset email sent to your email, Check your inbox.'
          );

          // console if we found the email
          console.log("We have your email in our records");

          // After sending the reset email, navigate to the login page
          this.goToLogin();
        }
      } else {
        // Email exists in Firebase Authentication
        // Proceed with password reset as before
        await this.afAuth.sendPasswordResetEmail(this.email);

        this.showSuccessAlert(
          'Reset Password',
          'Password reset email sent. Check your inbox.'
        );

        // After sending the reset email, navigate to the login page
        this.goToLogin();
      }
    } catch (error) {
      console.error('Password reset error:', error);
      this.showErrorAlert(
        'Reset Password',
        'An error occurred. Please try again later.'
      );
    } finally {
      this.resetInProgress = false;
    }
  }
  

  goToLogin() {
    this.router.navigate(['/login']);
  }

  isValidForm(): boolean {
    return !!this.email;
  }

  async showSuccessAlert(title: string, message: string) {
    const alert = await this.alertController.create({
      header: title,
      message: message,
      buttons: ['OK'],
    });

    await alert.present();
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

import { Router } from '@angular/router';
import { Component, OnInit } from '@angular/core';
import { NavController } from '@ionic/angular';
import { AngularFireAuth } from '@angular/fire/compat/auth';
import { AlertController } from '@ionic/angular';
import { AngularFireDatabase } from '@angular/fire/compat/database';
import { HttpClient, HttpParams } from '@angular/common/http';

@Component({
  selector: 'app-journal-express',
  templateUrl: './journal-express.page.html',
  styleUrls: ['./journal-express.page.scss'],
})
export class JournalExpressPage implements OnInit {
  email: string | null = null;
  firstName: string = '';
  selectedEmotions: string[] = [];

  constructor(
    private router: Router,
    private navCtrl: NavController,
    private afAuth: AngularFireAuth,
    private alertController: AlertController,
    private db: AngularFireDatabase,
    private http: HttpClient // Inject HttpClient
  ) {}

  ngOnInit() {
    this.afAuth.authState.subscribe((user) => {
      if (user) {
        this.email = user.email;
        console.log('login as', this.email);

        this.db
          .object(`patients/${user.uid}/patient_first_name`)
          .valueChanges()
          .subscribe((firstName: string | unknown) => {
            if (typeof firstName === 'string') {
              this.firstName = firstName;
              console.log('username is', this.firstName);
            }
          });
      }
    });
  }

  toggleEmotion(emotionName: string) {
    const isSelected = this.isSelected(emotionName);

    if (isSelected) {
      this.selectedEmotions = this.selectedEmotions.filter(
        (emotion) => emotion !== emotionName
      );
    } else {
      if (this.selectedEmotions.length < 9) {
        this.selectedEmotions.push(emotionName);
      }
    }
  }

  isSelected(emotionName: string): boolean {
    return this.selectedEmotions.includes(emotionName);
  }

  onBack() {
    this.navCtrl.back();
  }

  knowYourSelf() {
    // Define the URL of your server API
    const apiUrl = 'https://rafikiapptz.azurewebsites.net/diagnosis';
  
    // Create an array of query parameters for each feeling
    const queryParams = this.selectedEmotions.map((emotion) => `feelings=${encodeURIComponent(emotion)}`);
  
    // Combine the query parameters into a single string
    const queryString = queryParams.join('&');
  
    // Append the query string to the API URL
    const fullUrl = `${apiUrl}?${queryString}`;
  
    console.log('Full URL:', fullUrl);
  
    // Make a GET request to your server with the combined URL
    this.http.get(fullUrl, { observe: 'response' }).subscribe(
      (response) => {
        console.log('Response Headers:', response.headers); // Log response headers
        console.log('Response Body:', response.body); // Log response body
  
        // Check if it's a redirect (HTTP status code 302)
        if (response.status === 302) {
          const newUrl = response.headers.get('Location');
          console.log('Redirect URL:', newUrl); // Log the redirection URL
          if (newUrl) {
            // Handle the redirection to the new URL
            window.location.href = newUrl; // Redirect the user to the result page
          } else {
            console.error('Redirect URL not found in headers.');
          }
        } else {
          // Handle success for the original URL
          console.log('Feelings submitted successfully:', response);
        }
      },
      
      (error) => {
        // Handle error (e.g., show an error message)
        console.error('Error submitting feelings:', error);
      }
    );
  }
  bookAppointment() {
    this.router.navigate(['/appointment']);
  }
}

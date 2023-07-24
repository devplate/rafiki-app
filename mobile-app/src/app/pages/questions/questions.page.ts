import { Component, OnInit } from '@angular/core';
import { NavController } from '@ionic/angular';

@Component({
  selector: 'app-questions',
  templateUrl: './questions.page.html',
  styleUrls: ['./questions.page.scss'],
})
export class QuestionsPage implements OnInit {
  current_Div = 0; // Change the initial value to 0
  selectedValue: string = '';
  total_Div = 4; // Update this with the total number of pages

  constructor(private navCtrl: NavController) {}

  ngOnInit() {}

  onBack() {
    if (this.current_Div > 0) { // Adjust the condition to check against 0
      this.current_Div -= 1; // Decrement the current_Div to go back to the previous page
    }
  }

  submitForm() {
    // Perform any necessary logic or data processing with the selectedValue
    console.log('Selected value:', this.selectedValue);

    // Check if it's the final page and navigate to the next page accordingly
    if (this.current_Div === this.total_Div) {
      this.navCtrl.navigateForward('/questions-end'); // Navigate to the question-end page
    } else {
      this.current_Div += 1; // Increment current_Div to navigate to the next page
    }
}
}
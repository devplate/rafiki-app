import { NavController } from '@ionic/angular';
import { Component, OnInit } from '@angular/core';
import { Router, NavigationExtras } from '@angular/router';

@Component({
  selector: 'app-questions-end',
  templateUrl: './questions-end.page.html',
  styleUrls: ['./questions-end.page.scss'],
})
export class QuestionsEndPage implements OnInit {

  progress: number = 0;

  constructor(
    private router: Router,
    private NavCtrl: NavController
    ) {}
  
  onBack() {
    this.NavCtrl.navigateBack('/questions');
    }

    ngOnInit() {
      setTimeout(() => {
        this.router.navigate(['/report']);
      }, 11000);
    }

    navigateToTargetPage() {
      const navigationExtras: NavigationExtras = {
        queryParams: {
          zoom: true
        }
      };
      this.router.navigate(['/report'], navigationExtras);
    }

  }




import { Component, OnInit, AfterViewInit, ViewChild } from '@angular/core';
import { NavController } from '@ionic/angular';
import { Router } from '@angular/router';
import { Swiper } from 'swiper';

@Component({
  selector: 'app-aid-center',
  templateUrl: './aid-center.page.html',
  styleUrls: ['./aid-center.page.scss'],
})
export class AidCenterPage implements OnInit, AfterViewInit {
  @ViewChild('swiperContainer') swiperContainer: any;
  @ViewChild('swiperContainer2') swiperContainer2: any;

  constructor(private router: Router, private navCtrl: NavController) {}

  ngOnInit() {}

  ngAfterViewInit() {
    this.initSwipers();
  }

  onBack() {
    this.navCtrl.back();
  }

  onMoreArticles(){
    this.router.navigate(['all-blog']);
  }

  private initSwipers() {
    const swiper1 = new Swiper(this.swiperContainer.nativeElement, {
      slidesPerView: 2, // Number of slides to show at once
      spaceBetween: 10, // Space between slides
      navigation: {
        nextEl: '.swiper-button-next', // Next button selector
        prevEl: '.swiper-button-prev', // Previous button selector
      },
    });

    const swiper2 = new Swiper(this.swiperContainer2.nativeElement, {
      slidesPerView: 1, // Number of slides to show at once
      spaceBetween: 10, // Space between slides
      navigation: {
        nextEl: '.swiper-button-next', // Next button selector
        prevEl: '.swiper-button-prev', // Previous button selector
      },
    });
  }
}

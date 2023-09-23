import { Component, OnInit } from '@angular/core';
import { NavController, Platform } from '@ionic/angular';

@Component({
  selector: 'app-blog-single',
  templateUrl: './blog-single.page.html',
  styleUrls: ['./blog-single.page.scss'],
})
export class BlogSinglePage implements OnInit {

  audio: HTMLAudioElement;
  isPlaying: boolean = false;

  constructor(
    private navCtrl: NavController,
    private platform: Platform
  ) {
    this.audio = new Audio();
    this.audio.src = 'assets/audio/test-sound.mp4'; // audio file here
    this.audio.load();
  }

  ngOnInit() {
    
  }

  playAudio() {
    if (this.isPlaying) {
      this.audio.pause();
    } else {
      this.audio.play();
    }
    this.isPlaying = !this.isPlaying;
  }

  onBack() {
    this.navCtrl.back();
  }
}

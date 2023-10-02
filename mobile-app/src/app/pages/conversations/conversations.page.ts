import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';
import { NavController } from '@ionic/angular';

@Component({
  selector: 'app-conversations',
  templateUrl: './conversations.page.html',
  styleUrls: ['./conversations.page.scss'],
})
export class ConversationsPage implements OnInit {

  current = 1;

  constructor(
    private router: Router,
    private NavCtrl: NavController
  ) { }

  ngOnInit() {
  }

  onCall() {
    this.router.navigate(['out-going']);
  }
  onChat() {
    this.router.navigate(['chat-conversation']);
  }
  onComming() {
    this.router.navigate(['calling1']);
  }
  onBack() {
    this.NavCtrl.back();
  }


}

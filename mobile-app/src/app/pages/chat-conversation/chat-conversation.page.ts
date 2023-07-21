import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';
import { NavController } from '@ionic/angular';

@Component({
  selector: 'app-chat-conversation',
  templateUrl: './chat-conversation.page.html',
  styleUrls: ['./chat-conversation.page.scss'],
})
export class ChatConversationPage implements OnInit {

  constructor(
    private NavCtrl: NavController,
    private router: Router
  ) { }

  ngOnInit() {
  }

  onBack() {
    this.NavCtrl.back();
  }

}

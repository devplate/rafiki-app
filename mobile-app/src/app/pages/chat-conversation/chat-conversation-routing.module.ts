import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

import { ChatConversationPage } from './chat-conversation.page';

const routes: Routes = [
  {
    path: '',
    component: ChatConversationPage
  }
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule],
})
export class ChatConversationPageRoutingModule {}

import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';

import { IonicModule } from '@ionic/angular';

import { QuestionsEndPageRoutingModule } from './questions-end-routing.module';

import { QuestionsEndPage } from './questions-end.page';

@NgModule({
  imports: [
    CommonModule,
    FormsModule,
    IonicModule,
    QuestionsEndPageRoutingModule
  ],
  declarations: [QuestionsEndPage]
})
export class QuestionsEndPageModule {}

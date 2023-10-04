import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';

import { IonicModule } from '@ionic/angular';

import { JournalDonePageRoutingModule } from './journal-done-routing.module';

import { JournalDonePage } from './journal-done.page';

@NgModule({
  imports: [
    CommonModule,
    FormsModule,
    IonicModule,
    JournalDonePageRoutingModule
  ],
  declarations: [JournalDonePage]
})
export class JournalDonePageModule {}

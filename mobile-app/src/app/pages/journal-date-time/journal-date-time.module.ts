import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';

import { IonicModule } from '@ionic/angular';

import { JournalDateTimePageRoutingModule } from './journal-date-time-routing.module';

import { JournalDateTimePage } from './journal-date-time.page';

@NgModule({
  imports: [
    CommonModule,
    FormsModule,
    IonicModule,
    JournalDateTimePageRoutingModule
  ],
  declarations: [JournalDateTimePage]
})
export class JournalDateTimePageModule {}

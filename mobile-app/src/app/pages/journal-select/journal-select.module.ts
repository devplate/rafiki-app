import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';

import { IonicModule } from '@ionic/angular';

import { JournalSelectPageRoutingModule } from './journal-select-routing.module';

import { JournalSelectPage } from './journal-select.page';

@NgModule({
  imports: [
    CommonModule,
    FormsModule,
    IonicModule,
    JournalSelectPageRoutingModule
  ],
  declarations: [JournalSelectPage]
})
export class JournalSelectPageModule {}

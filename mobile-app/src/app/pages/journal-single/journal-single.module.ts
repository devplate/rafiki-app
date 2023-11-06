import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';

import { IonicModule } from '@ionic/angular';

import { JournalSinglePageRoutingModule } from './journal-single-routing.module';

import { JournalSinglePage } from './journal-single.page';

@NgModule({
  imports: [
    CommonModule,
    FormsModule,
    IonicModule,
    JournalSinglePageRoutingModule
  ],
  declarations: [JournalSinglePage]
})
export class JournalSinglePageModule {}

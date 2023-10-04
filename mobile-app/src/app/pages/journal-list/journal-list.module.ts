import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';

import { IonicModule } from '@ionic/angular';

import { JournalListPageRoutingModule } from './journal-list-routing.module';

import { JournalListPage } from './journal-list.page';

@NgModule({
  imports: [
    CommonModule,
    FormsModule,
    IonicModule,
    JournalListPageRoutingModule
  ],
  declarations: [JournalListPage]
})
export class JournalListPageModule {}

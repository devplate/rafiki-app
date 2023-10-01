import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';

import { IonicModule } from '@ionic/angular';

import { JournalExpressPageRoutingModule } from './journal-express-routing.module';

import { JournalExpressPage } from './journal-express.page';

@NgModule({
  imports: [
    CommonModule,
    FormsModule,
    IonicModule,
    JournalExpressPageRoutingModule
  ],
  declarations: [JournalExpressPage]
})
export class JournalExpressPageModule {}

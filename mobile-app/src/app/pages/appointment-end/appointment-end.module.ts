import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';

import { IonicModule } from '@ionic/angular';

import { AppointmentEndPageRoutingModule } from './appointment-end-routing.module';

import { AppointmentEndPage } from './appointment-end.page';

@NgModule({
  imports: [
    CommonModule,
    FormsModule,
    IonicModule,
    AppointmentEndPageRoutingModule
  ],
  declarations: [AppointmentEndPage]
})
export class AppointmentEndPageModule {}

import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';

import { IonicModule } from '@ionic/angular';

import { DoctorDirectionPageRoutingModule } from './doctor-direction-routing.module';

import { DoctorDirectionPage } from './doctor-direction.page';

@NgModule({
  imports: [
    CommonModule,
    FormsModule,
    IonicModule,
    DoctorDirectionPageRoutingModule
  ],
  declarations: [DoctorDirectionPage]
})
export class DoctorDirectionPageModule {}

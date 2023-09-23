import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';

import { IonicModule } from '@ionic/angular';

import { GetDirectionPageRoutingModule } from './get-direction-routing.module';

import { GetDirectionPage } from './get-direction.page';

@NgModule({
  imports: [
    CommonModule,
    FormsModule,
    IonicModule,
    GetDirectionPageRoutingModule
  ],
  declarations: [GetDirectionPage]
})
export class GetDirectionPageModule {}

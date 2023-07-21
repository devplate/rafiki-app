import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';

import { IonicModule } from '@ionic/angular';

import { ResendCodePageRoutingModule } from './resend-code-routing.module';

import { ResendCodePage } from './resend-code.page';

@NgModule({
  imports: [
    CommonModule,
    FormsModule,
    IonicModule,
    ResendCodePageRoutingModule
  ],
  declarations: [ResendCodePage]
})
export class ResendCodePageModule {}

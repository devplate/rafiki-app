import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';
import { IonicModule } from '@ionic/angular';
import { VerifyIdentityPageRoutingModule } from './verify-identity-routing.module';
import { VerifyIdentityPage } from './verify-identity.page';
import { NgOtpInputModule } from 'ng-otp-input';

@NgModule({
  imports: [
    CommonModule,
    FormsModule,
    IonicModule,
    VerifyIdentityPageRoutingModule,
    NgOtpInputModule
  ],
  declarations: [VerifyIdentityPage]
})
export class VerifyIdentityPageModule {}

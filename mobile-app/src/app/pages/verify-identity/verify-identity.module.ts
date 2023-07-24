import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { IonicModule } from '@ionic/angular';
import { VerifyIdentityPageRoutingModule } from './verify-identity-routing.module';
import { VerifyIdentityPage } from './verify-identity.page';
import { NgOtpInputModule } from 'ng-otp-input';

@NgModule({
  imports: [
    CommonModule,
    IonicModule,
    VerifyIdentityPageRoutingModule,
    NgOtpInputModule // Add NgOtpInputModule here
  ],
  declarations: [VerifyIdentityPage]
})
export class VerifyIdentityPageModule { }

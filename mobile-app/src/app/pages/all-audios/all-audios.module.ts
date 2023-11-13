import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';

import { IonicModule } from '@ionic/angular';

import { AllAudiosPageRoutingModule } from './all-audios-routing.module';

import { AllAudiosPage } from './all-audios.page';

@NgModule({
  imports: [
    CommonModule,
    FormsModule,
    IonicModule,
    AllAudiosPageRoutingModule
  ],
  declarations: [AllAudiosPage]
})
export class AllAudiosPageModule {}

import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';

import { IonicModule } from '@ionic/angular';

import { AllVideosPageRoutingModule } from './all-videos-routing.module';

import { AllVideosPage } from './all-videos.page';

@NgModule({
  imports: [
    CommonModule,
    FormsModule,
    IonicModule,
    AllVideosPageRoutingModule
  ],
  declarations: [AllVideosPage]
})
export class AllVideosPageModule {}

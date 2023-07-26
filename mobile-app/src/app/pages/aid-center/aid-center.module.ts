import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { IonicModule } from '@ionic/angular'; // Import IonicModule

import { AidCenterPage } from './aid-center.page';
import { RouterModule, Routes } from '@angular/router';

const routes: Routes = [
  {
    path: '',
    component: AidCenterPage,
  },
];

@NgModule({
  imports: [
    CommonModule,
    IonicModule, // Add IonicModule here
    RouterModule.forChild(routes),
  ],
  declarations: [AidCenterPage],
})
export class AidCenterPageModule {}

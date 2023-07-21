import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

import { DoctorDirectionPage } from './doctor-direction.page';

const routes: Routes = [
  {
    path: '',
    component: DoctorDirectionPage
  }
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule],
})
export class DoctorDirectionPageRoutingModule {}

import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

import { AppointmentEndPage } from './appointment-end.page';

const routes: Routes = [
  {
    path: '',
    component: AppointmentEndPage
  }
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule],
})
export class AppointmentEndPageRoutingModule {}

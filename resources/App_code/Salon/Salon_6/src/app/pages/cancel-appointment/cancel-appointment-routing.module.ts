/*
  Authors : bunchdevelopers (Rahul Jograna)
  Website : https://bunchdevelopers.com/
  App Name : ionic6Template Pack
  This App Template Source code is licensed as per the
  terms found in the Website https://bunchdevelopers.com/license
  Copyright and Good Faith Purchasers © 2021-present bunchdevelopers.
*/
import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

import { CancelAppointmentPage } from './cancel-appointment.page';

const routes: Routes = [
  {
    path: '',
    component: CancelAppointmentPage
  }
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule],
})
export class CancelAppointmentPageRoutingModule {}
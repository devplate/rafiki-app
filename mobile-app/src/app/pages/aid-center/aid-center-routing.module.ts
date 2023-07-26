import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

import { AidCenterPage } from './aid-center.page';

const routes: Routes = [
  {
    path: '',
    component: AidCenterPage
  }
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule],
})
export class AidCenterPageRoutingModule {}

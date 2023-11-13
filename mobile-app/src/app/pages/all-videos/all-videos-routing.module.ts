import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

import { AllVideosPage } from './all-videos.page';

const routes: Routes = [
  {
    path: '',
    component: AllVideosPage
  }
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule],
})
export class AllVideosPageRoutingModule {}

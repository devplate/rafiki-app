import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

import { AllAudiosPage } from './all-audios.page';

const routes: Routes = [
  {
    path: '',
    component: AllAudiosPage
  }
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule],
})
export class AllAudiosPageRoutingModule {}

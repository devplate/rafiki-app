import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

import { JournalSelectPage } from './journal-select.page';

const routes: Routes = [
  {
    path: '',
    component: JournalSelectPage
  }
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule],
})
export class JournalSelectPageRoutingModule {}

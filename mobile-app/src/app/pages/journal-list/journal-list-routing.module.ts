import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

import { JournalListPage } from './journal-list.page';

const routes: Routes = [
  {
    path: '',
    component: JournalListPage
  }
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule],
})
export class JournalListPageRoutingModule {}

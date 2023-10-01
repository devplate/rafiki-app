import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

import { JournalDateTimePage } from './journal-date-time.page';

const routes: Routes = [
  {
    path: '',
    component: JournalDateTimePage
  }
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule],
})
export class JournalDateTimePageRoutingModule {}

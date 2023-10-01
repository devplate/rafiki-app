import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

import { JournalExpressPage } from './journal-express.page';

const routes: Routes = [
  {
    path: '',
    component: JournalExpressPage
  }
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule],
})
export class JournalExpressPageRoutingModule {}

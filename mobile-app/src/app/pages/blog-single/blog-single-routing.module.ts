import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

import { BlogSinglePage } from './blog-single.page';

const routes: Routes = [
  {
    path: '',
    component: BlogSinglePage
  }
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule],
})
export class BlogSinglePageRoutingModule {}

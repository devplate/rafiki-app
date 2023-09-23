import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

import { AllBlogPage } from './all-blog.page';

const routes: Routes = [
  {
    path: '',
    component: AllBlogPage
  }
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule],
})
export class AllBlogPageRoutingModule {}

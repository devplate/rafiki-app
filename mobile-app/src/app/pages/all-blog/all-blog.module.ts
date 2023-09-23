import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';

import { IonicModule } from '@ionic/angular';

import { AllBlogPageRoutingModule } from './all-blog-routing.module';

import { AllBlogPage } from './all-blog.page';

@NgModule({
  imports: [
    CommonModule,
    FormsModule,
    IonicModule,
    AllBlogPageRoutingModule
  ],
  declarations: [AllBlogPage]
})
export class AllBlogPageModule {}

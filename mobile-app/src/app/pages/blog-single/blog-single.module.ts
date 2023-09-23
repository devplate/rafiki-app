import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';

import { IonicModule } from '@ionic/angular';

import { BlogSinglePageRoutingModule } from './blog-single-routing.module';

import { BlogSinglePage } from './blog-single.page';

@NgModule({
  imports: [
    CommonModule,
    FormsModule,
    IonicModule,
    BlogSinglePageRoutingModule
  ],
  declarations: [BlogSinglePage]
})
export class BlogSinglePageModule {}

import { ComponentFixture, TestBed } from '@angular/core/testing';
import { BlogSinglePage } from './blog-single.page';

describe('BlogSinglePage', () => {
  let component: BlogSinglePage;
  let fixture: ComponentFixture<BlogSinglePage>;

  beforeEach(async(() => {
    fixture = TestBed.createComponent(BlogSinglePage);
    component = fixture.componentInstance;
    fixture.detectChanges();
  }));

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});

import { ComponentFixture, TestBed } from '@angular/core/testing';
import { AllBlogPage } from './all-blog.page';

describe('AllBlogPage', () => {
  let component: AllBlogPage;
  let fixture: ComponentFixture<AllBlogPage>;

  beforeEach(async(() => {
    fixture = TestBed.createComponent(AllBlogPage);
    component = fixture.componentInstance;
    fixture.detectChanges();
  }));

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});

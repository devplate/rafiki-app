import { ComponentFixture, TestBed } from '@angular/core/testing';
import { AllVideosPage } from './all-videos.page';

describe('AllVideosPage', () => {
  let component: AllVideosPage;
  let fixture: ComponentFixture<AllVideosPage>;

  beforeEach(async(() => {
    fixture = TestBed.createComponent(AllVideosPage);
    component = fixture.componentInstance;
    fixture.detectChanges();
  }));

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});

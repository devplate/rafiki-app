import { ComponentFixture, TestBed } from '@angular/core/testing';
import { AllAudiosPage } from './all-audios.page';

describe('AllAudiosPage', () => {
  let component: AllAudiosPage;
  let fixture: ComponentFixture<AllAudiosPage>;

  beforeEach(async(() => {
    fixture = TestBed.createComponent(AllAudiosPage);
    component = fixture.componentInstance;
    fixture.detectChanges();
  }));

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});

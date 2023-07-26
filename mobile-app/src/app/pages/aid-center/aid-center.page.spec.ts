import { ComponentFixture, TestBed } from '@angular/core/testing';
import { AidCenterPage } from './aid-center.page';

describe('AidCenterPage', () => {
  let component: AidCenterPage;
  let fixture: ComponentFixture<AidCenterPage>;

  beforeEach(async(() => {
    fixture = TestBed.createComponent(AidCenterPage);
    component = fixture.componentInstance;
    fixture.detectChanges();
  }));

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});

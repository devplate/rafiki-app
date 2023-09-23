import { ComponentFixture, TestBed } from '@angular/core/testing';
import { GetDirectionPage } from './get-direction.page';

describe('GetDirectionPage', () => {
  let component: GetDirectionPage;
  let fixture: ComponentFixture<GetDirectionPage>;

  beforeEach(async(() => {
    fixture = TestBed.createComponent(GetDirectionPage);
    component = fixture.componentInstance;
    fixture.detectChanges();
  }));

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});

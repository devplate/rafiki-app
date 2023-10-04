import { ComponentFixture, TestBed } from '@angular/core/testing';
import { JournalSelectPage } from './journal-select.page';

describe('JournalSelectPage', () => {
  let component: JournalSelectPage;
  let fixture: ComponentFixture<JournalSelectPage>;

  beforeEach(async(() => {
    fixture = TestBed.createComponent(JournalSelectPage);
    component = fixture.componentInstance;
    fixture.detectChanges();
  }));

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});

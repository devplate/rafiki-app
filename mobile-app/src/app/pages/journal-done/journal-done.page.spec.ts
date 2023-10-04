import { ComponentFixture, TestBed } from '@angular/core/testing';
import { JournalDonePage } from './journal-done.page';

describe('JournalDonePage', () => {
  let component: JournalDonePage;
  let fixture: ComponentFixture<JournalDonePage>;

  beforeEach(async(() => {
    fixture = TestBed.createComponent(JournalDonePage);
    component = fixture.componentInstance;
    fixture.detectChanges();
  }));

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});

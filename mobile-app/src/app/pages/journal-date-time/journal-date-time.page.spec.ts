import { ComponentFixture, TestBed } from '@angular/core/testing';
import { JournalDateTimePage } from './journal-date-time.page';

describe('JournalDateTimePage', () => {
  let component: JournalDateTimePage;
  let fixture: ComponentFixture<JournalDateTimePage>;

  beforeEach(async(() => {
    fixture = TestBed.createComponent(JournalDateTimePage);
    component = fixture.componentInstance;
    fixture.detectChanges();
  }));

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});

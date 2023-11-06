import { ComponentFixture, TestBed } from '@angular/core/testing';
import { JournalSinglePage } from './journal-single.page';

describe('JournalSinglePage', () => {
  let component: JournalSinglePage;
  let fixture: ComponentFixture<JournalSinglePage>;

  beforeEach(async(() => {
    fixture = TestBed.createComponent(JournalSinglePage);
    component = fixture.componentInstance;
    fixture.detectChanges();
  }));

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});

import { ComponentFixture, TestBed } from '@angular/core/testing';
import { JournalExpressPage } from './journal-express.page';

describe('JournalExpressPage', () => {
  let component: JournalExpressPage;
  let fixture: ComponentFixture<JournalExpressPage>;

  beforeEach(async(() => {
    fixture = TestBed.createComponent(JournalExpressPage);
    component = fixture.componentInstance;
    fixture.detectChanges();
  }));

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});

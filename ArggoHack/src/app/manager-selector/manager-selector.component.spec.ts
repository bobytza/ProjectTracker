import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { ManagerSelectorComponent } from './manager-selector.component';

describe('ManagerSelectorComponent', () => {
  let component: ManagerSelectorComponent;
  let fixture: ComponentFixture<ManagerSelectorComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ ManagerSelectorComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(ManagerSelectorComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});

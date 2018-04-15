import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { ReloadProjectsComponent } from './reload-projects.component';

describe('ReloadProjectsComponent', () => {
  let component: ReloadProjectsComponent;
  let fixture: ComponentFixture<ReloadProjectsComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ ReloadProjectsComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(ReloadProjectsComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});

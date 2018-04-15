import { Component, OnInit, Input, Output, EventEmitter } from '@angular/core';
import { ApiService } from '../api.service';
import { toast } from 'angular2-materialize';
import { RouterLink, Router } from '@angular/router';
import { Project } from '../projects/projects.component';

@Component({
  selector: 'app-add-project',
  templateUrl: './add-project.component.html',
  styleUrls: ['./add-project.component.css']
})
export class AddProjectComponent implements OnInit {
  @Input() private projectId: Number;
  @Output() private change: EventEmitter<any> = new EventEmitter<any>();

  private _project: any = new Project();
  constructor(private _api: ApiService, private router: Router) { }

  ngOnInit() {
  }

  managerChanged(newManager) {
    if (newManager > 0 && newManager < 1000) {
      this._project['pm_user_id'] = newManager;
    }
  }

  clientChanged(newManager) {
    if (newManager > 0 && newManager < 1000) {
      this._project['customer_id'] = newManager;
    }
  }

  statusChanged(newManager) {
    if (newManager > 0 && newManager < 1000) {
      this._project['project_status_id'] = newManager;
    }
  }

  insert() {
    console.log(this._project);
    this._api.insertProject(this._project);
    this.change.emit();
    this.router.navigate(['projects2']);
  }
}

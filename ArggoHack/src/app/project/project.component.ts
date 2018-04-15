import { Component, OnInit, Input, Output, EventEmitter } from '@angular/core';
import { ApiService } from '../api.service';
import { toast } from 'angular2-materialize';
import { RouterLink, Router } from '@angular/router';

@Component({
  selector: 'app-project',
  templateUrl: './project.component.html',
  styleUrls: ['./project.component.css']
})
export class ProjectComponent implements OnInit {
  @Input() private projectId: Number;
  @Output() private change: EventEmitter<any> = new EventEmitter<any>();

  private _project: any = null;
  constructor(private _api: ApiService, private router: Router) { }

  private _reloadData() {
    this._api.getClientFromProject(this._project['id']).then(data => {
      this._project['customer_data'] = data;
    });
    this._api.getClient(this._project['pm_user_id']).then(data => {
      this._project['pm_user'] = data;
    });
    this._api.getTasksFromProject(this._project['id']).then(data => {
      this._project['tasks'] = data;
      this._project['tasks'].map(task => {
        
        this._api.getPriority(task['priority_id'])
        .then(data2 => {
          task['priority'] = data2['priority'];
        });
      });
    });
  }

  ngOnInit() {
    this._api.getProject(this.projectId)
    .then(data => {
      this._project = data;
      this._reloadData();
    }).catch(err => {
 
    });
  }

  managerChanged(newManager) {
    if (newManager > 0 && newManager < 1000) {
      this._project['pm_user_id'] = newManager;
      this._api.updateProject(this._project.id, this._project);
      this._reloadData();
    }
  }

  statusChanged(newManager) {
    if (newManager > 0 && newManager < 1000) {
      this._project['project_status_id'] = newManager;
      this._api.updateProject(this._project.id, this._project);
      this._reloadData();
    }
  }

  save() {
    this._api.updateProject(this._project.id, this._project);
    this.change.emit();
    this._reloadData();
  }
}

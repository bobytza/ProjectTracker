import { Component, OnInit } from '@angular/core';
import { ApiService } from '../api.service';
import { toast } from 'angular2-materialize';

@Component({
  selector: 'app-tasks',
  templateUrl: './tasks.component.html',
  styleUrls: ['./tasks.component.css']
})
export class TasksComponent implements OnInit {
  private _tasks: any[] = [];

  constructor(private _api: ApiService) { }

  ngOnInit() {
    this._api.getTasks()
      .then(data => {
        this._tasks = data;
        this._tasks.map(task => {
          this._api.getClientFromTask(task['id']).then(s => {task['client'] = s;
          this._api.getProjectFromTask(task['id']).then(s => {task['project'] = s;})
        })
      })
    })
      .catch(err => {
       
      });
  }

  updateAll() {
    this._tasks.forEach(task => this._api.updateTask(task['id'], task));
  }

}
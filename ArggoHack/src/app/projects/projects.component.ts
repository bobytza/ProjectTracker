import { Component, OnInit } from '@angular/core';
import { ApiService } from '../api.service';
import { toast } from 'angular2-materialize';

@Component({
  selector: 'app-projects',
  templateUrl: './projects.component.html',
  styleUrls: ['./projects.component.css']
})
export class ProjectsComponent implements OnInit {
  private _projects: any[] = [];
  
  constructor(private _api: ApiService) { }
  
  ngOnInit() {
    this.updated();
  }

  updated() {
    this._api.getProjects()
    .then(data => {
      this._projects = data;
    })
  }
}

export class Project{
  id: number;
  project_title: String;
  description: String;
  customer_id: number;
  pm_user_id: number;
  project_status_id: number;
}
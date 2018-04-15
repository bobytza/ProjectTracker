import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';

@Component({
  selector: 'app-reload-projects',
  templateUrl: './reload-projects.component.html',
  styleUrls: ['./reload-projects.component.css']
})
export class ReloadProjectsComponent implements OnInit {

  constructor(private router: Router) { }

  ngOnInit() {
    this.router.navigate(['projects']);
  }

}

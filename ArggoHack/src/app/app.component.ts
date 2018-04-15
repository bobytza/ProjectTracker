import { Component, OnInit, Renderer } from '@angular/core';
import { ChattingService } from './chatting.service';
import { ApiService } from './api.service';
import { Router } from '@angular/router';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css'],
})

export class AppComponent implements OnInit{
  title = 'app';
  constructor (private _api: ApiService, private _chattingService: ChattingService, private _router: Router, private renderer: Renderer) {}

  ngOnInit(): void {
    this._chattingService.dialogEnded.subscribe(ans => {
      console.log(ans);
      switch (ans) { 
        case 'adauga':
          this._router.navigate(['projects']);
          break;
        case 'activitati':
          this._router.navigate(['tasks']);
          break;
        case 'proiecte':
          this._router.navigate(['projects']);
          break;
      }
    })
  }
}

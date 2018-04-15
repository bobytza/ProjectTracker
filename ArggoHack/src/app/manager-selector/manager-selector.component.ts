import { Component, OnInit, Output, EventEmitter, Input } from '@angular/core';
import { ApiService } from '../api.service';

@Component({
  selector: 'app-manager-selector',
  templateUrl: './manager-selector.component.html',
  styleUrls: ['./manager-selector.component.css']
})
export class ManagerSelectorComponent implements OnInit {
  @Output() change: EventEmitter<number> = new EventEmitter<number>();
  @Input() selectedManager;
  defaultManager;

  private users;
  constructor(private _api: ApiService) { }

  ngOnInit() {
    this._api.getClients().then(data => this.users = data);
  }

  onChange(id: number) {
    this.change.emit(id);
  }
}

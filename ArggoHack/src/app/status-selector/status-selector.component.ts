import { Component, OnInit, Output, EventEmitter, Input } from '@angular/core';
import { ApiService } from '../api.service';

@Component({
  selector: 'app-status-selector',
  templateUrl: './status-selector.component.html',
  styleUrls: ['./status-selector.component.css']
})
export class StatusSelectorComponent implements OnInit {
  @Output() change: EventEmitter<number> = new EventEmitter<number>();
  @Input() selectedStatus;
  defaultStatus;

  private users;
  constructor(private _api: ApiService) { }

  ngOnInit() {
    this._api.getStatuses().then(data => this.users = data);
  }

  onChange(id: number) {
    this.change.emit(id);
  }
}

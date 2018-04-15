import { Component, OnInit, Output, Input, EventEmitter } from '@angular/core';
import { ApiService } from '../api.service';

@Component({
  selector: 'app-customer-selector',
  templateUrl: './customer-selector.component.html',
  styleUrls: ['./customer-selector.component.css']
})
export class CustomerSelectorComponent implements OnInit {
  @Output() change: EventEmitter<number> = new EventEmitter<number>();
  @Input() selectedManager;
  defaultManager;

  private users;
  constructor(private _api: ApiService) { }

  ngOnInit() {
    this._api.getCustomers().then(data => this.users = data);
  }

  onChange(id: number) {
    this.change.emit(id);
  }
}

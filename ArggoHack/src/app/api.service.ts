import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';

import { Observable } from "rxjs";
import 'rxjs/Rx';

@Injectable()
export class ApiService {
  constructor(private http: HttpClient) { }
  
  public getProjects(): Promise<any> {
    return new Promise((resolve, reject) => {
      this.http
        .get("https://172.20.10.3/api/projects")
        .map(res => res)
        .catch((err: Response) => {
          reject((err.statusText || "Can't join the server."));
          return Observable.throw(err);
        })
        .subscribe(data => { resolve(data) })
    });
  }

  public getTasks(): Promise<any> {
    return new Promise((resolve, reject) => {
      this.http
        .get("https://172.20.10.3/api/tasks")
        .map(res => res)
        .catch((err: Response) => {
          reject((err.statusText || "Can't join the server."));
          return Observable.throw(err);
        })
        .subscribe(data => { resolve(data) })
    });
  }

  public getClients(): Promise<any> {
    return new Promise((resolve, reject) => {
      this.http
        .get("https://172.20.10.3/api/users")
        .map(res => res)
        .catch((err: Response) => {
          reject((err.statusText || "Can't join the server."));
          return Observable.throw(err);
        })
        .subscribe(data => { resolve(data) })
    });
  }

  public getCustomers(): Promise<any> {
    return new Promise((resolve, reject) => {
      this.http
        .get("https://172.20.10.3/api/customers")
        .map(res => res)
        .catch((err: Response) => {
          reject((err.statusText || "Can't join the server."));
          return Observable.throw(err);
        })
        .subscribe(data => { resolve(data) })
    });
  }

  public getProject(id: Number): Promise<any> {
    return new Promise((resolve, reject) => {
      this.http
        .get("https://172.20.10.3/api/projects/" + id)
        .map(res => res)
        .catch((err: Response) => {
          reject((err.statusText || "Can't join the server."));
          return Observable.throw(err);
        })
        .subscribe(data => { resolve(data) })
    })
  }

  public getTask(id: Number): Promise<any> {
    return new Promise((resolve, reject) => {
      this.http
        .get("https://172.20.10.3/api/tasks/" + id)
        .map(res => res)
        .catch((err: Response) => {
          reject((err.statusText || "Can't join the server."));
          return Observable.throw(err);
        })
        .subscribe(data => { resolve(data) })
    })
  }

  public getClient(id: Number): Promise<any> {
    return new Promise((resolve, reject) => {
      this.http
        .get("https://172.20.10.3/api/users/" + id)
        .map(res => res)
        .catch((err: Response) => {
          reject((err.statusText || "Can't join the server."));
          return Observable.throw(err);
        })
        .subscribe(data => { resolve(data) })
    })
  }

  public getCustomer(id: Number): Promise<any> {
    return new Promise((resolve, reject) => {
      this.http
        .get("https://172.20.10.3/api/customers/" + id)
        .map(res => res)
        .catch((err: Response) => {
          reject((err.statusText || "Can't join the server."));
          return Observable.throw(err);
        })
        .subscribe(data => { resolve(data) })
    })
  }

  public getStatuses(): Promise<any> {
    return new Promise((resolve, reject) => {
      this.http
        .get("https://172.20.10.3/api/project_statuses")
        .map(res => res)
        .catch((err: Response) => {
          reject((err.statusText || "Can't join the server."));
          return Observable.throw(err);
        })
        .subscribe(data => { resolve(data) })
    })
  }
  
  public getClientFromProject(id: Number): Promise<any> {
    return new Promise((resolve, reject) => {
      this.http
        .get("https://172.20.10.3/api/client_from_project/" + id)
        .map(res => res)
        .catch((err: Response) => {
          reject((err.statusText || "Can't join the server."));
          return Observable.throw(err);
        })
        .subscribe(data => { resolve(data) })
    })
  }

  public getStatusFromProject(id: Number): Promise<any> {
    return new Promise((resolve, reject) => {
      this.http
        .get("https://172.20.10.3/api/status_from_project/" + id)
        .map(res => res)
        .catch((err: Response) => {
          reject((err.statusText || "Can't join the server."));
          return Observable.throw(err);
        })
        .subscribe(data => { resolve(data) })
    })
  }

  public getTasksFromProject(id: Number): Promise<any> {
    return new Promise((resolve, reject) => {
      this.http
        .get("https://172.20.10.3/api/tasks_from_project/" + id)
        .map(res => res)
        .catch((err: Response) => {
          reject((err.statusText || "Can't join the server."));
          return Observable.throw(err);
        })
        .subscribe(data => { resolve(data) })
    })
  }

  public getPriorities(): Promise<any> {
    return new Promise((resolve, reject) => {
      this.http
        .get("https://172.20.10.3/api/priorities/")
        .map(res => res)
        .catch((err: Response) => {
          reject((err.statusText || "Can't join the server."));
          return Observable.throw(err);
        })
        .subscribe(data => { resolve(data) })
    })
  }

  public getPriority(id: Number): Promise<any> {
    return new Promise((resolve, reject) => {
      this.http
        .get("https://172.20.10.3/api/priorities/" + id)
        .map(res => res)
        .catch((err: Response) => {
          reject((err.statusText || "Can't join the server."));
          return Observable.throw(err);
        })
        .subscribe(data => { resolve(data) })
    })
  }


  public getClientFromTask(id: Number): Promise<any> {
    return new Promise((resolve, reject) => {
      this.http
        .get("https://172.20.10.3/api/client_from_task/" + id)
        .map(res => res)
        .catch((err: Response) => {
          reject((err.statusText || "Can't join the server."));
          return Observable.throw(err);
        })
        .subscribe(data => { resolve(data) })
    })
  }

  public getProjectFromTask(id: Number): Promise<any> {
    return new Promise((resolve, reject) => {
      this.http
        .get("https://172.20.10.3/api/project_from_task/" + id)
        .map(res => res)
        .catch((err: Response) => {
          reject((err.statusText || "Can't join the server."));
          return Observable.throw(err);
        })
        .subscribe(data => { resolve(data) })
    })
  }

  public getPriorityFromTask(id: Number): Promise<any> {
    return new Promise((resolve, reject) => {
      this.http
        .get("https://172.20.10.3/api/priority_from_task/" + id)
        .map(res => res)
        .catch((err: Response) => {
          reject((err.statusText || "Can't join the server."));
          return Observable.throw(err);
        })
        .subscribe(data => { resolve(data) })
    })
  }


  public updateProject(id: Number, data: any): Promise<any> {
    return new Promise((resolve, reject) => {
      this.http
      .put("https://172.20.10.3/api/projects/" + id, data)
      .map(res => res)
      .catch((err: Response) => {
        reject((err.statusText || "Can't join the server."));
        return Observable.throw(err);
      })
      .subscribe(data => { resolve(data) })
    });
  }

  public updateTask(id: Number, data: any): Promise<any> {
    return new Promise((resolve, reject) => {
      this.http
      .put("https://172.20.10.3/api/tasks/" + id, data)
      .map(res => res)
      .catch((err: Response) => {
        reject((err.statusText || "Can't join the server."));
        return Observable.throw(err);
      })
      .subscribe(data => { resolve(data) })
    });
  }

  public insertProject(data: any): Promise<any> {
    console.log(data);
    return new Promise((resolve, reject) => {
      this.http
      .post("https://172.20.10.3/api/projects", data)
      .map(res => res)
      .catch((err: Response) => {
        reject((err.statusText || "Can't join the server."));
        return Observable.throw(err);
      })
      .subscribe(data => { resolve(data) })
    });
  }
}

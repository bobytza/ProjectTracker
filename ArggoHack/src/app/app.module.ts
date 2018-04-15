import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { MaterializeModule } from 'angular2-materialize';

import { AppComponent } from './app.component';
import { NavBarComponent } from './nav-bar/nav-bar.component';
import { ChattingService } from './chatting.service';
import { VoiceListenerService } from './voice-listener.service';
import { ApiService } from './api.service';
import { HttpClient, HttpClientModule } from '@angular/common/http';
import { RouterModule, Routes } from '@angular/router';
import { ProjectsComponent } from './projects/projects.component';
import { TasksComponent } from './tasks/tasks.component';
import { ProjectComponent } from './project/project.component';
import { TaskComponent } from './task/task.component';
import { ClientsComponent } from './clients/clients.component';
import { ClientComponent } from './client/client.component';
import { ManagerSelectorComponent } from './manager-selector/manager-selector.component';
import { FormsModule } from '@angular/forms';
import { StatusSelectorComponent } from './status-selector/status-selector.component';
import { AddProjectComponent } from './add-project/add-project.component';
import { CustomerSelectorComponent } from './customer-selector/customer-selector.component';
import { ReloadProjectsComponent } from './reload-projects/reload-projects.component';

const appRoutes: Routes = [
  //{ path: 'crisis-center', component: CrisisListComponent },
  //{ path: 'hero/:id',      component: HeroDetailComponent },
  /*{
    path: 'heroes',
    component: HeroListComponent,
    data: { title: 'Heroes List' }
  },*/
  /*{ path: '',
    redirectTo: '/heroes',
    pathMatch: 'full'
  },*/
  { path: 'projects2', component: ReloadProjectsComponent },
  { path: 'tasks', component: TasksComponent },
  { path: 'projects', component: ProjectsComponent },
  { path: '**', component: AppComponent }
];


@NgModule({
  declarations: [
    AppComponent,
    NavBarComponent,
    ProjectsComponent,
    TasksComponent,
    ProjectComponent,
    TaskComponent,
    ClientsComponent,
    ClientComponent,
    ManagerSelectorComponent,
    StatusSelectorComponent,
    AddProjectComponent,
    CustomerSelectorComponent,
    ReloadProjectsComponent
  ],
  imports: [
    BrowserModule,
    HttpClientModule,
    RouterModule.forRoot(
      appRoutes,
      { enableTracing: false } // <-- debugging purposes only
    ),
    FormsModule
    
  ],
  providers: [ChattingService, VoiceListenerService, ApiService],
  bootstrap: [AppComponent]
})
export class AppModule { }

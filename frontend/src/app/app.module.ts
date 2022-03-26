import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { UsersComponent } from './admin/content/users/users.component';
import { IconsComponent } from './admin/content/icons/icons.component';
import { MapComponent } from './admin/content/map/map.component';
import { MapsComponent } from './admin/content/maps/maps.component';
import { NotificationsComponent } from './admin/content/notifications/notifications.component';
import { RtlComponent } from './admin/content/rtl/rtl.component';
import { TablesComponent } from './admin/content/tables/tables.component';
import { TypographyComponent } from './admin/content/typography/typography.component';
import { UpgradeComponent } from './admin/content/upgrade/upgrade.component';
import { DashboardComponent } from './admin/content/dashboard/dashboard.component';
import { RouterModule, Routes } from '@angular/router';
import { HeaderComponent } from './admin/header/header.component';
import { FooterComponent } from './admin/footer/footer.component';
import { FixedPluginComponent } from './admin/fixed-plugin/fixed-plugin.component';
import { SidebarComponent } from './admin/sidebar/sidebar.component';
import { ContainerComponent } from './container/container.component';
import { TreeViewModule } from '@progress/kendo-angular-treeview';
import { BrowserAnimationsModule } from '@angular/platform-browser/animations';
import { TreeComponent } from './tree/tree.component';
import { AppointmentComponent } from './admin/content/appointment/appointment.component';
import { PageManagementComponent } from './admin/content/page-management/page-management.component';
import { HttpClientModule } from '@angular/common/http';
import { AngularSvgIconModule } from 'angular-svg-icon';
import { ProfileComponent } from './admin/content/profile/profile.component';
import { DoctorsComponent } from './admin/content/doctors/doctors.component';
import { PatientsComponent } from './admin/content/patients/patients.component';
import { ArticlesListComponent } from './admin/content/articles-list/articles-list.component';
import { AppointmentsListComponent } from './admin/content/appointments-list/appointments-list.component';
import { ArticleComponent } from './admin/content/article/article.component';



const appRoutes: Routes =[
  {path: '',
    redirectTo: 'admin/dashboard',
    pathMatch: 'full',},
    {
      path:'admin/dashboard',
      component:DashboardComponent
    },
    {
      path:'admin/icons',
      component:IconsComponent
    },
    {
      path:'admin/maps',
      component:MapsComponent
    },
    {
      path:'admin/users',
      component:UsersComponent
    },
    {
      path:'admin/tables',
      component:TablesComponent
    },
    {
      path:'admin/rtl',
      component:RtlComponent
    },
    {
      path:'admin/upgrade',
      component:UpgradeComponent
    },
    {
      path:'admin/typography',
      component:TypographyComponent
    },
    {
      path:'admin/welcome',
      component:AppComponent
    },
    {
      path:'admin/notifications',
      component:NotificationsComponent
    },
    {
      path:'admin/map',
      component:MapsComponent
    },
    {
      path:'admin/appointment',
      component:AppointmentComponent
    },
    {
      path:'admin/page-management',
      component:PageManagementComponent
    },
    {
      path:'admin/profile',
      component:ProfileComponent
    },
    {
      path:'admin/doctors',
      component:DoctorsComponent
    },
    {
      path:'admin/patients',
      component:PatientsComponent
    },
    {
      path:'admin/articles-list',
      component:ArticlesListComponent
    },
    {
      path:'admin/appointments-list',
      component:AppointmentsListComponent
    }
    ,
    {
      path:'admin/article',
      component:ArticleComponent
    }

];

@NgModule({
  declarations: [
    AppComponent,
    UsersComponent,
    IconsComponent,
    MapComponent,
    MapsComponent,
    NotificationsComponent,
    RtlComponent,
    TablesComponent,
    TypographyComponent,
    UpgradeComponent,
    DashboardComponent,
    HeaderComponent,
    FooterComponent,
    FixedPluginComponent,
    SidebarComponent,
    ContainerComponent,
    TreeComponent,
    AppointmentComponent,
    PageManagementComponent,
    ProfileComponent,
    DoctorsComponent,
    PatientsComponent,
    ArticlesListComponent,
    AppointmentsListComponent,
    ArticleComponent,
   
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    RouterModule.forRoot(appRoutes),
    BrowserAnimationsModule,
   HttpClientModule, 
   AngularSvgIconModule.forRoot() 
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }

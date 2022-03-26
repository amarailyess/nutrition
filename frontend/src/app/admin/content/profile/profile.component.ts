import { Component, OnInit } from '@angular/core';
import {DataServiceService} from '../../data-service.service';

@Component({
  selector: 'app-profile',
  templateUrl: './profile.component.html',
  styleUrls: ['./profile.component.scss']
})
export class ProfileComponent implements OnInit {
	
   user:string;
   
  constructor(private data:DataServiceService) {

  }


  ngOnInit() {
    this.data.currentUser.subscribe(user => this.user =user );
 
  }
  addUser(){  }
  }
  

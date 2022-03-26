import { Component, OnInit} from '@angular/core';
import {DataServiceService} from '../../data-service.service';
import{UsersService} from '../../users.service';


@Component({
  selector: 'app-users',
  templateUrl: './users.component.html',
  styleUrls: ['./users.component.scss']
})
export class UsersComponent implements OnInit {

	user:string;
  
   usersList=[];
  constructor(private data:DataServiceService,private usersService:UsersService ) {}

  
  ngOnInit(): void {
   this.data.currentUser.subscribe(user=>this.user=user);

   this.usersService.getAllUsers().subscribe(
  result=>{
    this.usersList=result;
  },
  error=>{
    console.log(error);
  }
  );
  console.log("ilyess");
  }
  changeUserType(){
  this.data.changeUserType("Simple User");
  }
  delete(user){
  let index=this.usersList.indexOf(user);
  this.usersList.splice(index,1);
  }
  addPerson(){

  }
  

}

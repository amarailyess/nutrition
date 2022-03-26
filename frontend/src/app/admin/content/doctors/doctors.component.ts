import { Component, OnInit } from '@angular/core';
import {DataServiceService} from '../../data-service.service';

@Component({
  selector: 'app-doctors',
  templateUrl: './doctors.component.html',
  styleUrls: ['./doctors.component.scss']
})
export class DoctorsComponent implements OnInit {
	
	doctorList=[
  {
    id:1,
    name:"Dakota Rice",
    country:"Niger",
    specialty:"Oud-Turnhout",
    work_adress:"A_Hospital",

  },
  {
    id:2,
    name:"Minerva Hooper",
    country:"Curaçao",
    specialty:"Sinaai-Waas",
    work_adress:"B_Hospital",

  }
  ]
	user:string;

  constructor(private data:DataServiceService) { }

  ngOnInit(): void {
  this.data.currentUser.subscribe(user=>this.user=user);
  }
  changeUserType(){
  this.data.changeUserType("Doctor");
  }
  delete(doctor){
  let index=this.doctorList.indexOf(doctor);
  this.doctorList.splice(index,1);
  }

}

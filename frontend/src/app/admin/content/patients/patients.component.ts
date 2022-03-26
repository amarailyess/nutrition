import { Component, OnInit } from '@angular/core';
import {DataServiceService} from '../../data-service.service';
@Component({
  selector: 'app-patients',
  templateUrl: './patients.component.html',
  styleUrls: ['./patients.component.scss']
})
export class PatientsComponent implements OnInit {
	patientList=[
  {
    id:1,
    name:"Dakota Rice",
    country:"Niger",
    city:"Oud-Turnhout",
    appointmentId:"A_Hospital",

  },
  {
    id:2,
    name:"Minerva Hooper",
    country:"Curaçao",
    city:"Sinaai-Waas",
    appointmentId:"B_Hospital",

  }
  ]

  constructor() { }

  ngOnInit(): void {
  }
  
  delete(patient){
  let index=this.patientList.indexOf(patient);
  this.patientList.splice(index,1);
  }

}

import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-appointments-list',
  templateUrl: './appointments-list.component.html',
  styleUrls: ['./appointments-list.component.scss']
})
export class AppointmentsListComponent implements OnInit {
	
	appointmentList=[
	{
		id:1,
		patientName:"Dakota Rice",
		doctorName:"Niger",
		date:"Oud-Turnhout",
		adress:18,
		done:"yes",

	},
	{
		id:2,
		patientName:"Dakota Rice",
		doctorName:"Niger",
		date:"Oud-Turnhout",
		adress:18,
		done:"no",

	}
	]
  constructor() { }

  ngOnInit(): void {
  }
  delete(appointment){
  let index=this.appointmentList.indexOf(appointment);
  this.appointmentList.splice(index,1);
  }

}

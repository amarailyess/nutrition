import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-notifications',
  templateUrl: './notifications.component.html',
  styleUrls: ['./notifications.component.scss']
})
export class NotificationsComponent implements OnInit {
	
	notificationList=[
	{
		number:1,
		type:"Dakota Rice",
		date:"Niger",
		time:"hh/mm/ss",
		content:"Oud-Turnhout",
		

	},
	{
		number:1,
		type:"Dakota Rice",
		date:"Niger",
		time:"hh/mm/ss",
		content:"Oud-Turnhout",

	}
	]

  constructor() { }

  ngOnInit(): void {
  }
  delete(notification){
  let index=this.notificationList.indexOf(notification);
  this.notificationList.splice(index,1);
  }

}

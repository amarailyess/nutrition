import { Injectable } from '@angular/core';
import { Subject,BehaviorSubject, Observable  } from 'rxjs';

@Injectable({
  providedIn: 'root'
})
export class DataServiceService {

	private userType =new BehaviorSubject<string>("default user");
	currentUser=this.userType.asObservable();

  constructor() { }

  changeUserType(user:string):void{
  this.userType.next(user);
}
}

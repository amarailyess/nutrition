import { Injectable } from '@angular/core';
import{ HttpClient} from '@angular/common/http';

@Injectable({
  providedIn: 'root'
})
export class UsersService {

 url ='http://localhost:8000/api';
  constructor(private http:HttpClient) { }
  getAllUsers(){
  	return this.http.get<any>(`${this.url}/users`);
  }
  addPerson(){
  
}
}

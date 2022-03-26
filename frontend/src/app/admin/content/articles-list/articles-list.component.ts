import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-articles-list',
  templateUrl: './articles-list.component.html',
  styleUrls: ['./articles-list.component.scss']
})
export class ArticlesListComponent implements OnInit {
	
	articleList=[
	{
		id:1,
		title:"Dakota Rice",
		domain:"Niger",
		doctorName:"Oud-Turnhout",
		date:18,

	},
	{
		id:1,
		title:"Dakota Rice",
		domain:"Niger",
		doctorName:"Oud-Turnhout",
		date:18,

	}
	]

  constructor() { }

  ngOnInit(): void {
  }
   delete(article){
  let index=this.articleList.indexOf(article);
  this.articleList.splice(index,1);
  }

}

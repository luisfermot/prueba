import { Component } from '@angular/core';
import { ChatService } from './services/chat.service';
import { HttpClient } from '@angular/common/http';


@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent {

 
  constructor(private http:HttpClient,private chat:ChatService){

  }

  ngOnInit(){


    
  }

  
}

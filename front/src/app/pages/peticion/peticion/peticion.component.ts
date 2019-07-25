import { Component, OnInit } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import {ChatService} from '../../../services/chat.service'

@Component({
  selector: 'app-peticion',
  templateUrl: './peticion.component.html',
  styleUrls: ['./peticion.component.css']
})
export class PeticionComponent implements OnInit {
  posts=[];
  constructor(private http:HttpClient, private chat:ChatService) { }

  ngOnInit() {
    
    this.chat.message.subscribe(msg=>{
      console.log(msg);
      console.log("dsfsdf");
    })
  }

  
  sendMessage(){
    this.http.get('http://localhost/wordpress/back/wp-json/wp/v2/posts/').subscribe(resultado=>{
      for (let clave in resultado) {
        if(resultado.hasOwnProperty(clave)){
          this.posts.push(resultado[clave]);
        }
      }
      console.log(this.posts);
    }); 
    this.posts=[];

  }

}

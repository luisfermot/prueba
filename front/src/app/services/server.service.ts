import { Injectable } from '@angular/core';
import  * as io from 'socket.io-client';
import { Observable } from 'rxjs/Rx';
import * as Rx from 'rxjs/Rx';
import {environment} from '../../environments/environment';

@Injectable({
  providedIn: 'root'
})
export class ServerService {
  private socket;
  constructor() { 
  }

  connect():Rx.Subject<MessageEvent>{
    console.log("estate");
    this.socket = io(environment.ws_url);

    let observable = new Observable(observer=>{
      this.socket.on('message',(data)=>{
        
        observer.next(data);
      })
      return ()=>{
        this.socket.disconnet();
      }
    })
    
    // let observer ={
    //   next:(data:Object)=>{
    //     this.socket.emit('message',JSON.stringify(data));
    //   },
    // };
    
    return Rx.Subject.create(observable);
  
  }



}

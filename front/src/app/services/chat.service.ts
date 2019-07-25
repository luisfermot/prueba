import { Injectable } from '@angular/core';
import {Observable,Subject} from 'rxjs/Rx'
import { ServerService } from './server.service';

@Injectable({
  providedIn: 'root'
})
export class ChatService {
  message:Subject<any>;
   
  constructor(private wsService:ServerService) {
    this.message=<Subject<any>>wsService
    .connect()
    .map((response:any):any=>{
      return response;
    })
  }


  sendMsg(msg){
    this.message.next(msg);
  }

}

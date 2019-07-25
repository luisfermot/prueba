import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
// importar el http para hacer las peticiones a wordpress
import {HttpClientModule } from '@angular/common/http';


import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';

// servicios para el funcionamiento de socket
import { ChatService } from './services/chat.service';
import { ServerService } from './services/server.service';
import { PeticionComponent } from './pages/peticion/peticion/peticion.component';

@NgModule({
  declarations: [
    AppComponent,
    PeticionComponent
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    HttpClientModule
   
  ],
  providers: [
     ChatService,
    ServerService
  ],
  bootstrap: [AppComponent]
})
export class AppModule { }

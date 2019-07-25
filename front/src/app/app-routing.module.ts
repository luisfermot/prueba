import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { PeticionComponent } from './pages/peticion/peticion/peticion.component';
const routes: Routes = [
  {path:'wordpress', component:PeticionComponent}
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }

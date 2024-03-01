import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import {ListaUsuariosComponent} from "./lista-usuarios/lista-usuarios.component";

const routes: Routes = [
  {path: 'login', component: LoginComponent},
  {path: 'register', component: RegisterComponent},
  {path: 'lista-usuarios', component: ListaUsuariosComponent}
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }

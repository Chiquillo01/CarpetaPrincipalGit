import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { BienvenidaComponent } from './paginas/bienvenida/bienvenida.component';
import { PrincipalComponent } from './paginas/principal/principal.component';
import { ErrorComponent } from './paginas/error/error.component';

const routes: Routes = [
  {
    path: 'welcome',
    component: BienvenidaComponent,
  },
  {
    path: 'principal',
    component: PrincipalComponent,
  },
  {
    path: 'error',
    component: ErrorComponent,
  },
  {
    path: '**',
    redirectTo: '/error',
    pathMatch: 'full',
  },
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule],
})
export class AppRoutingModule {}

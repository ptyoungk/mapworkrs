import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { Map_infoComponent } from './map_info.component';

const routes: Routes = [
  {
    path: '',
    component: Map_infoComponent
  },
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule]
})
export class Map_infoRoutingModule { }

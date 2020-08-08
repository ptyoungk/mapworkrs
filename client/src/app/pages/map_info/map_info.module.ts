import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { Map_infoComponent } from './map_info.component';
import { Map_infoRoutingModule } from './map_info-routing.module';
import { FormsModule } from '@angular/forms';
import { SharedModule } from '../../shared/shared.module';


@NgModule({
  imports: [
    CommonModule,
    Map_infoRoutingModule,
    FormsModule,
    SharedModule
  ],
  declarations: [
    Map_infoComponent
  ]
})
export class Map_infoModule { }

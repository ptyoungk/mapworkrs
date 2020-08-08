// Import Libraries
import { Component } from '@angular/core';
import { Location } from '@angular/common';

// Import Services
import { Map_infoService } from '../../services/map_info.service';

// START - USED SERVICES
/**
* map_infoService.create
*	@description CRUD ACTION create
*	@param map_info obj Object to insert
*
*/
// END - USED SERVICES

/**
 * map_info Component
 */
@Component({
    selector: 'app-map_info',
    templateUrl : './map_info.component.html',
    styleUrls: ['./map_info.component.css']
})
export class Map_infoComponent {

    constructor(
        private map_infoService: Map_infoService,
        private location: Location
        ) {

    }
}

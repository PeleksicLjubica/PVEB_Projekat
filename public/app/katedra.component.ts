/**
 * Created by Ljubica on 29.5.2016.
 */
import { Component, OnInit } from '@angular/core';
import { Katedra }                from './katedra';
import { KatedraService }         from './katedra.service';

@Component({
    selector: 'katedre',
    template: `<ul class="katedre">
                    <li *ngFor="let katedra of katedre">
                        <span class="katedra">
                            <span>{{katedra.naziv}}</span>
                        </span>
                    </li>
                  </ul>`
})
export class KatedraComponent implements OnInit {
    katedre: Katedra[];
    error: any;

    constructor(
        private katedraService: KatedraService) { }

    getKatedre() {
        this.katedraService
            .getKatedre()
            .then(katedre => this.katedre = katedre)
            .catch(error => this.error = error); // TODO: Display error message
    }

    ngOnInit() {
        this.getKatedre();
    }

}

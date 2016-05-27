
import { Component } from '@angular/core';


@Component({
    selector: 'dugme_plus',
    template: '<button type="button" class="btn btn-default" (click)="onClick()">+</button>'
})

export class Dugme {
    onClick(){
        console.log("BLA BLA");
    }
}
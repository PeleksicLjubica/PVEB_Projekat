import { Component } from '@angular/core';
import { KatedraComponent } from './katedra.component';
import { KatedraService } from './katedra.service';

@Component({
    selector: 'my-app',
    template: `<katedre></katedre>`,
    providers: [KatedraService],
    directives: [KatedraComponent]
})

export class AppComponent {

}

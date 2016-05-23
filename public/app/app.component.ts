/*
    Angular ima nekoliko vaznih biblioteka modula; sve pocinju prefiksom @
    @angular/core je glavna biblioteka

    moduli se ukljucuju import direktivom
    u slucaju ukljucivanja korisnicki definisanih modula treba koristiti relativne putanje
 */
import { Component } from '@angular/core';


/*
    @Component dekorator je funkcija koja pridruzuje metapodatke klasi i ukazuje Angularu
    da je u pitanju komponenta
 */
@Component({
    selector: 'my-app',
    template: '<h1>My First Angular 2 App :) </h1>'
})

/*
    Export direktiva kaze da je klasa АppComponent javna i
    da se moze koristiti u drugim modulima
*/
export class AppComponent {

}
/**
 * Created by Ljubica on 29.5.2016.
 */
import { Injectable }    from '@angular/core';
import {Http, HTTP_PROVIDERS} from '@angular/http';
import 'rxjs/add/operator/toPromise';
import { Katedra } from './katedra'

@Injectable()
export class KatedraService{
    private katedreUrl = 'katedraPodaci';  // URL to web api

    constructor(private http: Http) {}

    getKatedre(): Promise<Katedra[]> {
        return this.http.get(this.katedreUrl)
            .toPromise()
            .then(response => response.json().data)
            .catch(this.handleError);
    }

    private handleError(error: any) {
        console.error('An error occurred', error);
        return Promise.reject(error.message || error);
    }

}


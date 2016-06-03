"use strict";
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (this && this.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};
/**
 * Created by Ljubica on 29.5.2016.
 */
var core_1 = require('@angular/core');
var katedra_service_1 = require('./katedra.service');
var KatedraComponent = (function () {
    function KatedraComponent(katedraService) {
        this.katedraService = katedraService;
    }
    KatedraComponent.prototype.getKatedre = function () {
        var _this = this;
        this.katedraService
            .getKatedre()
            .then(function (katedre) { return _this.katedre = katedre; })
            .catch(function (error) { return _this.error = error; }); // TODO: Display error message
    };
    KatedraComponent.prototype.ngOnInit = function () {
        this.getKatedre();
    };
    KatedraComponent = __decorate([
        core_1.Component({
            selector: 'katedre',
            template: "<ul class=\"katedre\">\n                    <li *ngFor=\"let katedra of katedre\">\n                        <span class=\"katedra\">\n                            <span>{{katedra.naziv}}</span>\n                        </span>\n                    </li>\n                  </ul>"
        }), 
        __metadata('design:paramtypes', [katedra_service_1.KatedraService])
    ], KatedraComponent);
    return KatedraComponent;
}());
exports.KatedraComponent = KatedraComponent;
//# sourceMappingURL=katedra.component.js.map
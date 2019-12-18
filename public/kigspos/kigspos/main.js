(window["webpackJsonp"] = window["webpackJsonp"] || []).push([["main"],{

/***/ "./$$_lazy_route_resource lazy recursive":
/*!******************************************************!*\
  !*** ./$$_lazy_route_resource lazy namespace object ***!
  \******************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

function webpackEmptyAsyncContext(req) {
	// Here Promise.resolve().then() is used instead of new Promise() to prevent
	// uncaught exception popping up in devtools
	return Promise.resolve().then(function() {
		var e = new Error("Cannot find module '" + req + "'");
		e.code = 'MODULE_NOT_FOUND';
		throw e;
	});
}
webpackEmptyAsyncContext.keys = function() { return []; };
webpackEmptyAsyncContext.resolve = webpackEmptyAsyncContext;
module.exports = webpackEmptyAsyncContext;
webpackEmptyAsyncContext.id = "./$$_lazy_route_resource lazy recursive";

/***/ }),

/***/ "./node_modules/raw-loader/dist/cjs.js!./src/app/app.component.html":
/*!**************************************************************************!*\
  !*** ./node_modules/raw-loader/dist/cjs.js!./src/app/app.component.html ***!
  \**************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony default export */ __webpack_exports__["default"] = ("<html>\n\n<head>\n    <title>POS</title>\n</head>\n\n<body>\n    <app-pos></app-pos>\n    <!-- <app-heroes></app-heroes> -->\n</body>\n\n</html>");

/***/ }),

/***/ "./node_modules/raw-loader/dist/cjs.js!./src/app/hero-detail/hero-detail.component.html":
/*!**********************************************************************************************!*\
  !*** ./node_modules/raw-loader/dist/cjs.js!./src/app/hero-detail/hero-detail.component.html ***!
  \**********************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony default export */ __webpack_exports__["default"] = ("<div *ngIf=\"hero\">\n\n    <h2>{{hero.name | uppercase}} Details</h2>\n    <div><span>id: </span>{{hero.id}}</div>\n    <div>\n      <label>name:\n        <input [(ngModel)]=\"hero.name\" placeholder=\"name\"/>\n      </label>\n    </div>\n  \n  </div>");

/***/ }),

/***/ "./node_modules/raw-loader/dist/cjs.js!./src/app/heroes/heroes.component.html":
/*!************************************************************************************!*\
  !*** ./node_modules/raw-loader/dist/cjs.js!./src/app/heroes/heroes.component.html ***!
  \************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony default export */ __webpack_exports__["default"] = ("<h2>My Heroes</h2>\n<ul class=\"heroes\">\n  <li *ngFor=\"let hero of heroes\"\n    [class.selected]=\"hero === selectedHero\"\n    (click)=\"onSelect(hero)\">\n    <span class=\"badge\">{{hero.id}}</span> {{hero.name}}\n  </li>\n</ul>\n\n<app-hero-detail [hero]=\"selectedHero\"></app-hero-detail>");

/***/ }),

/***/ "./node_modules/raw-loader/dist/cjs.js!./src/app/pos/pos.component.html":
/*!******************************************************************************!*\
  !*** ./node_modules/raw-loader/dist/cjs.js!./src/app/pos/pos.component.html ***!
  \******************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony default export */ __webpack_exports__["default"] = ("<link href=\"https://fonts.googleapis.com/css?family=Open+Sans&display=swap\" rel=\"stylesheet\">\n\n<style>\n    * {\n        font-family: 'Open Sans', sans-serif;\n    }\n</style>\n\n<div class=\"headbar\">\n    <div class=\"container-fluid\">\n        <div class=\"row\">\n            <div class=\"col-3\">\n                <div class=\"menu-button\">\n                    <i class=\"fa fa-bars\"></i>\n                    Menu\n                </div>\n            </div>\n\n            <div class=\"col-6\">\n\n            </div>\n\n            <div class=\"col-3\">\n                <div class=\"clock-time\">\n                    {{currentDate}}\n                </div>\n            </div>\n        </div>\n    </div>\n\n</div>\n\n<div class=\"container-fluid pos-container\">\n    <div class=\"row\">\n        <div class=\"col-8\">\n            <div class=\"product-list\">\n\n                <div style=\"height: 60%; overflow-y: scroll;\">\n                    <table class=\"table table-bordered table-pos\">\n                        <thead>\n                            <tr>\n                                <th style=\"width: 20px\">No</th>\n                                <th>Item</th>\n                                <th>Desc</th>\n                                <th>Berat</th>\n                                <th>Karat</th>\n                                <th>Harga</th>\n                            </tr>\n                        </thead>\n                        <tbody>\n                            <tr *ngFor=\"let product of products; let i = index\" [attr.data-index]=\"i\"\n                                (click)=\"selectItem(i)\" [ngClass]=\"{'selected-row-pos': i == selectedIndex}\">\n                                <td>{{i+1}}</td>\n                                <td><b>{{product.name}}</b><br>\n                                    <p style=\"font-size: 12px\">{{product.sku}}</p>\n                                </td>\n                                <td>{{product.category.name + \" \" + product.subCategory.name}}</td>\n                                <td>{{product.weight}}</td>\n                                <td>{{product.karat}}</td>\n                                <td>{{product.price | number}}</td>\n                            </tr>\n                        </tbody>\n                    </table>\n                </div>\n\n\n                <div>\n                    <div>\n                        <div>\n                            <div *ngIf=\"selectedProduct\">\n                                <button (click)=\"removeItem()\" class=\"btn btn-danger\"\n                                    style=\"float: right; margin: 10px\"><i class=\"fa fa-trash\"></i> Remove\n                                    Selection</button>\n\n                            </div>\n                        </div>\n                        <div style=\"padding: 15px\">\n                            <h5><i class=\"fa fa-edit\"></i> Detail Pembayaran</h5>\n                            <div style=\"margin-top: 30px\">\n                                <table class=\"table\">\n                                    <tr>\n                                        <td>Total Item</td>\n                                        <td style=\"padding-left: 10px\"><b>Rp {{totalPrice | number}}</b></td>\n\n                                        <td>Disc (Rp)</td>\n                                        <td style=\"padding-left: 10px\"><b>Rp 0</b></td>\n\n                                    </tr>\n\n                                    <tr>\n                                        <td>Jumlah</td>\n                                        <td style=\"padding-left: 10px\"><b>{{totalQty}}</b></td>\n\n                                        <td>Berat</td>\n                                        <td style=\"padding-left: 10px\"><b></b></td>\n                                    </tr>\n\n                                </table>\n                            </div>\n                        </div>\n\n                    </div>\n                </div>\n            </div>\n        </div>\n        <div class=\"col\">\n            <div class=\"product-query\">\n                <div style=\"margin: 20px\">\n                    <form style=\"margin-top: 10px\">\n                        <input type=\"text\" class=\"form-control product-search-textfield\" placeholder=\"Masukkan Barcode\"\n                            [formControl]=\"barcode\" (keyup.enter)=\"submitBarcode()\">\n                        <div style=\"margin-top: 30px\"></div>\n                        <h5>Atau cari item manual</h5>\n                        <input type=\"text\" class=\"form-control product-search-manual-textfield\"\n                            placeholder=\"Masukkan SKU, Nama atau Harga\" [formControl]=\"barcode\"\n                            (keyup.enter)=\"submitBarcode()\">\n                    </form>\n                </div>\n            </div>\n\n            <div class=\"product-detail\">\n                <div style=\"margin: 20px; font-size: 20px\">\n                    <i class=\"fa fa-info-circle\"></i> Detail Produk\n\n                    <table class=\"table table-detail-product\" style=\"font-size: 12px; margin-top: 10px\">\n                        <tr>\n                            <td>Nama Produk</td>\n                            <td>\n                                <div *ngIf=\"selectedIndex!=null\">{{selectedProduct.name}}</div>\n                            </td>\n                        </tr>\n\n                        <tr>\n                            <td>SKU</td>\n                            <td>\n                                <div *ngIf=\"selectedIndex!=null\">{{selectedProduct.sku}}</div>\n                            </td>\n                        </tr>\n\n                        <tr>\n                            <td>Berat</td>\n                            <td>\n                                <div *ngIf=\"selectedIndex!=null\">{{selectedProduct.weight}} Grams</div>\n                            </td>\n                        </tr>\n\n                        <tr>\n                            <td>Karat</td>\n                            <td>\n                                <div *ngIf=\"selectedIndex!=null\">{{selectedProduct.karat}}</div>\n                            </td>\n                        </tr>\n\n                        <tr>\n                            <td>Harga</td>\n                            <td>\n                                <div *ngIf=\"selectedIndex!=null\">{{selectedProduct.price | number}}</div>\n                            </td>\n                        </tr>\n\n                        <tr>\n                            <td>Tanggal Masuk</td>\n                            <td>\n                                <div *ngIf=\"selectedIndex!=null\">{{selectedProduct.date_in | date: 'dd/MM/yyyy'}}</div>\n                            </td>\n                        </tr>\n\n\n                    </table>\n                </div>\n            </div>\n        </div>\n    </div>\n\n    <div class=\"row\">\n        <div class=\"col-8\">\n            <div class=\"total-price-container\">\n                <div class=\"row\">\n                    <div class=\"col-4\" style=\"font-size: 32px; margin-top: 14px\">\n                        <button class=\"btn btn-light\" style=\"margin-right: 5px\">\n                            <i class=\"fa fa-cog\"></i>\n                        </button>\n                        <button class=\"btn btn-light\" (click)=\"emptyTable()\">\n                            <i class=\"fa fa-history\"></i> Kosongkan POS\n                        </button>\n                    </div>\n                    <div class=\"col-3\">\n                        <h5 class=\"total-price-caption\" style=\"text-align: right\">\n                            TOTAL PRICE\n                        </h5>\n                    </div>\n                    <div class=\"col-5\">\n                        <h2 class=\"total-price-text\" style=\"text-align: right\">\n                            Rp {{totalPrice | number}}\n                        </h2>\n                    </div>\n                </div>\n            </div>\n        </div>\n        <div class=\"col\">\n            <button data-toggle=\"modal\" data-target=\"#checkoutModal\" class=\"btn btn-success\"\n                style=\"display: block; width: 100%; margin-top: 20px; padding: 1px\" [disabled] =\"!totalPrice\">\n                <h3>\n                    <i class=\"fa fa-check-circle\"></i> Proses\n                </h3>\n            </button>\n        </div>\n    </div>\n</div>\n\n\n<!-- Modal : Confirm Payment -->\n<div class=\"modal fade\" id=\"checkoutModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\"\n    aria-hidden=\"true\">\n    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">\n        <div class=\"modal-content\">\n            <div class=\"modal-header\">\n                <h5 class=\"modal-title\" id=\"exampleModalLongTitle\">Konfirmasi Pembayaran</h5>\n                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">\n                    <span aria-hidden=\"true\">&times;</span>\n                </button>\n            </div>\n            <div class=\"modal-body\">\n                <div>\n                    <table class=\"table\">\n                        <tr>\n                            <td>\n                                Uang Bayar\n                            </td>\n\n                            <td>\n                                <input class=\"form-control\"  [formControl]=\"payAmount\"> \n                            </td>\n                        </tr>\n\n                        <tr>\n                            <td>\n                                Uang Kembalian\n                            </td>\n\n                            <td>\n                                <input class=\"form-control\" disabled value=\"{{payAmount.value-totalPrice < 0 ? '' : payAmount.value-totalPrice | number}}\"> \n                            </td>\n                        </tr>\n                    </table>\n                </div>\n            </div>\n            <div class=\"modal-footer\">\n\n              \n\n                <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>\n\n                <form method=\"post\" class=\"formCheckout\" action=\"http://127.0.0.1/pos/invoice\">\n                    <input type=\"hidden\" name=\"transaction_id\" [formControl]=\"transactionId\">\n                </form>\n                <button class=\"button btn-primary\" type=\"submit\" (click)=\"createTransaction()\">Purchase</button>\n<!--                 \n                <button type=\"button\" class=\"btn btn-primary\" (click)=\"createTransaction()\">Proceed</button> -->\n            </div>\n        </div>\n    </div>\n</div>\n\n\n\n\n<!-- Modal : Product Not Found -->\n<div class=\"modal fade\" id=\"productNotFoundModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalCenterTitle\"\n    aria-hidden=\"true\">\n    <div class=\"modal-dialog modal-dialog-centered\" role=\"document\">\n        <div class=\"modal-content\">\n            <div class=\"modal-header\">\n                <h5 class=\"modal-title\" id=\"exampleModalLongTitle\"><i class=\"fa fa-warning\"></i> Barang Tidak Ditemukan</h5>\n                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">\n                    <span aria-hidden=\"true\">&times;</span>\n                </button>\n            </div>\n            <div class=\"modal-body\">\n                Maaf, Barang dengan Barcode <strong>{{prevSearchedBarcode}}</strong> tidak ditemukan\n            </div>\n            <div class=\"modal-footer\">\n\n               \n                <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>\n            </div>\n        </div>\n    </div>\n</div>");

/***/ }),

/***/ "./node_modules/tslib/tslib.es6.js":
/*!*****************************************!*\
  !*** ./node_modules/tslib/tslib.es6.js ***!
  \*****************************************/
/*! exports provided: __extends, __assign, __rest, __decorate, __param, __metadata, __awaiter, __generator, __exportStar, __values, __read, __spread, __spreadArrays, __await, __asyncGenerator, __asyncDelegator, __asyncValues, __makeTemplateObject, __importStar, __importDefault */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "__extends", function() { return __extends; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "__assign", function() { return __assign; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "__rest", function() { return __rest; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "__decorate", function() { return __decorate; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "__param", function() { return __param; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "__metadata", function() { return __metadata; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "__awaiter", function() { return __awaiter; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "__generator", function() { return __generator; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "__exportStar", function() { return __exportStar; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "__values", function() { return __values; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "__read", function() { return __read; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "__spread", function() { return __spread; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "__spreadArrays", function() { return __spreadArrays; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "__await", function() { return __await; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "__asyncGenerator", function() { return __asyncGenerator; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "__asyncDelegator", function() { return __asyncDelegator; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "__asyncValues", function() { return __asyncValues; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "__makeTemplateObject", function() { return __makeTemplateObject; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "__importStar", function() { return __importStar; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "__importDefault", function() { return __importDefault; });
/*! *****************************************************************************
Copyright (c) Microsoft Corporation. All rights reserved.
Licensed under the Apache License, Version 2.0 (the "License"); you may not use
this file except in compliance with the License. You may obtain a copy of the
License at http://www.apache.org/licenses/LICENSE-2.0

THIS CODE IS PROVIDED ON AN *AS IS* BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
KIND, EITHER EXPRESS OR IMPLIED, INCLUDING WITHOUT LIMITATION ANY IMPLIED
WARRANTIES OR CONDITIONS OF TITLE, FITNESS FOR A PARTICULAR PURPOSE,
MERCHANTABLITY OR NON-INFRINGEMENT.

See the Apache Version 2.0 License for specific language governing permissions
and limitations under the License.
***************************************************************************** */
/* global Reflect, Promise */

var extendStatics = function(d, b) {
    extendStatics = Object.setPrototypeOf ||
        ({ __proto__: [] } instanceof Array && function (d, b) { d.__proto__ = b; }) ||
        function (d, b) { for (var p in b) if (b.hasOwnProperty(p)) d[p] = b[p]; };
    return extendStatics(d, b);
};

function __extends(d, b) {
    extendStatics(d, b);
    function __() { this.constructor = d; }
    d.prototype = b === null ? Object.create(b) : (__.prototype = b.prototype, new __());
}

var __assign = function() {
    __assign = Object.assign || function __assign(t) {
        for (var s, i = 1, n = arguments.length; i < n; i++) {
            s = arguments[i];
            for (var p in s) if (Object.prototype.hasOwnProperty.call(s, p)) t[p] = s[p];
        }
        return t;
    }
    return __assign.apply(this, arguments);
}

function __rest(s, e) {
    var t = {};
    for (var p in s) if (Object.prototype.hasOwnProperty.call(s, p) && e.indexOf(p) < 0)
        t[p] = s[p];
    if (s != null && typeof Object.getOwnPropertySymbols === "function")
        for (var i = 0, p = Object.getOwnPropertySymbols(s); i < p.length; i++) {
            if (e.indexOf(p[i]) < 0 && Object.prototype.propertyIsEnumerable.call(s, p[i]))
                t[p[i]] = s[p[i]];
        }
    return t;
}

function __decorate(decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
}

function __param(paramIndex, decorator) {
    return function (target, key) { decorator(target, key, paramIndex); }
}

function __metadata(metadataKey, metadataValue) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(metadataKey, metadataValue);
}

function __awaiter(thisArg, _arguments, P, generator) {
    return new (P || (P = Promise))(function (resolve, reject) {
        function fulfilled(value) { try { step(generator.next(value)); } catch (e) { reject(e); } }
        function rejected(value) { try { step(generator["throw"](value)); } catch (e) { reject(e); } }
        function step(result) { result.done ? resolve(result.value) : new P(function (resolve) { resolve(result.value); }).then(fulfilled, rejected); }
        step((generator = generator.apply(thisArg, _arguments || [])).next());
    });
}

function __generator(thisArg, body) {
    var _ = { label: 0, sent: function() { if (t[0] & 1) throw t[1]; return t[1]; }, trys: [], ops: [] }, f, y, t, g;
    return g = { next: verb(0), "throw": verb(1), "return": verb(2) }, typeof Symbol === "function" && (g[Symbol.iterator] = function() { return this; }), g;
    function verb(n) { return function (v) { return step([n, v]); }; }
    function step(op) {
        if (f) throw new TypeError("Generator is already executing.");
        while (_) try {
            if (f = 1, y && (t = op[0] & 2 ? y["return"] : op[0] ? y["throw"] || ((t = y["return"]) && t.call(y), 0) : y.next) && !(t = t.call(y, op[1])).done) return t;
            if (y = 0, t) op = [op[0] & 2, t.value];
            switch (op[0]) {
                case 0: case 1: t = op; break;
                case 4: _.label++; return { value: op[1], done: false };
                case 5: _.label++; y = op[1]; op = [0]; continue;
                case 7: op = _.ops.pop(); _.trys.pop(); continue;
                default:
                    if (!(t = _.trys, t = t.length > 0 && t[t.length - 1]) && (op[0] === 6 || op[0] === 2)) { _ = 0; continue; }
                    if (op[0] === 3 && (!t || (op[1] > t[0] && op[1] < t[3]))) { _.label = op[1]; break; }
                    if (op[0] === 6 && _.label < t[1]) { _.label = t[1]; t = op; break; }
                    if (t && _.label < t[2]) { _.label = t[2]; _.ops.push(op); break; }
                    if (t[2]) _.ops.pop();
                    _.trys.pop(); continue;
            }
            op = body.call(thisArg, _);
        } catch (e) { op = [6, e]; y = 0; } finally { f = t = 0; }
        if (op[0] & 5) throw op[1]; return { value: op[0] ? op[1] : void 0, done: true };
    }
}

function __exportStar(m, exports) {
    for (var p in m) if (!exports.hasOwnProperty(p)) exports[p] = m[p];
}

function __values(o) {
    var m = typeof Symbol === "function" && o[Symbol.iterator], i = 0;
    if (m) return m.call(o);
    return {
        next: function () {
            if (o && i >= o.length) o = void 0;
            return { value: o && o[i++], done: !o };
        }
    };
}

function __read(o, n) {
    var m = typeof Symbol === "function" && o[Symbol.iterator];
    if (!m) return o;
    var i = m.call(o), r, ar = [], e;
    try {
        while ((n === void 0 || n-- > 0) && !(r = i.next()).done) ar.push(r.value);
    }
    catch (error) { e = { error: error }; }
    finally {
        try {
            if (r && !r.done && (m = i["return"])) m.call(i);
        }
        finally { if (e) throw e.error; }
    }
    return ar;
}

function __spread() {
    for (var ar = [], i = 0; i < arguments.length; i++)
        ar = ar.concat(__read(arguments[i]));
    return ar;
}

function __spreadArrays() {
    for (var s = 0, i = 0, il = arguments.length; i < il; i++) s += arguments[i].length;
    for (var r = Array(s), k = 0, i = 0; i < il; i++)
        for (var a = arguments[i], j = 0, jl = a.length; j < jl; j++, k++)
            r[k] = a[j];
    return r;
};

function __await(v) {
    return this instanceof __await ? (this.v = v, this) : new __await(v);
}

function __asyncGenerator(thisArg, _arguments, generator) {
    if (!Symbol.asyncIterator) throw new TypeError("Symbol.asyncIterator is not defined.");
    var g = generator.apply(thisArg, _arguments || []), i, q = [];
    return i = {}, verb("next"), verb("throw"), verb("return"), i[Symbol.asyncIterator] = function () { return this; }, i;
    function verb(n) { if (g[n]) i[n] = function (v) { return new Promise(function (a, b) { q.push([n, v, a, b]) > 1 || resume(n, v); }); }; }
    function resume(n, v) { try { step(g[n](v)); } catch (e) { settle(q[0][3], e); } }
    function step(r) { r.value instanceof __await ? Promise.resolve(r.value.v).then(fulfill, reject) : settle(q[0][2], r); }
    function fulfill(value) { resume("next", value); }
    function reject(value) { resume("throw", value); }
    function settle(f, v) { if (f(v), q.shift(), q.length) resume(q[0][0], q[0][1]); }
}

function __asyncDelegator(o) {
    var i, p;
    return i = {}, verb("next"), verb("throw", function (e) { throw e; }), verb("return"), i[Symbol.iterator] = function () { return this; }, i;
    function verb(n, f) { i[n] = o[n] ? function (v) { return (p = !p) ? { value: __await(o[n](v)), done: n === "return" } : f ? f(v) : v; } : f; }
}

function __asyncValues(o) {
    if (!Symbol.asyncIterator) throw new TypeError("Symbol.asyncIterator is not defined.");
    var m = o[Symbol.asyncIterator], i;
    return m ? m.call(o) : (o = typeof __values === "function" ? __values(o) : o[Symbol.iterator](), i = {}, verb("next"), verb("throw"), verb("return"), i[Symbol.asyncIterator] = function () { return this; }, i);
    function verb(n) { i[n] = o[n] && function (v) { return new Promise(function (resolve, reject) { v = o[n](v), settle(resolve, reject, v.done, v.value); }); }; }
    function settle(resolve, reject, d, v) { Promise.resolve(v).then(function(v) { resolve({ value: v, done: d }); }, reject); }
}

function __makeTemplateObject(cooked, raw) {
    if (Object.defineProperty) { Object.defineProperty(cooked, "raw", { value: raw }); } else { cooked.raw = raw; }
    return cooked;
};

function __importStar(mod) {
    if (mod && mod.__esModule) return mod;
    var result = {};
    if (mod != null) for (var k in mod) if (Object.hasOwnProperty.call(mod, k)) result[k] = mod[k];
    result.default = mod;
    return result;
}

function __importDefault(mod) {
    return (mod && mod.__esModule) ? mod : { default: mod };
}


/***/ }),

/***/ "./src/app/app-routing.module.ts":
/*!***************************************!*\
  !*** ./src/app/app-routing.module.ts ***!
  \***************************************/
/*! exports provided: AppRoutingModule */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "AppRoutingModule", function() { return AppRoutingModule; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm5/core.js");
/* harmony import */ var _angular_router__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @angular/router */ "./node_modules/@angular/router/fesm5/router.js");
/* harmony import */ var _heroes_heroes_component__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./heroes/heroes.component */ "./src/app/heroes/heroes.component.ts");




var routes = [
    { path: 'heroes', component: _heroes_heroes_component__WEBPACK_IMPORTED_MODULE_3__["HeroesComponent"] }
];
var AppRoutingModule = /** @class */ (function () {
    function AppRoutingModule() {
    }
    AppRoutingModule = tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["NgModule"])({
            imports: [_angular_router__WEBPACK_IMPORTED_MODULE_2__["RouterModule"].forRoot(routes)],
            exports: [_angular_router__WEBPACK_IMPORTED_MODULE_2__["RouterModule"]]
        })
    ], AppRoutingModule);
    return AppRoutingModule;
}());



/***/ }),

/***/ "./src/app/app.component.css":
/*!***********************************!*\
  !*** ./src/app/app.component.css ***!
  \***********************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony default export */ __webpack_exports__["default"] = ("\n/*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbXSwibmFtZXMiOltdLCJtYXBwaW5ncyI6IiIsImZpbGUiOiJzcmMvYXBwL2FwcC5jb21wb25lbnQuY3NzIn0= */");

/***/ }),

/***/ "./src/app/app.component.ts":
/*!**********************************!*\
  !*** ./src/app/app.component.ts ***!
  \**********************************/
/*! exports provided: AppComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "AppComponent", function() { return AppComponent; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm5/core.js");


var AppComponent = /** @class */ (function () {
    function AppComponent() {
        this.title = 'kigspos';
    }
    AppComponent = tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Component"])({
            selector: 'app-root',
            template: tslib__WEBPACK_IMPORTED_MODULE_0__["__importDefault"](__webpack_require__(/*! raw-loader!./app.component.html */ "./node_modules/raw-loader/dist/cjs.js!./src/app/app.component.html")).default,
            styles: [tslib__WEBPACK_IMPORTED_MODULE_0__["__importDefault"](__webpack_require__(/*! ./app.component.css */ "./src/app/app.component.css")).default]
        })
    ], AppComponent);
    return AppComponent;
}());



/***/ }),

/***/ "./src/app/app.module.ts":
/*!*******************************!*\
  !*** ./src/app/app.module.ts ***!
  \*******************************/
/*! exports provided: AppModule */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "AppModule", function() { return AppModule; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_platform_browser__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/platform-browser */ "./node_modules/@angular/platform-browser/fesm5/platform-browser.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm5/core.js");
/* harmony import */ var _app_routing_module__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./app-routing.module */ "./src/app/app-routing.module.ts");
/* harmony import */ var _app_component__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./app.component */ "./src/app/app.component.ts");
/* harmony import */ var _heroes_heroes_component__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ./heroes/heroes.component */ "./src/app/heroes/heroes.component.ts");
/* harmony import */ var _angular_forms__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! @angular/forms */ "./node_modules/@angular/forms/fesm5/forms.js");
/* harmony import */ var _hero_detail_hero_detail_component__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! ./hero-detail/hero-detail.component */ "./src/app/hero-detail/hero-detail.component.ts");
/* harmony import */ var _pos_pos_component__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! ./pos/pos.component */ "./src/app/pos/pos.component.ts");
/* harmony import */ var _angular_common_http__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(/*! @angular/common/http */ "./node_modules/@angular/common/fesm5/http.js");











var AppModule = /** @class */ (function () {
    function AppModule() {
    }
    AppModule = tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_2__["NgModule"])({
            declarations: [
                _app_component__WEBPACK_IMPORTED_MODULE_4__["AppComponent"],
                _heroes_heroes_component__WEBPACK_IMPORTED_MODULE_5__["HeroesComponent"],
                _hero_detail_hero_detail_component__WEBPACK_IMPORTED_MODULE_7__["HeroDetailComponent"],
                _pos_pos_component__WEBPACK_IMPORTED_MODULE_8__["PosComponent"]
            ],
            imports: [
                _angular_platform_browser__WEBPACK_IMPORTED_MODULE_1__["BrowserModule"],
                _app_routing_module__WEBPACK_IMPORTED_MODULE_3__["AppRoutingModule"],
                _angular_forms__WEBPACK_IMPORTED_MODULE_6__["FormsModule"],
                _angular_forms__WEBPACK_IMPORTED_MODULE_6__["ReactiveFormsModule"],
                _angular_common_http__WEBPACK_IMPORTED_MODULE_9__["HttpClientModule"]
            ],
            providers: [],
            bootstrap: [_app_component__WEBPACK_IMPORTED_MODULE_4__["AppComponent"]]
        })
    ], AppModule);
    return AppModule;
}());



/***/ }),

/***/ "./src/app/hero-detail/hero-detail.component.css":
/*!*******************************************************!*\
  !*** ./src/app/hero-detail/hero-detail.component.css ***!
  \*******************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony default export */ __webpack_exports__["default"] = ("\n/*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbXSwibmFtZXMiOltdLCJtYXBwaW5ncyI6IiIsImZpbGUiOiJzcmMvYXBwL2hlcm8tZGV0YWlsL2hlcm8tZGV0YWlsLmNvbXBvbmVudC5jc3MifQ== */");

/***/ }),

/***/ "./src/app/hero-detail/hero-detail.component.ts":
/*!******************************************************!*\
  !*** ./src/app/hero-detail/hero-detail.component.ts ***!
  \******************************************************/
/*! exports provided: HeroDetailComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "HeroDetailComponent", function() { return HeroDetailComponent; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm5/core.js");


var HeroDetailComponent = /** @class */ (function () {
    function HeroDetailComponent() {
    }
    HeroDetailComponent.prototype.ngOnInit = function () {
    };
    tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Input"])()
    ], HeroDetailComponent.prototype, "hero", void 0);
    HeroDetailComponent = tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Component"])({
            selector: 'app-hero-detail',
            template: tslib__WEBPACK_IMPORTED_MODULE_0__["__importDefault"](__webpack_require__(/*! raw-loader!./hero-detail.component.html */ "./node_modules/raw-loader/dist/cjs.js!./src/app/hero-detail/hero-detail.component.html")).default,
            styles: [tslib__WEBPACK_IMPORTED_MODULE_0__["__importDefault"](__webpack_require__(/*! ./hero-detail.component.css */ "./src/app/hero-detail/hero-detail.component.css")).default]
        })
    ], HeroDetailComponent);
    return HeroDetailComponent;
}());



/***/ }),

/***/ "./src/app/hero.service.ts":
/*!*********************************!*\
  !*** ./src/app/hero.service.ts ***!
  \*********************************/
/*! exports provided: HeroService */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "HeroService", function() { return HeroService; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm5/core.js");
/* harmony import */ var _heroes_mock_heroes__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./heroes/mock-heroes */ "./src/app/heroes/mock-heroes.ts");
/* harmony import */ var rxjs__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! rxjs */ "./node_modules/rxjs/_esm5/index.js");




var HeroService = /** @class */ (function () {
    function HeroService() {
    }
    HeroService.prototype.getHeroes = function () {
        return Object(rxjs__WEBPACK_IMPORTED_MODULE_3__["of"])(_heroes_mock_heroes__WEBPACK_IMPORTED_MODULE_2__["HEROES"]);
    };
    HeroService = tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Injectable"])({
            providedIn: 'root'
        })
    ], HeroService);
    return HeroService;
}());



/***/ }),

/***/ "./src/app/heroes/heroes.component.css":
/*!*********************************************!*\
  !*** ./src/app/heroes/heroes.component.css ***!
  \*********************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony default export */ __webpack_exports__["default"] = ("/* HeroesComponent's private CSS styles */\n.heroes {\n    margin: 0 0 2em 0;\n    list-style-type: none;\n    padding: 0;\n    width: 15em;\n  }\n.heroes li {\n    cursor: pointer;\n    position: relative;\n    left: 0;\n    background-color: #EEE;\n    margin: .5em;\n    padding: .3em 0;\n    height: 1.6em;\n    border-radius: 4px;\n  }\n.heroes li:hover {\n    color: #607D8B;\n    background-color: #DDD;\n    left: .1em;\n  }\n.heroes li.selected {\n    background-color: #CFD8DC;\n    color: white;\n  }\n.heroes li.selected:hover {\n    background-color: #BBD8DC;\n    color: white;\n  }\n.heroes .badge {\n    display: inline-block;\n    font-size: small;\n    color: white;\n    padding: 0.8em 0.7em 0 0.7em;\n    background-color:#405061;\n    line-height: 1em;\n    position: relative;\n    left: -1px;\n    top: -4px;\n    height: 1.8em;\n    margin-right: .8em;\n    border-radius: 4px 0 0 4px;\n  }\n/*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbInNyYy9hcHAvaGVyb2VzL2hlcm9lcy5jb21wb25lbnQuY3NzIl0sIm5hbWVzIjpbXSwibWFwcGluZ3MiOiJBQUFBLHlDQUF5QztBQUN6QztJQUNJLGlCQUFpQjtJQUNqQixxQkFBcUI7SUFDckIsVUFBVTtJQUNWLFdBQVc7RUFDYjtBQUNBO0lBQ0UsZUFBZTtJQUNmLGtCQUFrQjtJQUNsQixPQUFPO0lBQ1Asc0JBQXNCO0lBQ3RCLFlBQVk7SUFDWixlQUFlO0lBQ2YsYUFBYTtJQUNiLGtCQUFrQjtFQUNwQjtBQUNBO0lBQ0UsY0FBYztJQUNkLHNCQUFzQjtJQUN0QixVQUFVO0VBQ1o7QUFDQTtJQUNFLHlCQUF5QjtJQUN6QixZQUFZO0VBQ2Q7QUFDQTtJQUNFLHlCQUF5QjtJQUN6QixZQUFZO0VBQ2Q7QUFDQTtJQUNFLHFCQUFxQjtJQUNyQixnQkFBZ0I7SUFDaEIsWUFBWTtJQUNaLDRCQUE0QjtJQUM1Qix3QkFBd0I7SUFDeEIsZ0JBQWdCO0lBQ2hCLGtCQUFrQjtJQUNsQixVQUFVO0lBQ1YsU0FBUztJQUNULGFBQWE7SUFDYixrQkFBa0I7SUFDbEIsMEJBQTBCO0VBQzVCIiwiZmlsZSI6InNyYy9hcHAvaGVyb2VzL2hlcm9lcy5jb21wb25lbnQuY3NzIiwic291cmNlc0NvbnRlbnQiOlsiLyogSGVyb2VzQ29tcG9uZW50J3MgcHJpdmF0ZSBDU1Mgc3R5bGVzICovXG4uaGVyb2VzIHtcbiAgICBtYXJnaW46IDAgMCAyZW0gMDtcbiAgICBsaXN0LXN0eWxlLXR5cGU6IG5vbmU7XG4gICAgcGFkZGluZzogMDtcbiAgICB3aWR0aDogMTVlbTtcbiAgfVxuICAuaGVyb2VzIGxpIHtcbiAgICBjdXJzb3I6IHBvaW50ZXI7XG4gICAgcG9zaXRpb246IHJlbGF0aXZlO1xuICAgIGxlZnQ6IDA7XG4gICAgYmFja2dyb3VuZC1jb2xvcjogI0VFRTtcbiAgICBtYXJnaW46IC41ZW07XG4gICAgcGFkZGluZzogLjNlbSAwO1xuICAgIGhlaWdodDogMS42ZW07XG4gICAgYm9yZGVyLXJhZGl1czogNHB4O1xuICB9XG4gIC5oZXJvZXMgbGk6aG92ZXIge1xuICAgIGNvbG9yOiAjNjA3RDhCO1xuICAgIGJhY2tncm91bmQtY29sb3I6ICNEREQ7XG4gICAgbGVmdDogLjFlbTtcbiAgfVxuICAuaGVyb2VzIGxpLnNlbGVjdGVkIHtcbiAgICBiYWNrZ3JvdW5kLWNvbG9yOiAjQ0ZEOERDO1xuICAgIGNvbG9yOiB3aGl0ZTtcbiAgfVxuICAuaGVyb2VzIGxpLnNlbGVjdGVkOmhvdmVyIHtcbiAgICBiYWNrZ3JvdW5kLWNvbG9yOiAjQkJEOERDO1xuICAgIGNvbG9yOiB3aGl0ZTtcbiAgfVxuICAuaGVyb2VzIC5iYWRnZSB7XG4gICAgZGlzcGxheTogaW5saW5lLWJsb2NrO1xuICAgIGZvbnQtc2l6ZTogc21hbGw7XG4gICAgY29sb3I6IHdoaXRlO1xuICAgIHBhZGRpbmc6IDAuOGVtIDAuN2VtIDAgMC43ZW07XG4gICAgYmFja2dyb3VuZC1jb2xvcjojNDA1MDYxO1xuICAgIGxpbmUtaGVpZ2h0OiAxZW07XG4gICAgcG9zaXRpb246IHJlbGF0aXZlO1xuICAgIGxlZnQ6IC0xcHg7XG4gICAgdG9wOiAtNHB4O1xuICAgIGhlaWdodDogMS44ZW07XG4gICAgbWFyZ2luLXJpZ2h0OiAuOGVtO1xuICAgIGJvcmRlci1yYWRpdXM6IDRweCAwIDAgNHB4O1xuICB9Il19 */");

/***/ }),

/***/ "./src/app/heroes/heroes.component.ts":
/*!********************************************!*\
  !*** ./src/app/heroes/heroes.component.ts ***!
  \********************************************/
/*! exports provided: HeroesComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "HeroesComponent", function() { return HeroesComponent; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm5/core.js");
/* harmony import */ var _hero_service__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../hero.service */ "./src/app/hero.service.ts");



var HeroesComponent = /** @class */ (function () {
    function HeroesComponent(heroService) {
        this.heroService = heroService;
    }
    HeroesComponent.prototype.getHeroes = function () {
        this.heroService.getHeroes()
            .subscribe(function (heroes) { this.heroes = heroes; }.bind(this));
    };
    HeroesComponent.prototype.onSelect = function (hero) {
        this.selectedHero = hero;
    };
    HeroesComponent.prototype.ngOnInit = function () {
        this.getHeroes();
    };
    HeroesComponent.ctorParameters = function () { return [
        { type: _hero_service__WEBPACK_IMPORTED_MODULE_2__["HeroService"] }
    ]; };
    HeroesComponent = tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Component"])({
            selector: 'app-heroes',
            template: tslib__WEBPACK_IMPORTED_MODULE_0__["__importDefault"](__webpack_require__(/*! raw-loader!./heroes.component.html */ "./node_modules/raw-loader/dist/cjs.js!./src/app/heroes/heroes.component.html")).default,
            styles: [tslib__WEBPACK_IMPORTED_MODULE_0__["__importDefault"](__webpack_require__(/*! ./heroes.component.css */ "./src/app/heroes/heroes.component.css")).default]
        })
    ], HeroesComponent);
    return HeroesComponent;
}());



/***/ }),

/***/ "./src/app/heroes/mock-heroes.ts":
/*!***************************************!*\
  !*** ./src/app/heroes/mock-heroes.ts ***!
  \***************************************/
/*! exports provided: HEROES */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "HEROES", function() { return HEROES; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");

var HEROES = [
    { id: 11, name: 'Dr Nice' },
    { id: 12, name: 'Narco' },
    { id: 13, name: 'Bombasto' },
    { id: 14, name: 'Celeritas' },
    { id: 15, name: 'Magneta' },
    { id: 16, name: 'RubberMan' },
    { id: 17, name: 'Dynama' },
    { id: 18, name: 'Dr IQ' },
    { id: 19, name: 'Magma' },
    { id: 20, name: 'Tornado' }
];


/***/ }),

/***/ "./src/app/pos/pos.component.css":
/*!***************************************!*\
  !*** ./src/app/pos/pos.component.css ***!
  \***************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony default export */ __webpack_exports__["default"] = (".headbar{\n    width: 100%; \n    height: 8vh;\n    background-color: #2d3436;\n    margin-bottom: 3vh;\n}\n\n.clock-time{\n    color: #fff;\n    font-size: 24px;\n    padding: 10px;\n    text-align: right;\n}\n\n.menu-button{\n    color: #fff;\n    font-size: 18px;\n    padding: 14px;\n}\n\n.product-list{\n    height: 75vh;\n    border: 1px solid #ddd;\n    background-color: #fafafa;\n    border-radius: 8px;\n}\n\n.product-query{\n    height: 30vh;\n    border: 1px solid #ddd;\n    background-color: #fafafa;\n    margin-bottom: .5vh;\n    border-radius: 8px;\n}\n\n.product-query .product-search-textfield{\n    font-size: 24px\n}\n\n.product-detail{\n    height: 44vh;\n    border: 1px solid #ddd;\n    background-color: #fafafa;\n    border-radius: 8px;\n}\n\n.table-pos thead tr{\n    background-color: #f2f2f2;\n}\n\n.selected-row-pos{\n    background-color: #E8E8F8;\n}\n\n.total-price-container .total-price-text{\n    margin-top: 20px;\n    color: #0984e3;\n    font-weight: 600;\n    letter-spacing: 2px;\n}\n\n.total-price-container .total-price-caption{\n    margin-top: 30px;\n}\n\n.table-detail-product tr{\n    padding: 0px;\n    margin: 0px;\n}\n\n.table-detail-product tr td{\n    padding: 10px;\n    margin: 0px;\n}\n/*# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbInNyYy9hcHAvcG9zL3Bvcy5jb21wb25lbnQuY3NzIl0sIm5hbWVzIjpbXSwibWFwcGluZ3MiOiJBQUFBO0lBQ0ksV0FBVztJQUNYLFdBQVc7SUFDWCx5QkFBeUI7SUFDekIsa0JBQWtCO0FBQ3RCOztBQUVBO0lBQ0ksV0FBVztJQUNYLGVBQWU7SUFDZixhQUFhO0lBQ2IsaUJBQWlCO0FBQ3JCOztBQUVBO0lBQ0ksV0FBVztJQUNYLGVBQWU7SUFDZixhQUFhO0FBQ2pCOztBQUNBO0lBQ0ksWUFBWTtJQUNaLHNCQUFzQjtJQUN0Qix5QkFBeUI7SUFDekIsa0JBQWtCO0FBQ3RCOztBQUVBO0lBQ0ksWUFBWTtJQUNaLHNCQUFzQjtJQUN0Qix5QkFBeUI7SUFDekIsbUJBQW1CO0lBQ25CLGtCQUFrQjtBQUN0Qjs7QUFFQTtJQUNJO0FBQ0o7O0FBRUE7SUFDSSxZQUFZO0lBQ1osc0JBQXNCO0lBQ3RCLHlCQUF5QjtJQUN6QixrQkFBa0I7QUFDdEI7O0FBRUE7SUFDSSx5QkFBeUI7QUFDN0I7O0FBRUE7SUFDSSx5QkFBeUI7QUFDN0I7O0FBRUE7SUFDSSxnQkFBZ0I7SUFDaEIsY0FBYztJQUNkLGdCQUFnQjtJQUNoQixtQkFBbUI7QUFDdkI7O0FBRUE7SUFDSSxnQkFBZ0I7QUFDcEI7O0FBRUE7SUFDSSxZQUFZO0lBQ1osV0FBVztBQUNmOztBQUNBO0lBQ0ksYUFBYTtJQUNiLFdBQVc7QUFDZiIsImZpbGUiOiJzcmMvYXBwL3Bvcy9wb3MuY29tcG9uZW50LmNzcyIsInNvdXJjZXNDb250ZW50IjpbIi5oZWFkYmFye1xuICAgIHdpZHRoOiAxMDAlOyBcbiAgICBoZWlnaHQ6IDh2aDtcbiAgICBiYWNrZ3JvdW5kLWNvbG9yOiAjMmQzNDM2O1xuICAgIG1hcmdpbi1ib3R0b206IDN2aDtcbn1cblxuLmNsb2NrLXRpbWV7XG4gICAgY29sb3I6ICNmZmY7XG4gICAgZm9udC1zaXplOiAyNHB4O1xuICAgIHBhZGRpbmc6IDEwcHg7XG4gICAgdGV4dC1hbGlnbjogcmlnaHQ7XG59XG5cbi5tZW51LWJ1dHRvbntcbiAgICBjb2xvcjogI2ZmZjtcbiAgICBmb250LXNpemU6IDE4cHg7XG4gICAgcGFkZGluZzogMTRweDtcbn1cbi5wcm9kdWN0LWxpc3R7XG4gICAgaGVpZ2h0OiA3NXZoO1xuICAgIGJvcmRlcjogMXB4IHNvbGlkICNkZGQ7XG4gICAgYmFja2dyb3VuZC1jb2xvcjogI2ZhZmFmYTtcbiAgICBib3JkZXItcmFkaXVzOiA4cHg7XG59XG5cbi5wcm9kdWN0LXF1ZXJ5e1xuICAgIGhlaWdodDogMzB2aDtcbiAgICBib3JkZXI6IDFweCBzb2xpZCAjZGRkO1xuICAgIGJhY2tncm91bmQtY29sb3I6ICNmYWZhZmE7XG4gICAgbWFyZ2luLWJvdHRvbTogLjV2aDtcbiAgICBib3JkZXItcmFkaXVzOiA4cHg7XG59XG5cbi5wcm9kdWN0LXF1ZXJ5IC5wcm9kdWN0LXNlYXJjaC10ZXh0ZmllbGR7XG4gICAgZm9udC1zaXplOiAyNHB4XG59XG5cbi5wcm9kdWN0LWRldGFpbHtcbiAgICBoZWlnaHQ6IDQ0dmg7XG4gICAgYm9yZGVyOiAxcHggc29saWQgI2RkZDtcbiAgICBiYWNrZ3JvdW5kLWNvbG9yOiAjZmFmYWZhO1xuICAgIGJvcmRlci1yYWRpdXM6IDhweDtcbn1cblxuLnRhYmxlLXBvcyB0aGVhZCB0cntcbiAgICBiYWNrZ3JvdW5kLWNvbG9yOiAjZjJmMmYyO1xufVxuXG4uc2VsZWN0ZWQtcm93LXBvc3tcbiAgICBiYWNrZ3JvdW5kLWNvbG9yOiAjRThFOEY4O1xufVxuXG4udG90YWwtcHJpY2UtY29udGFpbmVyIC50b3RhbC1wcmljZS10ZXh0e1xuICAgIG1hcmdpbi10b3A6IDIwcHg7XG4gICAgY29sb3I6ICMwOTg0ZTM7XG4gICAgZm9udC13ZWlnaHQ6IDYwMDtcbiAgICBsZXR0ZXItc3BhY2luZzogMnB4O1xufVxuXG4udG90YWwtcHJpY2UtY29udGFpbmVyIC50b3RhbC1wcmljZS1jYXB0aW9ue1xuICAgIG1hcmdpbi10b3A6IDMwcHg7XG59XG5cbi50YWJsZS1kZXRhaWwtcHJvZHVjdCB0cntcbiAgICBwYWRkaW5nOiAwcHg7XG4gICAgbWFyZ2luOiAwcHg7XG59XG4udGFibGUtZGV0YWlsLXByb2R1Y3QgdHIgdGR7XG4gICAgcGFkZGluZzogMTBweDtcbiAgICBtYXJnaW46IDBweDtcbn0iXX0= */");

/***/ }),

/***/ "./src/app/pos/pos.component.ts":
/*!**************************************!*\
  !*** ./src/app/pos/pos.component.ts ***!
  \**************************************/
/*! exports provided: PosComponent */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "PosComponent", function() { return PosComponent; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm5/core.js");
/* harmony import */ var _angular_common__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @angular/common */ "./node_modules/@angular/common/fesm5/common.js");
/* harmony import */ var _angular_forms__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! @angular/forms */ "./node_modules/@angular/forms/fesm5/forms.js");
/* harmony import */ var _product_service__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ../product.service */ "./src/app/product.service.ts");





var PosComponent = /** @class */ (function () {
    function PosComponent(datePipe, productService, formBuilder, _elementRef) {
        var _this = this;
        this.datePipe = datePipe;
        this.productService = productService;
        this.formBuilder = formBuilder;
        this._elementRef = _elementRef;
        this.barcode = new _angular_forms__WEBPACK_IMPORTED_MODULE_3__["FormControl"]('');
        this.name = new _angular_forms__WEBPACK_IMPORTED_MODULE_3__["FormControl"]('');
        this.test = new _angular_forms__WEBPACK_IMPORTED_MODULE_3__["FormControl"]('');
        this.payAmount = new _angular_forms__WEBPACK_IMPORTED_MODULE_3__["FormControl"]('');
        this.transactionId = new _angular_forms__WEBPACK_IMPORTED_MODULE_3__["FormControl"]('');
        this.products = [];
        this.totalPrice = 0;
        this.totalQty = 0;
        this.currentDate = this.datePipe.transform(this.getDate(), 'yyyy-MM-dd hh:mm:ss');
        setInterval(function () {
            _this.currentDate = _this.datePipe.transform(new Date(), 'yyyy-MM-dd hh:mm:ss');
        }, 1000);
        this.checkoutForm = this.formBuilder.group({
            name: '',
            address: ''
        });
    }
    PosComponent.prototype.onSubmit = function () {
        // $('.formTest').submit();
        this.test.setValue("Test");
        this._elementRef.nativeElement.querySelector('.formTest').submit();
    };
    PosComponent.prototype.getDate = function () {
        return new Date();
    };
    PosComponent.prototype.addProduct = function () {
        var _this = this;
        this.productService.addProduct(this.barcode.value).then(function (response) {
            if (response != null) {
                var productTemp = {
                    id: response['id'],
                    sku: response['sku'],
                    name: response['name'],
                    weight: response['weight'],
                    karat: response['karat'],
                    price: response['price'],
                    category: {
                        id: response['category_id'],
                        name: response['goods_category']['name'],
                    },
                    subCategory: {
                        id: response['sub_category_id'],
                        name: response['goods_sub_category']['name']
                    },
                    date_in: new Date()
                };
                _this.products.push(productTemp);
                _this.totalPrice += productTemp.price;
                _this.totalQty++;
                console.table(_this.products);
            }
            else {
                $(document).ready(function () {
                    $('#productNotFoundModal').modal('show');
                });
            }
        });
    };
    PosComponent.prototype.createTransaction = function () {
        var _this = this;
        for (var i = 0; i < this.products.length; i++) {
            if (this.products[i].id == null)
                return false;
        }
        this.productService.createTransaction({ 'price_total': this.totalPrice, 'user_id': 0, 'customer_name': 'dummy_customer2' }).then(function (response) {
            console.log(response);
            for (var i = 0; i < _this.products.length; i++) {
                _this.productService.createSales({ 'transaction_id': response['id'], 'goods_id': _this.products[i].id }).then(function (response) {
                    console.log(response);
                });
                _this.emptyTable();
            }
            _this.transactionId.setValue(response['id']);
            console.log(_this.transactionId);
            $('.formCheckout').submit();
        });
    };
    PosComponent.prototype.submitBarcode = function () {
        this.addProduct();
        this.prevSearchedBarcode = this.barcode.value;
        this.barcode.setValue("");
    };
    PosComponent.prototype.emptyTable = function () {
        this.products = [];
        this.totalPrice = 0;
        this.selectedProduct = null;
        this.selectedIndex = null;
        this.totalQty = 0;
    };
    PosComponent.prototype.selectItem = function (index) {
        this.selectedProduct = this.products[index];
        this.selectedIndex = index;
    };
    PosComponent.prototype.removeItem = function () {
        this.selectedProduct = null;
        this.products.splice(this.selectedIndex, 1);
        this.selectedIndex = null;
        this.updatePosProperty();
    };
    PosComponent.prototype.updatePosProperty = function () {
        this.totalQty = 0;
        this.totalPrice = 0;
        for (var i = 0; i < this.products.length; i++) {
            this.totalPrice += this.products[i].price;
        }
        this.totalQty = this.products.length;
    };
    PosComponent.prototype.ngOnInit = function () {
    };
    PosComponent.ctorParameters = function () { return [
        { type: _angular_common__WEBPACK_IMPORTED_MODULE_2__["DatePipe"] },
        { type: _product_service__WEBPACK_IMPORTED_MODULE_4__["ProductService"] },
        { type: _angular_forms__WEBPACK_IMPORTED_MODULE_3__["FormBuilder"] },
        { type: _angular_core__WEBPACK_IMPORTED_MODULE_1__["ElementRef"] }
    ]; };
    PosComponent = tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Component"])({
            selector: 'app-pos',
            providers: [_angular_common__WEBPACK_IMPORTED_MODULE_2__["DatePipe"]],
            template: tslib__WEBPACK_IMPORTED_MODULE_0__["__importDefault"](__webpack_require__(/*! raw-loader!./pos.component.html */ "./node_modules/raw-loader/dist/cjs.js!./src/app/pos/pos.component.html")).default,
            styles: [tslib__WEBPACK_IMPORTED_MODULE_0__["__importDefault"](__webpack_require__(/*! ./pos.component.css */ "./src/app/pos/pos.component.css")).default, tslib__WEBPACK_IMPORTED_MODULE_0__["__importDefault"](__webpack_require__(/*! ../../../node_modules/bootstrap/dist/css/bootstrap.min.css */ "./node_modules/bootstrap/dist/css/bootstrap.min.css")).default, tslib__WEBPACK_IMPORTED_MODULE_0__["__importDefault"](__webpack_require__(/*! ../../../node_modules/font-awesome/css/font-awesome.min.css */ "./node_modules/font-awesome/css/font-awesome.min.css")).default]
        })
    ], PosComponent);
    return PosComponent;
}());



/***/ }),

/***/ "./src/app/product.service.ts":
/*!************************************!*\
  !*** ./src/app/product.service.ts ***!
  \************************************/
/*! exports provided: ProductService */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "ProductService", function() { return ProductService; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm5/core.js");
/* harmony import */ var rxjs__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! rxjs */ "./node_modules/rxjs/_esm5/index.js");
/* harmony import */ var _angular_common_http__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! @angular/common/http */ "./node_modules/@angular/common/fesm5/http.js");




var ProductService = /** @class */ (function () {
    function ProductService(http) {
        this.http = http;
    }
    ProductService.prototype.test = function () {
        var apiURL = 'http://127.0.0.1/pos/product';
        return this.http.get(apiURL);
    };
    ProductService.prototype.addProduct = function (search_param) {
        var apiURL = 'http://127.0.0.1/pos/product/search?sku=' + search_param;
        console.log(apiURL);
        return this.http.get(apiURL).toPromise();
    };
    ProductService.prototype.createTransaction = function (data) {
        var apiURL = 'http://127.0.0.1/pos/create-transaction';
        return this.http.post(apiURL, data).toPromise();
    };
    ProductService.prototype.createSales = function (data) {
        var apiURL = 'http://127.0.0.1/pos/create-sales';
        return this.http.post(apiURL, data).toPromise();
    };
    ProductService.prototype.getProducts = function () {
        var product;
        // Create an Observable out of a promise
        var data = Object(rxjs__WEBPACK_IMPORTED_MODULE_2__["from"])(fetch('http://127.0.0.1/pos/product'));
        // Subscribe to begin listening for async result
        data.subscribe({
            next: function (response) { console.log(response.text()); },
            error: function (err) { console.error('Error: ' + err); },
            complete: function () { console.log('Completed'); }
        });
        return product;
    };
    ProductService.prototype.testMethod = function () {
        this.http.post('http://127.0.0.1/pos/test', { 'param': 'test-param' }, { responseType: 'text' })
            .subscribe(function (data) {
            //apparently following line is not needed.
            //this.router.navigateByUrl(this.url);
            window.location.href = 'http://127.0.0.1/pos/test';
        }, function (error) {
            console.log("Error");
            console.log(error);
        }, function () {
            console.log("POST is completed");
        });
    };
    ProductService.ctorParameters = function () { return [
        { type: _angular_common_http__WEBPACK_IMPORTED_MODULE_3__["HttpClient"] }
    ]; };
    ProductService = tslib__WEBPACK_IMPORTED_MODULE_0__["__decorate"]([
        Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["Injectable"])({
            providedIn: 'root'
        })
    ], ProductService);
    return ProductService;
}());



/***/ }),

/***/ "./src/environments/environment.ts":
/*!*****************************************!*\
  !*** ./src/environments/environment.ts ***!
  \*****************************************/
/*! exports provided: environment */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "environment", function() { return environment; });
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
// This file can be replaced during build by using the `fileReplacements` array.
// `ng build --prod` replaces `environment.ts` with `environment.prod.ts`.
// The list of file replacements can be found in `angular.json`.

var environment = {
    production: false
};
/*
 * For easier debugging in development mode, you can import the following file
 * to ignore zone related error stack frames such as `zone.run`, `zoneDelegate.invokeTask`.
 *
 * This import should be commented out in production mode because it will have a negative impact
 * on performance if an error is thrown.
 */
// import 'zone.js/dist/zone-error';  // Included with Angular CLI.


/***/ }),

/***/ "./src/main.ts":
/*!*********************!*\
  !*** ./src/main.ts ***!
  \*********************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var tslib__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tslib */ "./node_modules/tslib/tslib.es6.js");
/* harmony import */ var _angular_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @angular/core */ "./node_modules/@angular/core/fesm5/core.js");
/* harmony import */ var _angular_platform_browser_dynamic__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @angular/platform-browser-dynamic */ "./node_modules/@angular/platform-browser-dynamic/fesm5/platform-browser-dynamic.js");
/* harmony import */ var _app_app_module__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./app/app.module */ "./src/app/app.module.ts");
/* harmony import */ var _environments_environment__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./environments/environment */ "./src/environments/environment.ts");





if (_environments_environment__WEBPACK_IMPORTED_MODULE_4__["environment"].production) {
    Object(_angular_core__WEBPACK_IMPORTED_MODULE_1__["enableProdMode"])();
}
Object(_angular_platform_browser_dynamic__WEBPACK_IMPORTED_MODULE_2__["platformBrowserDynamic"])().bootstrapModule(_app_app_module__WEBPACK_IMPORTED_MODULE_3__["AppModule"])
    .catch(function (err) { return console.error(err); });


/***/ }),

/***/ 0:
/*!***************************!*\
  !*** multi ./src/main.ts ***!
  \***************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! /home/gilangprambudi/dev/Angular/kigspos/src/main.ts */"./src/main.ts");


/***/ })

},[[0,"runtime","vendor"]]]);
//# sourceMappingURL=main.js.map
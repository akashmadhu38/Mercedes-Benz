webpackJsonp(["metanav/publish/target"],{UOkg:function(c,b,a){Object.defineProperty(b,"__esModule",{value:!0});b.openNationalConsentOverlay=function(a){a={url:a.getAttribute("data-link")};$(document).trigger(g.NN_DOM_EVENTS.modalDialogOpen,a)};b.toggleElVisibilityByLoginState=function(a){window.sessionStorage.getItem(h.CIAM_SESSION_STORAGE_KEYS.loginstate)?(0,d.addClass)(a,e.NN_CLASSES.isHidden):(0,d.removeClass)(a,e.NN_CLASSES.isHidden)};var e=a("K6O9"),g=a("+ly4"),d=a("bYY5"),h=a("fDjV")},aRgD:function(c,
b,a){Object.defineProperty(b,"__esModule",{value:!0});b.SELECTORS=b.CLASSES=b.EVENTS_NAMESPACE=b.MODULE_NAME=void 0;c=a("akNE");a=b.MODULE_NAME="metanav";b.EVENTS_NAMESPACE="."+a;a=b.CLASSES={registrationBtn:a+"__registrationButton"};b.SELECTORS=Object.freeze((0,c.createSelectorsFromClasses)(a))},e41e534921:function(c,b,a){c.exports=a("pI7A")},pI7A:function(c,b,a){c=a("aRgD");var e=function(a){if(a&&a.__esModule)return a;var b={};if(null!=a)for(var c in a)Object.prototype.hasOwnProperty.call(a,c)&&
(b[c]=a[c]);b.default=a;return b}(c),g=a("+ly4"),d=a("UOkg");window.nn[c.MODULE_NAME]=function(){var a=void 0,b=void 0,c=void 0,f=void 0,l=function(){(0,d.openNationalConsentOverlay)(f)},k=function(){(0,d.toggleElVisibilityByLoginState)(f)};return{init:function(d,h){a=$.extend(!0,{},e,h);b=a.SELECTORS;c=d[0];if(f=c.querySelector(b.registrationBtn))f.addEventListener("click",l),document.addEventListener(g.NN_DOM_EVENTS.profileUpdateLoggedIn,k),k()}}}}},["e41e534921"]);
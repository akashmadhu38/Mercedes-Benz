webpackJsonp(["scrollhint/publish/target"],{"196ac32925":function(d,a,b){d.exports=b("bOHV")},"2NaP":function(d,a,b){Object.defineProperty(a,"__esModule",{value:!0});a.VALUES=a.SELECTORS=a.CLASSES=a.EVENTS_NAMESPACE=void 0;d=b("akNE");a.EVENTS_NAMESPACE=".scrollHint";b=a.CLASSES={base:"scrollHint__base",arrowIcon:"scrollHint__arrowIcon",scrollText:"scrollHint__text",isPulsing:"scrollHint__arrowIcon--pulse"};a.SELECTORS=(0,d.createSelectorsFromClasses)(b);a.VALUES={scrollLimit:50,firstLoad:"scrollHintWasShown",
isShown:1}},bOHV:function(d,a,b){var h=b("BSTm"),k=(d=b("e3M3"))&&d.__esModule?d:{default:d},l=b("BcMv"),f=b("K6O9"),m=function(c){if(c&&c.__esModule)return c;var a={};if(null!=c)for(var b in c)Object.prototype.hasOwnProperty.call(c,b)&&(a[b]=c[b]);a.default=c;return a}(b("2NaP"));window.nn.scrollhint=function(){var a={},b=void 0,d=void 0,g=function(){$(document).scrollTop()>d.scrollLimit&&(a.el.fadeOut(l.NN_TIME.normal),a.el.addClass(f.NN_CLASSES.isHidden))},n=function(){var c=d.firstLoad;var e=
d.isShown;null===window.localStorage.getItem(c)?(window.localStorage.setItem(c,e),c=!0):c=!1;c&&(a.el.removeClass(f.NN_CLASSES.isHidden),$(document).on("scroll"+b,g),g())};return{init:function(c,e){e=$.extend(!0,{},m,e);b=e.EVENTS_NAMESPACE;d=e.VALUES;a.el=c;k.default.start(this,{onInitInDesktopContext:n})},destroy:function(){$(document).off(b);(0,h.nullifyPropertiesOnObject)(a)}}}}},["196ac32925"]);
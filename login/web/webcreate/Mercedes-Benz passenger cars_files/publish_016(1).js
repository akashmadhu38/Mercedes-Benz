webpackJsonp(["nextactivities/publish/target"],{"+A/r":function(d,c,b){Object.defineProperty(c,"__esModule",{value:!0});c.VALUES=c.SELECTORS=c.CLASSES=c.MODULE_NAME=void 0;d=b("akNE");c.MODULE_NAME="nextactivities";b=c.CLASSES={nbaList:"nba__list",nbaItem:"nbaElement__base",nbaItemTitle:"nbaElement__hl",nbaItemTitleAbsolute:"nbaElement__hl--absolute",nbaItemTitleNoImage:"nbaElement__hl--no-image",nbaImages:"nbaElement__imgContainer",nbaNoPadding:"nbaElement__imgContainer--no-padding",has3Cols:"nba__list--3cols",
hasNoImages:"nba__list--no-image",hasNoImages3Lines:"nba__list--no-image--3lines"};c.SELECTORS=(0,d.createSelectorsFromClasses)(b);c.VALUES={wideImageWidth:70,twoLinesTitleHeight:50,oneLineTitleHeight:24}},"6865cc3532":function(d,c,b){d.exports=b("JUx2")},JUx2:function(d,c,b){function g(a){return a&&a.__esModule?a:{default:a}}var h=b("BSTm");d=b("e3M3");var a=g(d),l=b("BcMv");d=b("2b3J");var m=g(d),p=b("+ly4"),f=b("+A/r"),k=function(a){if(a&&a.__esModule)return a;var e={};if(null!=a)for(var b in a)Object.prototype.hasOwnProperty.call(a,
b)&&(e[b]=a[b]);e.default=a;return e}(f);d=b("pWPO");var n=g(d);b=b("WWcy");var q=g(b);window.nn[f.MODULE_NAME]=function(){var b={},e={},c=function(){e.currentContext&&e.currentContext.destroy()},u=function(a){e.currentContext.init(b.el,e.config);a===l.NN_VALUES_MQ_LIMITS.mobileMax&&(e.currentContext.updateImgWidth(),e.currentContext.updateHeight())},d=function(){e.currentContext=(0,q.default)()},v=function(){e.currentContext=(0,n.default)()},g=function(){d()},w=function(){v()},x=function(a){a===
l.NN_VALUES_MQ_LIMITS.desktopMax?e.currentContext.setIsOnLastBreakpoint(!0):e.currentContext.setIsOnLastBreakpoint(!1);e.currentContext.mqChanged()},y=function(a){a===l.NN_VALUES_MQ_LIMITS.mobileMax?(e.currentContext.updateImgWidth(),e.currentContext.updateHeight()):e.currentContext.reset()};return{init:function(h,l){b.el=h;e.config=$.extend(!0,{},k,l);a.default.start(this,{onInitInMobileContext:d,onInitInDesktopContext:v,onAfterInitContext:u,onChangedToMobileContext:g,onChangedOnMobileContext:y,
onChangedToDesktopContext:w,onChangedOnDesktopContext:x,onBeforeChangedContext:c,onAfterChangedContext:u});m.default.pub(p.NN_EVENTS_MODULE_LIFECYCLE.afterInit,{$el:h,moduleName:f.MODULE_NAME})},destroy:function(){a.default.stop(this);e.currentContext&&e.currentContext.destroy();(0,h.nullifyPropertiesOnObject)(b)}}}},WWcy:function(d,c,b){Object.defineProperty(c,"__esModule",{value:!0});c.default=function(){var b={},a=void 0,c=void 0,d=void 0,p=function(){b.nbaItem.height("");b.imgContainer.width("");
b.imgContainer.removeClass(a.nbaNoPadding);b.nbaItemTitles.removeClass(a.nbaItemTitleAbsolute)};return{init:function(f,m){a=m.CLASSES;c=m.SELECTORS;d=m.VALUES;b.el=f;b.nbaItem=b.el.find(c.nbaItem);b.nbaItemTitles=b.el.find(c.nbaItemTitle);b.imgContainer=b.el.find(c.nbaImages)},updateImgWidth:function(){b.imgContainer.each(function(){$(this).find(c.responsiveImg).width()>d.wideImageWidth&&$(this).addClass(a.nbaNoPadding)})},updateHeight:function(){var c=void 0;c=Math.max.apply(null,b.nbaItem.map(function(){return $(this).height()}).get());
b.nbaItem.height(c);b.nbaItemTitles.addClass(a.nbaItemTitleAbsolute)},reset:p,destroy:function(){p();(0,g.nullifyPropertiesOnObject)(b)}}};var g=b("BSTm")},pWPO:function(d,c,b){Object.defineProperty(c,"__esModule",{value:!0});c.default=function(){var a={},b=!1,c=void 0,d=void 0,f=void 0,k=function(){a.nbaList.removeClass(c.hasNoImages3Lines);a.nbaItemTitles.removeClass(c.nbaItemTitleAbsolute);a.nbaItem.height("");a.imgContainer.width("");a.imgContainer.removeClass(c.nbaNoPadding)},n=function(a,b){var d=
a.find(f.nbaItemTitleNoImage);a.hasClass(c.hasNoImages)&&r(b,3)&&a.addClass(c.hasNoImages3Lines);d.length&&d.length<a.length&&d.addClass(c.nbaItemTitleAbsolute);a.height(Math.max.apply(null,a.map(function(){return $(this).height()}).get()));d.length&&!r(b,2)||b.addClass(c.nbaItemTitleAbsolute)},q=function(){k();6===a.nbaItem.length?(n(a.nbaItem.slice(0,3),a.nbaItemTitles.slice(0,3)),n(a.nbaItem.slice(3),a.nbaItemTitles.slice(3))):n(a.nbaItem,a.nbaItemTitles)},r=function(a,b){var c=!1,e=3===b?d.twoLinesTitleHeight:
d.oneLineTitleHeight;a.each(function(){$(this).height()>e&&(c=!0)});return c},e=function(){a.imgContainer.each(function(){var e=$(this).find(h.NN_SELECTORS.responsiveImg);e.length||(e=$(this).find(h.NN_SELECTORS.svgImg));b&&a.el.find(f.has3Cols).length?$(this).width(e.width()):e.width()>d.wideImageWidth&&$(this).addClass(c.nbaNoPadding)})},t=function(){k();a.nbaItem.each(function(){var a=$(this).find(f.nbaItemTitle).height();$(this).find(f.nbaImages).toggle(a<=d.twoLinesTitleHeight)})};return{init:function(b,
g){a.el=b;c=g.CLASSES;f=g.SELECTORS;d=g.VALUES;a.nbaList=a.el.find(f.nbaList);a.nbaItem=a.el.find(f.nbaItem);a.nbaItemTitles=a.el.find(f.nbaItemTitle);a.imgContainer=a.el.find(f.nbaImages);e();t();q()},setIsOnLastBreakpoint:function(a){b=a},mqChanged:function(){t();q()},reset:k,destroy:function(){k();a.imgContainer.show();(0,g.nullifyPropertiesOnObject)(a)}}};var g=b("BSTm"),h=b("bdJJ")}},["6865cc3532"]);
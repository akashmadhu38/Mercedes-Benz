webpackJsonp(["stickycontainer/menunav/publish/target"],{"3TzJ":function(d,g,a){function h(b){return b&&b.__esModule?b:{default:b}}Object.defineProperty(g,"__esModule",{value:!0});g.default=function(){var b={},c={},a=function(c){b.el.css("animaton-delay",c).css("transition-delay",c)},d=function(q){var d=1<arguments.length&&void 0!==arguments[1]?arguments[1]:!0,f=2<arguments.length&&void 0!==arguments[2]?arguments[2]:!1,t=b.header.outerHeight();c.pauseHeaderSliding?c.pauseHeaderSliding=!1:b.header.is(":hover")||
(a(f?u.NN_VALUES.autoHideDelayMS+"ms":"0s"),b.el.toggleClass(m.NN_CLASSES.isAnimated,d).css("transform","translateY("+-t+"px)"),$(document).trigger(e.NN_DOM_EVENTS.stickyHeadersPositionChanged,-t),window.clearTimeout(c.moveHeaderBackTimeout),c.moveHeaderBackTimeout=setTimeout(function(){$(document).scrollTop()<t&&r()},2*D.VALUES.scrollTimeoutMs))},h=function(){b.header.removeClass(m.NN_CLASSES.isAnimated).removeAttr("style")},g=function(){window.clearTimeout(c.autoHideHeaderTimeout);c.pauseHeaderSliding?
c.pauseHeaderSliding=!1:(c.positionScrollTop=$(window).scrollTop(),c.positionScrollTop<c.lastScrollTop-u.NN_VALUES.quickScrolledNumberOfLines?(b.el.addClass(m.NN_CLASSES.isAnimated).css("transform","translateY(0)"),$(document).trigger(e.NN_DOM_EVENTS.stickyHeadersPositionChanged,0)):c.positionScrollTop===c.lastScrollTop&&b.el.css("transform","translateY(0)"),c.lastScrollTop=c.positionScrollTop)},v=function(){if(!document.querySelector(f.NN_SELECTORS_STICKY.headerBase).querySelector(E.NN_PLUGIN_COMPONENT_INTEGRATION_TYPES.iframe)){b.metaNavExtension.addClass(m.NN_CLASSES.metaNavExtensionHidden);
window.clearTimeout(c.autoHideHeaderTimeout);$(document).trigger(e.NN_DOM_EVENTS.stickyHeadersBottomOutViewport);var a=b.header.height();b.headerWrapper.find(f.NN_SELECTORS_STICKY.headerBase).length?(b.headerWrapper.height(a),b.header.addClass(m.NN_CLASSES.isInvisible),b.header.appendTo(b.stickyContainerElement),d(null,!1),b.header.removeClass(m.NN_CLASSES.isInvisible)):d()}},F=function(){var c=$(f.NN_SELECTORS.uspboxheaderBase).height()||0;(b.header.offset().top<=c||$(window).scrollTop()<=c)&&r()},
r=function(){var c=$(f.NN_SELECTORS.uspboxheaderBase).height()||0;b.el.find(f.NN_SELECTORS_STICKY.headerBase).length&&(b.header.offset().top<=c||$(window).scrollTop()<=c||"matrix(1, 0, 0, 1, 0, 0)"!==b.el.css("transform"))&&($(document).trigger(e.NN_DOM_EVENTS.stickyHeadersBottomInViewport),$(f.NN_SELECTORS.noScrollWrapper).length||(b.headerWrapper.height(""),b.header.appendTo(b.headerWrapper),h()))},p=function(){if(!b.headerWrapper.find(f.NN_SELECTORS_STICKY.headerBase).length){c.pauseHeaderSliding=
!0;var a=b.header.height();b.headerWrapper.height(a)}},G=function(){c.pauseHeaderSliding=!0},H=function(){c.currentContext.destroy();r()},w=function(){c.currentContext.init(b.el,c.config)},x=function(){c.currentContext=(0,I.default)()},y=function(){c.currentContext=(0,J.default)()},z=function(){l.default.start(b.headerWrapper,{onScrollingDown:{elementBottomOutViewport:v},onScrollingUp:{elementBottomInViewport:r,elementBottomOutViewport:g},stopWatchingWhenElementAlreadyInViewport:!1,stopWatchingWhenElementAboveViewport:!1},
!0).done(function(b){c.keys=b})},A=function(){l.default.stop(c.keys);c.pauseHeaderSliding=!1};return{init:function(a){b.el=a;c.self=this;b.container=$(f.NN_SELECTORS_STICKY.subnav);b.stickyContainer=$(f.NN_SELECTORS_STICKY.stickyContainer);b.metanavUser=$(f.NN_SELECTORS.metaNavUser);b.metaNavExtension=b.metanavUser.find(f.NN_SELECTORS.metaNavExtension);b.header=$(f.NN_SELECTORS_STICKY.headerBase);b.header.wrap('\x3cdiv class\x3d"'+m.NN_CLASSES_STICKY.headerPlaceholder+'"\x3e');b.headerWrapper=$(f.NN_SELECTORS_STICKY.headerPlaceholder);
b.stickyContainerElement=$("\x3cdiv\x3e").addClass(m.NN_CLASSES_STICKY.stickyContainerElement);b.el.append(b.stickyContainerElement);c.lastScrollTop=window.pageYOffset;c.pauseHeaderSliding=!1;c.lastScrollTop>$(f.NN_SELECTORS.uspboxBase).height()&&(v(),g(),d(null,!0,!0));q.default.start(c.self,{onInitInMobileContext:x,onInitInDesktopContext:y,onAfterInitContext:w,onChangedToMobileContext:x,onChangedToDesktopContext:y,onBeforeChangedContext:H,onAfterChangedContext:w});b.appContainer=$(f.NN_SELECTORS.pluginComponentBase);
a=b.appContainer.attr(B.NN_ATTRIBUTES.nnHasStickyHeader);if("overlay"===b.appContainer.attr(B.NN_ATTRIBUTES.nnPluginComponentViewType)||void 0===a||"true"===a)(0,K.runAfterLoad)(z),b.el.on(e.NN_DOM_EVENTS.stickyContainerPauseHeaderSliding,G),b.el.on(e.NN_DOM_EVENTS.stickyContainerHideMainNavigation,d),b.el.on(e.NN_DOM_EVENTS.stickyContainerPauseScrollWatcherMainNav,A),b.el.on(e.NN_DOM_EVENTS.stickyContainerResumeScrollWatcherMainNav,z),b.el.on(e.NN_DOM_EVENTS.stickyContainerPutBackSubNav,F),$(document).on(e.NN_DOM_EVENTS.stickyContainerMoveMainNav,
g),k.default.sub(e.NN_DOM_EVENTS.hideHeaderAfterScroll,d),k.default.sub(C.NN_XCITING_EVENTS.revealScene,d),k.default.sub(e.NN_DOM_EVENTS.menuNavFlyoutOpened,p),k.default.sub(e.NN_DOM_EVENTS.menuNavFlyoutClosed,p),k.default.sub(e.NN_DOM_EVENTS.mainNavFlyoutsHeightChanged,p)},destroy:function(){c.currentContext.destroy();b.stickyContainerElement.remove();window.clearTimeout(c.autoHideHeaderTimeout);h();q.default.stop(c.self);b.el.off(e.NN_DOM_EVENTS);k.default.unsub(e.NN_DOM_EVENTS.hideHeaderAfterScroll,
d);k.default.unsub(C.NN_XCITING_EVENTS.revealScene,d);k.default.unsub(e.NN_DOM_EVENTS.menuNavFlyoutOpened,p);k.default.unsub(e.NN_DOM_EVENTS.menuNavFlyoutClosed,p);k.default.unsub(e.NN_DOM_EVENTS.mainNavFlyoutsHeightChanged,p);A();(0,n.nullifyPropertiesOnObject)(b)}}};var n=a("BSTm");d=a("g0BF");var l=h(d);d=a("e3M3");var q=h(d);d=a("2b3J");var k=h(d),u=a("BcMv"),f=a("bdJJ"),B=a("sjBm"),m=a("K6O9"),e=a("+ly4"),C=a("mPW0"),D=a("wqrV"),E=a("pJUd"),K=a("viDy");d=a("xtDM");var J=h(d);a=a("ef4R");var I=
h(a)},a47366ab81:function(d,g,a){d.exports=a("3TzJ")},ef4R:function(d,g,a){Object.defineProperty(g,"__esModule",{value:!0});g.default=function(){var a={},d=function(d){a.el.css("top",(1<arguments.length&&void 0!==arguments[1]?arguments[1]:1)?$(h.NN_SELECTORS.noScrollWrapper).scrollTop():"")};return{init:function(q){a.el=q;a.stickyContainer=$(h.NN_SELECTORS_STICKY.stickyContainer);a.stickyContainer.on(l.NN_DOM_EVENTS.stickyContainerAbsolute,d)},destroy:function(){a.el.css({position:"",top:""});a.stickyContainer.off(l.NN_DOM_EVENTS);
(0,n.nullifyPropertiesOnObject)(a)}}};var h=a("bdJJ"),n=a("BSTm"),l=a("+ly4")},xtDM:function(d,g,a){Object.defineProperty(g,"__esModule",{value:!0});g.default=function(){var a={},d,g,f=function(){d=a.header.outerHeight();a.menunavBase.outerHeight();g=$(window).scrollTop();g>d?(a.el.trigger(l.NN_DOM_EVENTS.stickyContainerPauseHeaderSliding),a.headerWrapper.outerHeight(d)):a.headerWrapper.outerHeight("")};return{init:function(d){a.el=d;a.header=$(n.NN_SELECTORS_STICKY.headerBase);a.menunavBase=a.header.find(n.NN_SELECTORS_STICKY.menunavDesktopContainer);
a.headerWrapper=$(n.NN_SELECTORS_STICKY.headerPlaceholder);a.menunavBase.on(l.NN_DOM_EVENTS.mainNavFlyoutsHeightChanged,f)},destroy:function(){a.menunavBase.off(l.NN_DOM_EVENTS.mainNavFlyoutsHeightChanged);a.headerWrapper.outerHeight("");(0,h.nullifyPropertiesOnObject)(a)}}};var h=a("BSTm"),n=a("bdJJ"),l=a("+ly4")}},["a47366ab81"]);
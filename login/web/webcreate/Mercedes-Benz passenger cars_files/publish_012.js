webpackJsonp(["mainnav/menunav/publish/target"],{"432250ead6":function(d,k,a){d.exports=a("Oiwr")},I8rN:function(d,k,a){function l(a,e,g){e in a?Object.defineProperty(a,e,{value:g,enumerable:!0,configurable:!0,writable:!0}):a[e]=g;return a}Object.defineProperty(k,"__esModule",{value:!0});k.default=function(){var a=!1,d=!1,k=null,H=!1,K=!1,L=!1,V=void 0,B=void 0,v=void 0,c={},b=void 0,f=void 0,h=void 0,w=void 0,q=void 0,E=void 0,M=function(){c.flyoutContent.length&&c.flyoutContent.append(c.flyoutContentItems)},
C=function(e){c.headerBase.parent().css("transition","");c.flyoutMenu.height(V.height+b.flyoutPadding);$(m.NN_SELECTORS.platformAppContainer).addClass(g.NN_CLASSES.platformAppContainer+"--CINOWF-4153-hfOpenDkHeaderFlyout");c.headerBase.addClass("CINOWF-4153-fix");v.debounce(function(){c.flyoutMenu.addClass(f.baseIsExpanded).trigger(u.NN_DOM_EVENTS.mainNavFlyoutsHeightChanged);c.flyoutContent.addClass(f.flyoutContentExpanded);e.off(q).addClass(f.flyoutContentItemExpanded);a=!0;d=!1;e=null;null!==k&&
N(k);k=null;n.default.pub(u.NN_DOM_EVENTS.menuNavFlyoutOpened)});c.flyoutContent.addClass(g.NN_CLASSES.isActive);e.addClass(g.NN_CLASSES.isActive);d=!0;c.el.removeClass(g.NN_CLASSES.hasFlyoutClosed)},F=function(){c.menuLinks.removeClass(f.menuLinkActive)},O=function(b){c.flyoutMenu.removeClass(g.NN_CLASSES.isActive).addClass(g.NN_CLASSES.isActivelyInvisible).removeAttr("style").removeClass(f.baseIsExpanded);b&&b.off(q);L&&c.flyoutMenu.trigger(E.flyoutHasClosed);a=!1},P=function(b){var a=1<arguments.length&&
void 0!==arguments[1]?arguments[1]:null,e=2<arguments.length&&void 0!==arguments[2]?arguments[2]:null;c.headerBase.parent().css("transition","none");$(m.NN_SELECTORS.platformAppContainer).removeClass(g.NN_CLASSES.platformAppContainer+"--CINOWF-4153-hfOpenDkHeaderFlyout");v.debounce(function(){b.addClass(g.NN_CLASSES.isHidden);c.flyoutMenu.trigger(u.NN_DOM_EVENTS.mainNavFlyoutsHeightChanged);"function"===typeof e?(a.removeClass(g.NN_CLASSES.isHidden).css("display"),e(a)):(O(b),d=!1);a=b=null;c.headerBase.parent(g.NN_CLASSES_STICKY.headerPlaceholder).css("transition",
"")});a||c.flyoutContent.removeClass(g.NN_CLASSES.isActive).removeClass(f.flyoutContentExpanded);b.removeClass(g.NN_CLASSES.isActive).removeClass(f.flyoutContentItemExpanded);d=!0;c.el.addClass(g.NN_CLASSES.hasFlyoutClosed)},W=function(){n.default.pub(u.NN_DOM_EVENTS.menuNavFlyoutClosed)},I=function(){!d&&c.openedFlyoutContent&&(P(c.openedFlyoutContent),c.flyoutMenu.height(0),F(),B=null,c.el.one("transitionend",W))},N=function(b){var e=$(b.target).parents(h.menuLink),z=e.attr(w.flyoutIndex),p=void 0;
d?k=b:z!==B&&e.hasClass(f.menuLink)?(F(),e.addClass(f.menuLinkActive),z===B&&a||(B=z,p=c.flyoutContent.find("["+w.flyoutIndex+"\x3d'"+z+"']")),a?(V=(0,D.getHiddenElementsDimensions)(p,!0),P(c.openedFlyoutContent,p,C)):((0,D.renameElementAttribute)(p[0],r.NN_ATTRIBUTES.lazyloadSrcset,r.NN_ATTRIBUTES.srcset),c.headerBase.append(c.flyoutMenu),c.flyoutMenu.removeClass(g.NN_CLASSES.isActivelyInvisible).addClass(g.NN_CLASSES.isActive),V=(0,D.getHiddenElementsDimensions)(p,!0),p.removeClass(g.NN_CLASSES.isHidden),
C(p)),c.openedFlyoutContent=p):I()},R=function(b){window.open($(b.target).data("link"),"_top")},x=function(){c.vehicle.classList.remove(f.flyoutLinkActive);c.vehicle.classList.add(f.vehicleHiddenArrow);c.vehicleSwitch.classList.add(f.vehicleSwitchHidden);H=!1},S=function(b){b.currentTarget.href.split("#")[0]===window.location.href.split("#")[0]?(L=!0,b.preventDefault(),c.flyoutMenu.on(E.flyoutHasClosed,function(){n.default.pub(u.NN_SCROLL_EVENTS.modelOverviewDeepLink,b.currentTarget.href)}),I()):
L=!1},Q=function(b){b.stopPropagation();H?x():(T.default.setVehicleSwitchContent(),c.vehicleSwitch.classList.remove(f.vehicleSwitchHidden),c.vehicle.classList.add(f.flyoutLinkActive),c.vehicle.classList.remove(f.vehicleHiddenArrow),H=!0)},U=function(b){b.stopPropagation()},X=function(){n.default.pub(t.NN_TRACKING_DATA_EVENTS.addAdditionalTrackingAttributes,{$el:c.el,additionalTracking:c.flyoutLinksItems.toArray().map(function(b,a){var e;return{$elements:$(b),trackingData:(e={},l(e,w.mainnaviTitle,
(0,J.formatToStringTracking)(c.flyoutLinksItems.eq(a).closest(h.flyoutContentItem).find(h.flyoutMainHeadline).text())),l(e,w.mainnaviLinkType,w.textLink),e)}})})};return{init:function(a,d){c.el=a;v=(0,A.Debouncer)({debounceMs:e.NN_TIME.normal});b=d.VALUES;f=d.CLASSES;h=d.SELECTORS;w=d.ATTRIBUTES;q=d.EVENTS_NAMESPACE;E=d.EVENTS;c.desktopContainer=c.el.find(h.desktopContainer);c.flyoutMenu=c.el.parent().find(h.flyoutDesktop);c.flyoutCloseBtn=c.flyoutMenu.find(h.closeBtn);c.flyoutContent=c.flyoutMenu.find(h.flyoutContent);
c.flyoutContentItems=c.desktopContainer.find(h.flyoutContentItem);c.flyoutLinksItems=c.desktopContainer.find(h.flyoutLinksItem);c.flyoutTeaserItems=c.desktopContainer.find(h.flyoutTeaserItem);c.menuLinks=c.el.find(h.menuLink);c.headerBase=$(m.NN_SELECTORS_STICKY.headerBase);c.vehicle=document.querySelector(h.vehicle);c.vehicleLink=document.querySelector(h.vehicleLink);c.vehicleSwitch=document.querySelector(h.vehicleSwitch);c.flyoutMenu.addClass(g.NN_CLASSES.isActivelyInvisible);a=window.location.href.split("#")[0];
d=!1;var z=0;a:for(;z<c.flyoutContentItems.length;z++){var p=c.flyoutContentItems.eq(z);var J=p.find(h.flyoutLinksItem),k=p.find(h.flyoutTeaserItem);for(p=0;p<J.length;p++)if(a===J[p].href.split("#")[0]){d=!0;break a}for(p=0;p<k.length;p++)if(a===k[p].href.split("#")[0]){d=!0;break a}}d&&(c.menuLinks.eq(z).addClass(g.NN_CLASSES.isCurrentPage),c.el.addClass(g.NN_CLASSES.hasFlyoutClosed));M();K=c.el.hasClass(f.navIsHidden);K||(c.el.on("click"+q,N),c.flyoutCloseBtn.on("click"+q,I),c.el.find(h.categoryTitle).on("click"+
q,R));c.vehicleSwitch&&(c.vehicleLink.addEventListener("click",Q),c.vehicleSwitch.addEventListener("click",U),$(document).on(u.NN_DOM_EVENTS.stickyHeadersPositionChanged,x),document.addEventListener("click",x));c.flyoutLinksItems.on("click"+q,S);c.flyoutTeaserItems.on("click"+q,S);X();c.vehicleSwitch&&T.default.initVehicleSwitch()},destroy:function(){v.kill();c.el.off(q);c.flyoutCloseBtn.off(q);c.vehicleSwitch&&(c.vehicleLink.removeEventListener("click",Q),c.vehicleSwitch.removeEventListener("click",
U),$(document).off(u.NN_DOM_EVENTS.stickyHeadersPositionChanged,x),document.removeEventListener("click",x));c.flyoutLinksItems.off(q);c.flyoutTeaserItems.off(q);O();F();c.el.append(c.flyoutMenu);c.flyoutContent.removeClass(g.NN_CLASSES.isActive).removeClass(f.flyoutContentExpanded);c.flyoutContent.find("["+w.flyoutIndex+"]").addClass(g.NN_CLASSES.isHidden).removeClass(f.flyoutContentItemExpanded);c.flyoutMenu.removeClass(g.NN_CLASSES.isActivelyInvisible);(0,y.nullifyPropertiesOnObject)(c)},updateFlyoutHTML:M}};
var n=(d=a("2b3J"))&&d.__esModule?d:{default:d},t=a("sbRq"),A=a("zF+s"),y=a("BSTm"),D=a("bYY5"),e=a("BcMv"),g=a("K6O9"),m=a("bdJJ"),u=a("+ly4"),r=a("sjBm"),J=a("53NG"),T=(a=a("dFpP"))&&a.__esModule?a:{default:a}},Oiwr:function(d,k,a){function l(a){return a&&a.__esModule?a:{default:a}}function n(a,e,d){e in a?Object.defineProperty(a,e,{value:d,enumerable:!0,configurable:!0,writable:!0}):a[e]=d;return a}d=a("e3M3");var t=l(d),A=a("BSTm");d=a("2b3J");var y=l(d),D=a("+ly4"),e=a("YC55"),g=function(a){if(a&&
a.__esModule)return a;var e={};if(null!=a)for(var d in a)Object.prototype.hasOwnProperty.call(a,d)&&(e[d]=a[d]);e.default=a;return e}(e);d=a("I8rN");var m=l(d);d=a("TM/W");var u=l(d),r=a("sbRq");window.nn[e.MODULE_NAME]=function(){var a={},d={},k=void 0,l=function(){d.currentContext.destroy(a.el,d.config)},G=function(){d.currentContext.init(a.el,d.config)},H=function(){d.currentContext=(0,u.default)()},K=function(){d.currentContext=(0,m.default)()},L=function(){d.currentContext.updateFlyoutHTML()};
return{init:function(m,u){var v;d.config=$.extend(!0,{},g,u);a.el=m;k=g.SELECTORS;t.default.start(this,{onInitInMobileContext:H,onInitInDesktopContext:K,onAfterInitContext:G,onChangedToMobileContext:H,onChangedToDesktopContext:K,onBeforeChangedContext:l,onAfterChangedContext:G,onChangedOnDesktopContext:L});y.default.pub(D.NN_EVENTS_MODULE_LIFECYCLE.afterInit,{$el:m,moduleName:e.MODULE_NAME,additionalTracking:[{$elements:k.openSearchIcon,trackingData:(v={},n(v,r.NN_TRACKING_DATA_ATTRIBUTES.linkName,
"open"),n(v,r.NN_TRACKING_DATA_ATTRIBUTES.linkPosition,r.NN_TRACKING_DATA_VALUES.contentSearch),v)}]})},destroy:function(){t.default.stop(this);d.currentContext.destroy();(0,A.nullifyPropertiesOnObject)(a)}}}},"TM/W":function(d,k,a){function l(a){return a&&a.__esModule?a:{default:a}}function n(a,e,d){e in a?Object.defineProperty(a,e,{value:d,enumerable:!0,configurable:!0,writable:!0}):a[e]=d;return a}Object.defineProperty(k,"__esModule",{value:!0});k.default=function(){var a={},d=!1,k=!1,l=void 0,
B=void 0,v=void 0,c=void 0,b={},f=void 0,h=void 0,w=void 0,q=void 0,E=void 0,M=void 0,C=void 0,F=function(){(0,e.removeClass)(b.body,m.NN_CLASSES.isNotScrollableAndHasLayer);(0,e.removeClass)(b.body,m.NN_CLASSES.isFixed);b.newMenuBtn.removeEventListener("click",O);b.mobileBase.removeChild(b.newHeader);Z.default.stop(B);d=!1;(0,e.addClass)(b.mobileBase,m.NN_CLASSES.isHidden);l=!1},O=function(){window.scrollTo(0,0);(0,y.addAnimationListener)(b.mobileBase,["opacity","visibility"],F,w);(0,e.removeClass)(b.mobileBase,
m.NN_CLASSES.isActive);d=!0},P=function(){l=!0;d||(b.overviewTab=b.header.querySelector(r.NN_SELECTORS_STICKY.subnavMobileTab),b.overviewTab&&b.overviewTab.classList.contains(m.NN_CLASSES.isActive)&&$(b.overviewTab).trigger("click"),(0,e.removeClass)(b.mobileBase,m.NN_CLASSES.isHidden),window.getComputedStyle(b.mobileBase).display&&(W(),b.mockHeader=G.default.getMockedHeader(b.header),b.newHeader=b.mobileBase.insertBefore(b.mockHeader,b.mobileFlyout),b.newMenuBtn=b.newHeader.querySelector(f.menuIcon),
(0,e.addClass)(b.newMenuBtn,h.flyoutCloseBtn),b.newMenuBtn.addEventListener("click",O),(0,e.addClass)(b.mobileBase,m.NN_CLASSES.isActive),(0,e.addClass)(b.body,m.NN_CLASSES.isNotScrollableAndHasLayer),(0,e.addClass)(b.body,m.NN_CLASSES.isFixed)),window.sessionStorage.getItem(g.CIAM_SESSION_STORAGE_KEYS.name)&&(v=(0,e.getHiddenElementsDimensions)(b.metanavProfileOptions,!0),$(f.flyoutMobile+" "+r.NN_SELECTORS.metaNavExtension).removeClass(m.NN_CLASSES.isHidden)))},W=function(){var a=this;$(b.mobileFlyout).find("h3").each(function(){var b=
$(a);b.next().is("ul")?b.unwrap():b.parent().remove()});Z.default.start(B,{$el:$(b.mobileAccordion)})},I=function(){b.mobileBase.scrollTop>=c?((0,e.removeClass)(b.newMenuBtn,h.flyoutCloseBtn),(0,e.addClass)(b.newMenuBtn,h.flyoutCloseBtnSticky),M.insertBefore(b.newMenuBtn,b.mobileBase)):((0,e.removeClass)(b.newMenuBtn,h.flyoutCloseBtnSticky),(0,e.addClass)(b.newMenuBtn,h.flyoutCloseBtn),E=b.mobileBase.querySelector(r.NN_SELECTORS.logo),E.parentNode.insertBefore(b.newMenuBtn,E.nextSibling))},N=function(){var a=
b.metanavProfileOptions.height();b.metanavProfileOptions.height(0!==a?0:v.height);$(this).toggleClass(h.metanavProfileOptionsClosed);b.metanavProfileOptions.toggleClass(h.metanavProfileOptionsClosed)},R=function(b){b.currentTarget.href.split("#")[0]===window.location.href.split("#")[0]&&(b.preventDefault(),F(),t.default.pub(u.NN_SCROLL_EVENTS.modelOverviewDeepLink,b.currentTarget.href))},x=function(){G.default.setVehicleSwitchContent();(0,e.toggleClass)(b.vehicleSwitch,h.vehicleSwitchHidden);(0,e.toggleClass)(b.body,
m.NN_CLASSES.isNotScrollableAndHasLayer);(0,e.toggleClass)(b.body,m.NN_CLASSES.isFixed)},S=function(){(0,Y.openNationalConsentOverlay)(C)},Q=function(){(0,Y.toggleElVisibilityByLoginState)(C)},U=function(){b.menuBtn.addEventListener("click",P);b.mobileBase.addEventListener("scroll",I);b.metanavMenuBtn&&b.metanavMenuBtn.addEventListener("click",N);b.vehicleSwitch&&(b.vehicleLink.addEventListener("click",x),b.vehicleSwitchCloseBtn.addEventListener("click",x));(k=b.el.hasClass(h.navIsHidden))||b.flyoutLinks.forEach(function(b){b.addEventListener("click",
R)});C&&(C.addEventListener("click",S),document.addEventListener(u.NN_DOM_EVENTS.profileUpdateLoggedIn,Q))},X=function(){b.menuBtn.removeEventListener("click",P);b.mobileBase.removeEventListener("scroll",I);b.metanavMenuBtn&&b.metanavMenuBtn.removeEventListener("click",N);b.vehicleSwitch&&(b.vehicleLink.removeEventListener("click",x),b.vehicleSwitchCloseBtn.removeEventListener("click",x));b.flyoutLinks.forEach(function(b){b.removeEventListener("click",R)})},aa=function(){t.default.pub(A.NN_TRACKING_DATA_EVENTS.addAdditionalTrackingAttributes,
{$el:b.mobileAccordion,additionalTracking:$(b.mobileAccordion).find("a").toArray().map(function(b){var a;return{$elements:$(b),trackingData:(a={},n(a,q.mainnaviTitle,(0,J.formatToStringTracking)($(b).closest(f.menuNavFlyoutList).prev().text())),n(a,q.mainnaviLinkType,q.textLink),a)}})})},ba=function(){$(f.flyoutTeasers).each(function(b,a){b=a.outerHTML;a=Math.floor((0,e.getIndexOfElement)(a.parentElement)/2);a=$(f.flyoutMobile+" "+f.flyoutList).eq(a);b=$('\x3cli class\x3d"'+h.flyoutMobileDirtyCopyTeaserItems+
'"\x3e'+b+"\x3c/li\x3e");b.find(f.flyoutContentSeparater).remove();a.find(f.flyoutItem).last().remove();a.append(b)})};return{init:function(a,d){B=this;b.el=a;f=d.SELECTORS;h=d.CLASSES;w=d.EVENTS_NAMESPACE;q=d.ATTRIBUTES;M=document.querySelector(r.NN_SELECTORS.main);b.body=document.querySelector("body");b.header=document.querySelector(r.NN_SELECTORS.platformHeaderContainer);c=b.header.offsetHeight;b.mainContainer=document.querySelector(r.NN_SELECTORS.platformMainContainer);b.mobileContainer=document.querySelector(f.mobileContainer);
b.menuBtn=b.mobileContainer.querySelector(f.menuIcon);b.mobileBase=b.mobileContainer.querySelector(f.mobileBase);b.mobileBase=b.mainContainer.appendChild(b.mobileBase);b.mobileAccordion=b.mobileBase.querySelector(f.mobileAccordion);b.mobileFlyout=b.mobileBase.querySelector(f.flyoutMobile);(0,e.removeClass)(b.mobileFlyout,m.NN_CLASSES.isActivelyInvisible);b.flyoutLinks=b.mobileBase.querySelectorAll(f.flyoutLink);b.vehicleLink=document.querySelector(f.vehicleLink);b.vehicleSwitch=document.querySelector(f.vehicleSwitch);
b.vehicleSwitchCloseBtn=document.querySelector(f.vehicleSwitchCloseBtn);b.metanavMenuBtn=b.mobileFlyout.querySelector(f.metanavMenuBtn);b.metanavProfileOptions=$(b.mobileFlyout.querySelector(f.metanavProfileOptions));(C=b.mobileFlyout.querySelector(f.registerLink))&&Q();U();aa();ba();T.isIOS&&(0,e.addClass)(b.mobileBase,h.iosFlag);b.vehicleSwitch&&G.default.initVehicleSwitch()},destroy:function(){l?(window.scrollTo(0,0),F()):(0,e.addClass)(b.mobileBase,m.NN_CLASSES.isHidden);(0,e.removeClass)(b.mobileBase,
m.NN_CLASSES.isActive);b.mobileBase=b.mobileContainer.appendChild(b.mobileBase);X();$(f.flyoutMobile+" "+f.flyoutList).find(f.flyoutMobileDirtyCopyTeaserItems).remove();(0,D.nullifyPropertiesOnObject)(b);(0,D.nullifyPropertiesOnObject)(a)}}};d=a("2b3J");var t=l(d),A=a("sbRq"),y=a("Vj2C"),D=a("BSTm"),e=a("bYY5"),g=a("fDjV"),m=a("K6O9"),u=a("+ly4"),r=a("bdJJ"),J=a("53NG"),T=a("zyzM"),Y=a("UOkg");d=a("kpov");var Z=l(d);a=a("dFpP");var G=l(a)},UOkg:function(d,k,a){Object.defineProperty(k,"__esModule",
{value:!0});k.openNationalConsentOverlay=function(a){a={url:a.getAttribute("data-link")};$(document).trigger(n.NN_DOM_EVENTS.modalDialogOpen,a)};k.toggleElVisibilityByLoginState=function(a){window.sessionStorage.getItem(A.CIAM_SESSION_STORAGE_KEYS.loginstate)?(0,t.addClass)(a,l.NN_CLASSES.isHidden):(0,t.removeClass)(a,l.NN_CLASSES.isHidden)};var l=a("K6O9"),n=a("+ly4"),t=a("bYY5"),A=a("fDjV")},dFpP:function(d,k,a){Object.defineProperty(k,"__esModule",{value:!0});var l=a("YC55"),n=a("K6O9"),t=a("bdJJ"),
A=a("fDjV"),y=a("bYY5");k.default={getMockedHeader:function(a){var e=a.cloneNode(!0);a=e.querySelector(t.NN_SELECTORS.gridHeader);var d=e.querySelector(t.NN_SELECTORS_STICKY.headerPlaceholder),k=e.querySelector(t.NN_SELECTORS_STICKY.stickyContainer),n=a.querySelector("nav"),r=n.querySelector(l.SELECTORS.menuIcon);e.querySelectorAll("link").forEach(function(a){return e.removeChild(a)});d.childNodes.length||d.appendChild(a);a.removeChild(n);e.removeChild(k);a.appendChild(r);return e},initVehicleSwitch:function(){document.querySelector(t.NN_SELECTORS_STICKY.headerBase).appendChild(document.querySelector(l.SELECTORS.vehicleSwitch))},
setVehicleSwitchContent:function(){var a=window.sessionStorage.getItem(A.CIAM_SESSION_STORAGE_KEYS.loginstate),d=document.querySelector(l.SELECTORS.vehicleSwitchIsLoggedOut),g=document.querySelector(l.SELECTORS.vehicleSwitchIsLoggedIn);"true"===a?((0,y.addClass)(d,n.NN_CLASSES.isHidden),(0,y.removeClass)(g,n.NN_CLASSES.isHidden)):((0,y.removeClass)(d,n.NN_CLASSES.isHidden),(0,y.addClass)(g,n.NN_CLASSES.isHidden))}}}},["432250ead6"]);
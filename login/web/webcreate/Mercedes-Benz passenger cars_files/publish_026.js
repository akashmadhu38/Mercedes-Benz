webpackJsonp(["modelfinder/featurefilter/publish/target"],{YQyi:function(c,e,a){Object.defineProperty(e,"__esModule",{value:!0});e.VALUES=e.ATTRIBUTES=e.SELECTORS=e.CLASSES=e.EVENTS_NAMESPACE=e.MODULE_NAME=void 0;c=a("akNE");a=e.MODULE_NAME="featurefilter";e.EVENTS_NAMESPACE="."+a;a=e.CLASSES=Object.freeze({base:a+"__base",filterLabel:a+"__label",filterInput:a+"__input",bootCapMinValue:a+"__bootValueMin",bootCapMaxValue:a+"__bootValueMax",resetButton:a+"__resetCurrentFilter"});e.SELECTORS=Object.freeze((0,
c.createSelectorsFromClasses)(a));e.ATTRIBUTES={dataType:"data-type"};e.VALUES=Object.freeze({filterType:"feature",sliderDivisions:5})},ff0cd1494b:function(c,e,a){c.exports=a("wok+")},"wok+":function(c,e,a){function g(b){return b&&b.__esModule?b:{default:b}}c=a("2b3J");var l=g(c);c=a("9cO3");var x=g(c);c=a("WYXt");var r=g(c),y=a("tLGx"),f=a("YQyi"),z=function(b){if(b&&b.__esModule)return b;var p={};if(null!=b)for(var a in b)Object.prototype.hasOwnProperty.call(b,a)&&(p[a]=b[a]);p.default=b;return p}(f),
t=a("sjBm"),A=a("bdJJ"),B=a("K6O9"),m=a("coGw"),k=a("+ly4");c=a("3/E1");var n=g(c),C=a("BSTm");window.nn[f.MODULE_NAME]=function(){var b={},a={isMobile:!1},e=function(){b.sliderPlaceholder=b.el.find("["+t.NN_ATTRIBUTES.pluginSliderControlBarParams+"]");b.featureInputs=b.el.find(f.SELECTORS.filterInput);b.bootCapMinValue=b.el.find(f.SELECTORS.bootCapMinValue);b.bootCapMaxValue=b.el.find(f.SELECTORS.bootCapMaxValue);b.resetButton=b.el.find(f.SELECTORS.resetButton);3>x.default.getCurrentMQ()?(a.isMobile=
!0,b.filterNavigationItems=$(m.SELECTORS.mobile+" "+m.SELECTORS.navigationItem)):(a.isMobile=!1,b.filterNavigationItems=$(m.SELECTORS.desktop+" "+m.SELECTORS.filterNavigationButton));a.checkedInputs=[];a.someInputSelected=!1;a.rangeDifferentThanInitial=!1},c=function(d){var h=b.filterNavigationItems.filter(A.NN_SELECTORS.isActive);n.default.checkNavigationBtnCheckmark(a.someInputSelected||a.rangeDifferentThanInitial,h);d&&n.default.updateTrackingData(b.filterNavigationItems,d,f.MODULE_NAME,a.isMobile)},
g=function(){var b={};0===a.checkedInputs.length&&(b.seats=!0);a.rangeDifferentThanInitial||(b.bootCapacity=!0);l.default.pub(k.NN_DOM_EVENTS.modelFilterUpdateView,{min:a.sliderMinValue,max:a.sliderMaxValue,seats:a.checkedInputs,filterType:f.VALUES.filterType,ignoreFilters:b})},D=function(d){if(b.sliderPlaceholder.eq(0).is(d.$el)){var h=d.outputValues;a.sliderMinValue=h.leftValue;a.sliderMaxValue=h.rightValue;a.rangeDifferentThanInitial=h.leftValue!==h.minValue||h.rightValue!==h.maxValue;b.bootCapMinValue.html(h.leftValue);
b.bootCapMaxValue.html(h.rightValue);c(d);g()}},u=function(d){a.checkedInputs.length=0;b.featureInputs.each(function(){var b=$(this);!0===b.prop("checked")&&(a.checkedInputs.push(parseInt(b.val())),a.someInputSelected=!0)});0===a.checkedInputs.length&&(a.someInputSelected=!1);c(d);g()},v=function(){b.featureInputs.each(function(){$(this).prop("checked",!1)});u()},q=function(){v();b.sliderPlaceholder.trigger(k.NN_DOM_EVENTS.pluginSliderControlBarReset);n.default.updateTrackingData(b.filterNavigationItems,
void 0,f.MODULE_NAME,a.isMobile)},w=function(d){if(d[0]&&d[0].ranges&&d[0].ranges.bootCapacity&&d[0].ranges.bootCapacity.displayFilter&&d[0].ranges.numberOfSeats.displayFilter){var c=d[0].ranges.bootCapacity.minValue.rawValue;d=d[0].ranges.bootCapacity.maxValue.rawValue;e();v();l.default.sub(k.NN_DOM_EVENTS.modelFilterResetAllFilters,q);var g={options:{PAYLOAD:{}}};g.options.PAYLOAD.increment=f.VALUES.sliderDivisions;g.options.PAYLOAD.maxValue=d;g.options.PAYLOAD.minValue=c;b.sliderPlaceholder.attr(t.NN_ATTRIBUTES.pluginSliderControlBarParams,
JSON.stringify(g));b.bootCapMinValue.html(c);b.bootCapMaxValue.html(d);a.sliderMinValue=c;a.sliderMaxValue=d;r.default.start(b.sliderPlaceholder[0],{$el:b.sliderPlaceholder,$hiddenWrapper:b.sliderPlaceholder.closest(m.SELECTORS.contentItem),hiddenClass:B.NN_CLASSES.pluginAccordionContentNoStyles,callbacks:{onSliderUpdate:D}});b.resetButton.on("click"+f.EVENTS_NAMESPACE,q);b.el.on("change"+f.EVENTS_NAMESPACE,f.SELECTORS.filterInput,u);$(window).on(k.NN_BREAKPOINT_EVENTS.breakpointHasChanged,e)}else(0,
y.isEnvPublish)()&&n.default.removeFilterWhenNoDataAvailable(b.el)};return{init:function(d,c){b.el=d;a.config=$.extend(!0,{},z,c);l.default.sub(k.NN_DOM_EVENTS.modelFilterStoreModels,w)},destroy:function(){r.default.stop(b.sliderPlaceholder[0]);l.default.unsub(k.NN_DOM_EVENTS.modelFilterStoreModels,w);l.default.unsub(k.NN_DOM_EVENTS.modelFilterResetAllFilters,q);b.resetButton.off(f.EVENTS_NAMESPACE);b.el.off(f.EVENTS_NAMESPACE);(0,C.nullifyPropertiesOnObject)(b)}}}}},["ff0cd1494b"]);
webpackJsonp(["modelfinder/efficiencyfilter/publish/target"],{"60d2e0d693":function(e,d,b){e.exports=b("GZ8B")},GZ8B:function(e,d,b){function k(a){return a&&a.__esModule?a:{default:a}}e=b("2b3J");var l=k(e);e=b("9cO3");var z=k(e);e=b("WYXt");var v=k(e),A=b("tLGx"),f=b("sKnq"),B=function(a){if(a&&a.__esModule)return a;var c={};if(null!=a)for(var b in a)Object.prototype.hasOwnProperty.call(a,b)&&(c[b]=a[b]);c.default=a;return c}(f),w=b("sjBm"),p=b("bdJJ"),C=b("K6O9"),m=b("coGw"),h=b("+ly4");e=b("3/E1");
var n=k(e),D=b("BSTm"),x=b("P3ba");window.nn[f.MODULE_NAME]=function(){var a={},c={isMobile:!1},b=function(){a.sliderPlaceholder=a.el.find("["+w.NN_ATTRIBUTES.pluginSliderControlBarParams+"]");a.transmissionInputs=a.el.find(p.NN_SELECTORS.efficiencyfilterTransmissionInputs);a.fuelInputs=a.el.find(p.NN_SELECTORS.efficiencyfilterFuelInputs);a.bootCapMinValue=a.el.find(f.SELECTORS.bootCapMinValue);a.bootCapMaxValue=a.el.find(f.SELECTORS.bootCapMaxValue);a.resetButton=a.el.find(f.SELECTORS.resetButton);
a.inputElectric=a.el.find(f.SELECTORS.inputElectric);a.filterInputs=a.el.find(f.SELECTORS.filterInputs).not(f.SELECTORS.inputElectric);3>z.default.getCurrentMQ()?(c.isMobile=!0,a.filterNavigationItems=$(m.SELECTORS.mobile+" "+m.SELECTORS.navigationItem)):(c.isMobile=!1,a.filterNavigationItems=$(m.SELECTORS.desktop+" "+m.SELECTORS.filterNavigationButton));c.checkedElectricInputs=[];c.checkedFuelInputs=[];c.checkedTransmissionInputs=[];c.someInputSelected=!1;c.rangeDifferentThanInitial=!1},d=function(b){var g=
a.filterNavigationItems.filter(p.NN_SELECTORS.isActive);n.default.checkNavigationBtnCheckmark(c.someInputSelected||c.rangeDifferentThanInitial,g);b&&n.default.updateTrackingData(a.filterNavigationItems,b,f.MODULE_NAME,c.isMobile)},e=function(){var a=c.checkedFuelInputs.concat(c.checkedElectricInputs);l.default.pub(h.NN_DOM_EVENTS.modelFilterUpdateView,{fuelConsumptionCombinedAll:{min:c.sliderMinValue,max:c.sliderMaxValue},fuelType:a,transmissionSystem:c.checkedTransmissionInputs,filterType:f.VALUES.filterType,
ignoreFilters:{fuelConsumptionCombinedAll:!c.rangeDifferentThanInitial,fuelType:!a||0===a.length,transmissionSystem:!c.checkedTransmissionInputs||0===c.checkedTransmissionInputs.length}})},k=function(b){if(a.sliderPlaceholder.eq(0).is(b.$el)){var g=b.outputValues;c.sliderMinValue=g.leftValue.toFixed(1);c.sliderMaxValue=g.rightValue.toFixed(1);c.rangeDifferentThanInitial=!(0,x.areNumbersEqual)(c.sliderMinValue,g.minValue)||!(0,x.areNumbersEqual)(c.sliderMaxValue,g.maxValue);a.bootCapMinValue.html(c.sliderMinValue);
a.bootCapMaxValue.html(c.sliderMaxValue);d(b);e()}},q=function(){a.transmissionInputs.prop("checked",!1);a.fuelInputs.prop("checked",!1)},r=function(){c.checkedElectricInputs.length=0;a.inputElectric.prop("checked",!1)},E=function(b){q();c.checkedElectricInputs.length=0;!0===a.inputElectric.prop("checked")&&(a.sliderPlaceholder.trigger(h.NN_DOM_EVENTS.pluginSliderControlBarReset),a.sliderPlaceholder.trigger(h.NN_DOM_EVENTS.pluginSliderHandleEventsOff),c.checkedElectricInputs.push(a.inputElectric.val()),
c.someInputSelected=!0);t(b)},t=function(b){c.checkedFuelInputs.length=0;c.checkedTransmissionInputs.length=0;a.fuelInputs.each(function(){var b=$(this);!0===b.prop("checked")&&(r(),a.sliderPlaceholder.trigger(h.NN_DOM_EVENTS.pluginSliderHandleEventsOn),c.checkedFuelInputs.push(b.val()),c.someInputSelected=!0)});a.transmissionInputs.each(function(){var b=$(this);!0===b.prop("checked")&&(r(),a.sliderPlaceholder.trigger(h.NN_DOM_EVENTS.pluginSliderHandleEventsOn),c.checkedTransmissionInputs.push(b.val()),
c.someInputSelected=!0)});0===c.checkedFuelInputs.length+c.checkedTransmissionInputs.length+c.checkedElectricInputs.length&&(a.sliderPlaceholder.trigger(h.NN_DOM_EVENTS.pluginSliderHandleEventsOn),c.someInputSelected=!1);d(b);e()},u=function(){q();r();t();a.sliderPlaceholder.trigger(h.NN_DOM_EVENTS.pluginSliderControlBarReset);n.default.updateTrackingData(a.filterNavigationItems,void 0,f.MODULE_NAME,c.isMobile)},y=function(d){var g=d[0].ranges;if(g.fuelType.displayFilter&&g.transmissionSystem.displayFilter&&
g.fuelConsumptionCombinedAll.displayFilter&&g.fuelConsumptionCombinedAll.minValue&&"undefined"!==typeof g.fuelConsumptionCombinedAll.minValue.rawValue){d=g.fuelConsumptionCombinedAll.minValue.rawValue;g=g.fuelConsumptionCombinedAll.maxValue.rawValue;b();q();l.default.sub(h.NN_DOM_EVENTS.modelFilterResetAllFilters,u);var e={options:{PAYLOAD:{}}};e.options.PAYLOAD.increment=f.VALUES.sliderDivisions;e.options.PAYLOAD.maxValue=d;e.options.PAYLOAD.minValue=g;a.sliderPlaceholder.attr(w.NN_ATTRIBUTES.pluginSliderControlBarParams,
JSON.stringify(e));a.bootCapMinValue.html(g);a.bootCapMaxValue.html(d);c.sliderMinValue=g;c.sliderMaxValue=d;v.default.start(a.sliderPlaceholder[0],{$el:a.sliderPlaceholder,$hiddenWrapper:a.sliderPlaceholder.closest(m.SELECTORS.contentItem),hiddenClass:C.NN_CLASSES.pluginAccordionContentNoStyles,callbacks:{onSliderUpdate:k}});F()}else(0,A.isEnvPublish)()&&n.default.removeFilterWhenNoDataAvailable(a.el)},F=function(){a.resetButton.on("click"+f.EVENTS_NAMESPACE,u);a.filterInputs.on("change"+f.EVENTS_NAMESPACE,
t);a.inputElectric.on("change"+f.EVENTS_NAMESPACE,E);$(window).on(h.NN_BREAKPOINT_EVENTS.breakpointHasChanged,n.default.handleBreakpointChange.bind(this,a.el,b))};return{init:function(b,d){a.el=b;c.config=$.extend(!0,{},B,d);l.default.sub(h.NN_DOM_EVENTS.modelFilterStoreModels,y)},destroy:function(){v.default.stop(a.sliderPlaceholder[0]);l.default.unsub(h.NN_DOM_EVENTS.modelFilterStoreModels,y);l.default.unsub(h.NN_DOM_EVENTS.modelFilterResetAllFilters,u);a.resetButton.off(f.EVENTS_NAMESPACE);a.filterInputs.off(f.EVENTS_NAMESPACE);
a.inputElectric.off(f.EVENTS_NAMESPACE);(0,D.nullifyPropertiesOnObject)(a)}}}},sKnq:function(e,d,b){Object.defineProperty(d,"__esModule",{value:!0});d.VALUES=d.ATTRIBUTES=d.SELECTORS=d.CLASSES=d.EVENTS_NAMESPACE=d.MODULE_NAME=void 0;e=b("akNE");b=d.MODULE_NAME="efficiencyfilter";d.EVENTS_NAMESPACE="."+b;b=d.CLASSES=Object.freeze({base:b+"__base",filterInputs:b+"__input",bootCapMinValue:b+"__bootValueMin",bootCapMaxValue:b+"__bootValueMax",resetButton:b+"__resetCurrentFilter",inputElectric:b+"__inputElectric"});
d.SELECTORS=Object.freeze((0,e.createSelectorsFromClasses)(b));d.ATTRIBUTES={dataType:"data-type"};d.VALUES=Object.freeze({filterType:"efficiency",sliderDivisions:5})}},["60d2e0d693"]);
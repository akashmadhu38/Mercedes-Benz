webpackJsonp(["livechat/publish/target"],{"52ff0712ec":function(c,a,b){c.exports=b("nsDU")},"fJ+s":function(c,a,b){Object.defineProperty(a,"__esModule",{value:!0});a.CHAT_EVENTS=a.VALUES=a.IDS=a.SELECTORS=a.CLASSES=a.EVENTS_NAMESPACE=a.MODULE_NAME=void 0;c=b("akNE");b=a.MODULE_NAME="livechat";a.EVENTS_NAMESPACE="."+b;b=a.CLASSES={livechat:""+b,chatButton:b+"__base"};a.SELECTORS=(0,c.createSelectorsFromClasses)(b);a.IDS={chatWidget:"#userlike-popup",userName:"#userlike-register-name",userEmail:"#userlike-register-email"};
a.VALUES={chatPath:["page","modules","chat"],chatEvent:"event",chatStatus:"status",chatStatusOffline:"offline",chatStatusNoChat:"no chat",chatStatusOnline:"online"};a.CHAT_EVENTS={chatOfflineMode:"offline_mode",chatButtonDisplayed:"button_displayed",chatButtonHidden:"button_hidden",chat_requested:"chat_requested",register_show:"register_show",register_cancel:"register_cancel",register_submit:"register_submit",chat_started:"chat_started",chat_quit:"chat_quit",message_client_terminating_first:"message_client_terminating_first",
offline_form_submit:"offline_form_submit",pre_survey_submit:"pre_survey_submit",post_survey_submit:"post_survey_submit"}},nsDU:function(c,a,b){var q=b("BSTm"),r=function(d){if(d&&d.__esModule)return d;var a={};if(null!=d)for(var b in d)Object.prototype.hasOwnProperty.call(d,b)&&(a[b]=d[b]);a.default=d;return a}(b("fJ+s")),g=b("fDjV"),n=b("+ly4"),t=(c=b("2b3J"))&&c.__esModule?c:{default:c},u=b("tLGx"),v=b("sbRq");window.nn.livechat=function(){var a={},b=!1,c=void 0,k=void 0,l=void 0,e=void 0,h=void 0,
p=function(){window.userlike.userlikeStartChat();m()},m=function(){var a=window.sessionStorage.getItem(g.CIAM_SESSION_STORAGE_KEYS.loginstate);null!==a&&"true"===a&&b&&window.sessionStorage.getItem(g.CIAM_SESSION_STORAGE_KEYS.name).length&&window.sessionStorage.getItem(g.CIAM_SESSION_STORAGE_KEYS.email).length&&(a={user:{}},a.user.name=window.sessionStorage.getItem(g.CIAM_SESSION_STORAGE_KEYS.name),a.user.email=window.sessionStorage.getItem(g.CIAM_SESSION_STORAGE_KEYS.email),$(c.userName).val(a.user.name),
$(c.userEmail).val(a.user.email),window.userlike.setData(a))},w=function(){window.userlike.userlikeButtonHandler=function(f){f?(a.livechat.show(),b=!0):((0,u.isEnvPublish)()&&a.livechat.hide(),b=!1)};window.userlikeTrackingEvent=function(a){var b=e.chatPath,c="chat_"+a,f={};void 0===a?(f[e.chatStatus]=e.chatStatusNoChat,a=!0):a===h.chatOfflineMode||a===h.chatButtonHidden?(f[e.chatStatus]=e.chatStatusOffline,a=!0):a===h.chatButtonDisplayed?(f[e.chatStatus]=e.chatStatusOnline,a=!0):h.hasOwnProperty(a)?
(f[e.chatEvent]=c,a=!0):a=!1;a&&t.default.pub(v.NN_TRACKING_DATA_EVENTS.modifyDataLayerObjectOnUserInteraction,{dataLayerPath:b,data:f,isDataPushedToArray:!0})};a.chatButton.on("click"+l,p);$(document).on(n.NN_DOM_EVENTS.ciamUpdateAuthenticationStatus,m)};return{init:function(b,d){a.el=b;b=$.extend(!0,{},r,d);c=b.IDS;k=b.SELECTORS;l=b.EVENTS_NAMESPACE;e=b.VALUES;h=b.CHAT_EVENTS;"userlike"in window&&(window.userlike.userlikeChatState&&"Chat"===window.userlike.userlikeChatState()&&p(),a.chatButton=
$(k.chatButton),a.livechat=a.chatButton.parent(k.livechat),w())},destroy:function(){"userlike"in window&&(a.chatButton.off(l),$(document).off(n.NN_DOM_EVENTS.ciamUpdateAuthenticationStatus,m),(0,q.nullifyPropertiesOnObject)(a))}}}}},["52ff0712ec"]);
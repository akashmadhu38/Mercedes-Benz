/**
 * Builds new CookieService
 *
 * @returns {CookieService}
 */
CookieService = function (param, skiploading) {

    // only used with with preview
    var setCookies = true;
    // defines overlay template for layer
    var overlayTemplate = "<div id=\"cp-overlay\" class=\"cp-overlay\"></div>";
    // defines css template for layer
    var cssTemplate = "<link rel=\"stylesheet\" type=\"text/css\" href=\"" + getCSS() + " \"/>";
    // defines dialog template for layer
    var dialogTemplate = "<div id=\"cp-dialog\" class=\"cp-wrapper\"><div id=\"cp-inner\" class=\"cp-layer\"></div></div>";

    if (param.endpoint.length > 0 && param.endpoint.slice(-1) !== "/") {
        param.endpoint = param.endpoint + "/";
    }

    param.endpointBackend = param.endpoint + "public/";

    // initialize cookie backend service
    var cookieBackendService = new CookieBackendService(param);

    // auto load layer if not skip loading
    if (!skiploading) {
        $(document).ready(function () {
            showLayer();
        });
    }

    return {
        showLayer: showLayer,
        initCookieSite: initCookieSite,
        getCookieSiteUrl: getCookieSiteUrl,
        getCookieSiteContent: getCookieSiteContent,
        hideLayer: hideLayer,
        revokeOptIn: revokeOptIn
    };

    function getCSS() {
        if (!param.stylesheet || param.stylesheet === '') {
            var css = param.endpoint ? '/css/layer.css' : 'css/layer.css';
            param.stylesheet = param.endpoint + css;
        }
        return param.stylesheet;
    }

    /*
     * Set Cookie
     */
    function setCookie(name, value, days, hours) {
        if (!setCookies) return;

        var expires = "";
        if (days) {
            expires = "; max-age=" + (days * 24 * 60 * 60);
        } else if (hours) {
            expires = "; max-age=" + (hours * 60 * 60);
        }
        document.cookie = name + "=" + (encodeURIComponent(value) || "") + expires + "; path=/";
    }

    /*
     * get cookie by name
     */
    function getCookie(cname) {
        var name = cname + "=";
        var decodedCookie = decodeURIComponent(document.cookie);
        var ca = decodedCookie.split(';');
        for (var i = 0; i < ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) === ' ') {
                c = c.substring(1);
            }
            if (c.indexOf(name) === 0) {
                return c.substring(name.length, c.length);
            }
        }
        return "";
    }

    function revokeOptIn(e, doShowLayer) {
        e.stopPropagation();
        e.preventDefault();

        setOptInCookie({optin: true}, "google=false", 30);

        if (doShowLayer === false) {
            return false;
        }

        cookieBackendService.getLayerContent()
            .done(function (data) {
                if (!data) {
                    return;
                }

                cookieBackendService.getHtml("layer.html")
                    .done(function (html) {
                        $(cssTemplate).appendTo('head');
                        var layerHtml = $(html);

                        var domParentElement = getLayerParentElement();
                        $(overlayTemplate).appendTo(domParentElement);
                        $(dialogTemplate).appendTo(domParentElement);

                        domParentElement.find("#cp-inner").append(layerHtml);
                        addRevokeContent(layerHtml, data);

                        $(".cp-layer,.cp-layer div.links").click(function (e) {
                            /* do not close layer on link click or clicks in the white layer space */
                            e.stopPropagation();
                        });

                        $(".cp-overlay").click(function () {
                            hideCookieLayer(domParentElement);
                        });

                        $("#button-text").click(function (e) {
                            e.stopPropagation();
                            e.preventDefault();
                            hideCookieLayer(domParentElement);
                        });
                        showLayer();
                    });
                return false;

                function addRevokeContent(layerHtml, data) {
                    layerHtml.find("#button-text").html(data.buttonText);
                    layerHtml.find("#layer-headline").html(
                        data.optoutHeadlineText || 'Opt out confirmation');
                    layerHtml.find("#layer-text").html(parseLayerText(
                        data.optoutText || 'You have successfully opted out from using Google Marketing Products on our website.'));
                }

                function showLayer() {
                    $(".cp-overlay,.cp-wrapper").css('display', 'block');
                }
            });
    }

    function hideLayer() {
        hideCookieLayer(getLayerParentElement());
    }

    /**
     * Calls backend service and renders layer in page
     */
    function showLayer(dontSetCookies) {
        setCookies = !!dontSetCookies ? false : true;

        var cookieEnabledInBrowser = navigator && navigator.cookieEnabled;
        /* if cookies are disabled, this whole API usage is pointless, so do nothing */
        if (!cookieEnabledInBrowser) {
            _log(false, "Cookies are disabled in browser, skipping Cookie Policy Layer.");
            return;
        }

        if (!isConsentExpiredFor(param.context.market, param.context.appid)) {
            callOnConsent();
            return;
        }

        cookieBackendService.getLayerContent().done(
            function (data) {
                if (!data) {
                    return;
                }

                var optInCookie = getCookie("CooS_cookie_policy_" + param.context.appid + "_" + param.context.market);
                var showLayer = isConsentExpiredFor(param.context.market, data.siteId) && data.showLayer || (data.optin && !optInCookie);

                if (showLayer) {
                    $(cssTemplate).appendTo('head');
                    cookieBackendService.getHtml("layer.html").done(
                        function (html) {
                            var layerHtml = $(html);

                            layerHtml.find("#cookiesite-link").attr("href", param.endpoint + "cookie-site.html?" + toURLParam());
                            layerHtml.find("#cookiesite-link").html(data.cookieSiteLinkText);
                            layerHtml.find("#button-text").html(data.buttonText);
                            layerHtml.find("#layer-headline").html(data.layerHeadlineText);
                            layerHtml.find("#layer-text").html(parseLayerText(data.layerText));

                            var domParentElement = getLayerParentElement();
                            $(overlayTemplate).appendTo(domParentElement);
                            $(dialogTemplate).appendTo(domParentElement);

                            domParentElement.find("#cp-inner").append(layerHtml);

                            $(".cp-layer,.cp-layer div.links").click(function (e) {
                                /* do not close layer on link click or clicks in the white layer space */
                                e.stopPropagation();
                            });

                            $(".cp-overlay").click(function (e) {
                                addCloseHandler(domParentElement, data, e);
                            });

                            if (data.optin) {
                                $(".cp-inner p.close").hide();
                                $('.cp-layer').addClass('opt-in')
                            } else {
                                $("#button-text").click(function (e) {
                                    addCloseHandler(domParentElement, data, e);
                                });
                            }

                            $("[data-action='close']").click(function (e) {
                                addCloseHandler(domParentElement, data, e);
                            });

                            $("[data-action='agree']").click(function (e) {
                                e.stopPropagation();
                                e.preventDefault();
                                hideCookieLayer(domParentElement);
                                setOptInCookie(data, "google=true", 30);
                                callOnConsent();
                            });

                            setOptOutCookie(param.context.market, data.siteId);

                            if (param.onDisclaimerDisplay) {
                                param.onDisclaimerDisplay(param.context, getCookieSiteUrl());
                            }

                            $(".cp-overlay,.cp-wrapper").css('display', 'block');
                        });
                } else {
                    callOnConsent();
                }
            });
    }

    function getLayerParentElement() {
        var domParentElement = param.siteanchor ? $(param.siteanchor) : null;
        if (!domParentElement || !domParentElement.get(0)) {
            return $('body');
        }
        return domParentElement;
    }

    function addCloseHandler(domParentElement, data, e) {
        e.stopPropagation();
        e.preventDefault();
        hideCookieLayer(domParentElement);
        setOptInCookie(data, "google=false", 30);
        callOnConsent();
    }

    function parseLayerText(text) {
        console.log('parsing layer text');
        return text.replace(/\[[^\]]+]/g, function (definition) {
            var el = {};
            definition.substring(0, definition.length - 1).substring(1).split('|').forEach(function (value) {
                el[value.split('=')[0]] = value.split('=')[1]
            });

            var attributes = 'data-cookie-optin="' + (el.action === 'agree') + '"' + 'data-action="' + el.action + '"';

            switch (el.type) {
                case 'link':
                    return '<a href="" class="link link-' + el.action + '" ' + attributes + ' >' + el.label + '</a>';
                case 'button':
                    return '<button class="btn btn-' + el.action + '" ' + attributes + '>' + el.label + '</button>';
                default:
                    return '';
            }
        });
    }

    function setOptOutCookie(market, site) {
        var now = new Date().getTime();
        var cookieName = 'CooS_' + market;
        var cookie = getCookie(cookieName);
        var siteData = cookie.split('&').filter(function (e) {
            return e && e.indexOf(site) === -1;
        });
        siteData.push(site + '#' + now);
        setCookie(cookieName, siteData.join('&'), 30);
    }

    function isConsentExpiredFor(market, site) {
        var vars = getSiteCookie(market, site).split('#');
        var now = new Date().getTime();
        return vars.length === 1 || vars.length > 1 && (parseFloat(vars[1]) + (1000 * 60 * 60 * 30) <= now);
    }

    function getSiteCookie(market, site) {
        var cookieName = 'CooS_' + market;
        var cookie = getCookie(cookieName);

        return cookie.split('&').filter(function (e) {
            return e && e.indexOf(site) === 0;
        }).join('');
    }

    function hideCookieLayer(domParentElement) {
        domParentElement.find("#cp-overlay").css('display', 'none');
        domParentElement.find("#cp-overlay").remove();
        domParentElement.find("#cp-inner").remove();
    }

    function callOnConsent() {
        if (param.onConsent) {
            param.onConsent(param.context, getCookieSiteUrl());
        }
    }

    function setOptInCookie(data, content, days, hours) {
        if (data.optin) {
            setCookie("CooS_cookie_policy_" + param.context.appid + "_" + param.context.market, content, days, hours);
        }
    }

    /**
     * Calls backend service and renders cookie site
     */
    function initCookieSite() {

        cookieBackendService.getCookieSiteContent().done(function (data) {
            document.getElementById("page-title").innerHTML = data.pageTitle;
            document.getElementById("cookie-title").innerHTML = data.pageTitle;

            $("#intro-text").html(data.introText);
            $("#outro-text").html(data.outroText);
            $("#cookie-title").html(data.cookieTitle);

            if (data.cookies.length > 0) {

                $("#cookie-table-title").html(data.cookieTableTitle);

                var htmlTable = "<thead><tr>";

                var header = ["headerName", "headerDescription", "headerCategory"];
                for (var j = 0; j < 3; j++) {
                    htmlTable += "<th class=\"cs-table-col-" + (j + 1) + " \">" + data[header[j]] + "</th>";
                }

                htmlTable += "</tr></thead><tbody>";

                for (var i = 0; i < data.cookies.length; i++) {
                    var cookie = data.cookies[i];
                    htmlTable += "<tr>";
                    htmlTable += "<td class=\"cs-table-col-1\">" + cookie.name + "</td>";
                    htmlTable += "<td class=\"cs-table-col-2\">" + cookie.description + "</td>";
                    htmlTable += "<td class=\"cs-table-col-3\">" + cookie.category + "</td>";
                    htmlTable += "</tr>";
                }
                htmlTable += "</tbody>";
                $("#cookie-table").html(htmlTable);
            } else {
                $("#cookie-table-title").remove();
                $("#cookie-table").remove();
            }
        });
    }

    function getCookieSiteContent() {
        return cookieBackendService.getCookieSiteContent();
    }

    /**
     * Calls backend service for cookie info url
     *
     * @return Cookie Info URL
     */
    function getCookieSiteUrl() {
        return param.endpoint + "cookie-site.html?" + toURLParam();
    }

    function toURLParam() {
        return "m=" + param.context.market + "&a=" + param.context.appid + "&l=" + param.context.lang;
    }
};

function getUrlParameter(name) {
    var params = decodeURIComponent(window.location.search.substring(1)).split('&');
    for (var i = 0; i < params.length; i++) {
        var values = params[i].split("=");
        if (values[0] === name)
            return values[1];
    }
}

/**
 * Calls backend service for cookie info urls
 *
 * @param isError - if it is an error
 * @param message - the message to log
 *
 */
function _log(isError, message) {
    var errorMessage = "cookie service  - ";
    if (isError) errorMessage += "error - ";
    errorMessage += message;

    /* ensure we have a console logger */
    if ((typeof (console) !== 'undefined' && console.log)) {
        console.log(errorMessage);
    }
}
/**
 * Build specified cookie backend service
 *
 * @returns CookieBackendService
 */
CookieBackendService = function (param) {
    var CONTEXT_SEPARATOR = "/";

    return {
        getLayerContent: getLayerContent,
        getCookieSiteContent: getCookieSiteContent,
        getHtml: getHtml
    };

    /**
     * Calls Backend Service and returns Deferred
     * with layer content
     *
     * @returns {Deferred}
     */
    function getLayerContent() {
        var url = param.endpointBackend + getCookieSiteContext() + "render-layer";
        return getDataFromServer("json", url, false);
    }

    /**
     * Calls Backend Service and returns Deferred
     * with cookie site
     *
     * @returns {Deferred}
     */
    function getCookieSiteContent() {
        var url = param.endpointBackend + getCookieSiteContext() + "cookie-site";
        return getDataFromServer("json", url, true);
    }

    /**
     * Calls Backend Service and returns Deferred
     * with html content
     *
     * @returns {Deferred}
     */
    function getHtml(html) {
        var url = param.endpoint + html;
        return getDataFromServer("html", url, true);
    }

    /**
     * Build specified app context for the backend service
     *
     * appContext = (language, app id, app tag, market)
     *
     * @returns {string}
     */
    function getCookieSiteContext() {
        var appContext = param.context.market + CONTEXT_SEPARATOR;
        appContext += param.context.appid + CONTEXT_SEPARATOR;
        appContext += param.context.lang + CONTEXT_SEPARATOR;
        return appContext;
    }

    /**
     * Calls Backend Service and returns Deferred
     *
     * @returns {Deferred}
     */
    function getDataFromServer(type, url, cacheSetting) {
        var deferred = $.Deferred();
        $.ajax({
            type: "GET",
            url: url,
            dataType: type,
            cache: cacheSetting,
            xhrFields: {
                withCredentials: true
            }
        }).done(function (data) {
            deferred.resolve(data);
        }).fail(function (jqXHR, textStatus, errorThrown) {
            _log(true, "failed to get data from " + url + ":" + textStatus + " " + errorThrown.message);
            deferred.reject(textStatus + " " + errorThrown.message);
        });
        return deferred.promise();
    }
};

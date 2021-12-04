window.a2a_config = window.a2a_config || {};
a2a_config.callbacks = [];
a2a_config.overlays = [];
a2a_config.templates = {};
a2a_localize = {
    Share: "Отправить",
    Save: "Сохранить",
    Subscribe: "Подписаться",
    Email: "E-mail",
    Bookmark: "В закладки!",
    ShowAll: "Показать все",
    ShowLess: "Показать остальное",
    FindServices: "Найти сервис(ы)",
    FindAnyServiceToAddTo: "Найти сервис и добавить",
    PoweredBy: "Работает на",
    ShareViaEmail: "Поделиться по электронной почте",
    SubscribeViaEmail: "Подписаться по электронной почте",
    BookmarkInYourBrowser: "Добавить в закладки",
    BookmarkInstructions: "Нажмите Ctrl+D или \u2318+D, чтобы добавить страницу в закладки",
    AddToYourFavorites: "Добавить в Избранное",
    SendFromWebOrProgram: "Отправлять с любого email-адреса или email-программы",
    EmailProgram: "Почтовая программа",
    More: "Подробнее&#8230;",
    ThanksForSharing: "Спасибо, что поделились!",
    ThanksForFollowing: "Спасибо за подписку!"
};

(function (d, s, a, b) {
    a = d.createElement(s);
    b = d.getElementsByTagName(s)[0];
    a.async = 1;
    a.src = "https://static.addtoany.com/menu/page.js";
    b.parentNode.insertBefore(a, b);
})(document, "script");

/* <![CDATA[ */
var Cli_Data = {
    "nn_cookie_ids": [],
    "cookielist": [],
    "non_necessary_cookies": [],
    "ccpaEnabled": "",
    "ccpaRegionBased": "",
    "ccpaBarEnabled": "",
    "strictlyEnabled": ["necessary", "obligatoire"],
    "ccpaType": "gdpr",
    "js_blocking": "1",
    "custom_integration": "",
    "triggerDomRefresh": "",
    "secure_cookies": ""
};
var cli_cookiebar_settings = {
    "animate_speed_hide": "500",
    "animate_speed_show": "500",
    "background": "#FFF",
    "border": "#b1a6a6c2",
    "border_on": "",
    "button_1_button_colour": "#61a229",
    "button_1_button_hover": "#4e8221",
    "button_1_link_colour": "#fff",
    "button_1_as_button": "1",
    "button_1_new_win": "",
    "button_2_button_colour": "#333",
    "button_2_button_hover": "#292929",
    "button_2_link_colour": "#444",
    "button_2_as_button": "",
    "button_2_hidebar": "",
    "button_3_button_colour": "#3566bb",
    "button_3_button_hover": "#2a5296",
    "button_3_link_colour": "#fff",
    "button_3_as_button": "1",
    "button_3_new_win": "",
    "button_4_button_colour": "#000",
    "button_4_button_hover": "#000000",
    "button_4_link_colour": "#333333",
    "button_4_as_button": "",
    "button_7_button_colour": "#61a229",
    "button_7_button_hover": "#4e8221",
    "button_7_link_colour": "#fff",
    "button_7_as_button": "1",
    "button_7_new_win": "",
    "font_family": "inherit",
    "header_fix": "",
    "notify_animate_hide": "1",
    "notify_animate_show": "",
    "notify_div_id": "#cookie-law-info-bar",
    "notify_position_horizontal": "right",
    "notify_position_vertical": "bottom",
    "scroll_close": "",
    "scroll_close_reload": "",
    "accept_close_reload": "",
    "reject_close_reload": "",
    "showagain_tab": "",
    "showagain_background": "#fff",
    "showagain_border": "#000",
    "showagain_div_id": "#cookie-law-info-again",
    "showagain_x_position": "100px",
    "text": "#333333",
    "show_once_yn": "",
    "show_once": "10000",
    "logging_on": "",
    "as_popup": "",
    "popup_overlay": "1",
    "bar_heading_text": "\u041c\u044b \u0438\u0441\u043f\u043e\u043b\u044c\u0437\u0443\u0435\u043c cookies",
    "cookie_bar_as": "banner",
    "popup_showagain_position": "bottom-right",
    "widget_position": "left"
};
var log_object = {"ajax_url": "https:\/\/liblbt.yanao.ru\/wp-admin\/admin-ajax.php"};
/* ]]> */

/* <![CDATA[ */
var title = {
    "unfolded": "\u0420\u0430\u0437\u0432\u0435\u0440\u043d\u0443\u0442\u044c",
    "folded": "\u0421\u0432\u0435\u0440\u043d\u0443\u0442\u044c"
};
/* ]]> */

window._wpemojiSettings = {
    "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/13.1.0\/72x72\/",
    "ext": ".png",
    "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/13.1.0\/svg\/",
    "svgExt": ".svg",
    "source": {"concatemoji": "https:\/\/liblbt.yanao.ru\/wp-includes\/js\/wp-emoji-release.min.js?ver=5.8.2"}
};
!function (e, a, t) {
    var n, r, o, i = a.createElement("canvas"), p = i.getContext && i.getContext("2d");

    function s(e, t) {
        var a = String.fromCharCode;
        p.clearRect(0, 0, i.width, i.height), p.fillText(a.apply(this, e), 0, 0);
        e = i.toDataURL();
        return p.clearRect(0, 0, i.width, i.height), p.fillText(a.apply(this, t), 0, 0), e === i.toDataURL()
    }

    function c(e) {
        var t = a.createElement("script");
        t.src = e, t.defer = t.type = "text/javascript", a.getElementsByTagName("head")[0].appendChild(t)
    }

    for (o = Array("flag", "emoji"), t.supports = {
        everything: !0,
        everythingExceptFlag: !0
    }, r = 0; r < o.length; r++) t.supports[o[r]] = function (e) {
        if (!p || !p.fillText) return !1;
        switch (p.textBaseline = "top", p.font = "600 32px Arial", e) {
            case"flag":
                return s([127987, 65039, 8205, 9895, 65039], [127987, 65039, 8203, 9895, 65039]) ? !1 : !s([55356, 56826, 55356, 56819], [55356, 56826, 8203, 55356, 56819]) && !s([55356, 57332, 56128, 56423, 56128, 56418, 56128, 56421, 56128, 56430, 56128, 56423, 56128, 56447], [55356, 57332, 8203, 56128, 56423, 8203, 56128, 56418, 8203, 56128, 56421, 8203, 56128, 56430, 8203, 56128, 56423, 8203, 56128, 56447]);
            case"emoji":
                return !s([10084, 65039, 8205, 55357, 56613], [10084, 65039, 8203, 55357, 56613])
        }
        return !1
    }(o[r]), t.supports.everything = t.supports.everything && t.supports[o[r]], "flag" !== o[r] && (t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && t.supports[o[r]]);
    t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && !t.supports.flag, t.DOMReady = !1, t.readyCallback = function () {
        t.DOMReady = !0
    }, t.supports.everything || (n = function () {
        t.readyCallback()
    }, a.addEventListener ? (a.addEventListener("DOMContentLoaded", n, !1), e.addEventListener("load", n, !1)) : (e.attachEvent("onload", n), a.attachEvent("onreadystatechange", function () {
        "complete" === a.readyState && t.readyCallback()
    })), (n = t.source || {}).concatemoji ? c(n.concatemoji) : n.wpemoji && n.twemoji && (c(n.twemoji), c(n.wpemoji)))
}(window, document, window._wpemojiSettings);

$(document).ready(function () {
    var lazyloadImages;

    if ("IntersectionObserver" in window) {
        lazyloadImages = document.querySelectorAll(".lazy");
        var imageObserver = new IntersectionObserver(function (entries, observer) {
            console.log(observer);
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    var image = entry.target;
                    image.src = image.dataset.src;
                    image.classList.remove("lazy");
                    imageObserver.unobserve(image);
                }
            });
        }, {
            root: document.querySelector("#container"),
            rootMargin: "0px 0px 500px 0px"
        });

        lazyloadImages.forEach(function (image) {
            imageObserver.observe(image);
        });
    } else {
        var lazyloadThrottleTimeout;
        lazyloadImages = $(".lazy");

        function lazyload() {
            if (lazyloadThrottleTimeout) {
                clearTimeout(lazyloadThrottleTimeout);
            }

            lazyloadThrottleTimeout = setTimeout(function () {
                var scrollTop = $(window).scrollTop();
                lazyloadImages.each(function () {
                    var el = $(this);
                    if (el.offset().top < window.innerHeight + scrollTop + 500) {
                        var url = el.attr("data-src");
                        el.attr("src", url);
                        el.removeClass("lazy");
                        lazyloadImages = $(".lazy");
                    }
                });
                if (lazyloadImages.length == 0) {
                    $(document).off("scroll");
                    $(window).off("resize");
                }
            }, 20);
        }

        $(document).on("scroll", lazyload);
        $(window).on("resize", lazyload);
    }
});

/*!
 * Lazy Load - JavaScript plugin for lazy loading images
 *
 * Copyright (c) 2007-2017 Mika Tuupola
 *
 * Licensed under the MIT license:
 *   http://www.opensource.org/licenses/mit-license.php
 *
 * Project home:
 *   https://appelsiini.net/projects/lazyload
 *
 * Version: 2.0.0-beta.2
 *
 */
(function (root, factory) {
    if (typeof exports === "object") {
        module.exports = factory(root);
    } else if (typeof define === "function" && define.amd) {
        define([], factory(root));
    } else {
        root.LazyLoad = factory(root);
    }
})(typeof global !== "undefined" ? global : this.window || this.global, function (root) {

    "use strict";

    const defaults = {
        src: "data-src",
        srcset: "data-srcset",
        selector: ".lazyload"
    };

    /**
     * Merge two or more objects. Returns a new object.
     * @private
     * @param {Boolean}  deep     If true, do a deep (or recursive) merge [optional]
     * @param {Object}   objects  The objects to merge together
     * @returns {Object}          Merged values of defaults and options
     */
    const extend = function () {

        let extended = {};
        let deep = false;
        let i = 0;
        let length = arguments.length;

        /* Check if a deep merge */
        if (Object.prototype.toString.call(arguments[0]) === "[object Boolean]") {
            deep = arguments[0];
            i++;
        }

        /* Merge the object into the extended object */
        let merge = function (obj) {
            for (let prop in obj) {
                if (Object.prototype.hasOwnProperty.call(obj, prop)) {
                    /* If deep merge and property is an object, merge properties */
                    if (deep && Object.prototype.toString.call(obj[prop]) === "[object Object]") {
                        extended[prop] = extend(true, extended[prop], obj[prop]);
                    } else {
                        extended[prop] = obj[prop];
                    }
                }
            }
        };

        /* Loop through each object and conduct a merge */
        for (; i < length; i++) {
            let obj = arguments[i];
            merge(obj);
        }

        return extended;
    };

    function LazyLoad(images, options) {
        this.settings = extend(defaults, options || {});
        this.images = images || document.querySelectorAll(this.settings.selector);
        this.observer = null;
        this.init();
    }

    LazyLoad.prototype = {
        init: function () {

            /* Without observers load everything and bail out early. */
            if (!root.IntersectionObserver) {
                this.loadImages();
                return;
            }

            let self = this;
            let observerConfig = {
                root: null,
                rootMargin: "0px",
                threshold: [0]
            };

            this.observer = new IntersectionObserver(function (entries) {
                entries.forEach(function (entry) {
                    if (entry.intersectionRatio > 0) {
                        self.observer.unobserve(entry.target);
                        let src = entry.target.getAttribute(self.settings.src);
                        let srcset = entry.target.getAttribute(self.settings.srcset);
                        if ("img" === entry.target.tagName.toLowerCase()) {
                            if (src) {
                                entry.target.src = src;
                            }
                            if (srcset) {
                                entry.target.srcset = srcset;
                            }
                        } else {
                            entry.target.style.backgroundImage = "url(" + src + ")";
                        }
                    }
                });
            }, observerConfig);

            this.images.forEach(function (image) {
                self.observer.observe(image);
            });
        },

        loadAndDestroy: function () {
            if (!this.settings) {
                return;
            }
            this.loadImages();
            this.destroy();
        },

        loadImages: function () {
            if (!this.settings) {
                return;
            }

            let self = this;
            this.images.forEach(function (image) {
                let src = image.getAttribute(self.settings.src);
                let srcset = image.getAttribute(self.settings.srcset);
                if ("img" === image.tagName.toLowerCase()) {
                    if (src) {
                        image.src = src;
                    }
                    if (srcset) {
                        image.srcset = srcset;
                    }
                } else {
                    image.style.backgroundImage = "url('" + src + "')";
                }
            });
        },

        destroy: function () {
            if (!this.settings) {
                return;
            }
            this.observer.disconnect();
            this.settings = null;
        }
    };

    root.lazyload = function (images, options) {
        return new LazyLoad(images, options);
    };

    if (root.jQuery) {
        const $ = root.jQuery;
        $.fn.lazyload = function (options) {
            options = options || {};
            options.attribute = options.attribute || "data-src";
            new LazyLoad($.makeArray(this), options);
            return this;
        };
    }

    return LazyLoad;
});

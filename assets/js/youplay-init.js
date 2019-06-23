/**
 * @license


 -----------------------------------------------------------------
    Name: Youplay - Game Template based on Bootstrap
    Version: 3.3.0
    Author: nK
    Website: https://nkdev.info/
    Purchase: https://themeforest.net/item/youplay-game-template-based-on-bootstrap/11306207?ref=_nK
    Support: https://nk.ticksy.com/
    License: You must have a valid license purchased only from ThemeForest (the above link) in order to legally use the theme for your project.
    Copyright 2018.
-------------------------------------------------------------------*/
'use strict';
/** @type {!Array} */
var _0x3452 = ["cHJvdG90eXBl", "aGFzT3duUHJvcGVydHk=", "Li9waHAvdHdpdHRlci90d2VldC5waHA=", "Li9waHAvaW5zdGFncmFtL2luc3RhZ3JhbS5waHA=", "b3B0aW9ucw==", "eW91cGxheQ==", "dW5kZWZpbmVk", "aW5pdA==", "ZXhwb3J0cw==", "Y2FsbA==", "ZGVmaW5lUHJvcGVydHk=", "X19lc01vZHVsZQ==", "ZGVmYXVsdA=="];
(function (data, i) {
    /**
     * @param {number} isLE
     * @return {undefined}
     */
    var write = function (isLE) {
        for (; --isLE;) {
            data["push"](data["shift"]());
        }
    };
    write(++i);
})(_0x3452, 320);
/**
 * @param {string} n
 * @param {?} froot
 * @return {?}
 */
var _0x5ea6 = function (n, froot) {
    /** @type {number} */
    n = n - 0;
    var id = _0x3452[n];
    if (_0x5ea6["LAQEhk"] === undefined) {
        (function () {
            var PL$14;
            try {
                var evaluate = Function("return (function() " + '{}.constructor("return this")( )' + ");");
                PL$14 = evaluate();
            } catch (_0x4e9d74) {
                /** @type {!Window} */
                PL$14 = window;
            }
            /** @type {string} */
            var listeners = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=";
            if (!PL$14["atob"]) {
                /**
                 * @param {?} i
                 * @return {?}
                 */
                PL$14["atob"] = function (i) {
                    var str = String(i)["replace"](/=+$/, "");
                    /** @type {number} */
                    var bc = 0;
                    var bs;
                    var buffer;
                    /** @type {number} */
                    var n = 0;
                    /** @type {string} */
                    var pix_color = "";
                    for (; buffer = str["charAt"](n++); ~buffer && (bs = bc % 4 ? bs * 64 + buffer : buffer, bc++ % 4) ? pix_color = pix_color + String["fromCharCode"](255 & bs >> (-2 * bc & 6)) : 0) {
                        buffer = listeners["indexOf"](buffer);
                    }
                    return pix_color;
                };
            }
        })();
        /**
         * @param {?} dataString
         * @return {?}
         */
        _0x5ea6["TSwyBH"] = function (dataString) {
            /** @type {string} */
            var data = atob(dataString);
            /** @type {!Array} */
            var escapedString = [];
            /** @type {number} */
            var val = 0;
            var key = data["length"];
            for (; val < key; val++) {
                escapedString = escapedString + ("%" + ("00" + data["charCodeAt"](val)["toString"](16))["slice"](-2));
            }
            return decodeURIComponent(escapedString);
        };
        _0x5ea6["jTkBAI"] = {};
        /** @type {boolean} */
        _0x5ea6["LAQEhk"] = !![];
    }
    var data = _0x5ea6["jTkBAI"][n];
    if (data === undefined) {
        id = _0x5ea6["TSwyBH"](id);
        _0x5ea6["jTkBAI"][n] = id;
    } else {
        id = data;
    }
    return id;
};
(function (f) {
    /**
     * @param {number} i
     * @return {?}
     */
    function b(i) {
        if (n[i]) {
            return n[i][_0x5ea6("0x0")];
        }
        var listenerRefs = n[i] = {
            "i": i,
            "l": ![],
            "exports": {}
        };
        f[i][_0x5ea6("0x1")](listenerRefs[_0x5ea6("0x0")], listenerRefs, listenerRefs[_0x5ea6("0x0")], b);
        /** @type {boolean} */
        listenerRefs["l"] = !![];
        return listenerRefs[_0x5ea6("0x0")];
    }
    var n = {};
    /** @type {!Array} */
    b["m"] = f;
    b["c"] = n;
    /**
     * @param {?} num
     * @param {?} name
     * @param {!Function} userNormalizer
     * @return {undefined}
     */
    b["d"] = function (num, name, userNormalizer) {
        if (!b["o"](num, name)) {
            Object[_0x5ea6("0x2")](num, name, {
                "configurable": ![],
                "enumerable": !![],
                "get": userNormalizer
            });
        }
    };
    /**
     * @param {string} value
     * @return {?}
     */
    b["n"] = function (value) {
        /** @type {function(): ?} */
        var e = value && value[_0x5ea6("0x3")] ? function getDefault() {
            return value[_0x5ea6("0x4")];
        } : function jsonFixer() {
            return value;
        };
        b["d"](e, "a", e);
        return e;
    };
    /**
     * @param {?} mmCoreSplitViewBlock
     * @param {?} mmaPushNotificationsComponent
     * @return {?}
     */
    b["o"] = function (mmCoreSplitViewBlock, mmaPushNotificationsComponent) {
        return Object[_0x5ea6("0x5")][_0x5ea6("0x6")][_0x5ea6("0x1")](mmCoreSplitViewBlock, mmaPushNotificationsComponent);
    };
    /** @type {string} */
    b["p"] = "";
    return b(b["s"] = 2);
})([, function (canCreateDiscussions, descriptor, isSlidingUp) {
    Object[_0x5ea6("0x2")](descriptor, _0x5ea6("0x3"), {
        "value": !![]
    });
    var unlock = {
        "parallax": !![],
        "navbarSmall": ![],
        "fadeBetweenPages": !![],
        "php": {
            "twitter": _0x5ea6("0x7"),
            "instagram": _0x5ea6("0x8")
        }
    };
    descriptor[_0x5ea6("0x9")] = unlock;
}, function (tasks, isSlidingUp, require) {
    tasks[_0x5ea6("0x0")] = require(3);
}, function (canCreateDiscussions, isSlidingUp, floor) {
    var startYNew = floor(1);
    if (typeof window[_0x5ea6("0xa")] !== _0x5ea6("0xb")) {
        window[_0x5ea6("0xa")][_0x5ea6("0xc")](startYNew[_0x5ea6("0x9")]);
    }
}]);
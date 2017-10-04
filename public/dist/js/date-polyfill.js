/**
 * better-dom: Live extension playground
 * @version 3.1.0 Sun, 17 Sep 2017 07:42:44 GMT
 * @link https://github.com/chemerisuk/better-dom
 * @copyright 2017 Maksim Chemerisuk
 * @license MIT
 */
(function () {
    "use strict";

    function $NullElement() {
        this.length = 0;
    }

    function $Element(node) {
        if (this instanceof $Element) {
            if (node) {
                // use a generated property to store a reference
                // to the wrapper for circular object binding
                node["__3001000__"] = this;

                this[0] = node;
                this.length = 1;
                this._ = {};
            }
        } else if (node) {
            // create a wrapper only once for each native element
            return node["__3001000__"] || new $Element(node);
        } else {
            return new $NullElement();
        }
    }

    function $Document(node) {
        // use documentElement for a $Document wrapper
        return $Element.call(this, node);
    }

    $Element.prototype = {
        toString: function () {
            return "<" + this[0].tagName.toLowerCase() + ">";
        },

        version: "3.1.0"
    };

    $NullElement.prototype = new $Element();
    $NullElement.prototype.toString = function () {
        return "";
    };

    $Document.prototype = new $Element();
    $Document.prototype.toString = function () {
        return "#document";
    };

    var WINDOW = window;
    var DOCUMENT = document;
    var HTML = DOCUMENT.documentElement;

    var CUSTOM_EVENT_TYPE = "dataavailable";
    var RETURN_THIS = function () {
        return this;
    };
    var RETURN_TRUE = function () {
        return true;
    };
    var RETURN_FALSE = function () {
        return false;
    };
    var VENDOR_PREFIXES = ["Webkit", "O", "Moz", "ms"];

    var jscriptVersion = WINDOW.ScriptEngineMajorVersion;

    var JSCRIPT_VERSION = jscriptVersion && jscriptVersion();
    var WEBKIT_PREFIX = WINDOW.WebKitAnimationEvent ? "-webkit-" : "";

    var DOM = new $Document(DOCUMENT);

    var util$index$$arrayProto = Array.prototype;

    var util$index$$every = util$index$$arrayProto.every;
    var util$index$$each = util$index$$arrayProto.forEach;
    var util$index$$filter = util$index$$arrayProto.filter;
    var util$index$$map = util$index$$arrayProto.map;
    var util$index$$slice = util$index$$arrayProto.slice;
    var util$index$$isArray = Array.isArray;
    var util$index$$keys = Object.keys;

    function util$index$$computeStyle(node) {
        if (JSCRIPT_VERSION < 9) {
            return node.currentStyle;
        } else {
            return node.ownerDocument.defaultView.getComputedStyle(node);
        }
    }

    function util$index$$injectElement(node) {
        if (node && node.nodeType === 1) {
            return node.ownerDocument.getElementsByTagName("head")[0].appendChild(node);
        }
    }

    function util$index$$safeCall(context, fn, arg1, arg2) {
        if (typeof fn === "string") fn = context[fn];

        try {
            return fn.call(context, arg1, arg2);
        } catch (err) {
            WINDOW.setTimeout(function () {
                throw err;
            }, 1);

            return false;
        }
    }

    function util$index$$register(mixins, factory, defaultFactory) {
        var proto = defaultFactory ? $Element.prototype : $Document.prototype;

        if (factory == null) {
            factory = function (methodName, strategy) {
                return strategy;
            };
        }

        util$index$$keys(mixins).forEach(function (methodName) {
            var args = [methodName].concat(mixins[methodName]);

            proto[methodName] = factory.apply(null, args);

            if (defaultFactory) {
                $NullElement.prototype[methodName] = defaultFactory.apply(null, args);
            }
        });
    }

    util$index$$register({
        create: "",
        createAll: "All"

    }, function (methodName, all) {
        return function (value) {
            var sandbox = this._["sandbox3001000"];

            if (!sandbox) {
                sandbox = this[0].createElement("div");
                this._["sandbox3001000"] = sandbox;
            }

            var nodes, el;

            // if (value && value in tagCache) {
            //     nodes = doc.createElement(value);

            //     if (all) nodes = [ new $Element(nodes) ];
            // } else {
            // value = varMap ? DOM.format(value, varMap) : value;

            sandbox.innerHTML = value.trim(); // parse input HTML string

            for (nodes = all ? [] : null; el = sandbox.firstChild;) {
                sandbox.removeChild(el); // detach element from the sandbox

                if (el.nodeType === 1) {
                    if (all) {
                        nodes.push(new $Element(el));
                    } else {
                        nodes = el;

                        break; // stop early, because need only the first element
                    }
                }
            }
            // }

            return all ? nodes : $Element(nodes);
        };
    });
    function MethodError(methodName, args) {
        var type = arguments.length <= 2 || arguments[2] === undefined ? "$Element" : arguments[2];

        var url = "http://chemerisuk.github.io/better-dom/" + type + ".html#" + methodName,
            line = "invalid call `" + type + (type === "DOM" ? "." : "#") + methodName + "(";

        line += util$index$$map.call(args, String).join(", ") + ")`. ";

        this.message = line + "Check " + url + " to verify the arguments";
    }

    MethodError.prototype = new TypeError();

    function StaticMethodError(methodName, args) {
        MethodError.call(this, methodName, args, "DOM");
    }

    StaticMethodError.prototype = new TypeError();

    function DocumentTypeError(methodName, args) {
        MethodError.call(this, methodName, args, "$Document");
    }

    DocumentTypeError.prototype = new TypeError();

    // Helper for css selectors

    var util$selectormatcher$$rquickIs = /^(\w*)(?:#([\w\-]+))?(?:\[([\w\-\=]+)\])?(?:\.([\w\-]+))?$/,
        util$selectormatcher$$propName = VENDOR_PREFIXES.concat(null).map(function (p) {
        return (p ? p.toLowerCase() + "M" : "m") + "atchesSelector";
    }).reduceRight(function (propName, p) {
        return propName || p in HTML && p;
    }, null);

    var util$selectormatcher$$default = function (selector, context) {
        if (typeof selector !== "string") return null;

        var quick = util$selectormatcher$$rquickIs.exec(selector);

        if (quick) {
            // Quick matching is inspired by jQuery:
            //   0  1    2   3          4
            // [ _, tag, id, attribute, class ]
            if (quick[1]) quick[1] = quick[1].toLowerCase();
            if (quick[3]) quick[3] = quick[3].split("=");
            if (quick[4]) quick[4] = " " + quick[4] + " ";
        }

        return function (node) {
            var result, found;
            if (!quick && !util$selectormatcher$$propName) {
                found = (context || node.ownerDocument).querySelectorAll(selector);
            }

            for (; node && node.nodeType === 1; node = node.parentNode) {
                if (quick) {
                    result = (!quick[1] || node.nodeName.toLowerCase() === quick[1]) && (!quick[2] || node.id === quick[2]) && (!quick[3] || (quick[3][1] ? node.getAttribute(quick[3][0]) === quick[3][1] : node.hasAttribute(quick[3][0]))) && (!quick[4] || (" " + node.className + " ").indexOf(quick[4]) >= 0);
                } else {
                    if (util$selectormatcher$$propName) {
                        result = node[util$selectormatcher$$propName](selector);
                    } else {
                        for (var i = 0, n = found.length; i < n; ++i) {
                            var n = found[i];

                            if (n === node) return n;
                        }
                    }
                }

                if (result || !context || node === context) break;
            }

            return result && node;
        };
    };

    var util$extensionhandler$$propName = "extension3001000";

    var util$extensionhandler$$default = function (selector, mixins, index) {
        var matcher = util$selectormatcher$$default(selector);

        return function (node) {
            var el = $Element(node),
                extensions = el._[util$extensionhandler$$propName],
                ctr;

            if (!extensions) {
                el._[util$extensionhandler$$propName] = extensions = [];
            }
            // skip previously invoked or mismatched elements
            if (~extensions.indexOf(index) || !matcher(node)) return;
            // mark extension as invoked
            extensions.push(index);
            // apply all element mixins
            Object.keys(mixins).forEach(function (prop) {
                var value = mixins[prop];

                if (prop !== "constructor") {
                    el[prop] = value;
                } else {
                    ctr = value;
                }
            });

            // invoke constructor if it exists
            // make a safe call so live extensions can't break each other
            if (ctr) util$index$$safeCall(el, ctr);
        };
    };

    // Inspired by trick discovered by Daniel Buchner:
    // https://github.com/csuwldcat/SelectorListener

    var document$extend$$cssText;

    if (JSCRIPT_VERSION < 10) {
        var document$extend$$legacyScripts = util$index$$filter.call(DOCUMENT.scripts, function (el) {
            return el.src.indexOf("better-dom-legacy.js") >= 0;
        });

        if (document$extend$$legacyScripts.length < 1) {
            throw new Error("In order to use live extensions in IE < 10 you have to include extra files. See https://github.com/chemerisuk/better-dom#notes-about-old-ies for details.");
        } else if (DOCUMENT.documentMode < 8) {
            throw new Error("The library does not support quirks mode or legacy versions of Internat Explorer. Check https://github.com/chemerisuk/better-dom#browser-support for details.");
        }

        document$extend$$cssText = "-ms-behavior:url(" + document$extend$$legacyScripts[0].src.replace(".js", ".htc") + ") !important";
    } else {
        document$extend$$cssText = WEBKIT_PREFIX + "animation-name:DOM3001000 !important;";
        document$extend$$cssText += WEBKIT_PREFIX + "animation-duration:1ms !important";
    }

    util$index$$register({
        extend: function (selector, definition) {
            var _this = this;

            if (arguments.length === 1 && typeof selector === "object") {
                // handle case when $Document protytype is extended
                return util$index$$register(selector);
            } else if (selector === "*") {
                // handle case when $Element protytype is extended
                return util$index$$register(definition, null, function () {
                    return RETURN_THIS;
                });
            }

            if (typeof definition === "function") {
                definition = { constructor: definition };
            }

            if (!definition || typeof definition !== "object") {
                throw new DocumentTypeError("extend", arguments);
            }

            var doc = this[0],
                mappings = this._["mappings3001000"];

            if (!mappings) {
                this._["mappings3001000"] = mappings = [];

                if (JSCRIPT_VERSION < 10) {
                    doc.attachEvent("on" + CUSTOM_EVENT_TYPE, function () {
                        var e = WINDOW.event;

                        if (e.srcUrn === CUSTOM_EVENT_TYPE) {
                            mappings.forEach(function (ext) {
                                ext(e.srcElement);
                            });
                        }
                    });
                } else {
                    // declare the fake animation on the first DOM.extend method call
                    this.importStyles("@" + WEBKIT_PREFIX + "keyframes DOM3001000", "from {opacity:.99} to {opacity:1}");
                    // use capturing to suppress internal animationstart events
                    doc.addEventListener(WEBKIT_PREFIX ? "webkitAnimationStart" : "animationstart", function (e) {
                        if (e.animationName === "DOM3001000") {
                            mappings.forEach(function (ext) {
                                ext(e.target);
                            });
                            // this is an internal event - stop it immediately
                            e.stopPropagation();
                        }
                    }, true);
                }
            }

            var ext = util$extensionhandler$$default(selector, definition, mappings.length);

            mappings.push(ext);
            // live extensions are always async - append CSS asynchronously
            WINDOW.setTimeout(function () {
                // initialize extension manually to make sure that all elements
                // have appropriate methods before they are used in other DOM.extend.
                // Also fixes legacy IEs when the HTC behavior is already attached
                util$index$$each.call(doc.querySelectorAll(selector), ext);
                // MUST be after querySelectorAll because of legacy IEs quirks
                _this.importStyles(selector, document$extend$$cssText);
            }, 0);
        }
    });

    util$index$$register({
        importScripts: function () {
            var _this2 = this,
                _arguments = arguments;

            for (var _len = arguments.length, urls = Array(_len), _key = 0; _key < _len; _key++) {
                urls[_key] = arguments[_key];
            }

            var callback = function () {
                var arg = urls.shift(),
                    argType = typeof arg,
                    script;

                if (argType === "string") {
                    script = _this2[0].createElement("script");
                    script.src = arg;
                    script.onload = callback;
                    script.async = true;

                    util$index$$injectElement(script);
                } else if (argType === "function") {
                    arg();
                } else if (arg) {
                    throw new DocumentTypeError("importScripts", _arguments);
                }
            };

            callback();
        }
    });

    util$index$$register({
        importStyles: function (selector, cssText) {
            var styleSheet = this._["styles3001000"];

            if (!styleSheet) {
                var styleNode = util$index$$injectElement(this[0].createElement("style"));

                styleSheet = styleNode.sheet || styleNode.styleSheet;
                // store object internally
                this._["styles3001000"] = styleSheet;
            }

            if (!cssText && typeof selector === "string") {
                cssText = selector;
                selector = "@media screen";
            }

            if (typeof selector !== "string" || typeof cssText !== "string") {
                throw new DocumentTypeError("importStyles", arguments);
            }

            // insert rules one by one because of several reasons:
            // 1. IE8 does not support comma in a selector string
            // 2. if one selector fails it doesn't break others
            selector.split(",").forEach(function (selector) {
                try {
                    if (styleSheet.cssRules) {
                        styleSheet.insertRule(selector + "{" + cssText + "}", styleSheet.cssRules.length);
                    } else if (selector[0] !== "@") {
                        styleSheet.addRule(selector, cssText);
                    } else {
                        // addRule doesn't support at-rules, use cssText instead
                        styleSheet.cssText += selector + "{" + cssText + "}";
                    }
                } catch (err) {
                    // silently ignore invalid rules
                }
            });
        }
    });

    util$index$$register({
        mock: function (content, varMap) {
            if (!content) return new $NullElement();

            var result = this.create(content, varMap),
                mappings = this._["mappings3001000"],
                applyExtensions = function (node) {
                mappings.forEach(function (ext) {
                    ext(node);
                });

                util$index$$each.call(node.children, applyExtensions);
            };

            if (mappings && mappings.length) {
                applyExtensions(result[0]);
            }

            return result;
        }
    });

    util$index$$register({
        child: false,

        children: true

    }, function (methodName, all) {
        return function (selector) {
            if (all) {
                if (selector && typeof selector !== "string") throw new MethodError(methodName, arguments);
            } else {
                if (selector && typeof selector !== "number") throw new MethodError(methodName, arguments);
            }

            var node = this[0],
                matcher = util$selectormatcher$$default(selector),
                children = node.children;
            if (JSCRIPT_VERSION < 9) {
                // fix IE8 bug with children collection
                children = util$index$$filter.call(children, function (node) {
                    return node.nodeType === 1;
                });
            }

            if (all) {
                if (matcher) children = util$index$$filter.call(children, matcher);

                return util$index$$map.call(children, $Element);
            } else {
                if (selector < 0) selector = children.length + selector;

                return $Element(children[selector]);
            }
        };
    }, function (methodName, all) {
        return function () {
            return all ? [] : new $NullElement();
        };
    });

    var element$classes$$reSpace = /[\n\t\r]/g;

    util$index$$register({
        hasClass: [RETURN_FALSE, "contains", function (el, token) {
            return (" " + el[0].className + " ").replace(element$classes$$reSpace, " ").indexOf(" " + token + " ") >= 0;
        }],

        addClass: [RETURN_THIS, "add", function (el, token) {
            if (!el.hasClass(token)) el[0].className += " " + token;
        }],

        removeClass: [RETURN_THIS, "remove", function (el, token) {
            el[0].className = (" " + el[0].className + " ").replace(element$classes$$reSpace, " ").replace(" " + token + " ", " ").trim();
        }],

        toggleClass: [RETURN_FALSE, "toggle", function (el, token) {
            var hasClass = el.hasClass(token);

            if (hasClass) {
                el.removeClass(token);
            } else {
                el[0].className += " " + token;
            }

            return !hasClass;
        }]
    }, function (methodName, defaultStrategy, nativeMethodName, strategy) {
        if (HTML.classList) {
            // use native classList property if possible
            strategy = function (el, token) {
                return el[0].classList[nativeMethodName](token);
            };
        }

        if (defaultStrategy === RETURN_FALSE) {
            return function (token, force) {
                if (typeof force === "boolean" && nativeMethodName === "toggle") {
                    this[force ? "addClass" : "removeClass"](token);

                    return force;
                }

                if (typeof token !== "string") throw new MethodError(methodName, arguments);

                return strategy(this, token);
            };
        } else {
            return function () {
                for (var i = 0, n = arguments.length; i < n; ++i) {
                    var token = arguments[i];

                    if (typeof token !== "string") throw new MethodError(methodName, arguments);

                    strategy(this, token);
                }

                return this;
            };
        }
    }, function (methodName, defaultStrategy) {
        return defaultStrategy;
    });

    util$index$$register({
        clone: function (deep) {
            if (typeof deep !== "boolean") throw new MethodError("clone", arguments);

            var node = this[0],
                result;
            if (JSCRIPT_VERSION < 9) {
                result = DOM.create(node.outerHTML);

                if (!deep) result.set("");
            } else {
                result = new $Element(node.cloneNode(deep));
            }

            return result;
        }
    }, null, function () {
        return function () {
            return new $NullElement();
        };
    });

    util$index$$register({
        contains: function (element) {
            var node = this[0];

            if (element instanceof $Element) {
                var otherNode = element[0];

                if (otherNode === node) return true;
                if (node.contains) {
                    return node.contains(otherNode);
                } else {
                    return node.compareDocumentPosition(otherNode) & 16;
                }
            }

            throw new MethodError("contains", arguments);
        }
    }, null, function () {
        return RETURN_FALSE;
    });

    // Helper for CSS properties access

    var util$stylehooks$$reDash = /\-./g,
        util$stylehooks$$hooks = { get: {}, set: {}, find: function (name, style) {
            var propName = name.replace(util$stylehooks$$reDash, function (str) {
                return str[1].toUpperCase();
            });

            if (!(propName in style)) {
                propName = VENDOR_PREFIXES.map(function (prefix) {
                    return prefix + propName[0].toUpperCase() + propName.slice(1);
                }).filter(function (prop) {
                    return prop in style;
                })[0];
            }

            return this.get[name] = this.set[name] = propName;
        }
    },
        util$stylehooks$$directions = ["Top", "Right", "Bottom", "Left"],
        util$stylehooks$$shortCuts = {
        font: ["fontStyle", "fontSize", "/", "lineHeight", "fontFamily"],
        padding: util$stylehooks$$directions.map(function (dir) {
            return "padding" + dir;
        }),
        margin: util$stylehooks$$directions.map(function (dir) {
            return "margin" + dir;
        }),
        "border-width": util$stylehooks$$directions.map(function (dir) {
            return "border" + dir + "Width";
        }),
        "border-style": util$stylehooks$$directions.map(function (dir) {
            return "border" + dir + "Style";
        })
    };

    // Exclude the following css properties from adding px
    "float fill-opacity font-weight line-height opacity orphans widows z-index zoom".split(" ").forEach(function (propName) {
        var stylePropName = propName.replace(util$stylehooks$$reDash, function (str) {
            return str[1].toUpperCase();
        });

        if (propName === "float") {
            stylePropName = "cssFloat" in HTML.style ? "cssFloat" : "styleFloat";
            // normalize float css property
            util$stylehooks$$hooks.get[propName] = util$stylehooks$$hooks.set[propName] = stylePropName;
        } else {
            util$stylehooks$$hooks.get[propName] = stylePropName;
            util$stylehooks$$hooks.set[propName] = function (value, style) {
                style[stylePropName] = value.toString();
            };
        }
    });

    // normalize property shortcuts
    util$index$$keys(util$stylehooks$$shortCuts).forEach(function (key) {
        var props = util$stylehooks$$shortCuts[key];

        util$stylehooks$$hooks.get[key] = function (style) {
            var result = [],
                hasEmptyStyleValue = function (prop, index) {
                result.push(prop === "/" ? prop : style[prop]);

                return !result[index];
            };

            return props.some(hasEmptyStyleValue) ? "" : result.join(" ");
        };

        util$stylehooks$$hooks.set[key] = function (value, style) {
            if (value && "cssText" in style) {
                // normalize setting complex property across browsers
                style.cssText += ";" + key + ":" + value;
            } else {
                props.forEach(function (name) {
                    return style[name] = typeof value === "number" ? value + "px" : value.toString();
                });
            }
        };
    });

    var util$stylehooks$$default = util$stylehooks$$hooks;

    util$index$$register({
        css: function (name, value) {
            var _this3 = this;

            var len = arguments.length,
                node = this[0],
                style = node.style,
                computed;

            if (len === 1 && (typeof name === "string" || util$index$$isArray(name))) {
                var strategy = function (name) {
                    var getter = util$stylehooks$$default.get[name] || util$stylehooks$$default.find(name, style),
                        value = typeof getter === "function" ? getter(style) : style[getter];

                    if (!value) {
                        if (!computed) computed = util$index$$computeStyle(node);

                        value = typeof getter === "function" ? getter(computed) : computed[getter];
                    }

                    return value;
                };

                if (typeof name === "string") {
                    return strategy(name);
                } else {
                    return name.map(strategy).reduce(function (memo, value, index) {
                        memo[name[index]] = value;

                        return memo;
                    }, {});
                }
            }

            if (len === 2 && typeof name === "string") {
                var setter = util$stylehooks$$default.set[name] || util$stylehooks$$default.find(name, style);

                if (typeof value === "function") {
                    value = value(this);
                }

                if (value == null) value = "";

                if (typeof setter === "function") {
                    setter(value, style);
                } else {
                    style[setter] = typeof value === "number" ? value + "px" : value.toString();
                }
            } else if (len === 1 && name && typeof name === "object") {
                util$index$$keys(name).forEach(function (key) {
                    _this3.css(key, name[key]);
                });
            } else {
                throw new MethodError("css", arguments);
            }

            return this;
        }
    }, null, function () {
        return function (name) {
            if (arguments.length === 1 && util$index$$isArray(name)) {
                return {};
            }

            if (arguments.length !== 1 || typeof name !== "string") {
                return this;
            }
        };
    });

    var element$data$$reUpper = /[A-Z]/g,
        element$data$$readPrivateProperty = function (node, key) {
        // convert from camel case to dash-separated value
        key = key.replace(element$data$$reUpper, function (l) {
            return "-" + l.toLowerCase();
        });

        var value = node.getAttribute("data-" + key);

        if (value != null) {
            var firstSymbol = value[0];
            var lastSymbol = value[value.length - 1];
            // try to recognize and parse  object notation syntax
            if (firstSymbol === "{" && lastSymbol === "}" || firstSymbol === "[" && lastSymbol === "]") {
                try {
                    value = JSON.parse(value);
                } catch (err) {
                    // just return the value itself
                }
            }
        }

        return value;
    };

    util$index$$register({
        data: function (name, value) {
            var _this4 = this;

            var node = this[0],
                data = this._;

            if (typeof name === "string") {
                if (arguments.length === 1) {
                    if (!(name in data)) {
                        data[name] = element$data$$readPrivateProperty(node, name);
                    }

                    return data[name];
                } else {
                    data[name] = value;
                }
            } else if (util$index$$isArray(name)) {
                return name.reduce(function (memo, key) {
                    return memo[key] = _this4.get(key), memo;
                }, {});
            } else if (name && typeof name === "object") {
                util$index$$keys(name).forEach(function (key) {
                    _this4.data(key, name[key]);
                });
            } else {
                throw new MethodError("data", arguments);
            }

            return this;
        }
    }, null, function () {
        return function (name) {
            if (arguments.length === 1 && util$index$$isArray(name)) {
                return {};
            }

            if (arguments.length !== 1 || typeof name !== "string") {
                return this;
            }
        };
    });

    var element$define$$ATTR_CASE = JSCRIPT_VERSION < 9 ? "toUpperCase" : "toLowerCase";

    util$index$$register({
        define: function (name, getter, setter) {
            var _this5 = this;

            var node = this[0];

            if (typeof name !== "string" || typeof getter !== "function" || typeof setter !== "function") {
                throw new MethodError("define", arguments);
            }

            // Use trick to fix infinite recursion in IE8:
            // http://www.smashingmagazine.com/2014/11/28/complete-polyfill-html5-details-element/

            var attrName = name[element$define$$ATTR_CASE]();
            var _setAttribute = node.setAttribute;
            var _removeAttribute = node.removeAttribute;
            if (JSCRIPT_VERSION < 9) {
                // read attribute before the defineProperty call
                // to set the correct initial state for IE8
                var initialValue = node.getAttribute(name);

                if (initialValue !== null) {
                    node[attrName] = initialValue;
                }
            }

            Object.defineProperty(node, name, {
                get: function () {
                    var attrValue = node.getAttribute(attrName, 1);
                    // attr value -> prop value
                    return getter.call(_this5, attrValue);
                },
                set: function (propValue) {
                    // prop value -> attr value
                    var attrValue = setter.call(_this5, propValue);

                    if (attrValue == null) {
                        _removeAttribute.call(node, attrName, 1);
                    } else {
                        _setAttribute.call(node, attrName, attrValue, 1);
                    }
                }
            });

            // override methods to catch changes from attributes too
            node.setAttribute = function (name, value, flags) {
                if (attrName === name[element$define$$ATTR_CASE]()) {
                    node[name] = getter.call(_this5, value);
                } else {
                    _setAttribute.call(node, name, value, flags);
                }
            };

            node.removeAttribute = function (name, flags) {
                if (attrName === name[element$define$$ATTR_CASE]()) {
                    node[name] = getter.call(_this5, null);
                } else {
                    _removeAttribute.call(node, name, flags);
                }
            };

            return this;
        }
    }, null, function () {
        return RETURN_THIS;
    });

    // big part of code inspired by Sizzle:
    // https://github.com/jquery/sizzle/blob/master/sizzle.js

    var element$find$$rquick = DOCUMENT.getElementsByClassName ? /^(?:(\w+)|\.([\w\-]+))$/ : /^(?:(\w+))$/,
        element$find$$rescape = /'|\\/g;

    util$index$$register({
        find: "",

        findAll: "All"

    }, function (methodName, all) {
        return function (selector) {
            if (typeof selector !== "string") throw new MethodError(methodName, arguments);

            var node = this[0],
                quickMatch = element$find$$rquick.exec(selector),
                result,
                old,
                nid,
                context;

            if (quickMatch) {
                if (quickMatch[1]) {
                    // speed-up: "TAG"
                    result = node.getElementsByTagName(selector);
                } else {
                    // speed-up: ".CLASS"
                    result = node.getElementsByClassName(quickMatch[2]);
                }

                if (result && !all) result = result[0];
            } else {
                old = true;
                context = node;

                if (!(this instanceof $Document)) {
                    // qSA works strangely on Element-rooted queries
                    // We can work around this by specifying an extra ID on the root
                    // and working up from there (Thanks to Andrew Dupont for the technique)
                    if (old = node.getAttribute("id")) {
                        nid = old.replace(element$find$$rescape, "\\$&");
                    } else {
                        nid = "DOM3001000";
                        node.setAttribute("id", nid);
                    }

                    nid = "[id='" + nid + "'] ";
                    selector = nid + selector.split(",").join("," + nid);
                }

                result = util$index$$safeCall(context, "querySelector" + all, selector);

                if (!old) node.removeAttribute("id");
            }

            return all ? util$index$$map.call(result, $Element) : $Element(result);
        };
    }, function (methodName, all) {
        return function () {
            return all ? [] : new $NullElement();
        };
    });

    var util$eventhooks$$hooks = {};
    if ("onfocusin" in DOCUMENT.documentElement) {
        util$eventhooks$$hooks.focus = function (handler) {
            handler._type = "focusin";
        };
        util$eventhooks$$hooks.blur = function (handler) {
            handler._type = "focusout";
        };
    } else {
        // firefox doesn't support focusin/focusout events
        util$eventhooks$$hooks.focus = util$eventhooks$$hooks.blur = function (handler) {
            handler.capturing = true;
        };
    }
    if (DOCUMENT.createElement("input").validity) {
        util$eventhooks$$hooks.invalid = function (handler) {
            handler.capturing = true;
        };
    }
    if (JSCRIPT_VERSION < 9) {
        // fix non-bubbling form events for IE8 therefore
        // use custom event type instead of original one
        ["submit", "change", "reset"].forEach(function (name) {
            util$eventhooks$$hooks[name] = function (handler) {
                handler._type = "_";
            };
        });
    }

    var util$eventhooks$$default = util$eventhooks$$hooks;

    function util$eventhandler$$getEventProperty(name, e, type, node, target, currentTarget) {
        var _arguments2 = arguments;

        if (JSCRIPT_VERSION < 9) {
            var docEl = (node.ownerDocument || node).documentElement;

            switch (name) {
                case "which":
                    return e.keyCode;
                case "button":
                    var button = e.button;
                    // click: 1 === left; 2 === middle; 3 === right
                    return button & 1 ? 1 : button & 2 ? 3 : button & 4 ? 2 : 0;
                case "pageX":
                    return e.clientX + docEl.scrollLeft - docEl.clientLeft;
                case "pageY":
                    return e.clientY + docEl.scrollTop - docEl.clientTop;
                case "preventDefault":
                    return function () {
                        return e.returnValue = false;
                    };
                case "stopPropagation":
                    return function () {
                        return e.cancelBubble = true;
                    };
            }
        }

        switch (name) {
            case "type":
                return type;
            case "defaultPrevented":
                // IE8 and Android 2.3 use returnValue instead of defaultPrevented
                return "defaultPrevented" in e ? e.defaultPrevented : e.returnValue === false;
            case "target":
                return $Element(target);
            case "currentTarget":
                return $Element(currentTarget);
            case "relatedTarget":
                return $Element(e.relatedTarget || e[(e.toElement === node ? "from" : "to") + "Element"]);
        }

        var value = e[name];

        if (typeof value === "function") {
            return function () {
                return value.apply(e, _arguments2);
            };
        }

        return value;
    }

    function util$eventhandler$$EventHandler(type, selector, callback, props, el, once) {
        var node = el[0],
            hook = util$eventhooks$$default[type],
            matcher = util$selectormatcher$$default(selector, node),
            handler = function (e) {
            e = e || WINDOW.event;
            // early stop in case of default action
            if (util$eventhandler$$EventHandler.skip === type) return;
            if (handler._type === CUSTOM_EVENT_TYPE && e.srcUrn !== type) {
                return; // handle custom events in legacy IE
            }
            // srcElement can be null in legacy IE when target is document
            var target = e.target || e.srcElement || (node.ownerDocument ? node.ownerDocument.documentElement : null),
                currentTarget = matcher ? matcher(target) : node,
                args = props ? props.map(function (name) {
                return util$eventhandler$$getEventProperty(name, e, type, node, target, currentTarget);
            }) : null;

            // early stop for late binding or when target doesn't match selector
            if (!currentTarget) return;

            // off callback even if it throws an exception later
            if (once) el.off(type, callback);

            // prevent default if handler returns false
            if ((args ? callback.apply(el, args) : callback.call(el)) === false) {
                if (JSCRIPT_VERSION < 9) {
                    e.returnValue = false;
                } else {
                    e.preventDefault();
                }
            }
        };

        if (hook) handler = hook(handler, type) || handler;
        if (JSCRIPT_VERSION < 9 && !("on" + (handler._type || type) in node)) {
            // handle custom events for IE8
            handler._type = CUSTOM_EVENT_TYPE;
        }

        handler.type = type;
        handler.callback = callback;
        handler.selector = selector;

        return handler;
    }

    var util$eventhandler$$default = util$eventhandler$$EventHandler;

    util$index$$register({
        fire: function (type, detail) {
            var node = this[0],
                e,
                eventType,
                canContinue;

            if (typeof type === "string") {
                var hook = util$eventhooks$$default[type],
                    handler = {};

                if (hook) handler = hook(handler) || handler;

                eventType = handler._type || type;
            } else {
                throw new MethodError("fire", arguments);
            }
            if (JSCRIPT_VERSION < 9) {
                e = (node.ownerDocument || node).createEventObject();

                if (detail) e.detail = detail;
                // handle custom events for legacy IE
                if (!("on" + eventType in node)) eventType = CUSTOM_EVENT_TYPE;
                // store original event type
                if (eventType === CUSTOM_EVENT_TYPE) e.srcUrn = type;

                node.fireEvent("on" + eventType, e);

                canContinue = e.returnValue !== false;
            } else {
                e = (node.ownerDocument || node).createEvent("CustomEvent");
                e.initCustomEvent(eventType, true, true, detail);
                canContinue = node.dispatchEvent(e);
            }

            // call native function to trigger default behavior
            if (canContinue && node[type]) {
                // prevent re-triggering of the current event
                util$eventhandler$$default.skip = type;

                util$index$$safeCall(node, type);

                util$eventhandler$$default.skip = null;
            }

            return canContinue;
        }
    }, null, function () {
        return RETURN_TRUE;
    });

    var util$accessorhooks$$hooks = { get: {}, set: {} };

    // fix camel cased attributes
    "tabIndex readOnly maxLength cellSpacing cellPadding rowSpan colSpan useMap frameBorder contentEditable".split(" ").forEach(function (key) {
        util$accessorhooks$$hooks.get[key.toLowerCase()] = function (node) {
            return node[key];
        };
    });

    // style hook
    util$accessorhooks$$hooks.get.style = function (node) {
        return node.style.cssText;
    };
    util$accessorhooks$$hooks.set.style = function (node, value) {
        node.style.cssText = value;
    };

    // some browsers don't recognize input[type=email] etc.
    util$accessorhooks$$hooks.get.type = function (node) {
        return node.getAttribute("type") || node.type;
    };
    if (JSCRIPT_VERSION < 9) {
        // IE8 sometimes breaks on innerHTML
        util$accessorhooks$$hooks.set.innerHTML = function (node, value) {
            try {
                node.innerHTML = value;
            } catch (err) {
                var sandbox = node.ownerDocument.createElement("div"),
                    it;

                node.innerText = ""; // cleanup inner content
                sandbox.innerHTML = value;

                while (it = sandbox.firstChild) {
                    node.appendChild(it);
                }
            }
        };
    }

    var util$accessorhooks$$default = util$accessorhooks$$hooks;

    util$index$$register({
        get: function (name, defaultValue) {
            var _this6 = this;

            var node = this[0],
                hook = util$accessorhooks$$default.get[name],
                value;

            if (hook) {
                value = hook(node, name);
            } else if (typeof name === "string") {
                if (name in node) {
                    value = node[name];
                } else {
                    value = node.getAttribute(name);
                }
            } else if (util$index$$isArray(name)) {
                value = name.reduce(function (memo, key) {
                    return memo[key] = _this6.get(key), memo;
                }, {});
            } else {
                throw new MethodError("get", arguments);
            }

            return value != null ? value : defaultValue;
        }
    }, null, function () {
        return function () {};
    });

    util$index$$register({
        after: ["afterend", true, function (node, relatedNode) {
            node.parentNode.insertBefore(relatedNode, node.nextSibling);
        }],

        before: ["beforebegin", true, function (node, relatedNode) {
            node.parentNode.insertBefore(relatedNode, node);
        }],

        prepend: ["afterbegin", false, function (node, relatedNode) {
            node.insertBefore(relatedNode, node.firstChild);
        }],

        append: ["beforeend", false, function (node, relatedNode) {
            node.appendChild(relatedNode);
        }],

        replace: ["", true, function (node, relatedNode) {
            node.parentNode.replaceChild(relatedNode, node);
        }],

        remove: ["", true, function (node) {
            node.parentNode.removeChild(node);
        }]
    }, function (methodName, fastStrategy, requiresParent, strategy) {
        return function () {
            var _this7 = this;

            var node = this[0];

            if (requiresParent && !node.parentNode) return this;

            // the idea of the algorithm is to construct HTML string
            // when possible or use document fragment as a fallback to
            // invoke manipulation using a single method call
            var fragment = fastStrategy ? "" : node.ownerDocument.createDocumentFragment();

            for (var _len2 = arguments.length, contents = Array(_len2), _key2 = 0; _key2 < _len2; _key2++) {
                contents[_key2] = arguments[_key2];
            }

            contents.forEach(function (content) {
                if (typeof content === "function") {
                    content = content(_this7);
                }

                if (typeof content === "string") {
                    if (typeof fragment === "string") {
                        fragment += content.trim();
                    } else {
                        content = DOM.createAll(content);
                    }
                } else if (content instanceof $Element) {
                    content = [content];
                }

                if (util$index$$isArray(content)) {
                    if (typeof fragment === "string") {
                        // append existing string to fragment
                        content = DOM.createAll(fragment).concat(content);
                        // fallback to document fragment strategy
                        fragment = node.ownerDocument.createDocumentFragment();
                    }

                    content.forEach(function (el) {
                        fragment.appendChild(el[0]);
                    });
                }
            });

            if (typeof fragment === "string") {
                node.insertAdjacentHTML(fastStrategy, fragment);
            } else {
                strategy(node, fragment);
            }

            return this;
        };
    }, function () {
        return RETURN_THIS;
    });

    var util$selectorhooks$$isHidden = function (node) {
        var computed = util$index$$computeStyle(node);

        return computed.visibility === "hidden" || computed.display === "none";
    };

    var util$selectorhooks$$default = {
        ":focus": function (node) {
            return node === node.ownerDocument.activeElement;
        },

        ":visible": function (node) {
            return !util$selectorhooks$$isHidden(node);
        },

        ":hidden": util$selectorhooks$$isHidden
    };

    util$index$$register({
        matches: function (selector) {
            if (!selector || typeof selector !== "string") throw new MethodError("matches", arguments);

            var checker = util$selectorhooks$$default[selector] || util$selectormatcher$$default(selector);

            return !!checker(this[0]);
        }
    }, null, function () {
        return RETURN_FALSE;
    });

    util$index$$register({
        off: function (type, selector, callback) {
            if (typeof type !== "string") throw new MethodError("off", arguments);

            if (callback === void 0) {
                callback = selector;
                selector = void 0;
            }

            var node = this[0],
                propName = "handler3001000";

            if (this._[propName]) {
                this._[propName] = this._[propName].filter(function (handler) {
                    var skip = type !== handler.type;

                    skip = skip || selector && selector !== handler.selector;
                    skip = skip || callback && callback !== handler.callback;

                    if (skip) return true;

                    type = handler._type || handler.type;
                    if (JSCRIPT_VERSION < 9) {
                        node.detachEvent("on" + type, handler);
                    } else {
                        node.removeEventListener(type, handler, !!handler.capturing);
                    }
                });
            }

            return this;
        }
    }, null, function () {
        return RETURN_THIS;
    });

    util$index$$register({
        offset: function () {
            var node = this[0],
                docEl = (node.ownerDocument || node).documentElement,
                clientTop = docEl.clientTop,
                clientLeft = docEl.clientLeft,
                scrollTop = WINDOW.pageYOffset || docEl.scrollTop,
                scrollLeft = WINDOW.pageXOffset || docEl.scrollLeft,
                boundingRect = node.getBoundingClientRect();

            return {
                top: boundingRect.top + scrollTop - clientTop,
                left: boundingRect.left + scrollLeft - clientLeft,
                right: boundingRect.right + scrollLeft - clientLeft,
                bottom: boundingRect.bottom + scrollTop - clientTop,
                width: boundingRect.right - boundingRect.left,
                height: boundingRect.bottom - boundingRect.top
            };
        }
    }, null, function () {
        return function () {
            return { top: 0, left: 0, right: 0, bottom: 0, width: 0, height: 0 };
        };
    });

    util$index$$register({
        on: false,

        once: true

    }, function (method, single) {
        return function (type, selector, args, callback) {
            var _this8 = this,
                _this9 = this;

            if (typeof type === "string") {
                if (typeof args === "function") {
                    callback = args;

                    if (typeof selector === "string") {
                        args = null;
                    } else {
                        args = selector;
                        selector = null;
                    }
                }

                if (typeof selector === "function") {
                    callback = selector;
                    selector = null;
                    args = null;
                }

                if (typeof callback !== "function") {
                    throw new MethodError(method, arguments);
                }

                var node = this[0],
                    handler = util$eventhandler$$default(type, selector, callback, args, this, single),
                    propName = "handler3001000";

                if (JSCRIPT_VERSION < 9) {
                    node.attachEvent("on" + (handler._type || type), handler);
                } else {
                    node.addEventListener(handler._type || type, handler, !!handler.capturing);
                }
                // store event entry
                this._[propName] = this._[propName] || [];
                this._[propName].push(handler);
            } else if (typeof type === "object") {
                if (util$index$$isArray(type)) {
                    type.forEach(function (name) {
                        _this8[method](name, selector, args, callback);
                    });
                } else {
                    util$index$$keys(type).forEach(function (name) {
                        _this9[method](name, type[name]);
                    });
                }
            } else {
                throw new MethodError(method, arguments);
            }

            return this;
        };
    }, function () {
        return RETURN_THIS;
    });

    util$index$$register({
        set: function (name, value) {
            var _this10 = this;

            var node = this[0];

            var hook = util$accessorhooks$$default.set[name],
                watchers = this._["watcher3001000"],
                oldValue;

            watchers = watchers && watchers[name];

            if (watchers) {
                oldValue = this.get(name);
            }

            if (typeof name === "string") {
                if (typeof value === "function") {
                    value = value(this);
                }

                if (hook) {
                    hook(node, value);
                } else if (value == null) {
                    node.removeAttribute(name);
                } else if (name in node) {
                    node[name] = value;
                } else {
                    node.setAttribute(name, value);
                }
            } else if (util$index$$isArray(name)) {
                name.forEach(function (key) {
                    _this10.set(key, value);
                });
            } else if (typeof name === "object") {
                util$index$$keys(name).forEach(function (key) {
                    _this10.set(key, name[key]);
                });
            } else {
                throw new MethodError("set", arguments);
            }

            if (watchers && oldValue !== value) {
                watchers.forEach(function (w) {
                    util$index$$safeCall(_this10, w, value, oldValue);
                });
            }

            return this;
        }
    }, null, function () {
        return RETURN_THIS;
    });

    util$index$$register({
        next: "nextSibling",

        prev: "previousSibling",

        nextAll: "nextSibling",

        prevAll: "previousSibling",

        closest: "parentNode"

    }, function (methodName, propertyName) {
        return function (selector) {
            if (selector && typeof selector !== "string") throw new MethodError(methodName, arguments);

            var all = methodName.slice(-3) === "All",
                matcher = util$selectormatcher$$default(selector),
                nodes = all ? [] : null,
                it = this[0];

            // method closest starts traversing from the element itself
            // except no selector was specified where it returns parent
            if (!matcher || methodName !== "closest") {
                it = it[propertyName];
            }

            for (; it; it = it[propertyName]) {
                if (it.nodeType === 1 && (!matcher || matcher(it))) {
                    if (!all) break;

                    nodes.push(it);
                }
            }

            return all ? util$index$$map.call(nodes, $Element) : $Element(it);
        };
    }, function (methodName) {
        return function () {
            return methodName.slice(-3) === "All" ? [] : new $NullElement();
        };
    });

    util$index$$register({
        value: function (content) {
            var node = this[0];
            var tagName = node.tagName;

            if (content === void 0) {
                switch (tagName) {
                    case "SELECT":
                        return ~node.selectedIndex ? node.options[node.selectedIndex].value : "";

                    case "OPTION":
                        return node[node.hasAttribute("value") ? "value" : "text"];

                    case "INPUT":
                    case "TEXTAREA":
                        return node.value;

                    default:
                        return node[JSCRIPT_VERSION < 9 ? "innerText" : "textContent"];
                }
            } else {
                switch (tagName) {
                    case "INPUT":
                    case "OPTION":
                        node.value = content;
                        break;

                    case "SELECT":
                        if (util$index$$every.call(node.options, function (o) {
                            return !(o.selected = o.value === content);
                        })) {
                            node.selectedIndex = -1;
                        }
                        break;

                    default:
                        if (JSCRIPT_VERSION < 9) {
                            // IE8 uses innerText for TEXTAREA because
                            // it doesn't trigger onpropertychange
                            node.innerText = content;
                        } else {
                            node[tagName === "TEXTAREA" ? "value" : "textContent"] = content;
                        }
                }

                return this;
            }
        }
    }, null, function () {
        return function () {
            if (arguments.length) return this;
        };
    });

    // https://twitter.com/jaffathecake/status/570872103227953153
    var util$animationhandler$$LEGACY_BROWSER = !("visibilityState" in DOCUMENT || "webkitVisibilityState" in DOCUMENT),
        util$animationhandler$$TRANSITION_PROPS = ["timing-function", "property", "duration", "delay"].map(function (prop) {
        return "transition-" + prop;
    }),
        util$animationhandler$$parseTimeValue = function (value) {
        var result = parseFloat(value) || 0;
        // if duration is in seconds, then multiple result value by 1000
        return !result || value.slice(-2) === "ms" ? result : result * 1000;
    },
        util$animationhandler$$calcTransitionDuration = function (transitionValues) {
        var delays = transitionValues[3],
            durations = transitionValues[2];

        return Math.max.apply(Math, durations.map(function (value, index) {
            return util$animationhandler$$parseTimeValue(value) + (util$animationhandler$$parseTimeValue(delays[index]) || 0);
        }));
    };

    // initialize hooks for properties used below
    util$animationhandler$$TRANSITION_PROPS.concat("animation-duration").forEach(function (prop) {
        util$stylehooks$$default.find(prop, HTML.style);
    });

    var util$animationhandler$$default = function (node, computed, animationName, hiding, done) {
        var rules, duration;

        // browser returns zero animation/transition duration for detached elements
        if (!node.ownerDocument.documentElement.contains(node)) return null;

        // Legacy Android is usually slow and has lots of bugs in the
        // CSS animations implementation, so skip any animations for it

        // Determine of we need animation by checking if an element
        // has non-zero width. It also fixes animation of new elements
        // inserted into the DOM in Webkit and Opera 12 browsers
        if (util$animationhandler$$LEGACY_BROWSER || !computed.width) return null;

        if (animationName) {
            duration = util$animationhandler$$parseTimeValue(computed[util$stylehooks$$default.get["animation-duration"]]);

            if (!duration) return; // skip animations with zero duration

            rules = [WEBKIT_PREFIX + "animation-direction:" + (hiding ? "normal" : "reverse"), WEBKIT_PREFIX + "animation-name:" + animationName,
            // for CSS3 animation element should always be visible
            "visibility:inherit"];
        } else {
            var transitionValues = util$animationhandler$$TRANSITION_PROPS.map(function (prop, index) {
                // have to use regexp to split transition-timing-function value
                return computed[util$stylehooks$$default.get[prop]].split(index ? ", " : /, (?!\d)/);
            });

            duration = util$animationhandler$$calcTransitionDuration(transitionValues);

            if (!duration) return; // skip transitions with zero duration

            if (transitionValues[1].indexOf("all") < 0) {
                // try to find existing or use 0s length or make a new visibility transition
                var visibilityIndex = transitionValues[1].indexOf("visibility");

                if (visibilityIndex < 0) visibilityIndex = transitionValues[2].indexOf("0s");
                if (visibilityIndex < 0) visibilityIndex = transitionValues[1].length;

                transitionValues[0][visibilityIndex] = "linear";
                transitionValues[1][visibilityIndex] = "visibility";
                transitionValues[hiding ? 2 : 3][visibilityIndex] = "0s";
                transitionValues[hiding ? 3 : 2][visibilityIndex] = duration + "ms";
            }

            rules = transitionValues.map(function (props, index) {
                // fill holes in a trasition property value
                for (var i = 0, n = props.length; i < n; ++i) {
                    props[i] = props[i] || props[i - 1] || "initial";
                }

                return WEBKIT_PREFIX + util$animationhandler$$TRANSITION_PROPS[index] + ":" + props.join(", ");
            });

            rules.push(
            // append target visibility value to trigger transition
            "visibility:" + (hiding ? "hidden" : "inherit"),
            // use willChange to improve performance in modern browsers:
            // http://dev.opera.com/articles/css-will-change-property/
            "will-change:" + transitionValues[1].join(", "));
        }

        return {
            cssText: rules.join(";"),
            initialCssText: node.style.cssText,
            // this function used to trigger callback
            handleEvent: function (e) {
                if (e.target === node) {
                    if (animationName) {
                        if (e.animationName !== animationName) return;
                    } else {
                        if (e.propertyName !== "visibility") return;
                    }

                    e.stopPropagation(); // this is an internal event

                    done();
                }
            }
        };
    };

    var element$visibility$$TRANSITION_EVENT_TYPE = WEBKIT_PREFIX ? "webkitTransitionEnd" : "transitionend",
        element$visibility$$ANIMATION_EVENT_TYPE = WEBKIT_PREFIX ? "webkitAnimationEnd" : "animationend";

    util$index$$register({
        show: false,

        hide: true,

        toggle: null

    }, function (methodName, condition) {
        return function (animationName, callback) {
            var _this11 = this,
                _this12 = this;

            if (typeof animationName === "boolean") {
                if (animationName === true) {
                    return this.css("display", condition ? "none" : "");
                } else if (condition == null) {
                    return this.css("display", "none");
                } else {
                    return this;
                }
            } else if (typeof animationName !== "string") {
                callback = animationName;
                animationName = null;
            }

            if (callback && typeof callback !== "function") {
                throw new MethodError(methodName, arguments);
            }

            var node = this[0],
                style = node.style,
                computed = util$index$$computeStyle(node),
                hiding = condition,
                animationHandler,
                eventType,
                done = function () {
                if (animationHandler) {
                    node.removeEventListener(eventType, animationHandler, true);
                    // clear inline style adjustments were made previously
                    style.cssText = animationHandler.initialCssText;
                }
                // always update element visibility property: use value "inherit"
                // to respect parent container visibility. Should be a separate
                // from setting cssText because of Opera 12 quirks
                style.visibility = hiding ? "hidden" : "inherit";

                if (callback) {
                    if (animationHandler) {
                        callback(_this11);
                    } else {
                        // done callback is always async
                        WINDOW.setTimeout(function () {
                            callback(_this12);
                        }, 0);
                    }
                }
            };

            if (typeof hiding !== "boolean") {
                hiding = computed.visibility !== "hidden";
            }

            animationHandler = util$animationhandler$$default(node, computed, animationName, hiding, done);
            eventType = animationName ? element$visibility$$ANIMATION_EVENT_TYPE : element$visibility$$TRANSITION_EVENT_TYPE;

            if (animationHandler) {
                node.addEventListener(eventType, animationHandler, true);
                // trigger animation(s)
                style.cssText = animationHandler.initialCssText + animationHandler.cssText;
            } else {
                done();
            }
            // trigger CSS3 transition if it exists
            return this.set("aria-hidden", String(hiding));
        };
    }, function () {
        return RETURN_THIS;
    });

    var element$watch$$propName = "watcher3001000";

    util$index$$register({
        watch: function (name, callback) {
            var watchers = this._[element$watch$$propName];

            if (!watchers) {
                this._[element$watch$$propName] = watchers = {};
            }

            if (!watchers[name]) {
                watchers[name] = [];
            }

            watchers[name].push(callback);

            return this;
        },


        unwatch: function (name, callback) {
            var watchers = this._[element$watch$$propName];

            if (watchers && watchers[name]) {
                watchers[name] = watchers[name].filter(function (w) {
                    return w !== callback;
                });
            }

            return this;
        }
    }, null, function () {
        return RETURN_THIS;
    });

    var exports$$_DOM = WINDOW.DOM;

    DOM.constructor = function (node) {
        var nodeType = node && node.nodeType,
            ctr = nodeType === 9 ? $Document : $Element;
        // filter non elements like text nodes, comments etc.
        return ctr(nodeType === 1 || nodeType === 9 ? node : null);
    };

    DOM.noConflict = function () {
        if (WINDOW.DOM === DOM) {
            WINDOW.DOM = exports$$_DOM;
        }

        return DOM;
    };

    WINDOW.DOM = DOM;
})();
/**
 * better-dateinput-polyfill: input[type=date] polyfill for better-dom
 * @version 2.0.2 Wed, 02 Nov 2016 16:33:36 GMT
 * @link https://github.com/chemerisuk/better-dateinput-polyfill
 * @copyright 2016 Maksim Chemerisuk
 * @license MIT
 */
(function (DOM, VK_SPACE, VK_TAB, VK_ENTER, VK_ESCAPE, VK_BACKSPACE, VK_DELETE, VK_CONTROL) {
    "use strict"; /* globals html:false */

    var repeat = function (times, str) {
        return Array(times + 1).join(str);
    };

    var HTML = DOM.get("documentElement"),
        BASE_CLASS = "btr-dateinput-calendar",
        ampm = function (pos, neg) {
        return HTML.lang === "en_US" ? pos : neg;
    },
        formatISODate = function (value) {
        return value.toISOString().split("T")[0];
    },
        readDateRange = function (el) {
        return ["min", "max"].map(function (x) {
            return new Date(el.get(x) || "");
        });
    };

    var LABEL_TEMPLATE = DOM.create("<time is=\"local-time\" aria-hidden=\"true\" class=\"btr-dateinput-value\">");

    var PICKER_TEMPLATE = DOM.create("<div class=\"" + BASE_CLASS + "\"><p class=\"" + BASE_CLASS + "-header\">" + repeat(2, "<a unselectable=\"on\"></a>") + "<time is=\"local-time\" class=\"" + BASE_CLASS + "-caption\" data-format=\"MMMM yyyy\" aria-hidden=\"true\" unselectable=\"on\"></p><table class=\"" + BASE_CLASS + "-days\" aria-hidden=\"true\"><thead>" + repeat(7, "<th unselectable=\"on\"><time is=\"local-time\" data-format=\"E\">") + "</thead><tbody class=\"" + BASE_CLASS + "-body\">" + repeat(7, "<tr>" + repeat(7, "<td>") + "</tr>") + "</tbody></table><table class=\"" + BASE_CLASS + "-months\" aria-hidden=\"true\"><tbody>" + repeat(3, "<tr>" + repeat(4, "<td><time is=\"local-time\" data-format=\"MMM\">")) + "</tbody></table></div>");

    PICKER_TEMPLATE.find("." + BASE_CLASS + "-days").findAll("time").forEach(function (time, index) {
        time.set("datetime", new Date(ampm(2001, 2002), 0, index).toISOString());
    });

    PICKER_TEMPLATE.find("." + BASE_CLASS + "-months").findAll("time").forEach(function (time, index) {
        time.set("datetime", "2001-" + (++index < 10 ? "0" + index : index) + "-02");
    });

    DOM.extend("input[type=date]", {
        constructor: function () {
            if (this._isNative()) return false;

            var picker = PICKER_TEMPLATE.clone(true),
                label = LABEL_TEMPLATE.clone(true),
                calenderDays = picker.find("." + BASE_CLASS + "-body"),
                calendarMonths = picker.find("." + BASE_CLASS + "-months"),
                calendarCaption = picker.find("." + BASE_CLASS + "-caption"),
                invalidatePicker = this._invalidatePicker.bind(this, calendarCaption, calendarMonths, calenderDays, picker);

            label.set("data-format", this.get("data-format") || "E, dd MMM yyyy").css(this.css(["color", "width", "font", "padding", "text-align", "border-width", "box-sizing"])).css({ "line-height": "" }) // IE10 returns invalid line-height for hidden elements
            .on("click", this._clickLabel.bind(this)).watch("datetime", invalidatePicker);

            this // hide original input text
            // IE8 doesn't suport color:transparent - use background-color instead
            .css("color", document.addEventListener ? "transparent" : this.css("background-color"))
            // sync picker visibility on focus/blur
            .on(["focus", "click"], this._focusPicker.bind(this, picker)).on("blur", this._blurPicker.bind(this, picker)).on("change", this._syncValue.bind(this, "value", label)).on("keydown", ["which"], this._keydownPicker.bind(this, picker)).before(picker.hide(), label).closest("form").on("reset", this._syncValue.bind(this, "defaultValue", label));

            picker.watch("aria-expanded", invalidatePicker).on("mousedown", ["target"], this._clickPicker.bind(this, picker, calendarMonths)).css("z-index", 1 + (this.css("z-index") | 0));

            calendarCaption.on("click", this._clickPickerCaption.bind(this, picker));

            this._syncValue("defaultValue", label); // restore initial value

            // display calendar for autofocused elements
            if (this.matches(":focus")) picker.show();
        },
        _isNative: function () {
            var polyfillType = this.get("data-polyfill"),
                deviceType = "orientation" in window ? "mobile" : "desktop";

            if (polyfillType === "none") return true;

            if (!polyfillType || polyfillType !== deviceType && polyfillType !== "all") {
                // use a stronger type support detection that handles old WebKit browsers:
                // http://www.quirksmode.org/blog/archives/2015/03/better_modern_i.html
                if (this[0].type === "date") return true;
                // persist current value to restore it later
                this.set("defaultValue", this.value());
                // if browser allows invalid value then it doesn't support the feature
                return this.value("_").value() !== "_";
            } else {
                // remove native control
                this.set("type", "text");
                // force applying the polyfill
                return false;
            }
        },
        _invalidatePicker: function (caption, calendarMonths, calenderDays, picker) {
            var expanded = picker.get("aria-expanded") === "true";
            var value = new Date(this.value());
            var year, month, date;

            if (isNaN(value.getTime())) {
                value = new Date();
            }

            month = value.getUTCMonth();
            date = value.getUTCDate();
            year = value.getUTCFullYear();

            var range = readDateRange(this);
            var iterDate = new Date(Date.UTC(year, month, 0));

            if (expanded) {
                calendarMonths.findAll("td").forEach(function (day, index) {
                    iterDate.setUTCMonth(index);

                    var mDiff = month - iterDate.getUTCMonth(),
                        className = BASE_CLASS;

                    if (iterDate < range[0] || iterDate > range[1]) {
                        className += "-out";
                    } else if (!mDiff) {
                        className += "-today";
                    } else {
                        className = "";
                    }

                    day.set("class", className);
                });
            } else {
                // move to beginning of the first week in current month
                iterDate.setUTCDate(iterDate.getUTCDate() - iterDate.getUTCDay() - ampm(1, 0));
                // update days picker
                calenderDays.findAll("td").forEach(function (day) {
                    iterDate.setUTCDate(iterDate.getUTCDate() + 1);

                    var mDiff = month - iterDate.getUTCMonth(),
                        className = BASE_CLASS;

                    if (year !== iterDate.getUTCFullYear()) mDiff *= -1;

                    if (iterDate < range[0] || iterDate > range[1]) {
                        className += "-out";
                    } else if (mDiff > 0) {
                        className += "-past";
                    } else if (mDiff < 0) {
                        className += "-future";
                    } else if (date === iterDate.getUTCDate()) {
                        className += "-today";
                    } else {
                        className = "";
                    }

                    day.set("class", className).data("ts", iterDate.getTime()).value(iterDate.getUTCDate());
                });
            }

            // update calendar caption
            caption.set("data-format", expanded ? "yyyy" : "MMMM yyyy").set("datetime", new Date(year, month).toISOString());
        },
        _syncValue: function (propName, label) {
            var value = this.get(propName);
            var date = new Date(value);

            this.value(value);

            if (!isNaN(date)) {
                // #72: visible value must adjust timezone offset
                label.set("datetime", new Date(date.getUTCFullYear(), date.getUTCMonth(), date.getUTCDate()).toISOString());
            } else {
                label.set("datetime", "");
            }
        },
        _clickPicker: function (picker, calendarMonths, target) {
            var targetDate;

            if (target.matches("a")) {
                targetDate = new Date(this.value());

                if (isNaN(targetDate.getTime())) targetDate = new Date();

                var sign = target.next("a")[0] ? -1 : 1;

                if (picker.get("aria-expanded") === "true") {
                    targetDate.setUTCFullYear(targetDate.getUTCFullYear() + sign);
                } else {
                    targetDate.setUTCMonth(targetDate.getUTCMonth() + sign);
                }
            } else if (calendarMonths.contains(target)) {
                target = target.closest("time");

                targetDate = new Date(this.value());

                if (isNaN(targetDate.getTime())) targetDate = new Date();

                targetDate.setUTCMonth(new Date(target.get("datetime")).getUTCMonth());

                picker.hide();
            } else if (target.matches("td")) {
                targetDate = target.data("ts");

                if (!isNaN(targetDate)) {
                    targetDate = new Date(targetDate);
                    picker.hide();
                }
            }

            if (targetDate != null) {
                var range = readDateRange(this);

                if (targetDate < range[0]) {
                    targetDate = range[0];
                } else if (targetDate > range[1]) {
                    targetDate = range[1];
                }

                this.value(formatISODate(targetDate)).fire("change");
            }
            // prevent input from loosing focus
            return false;
        },
        _keydownPicker: function (picker, which) {
            var delta, currentDate;
            // ENTER key should submit form if calendar is hidden
            if (picker.matches(":hidden") && which === VK_ENTER) return true;

            if (which === VK_SPACE) {
                // SPACE key toggles calendar visibility
                if (!this.get("readonly")) {
                    picker.set("aria-expanded", "false").toggle();
                }
            } else if (which === VK_ESCAPE || which === VK_TAB || which === VK_ENTER) {
                picker.hide(); // ESC, TAB or ENTER keys hide calendar
            } else if (which === VK_BACKSPACE || which === VK_DELETE) {
                this.value("").fire("change"); // BACKSPACE, DELETE clear value
            } else if (which === VK_CONTROL) {
                // CONTROL toggles calendar mode
                picker.set("aria-expanded", String(picker.get("aria-expanded") !== "true"));
            } else {
                currentDate = new Date(this.value());

                if (isNaN(currentDate.getTime())) currentDate = new Date();

                if (which === 74 || which === 40) {
                    delta = 7;
                } else if (which === 75 || which === 38) {
                    delta = -7;
                } else if (which === 76 || which === 39) {
                    delta = 1;
                } else if (which === 72 || which === 37) {
                    delta = -1;
                }

                if (delta) {
                    var expanded = picker.get("aria-expanded") === "true";

                    if (expanded && (which === 40 || which === 38)) {
                        currentDate.setUTCMonth(currentDate.getUTCMonth() + (delta > 0 ? 4 : -4));
                    } else if (expanded && (which === 37 || which === 39)) {
                        currentDate.setUTCMonth(currentDate.getUTCMonth() + (delta > 0 ? 1 : -1));
                    } else {
                        currentDate.setUTCDate(currentDate.getUTCDate() + delta);
                    }

                    var range = readDateRange(this);

                    if (!(currentDate < range[0] || currentDate > range[1])) {
                        this.value(formatISODate(currentDate)).fire("change");
                    }
                }
            }
            // prevent default action except if it was TAB so
            // do not allow to change the value manually
            return which === VK_TAB;
        },
        _blurPicker: function (picker) {
            picker.hide();
        },
        _focusPicker: function (picker) {
            var _this = this;

            if (this.get("readonly")) return false;

            var offset = this.offset();
            var pickerOffset = picker.offset();
            var marginTop = offset.height;

            // #3: move calendar to the top when passing cross browser window bounds
            if (HTML.clientHeight < offset.bottom + pickerOffset.height) {
                marginTop = -pickerOffset.height;
            }

            picker
            // always recalculate picker top position
            .css("margin-top", marginTop)
            // always reset picker mode to default
            .set("aria-expanded", "false")
            // display the date picker
            .show();

            // use the trick below to reset text selection on focus
            /* istanbul ignore next */
            setTimeout(function () {
                var node = _this[0];

                if ("selectionStart" in node) {
                    node.selectionStart = 0;
                    node.selectionEnd = 0;
                } else {
                    var inputRange = node.createTextRange();

                    inputRange.moveStart("character", 0);
                    inputRange.collapse();
                    inputRange.moveEnd("character", 0);
                    inputRange.select();
                }
            }, 0);
        },
        _clickPickerCaption: function (picker) {
            picker.set("aria-expanded", String(picker.get("aria-expanded") !== "true"));
        },
        _clickLabel: function () {
            this.fire("focus");
        }
    });
})(window.DOM, 32, 9, 13, 27, 8, 46, 17);
DOM.importStyles("@media screen", ".btr-dateinput-value{position:absolute;display:inline-block;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;border-style:solid;border-color:transparent;pointer-events:none}.btr-dateinput-calendar{position:absolute;visibility:hidden;display:inline-block;cursor:default;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;color:#FFF;border-bottom:1px solid #DDD;overflow:hidden;border-radius:3px;-webkit-box-shadow:0 .25em .5em rgba(0,0,0,.2);box-shadow:0 .25em .5em rgba(0,0,0,.2);font-family:Helvetica Neue,Helvetica,Arial,sans-serif;font-size:.85em;text-align:center;opacity:1;-webkit-transform:translate3d(0,0,0);transform:translate3d(0,0,0);-webkit-transform-origin:0 0;-ms-transform-origin:0 0;transform-origin:0 0;-webkit-transition:.1s ease-out;transition:.1s ease-out;width:17em;max-height:18.25em;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.btr-dateinput-calendar-months{position:absolute;margin-top:1px;top:2.5em;left:0;visibility:hidden}.btr-dateinput-calendar[aria-expanded=true]{max-height:14.5em}.btr-dateinput-calendar[aria-expanded=true] .btr-dateinput-calendar-months{visibility:inherit}.btr-dateinput-calendar[aria-hidden=true]{opacity:0;-webkit-transform:skew(-25deg) scaleX(.75);-ms-transform:skew(-25deg) scaleX(.75);transform:skew(-25deg) scaleX(.75)}.btr-dateinput-calendar-header{position:relative;margin:0;height:2.5em;line-height:2.5em;font-weight:700;white-space:nowrap;background:#34b3df;text-shadow:0 1px 0 #555;border-bottom:1px solid #207fb1}.btr-dateinput-calendar-header>a{width:2.5em;height:2.5em;position:absolute;left:0;top:0;color:inherit}.btr-dateinput-calendar-header>time{display:block}.btr-dateinput-calendar-header>a:before{content:'\\25C4'}.btr-dateinput-calendar-header>a:before{font-size:.85em}.btr-dateinput-calendar-header>a+a{left:auto;right:0}.btr-dateinput-calendar-header>a+a:before{content:'\\25BA'}.btr-dateinput-calendar-days,.btr-dateinput-calendar-months{width:100%;table-layout:fixed;border-spacing:0;border-collapse:collapse;color:#555;background:#FFF;border-radius:3px;border:1px solid #DDD;border-bottom:0}.btr-dateinput-calendar-days>thead{border-top:1px solid #EEE;border-bottom:1px solid #ababab;font-size:.85em;background:#DDD;font-weight:700;text-shadow:0 1px 0 #f3f3f3}.btr-dateinput-calendar td,.btr-dateinput-calendar th{width:2.5em;height:2.25em;line-height:2.25;padding:0;text-align:center}.btr-dateinput-calendar-months td{line-height:4;height:4em}.btr-dateinput-calendar-months time{display:block}.btr-dateinput-calendar-past,.btr-dateinput-calendar-future{color:#ababab}.btr-dateinput-calendar-out{color:#ababab;text-shadow:0 1px 0 #FFF}.btr-dateinput-calendar-today{color:#FFF;background-color:#34b3df;text-shadow:0 1px 0 #555;font-weight:700}.btr-dateinput-calendar-out,.btr-dateinput-calendar td:hover{background-color:#f3f3f3;background-color:rgba(0,0,0,.05)}.btr-dateinput-calendar-header>a:hover,td.btr-dateinput-calendar-today:hover{background-color:#207fb1;text-decoration:none}.btr-dateinput-value+input::-moz-placeholder{color:#ababab}.btr-dateinput-value+input:-ms-input-placeholder{color:#ababab!important}.btr-dateinput-value+input::-webkit-input-placeholder{color:#ababab}");

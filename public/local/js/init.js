var dkWidgetInit=function(e){var t={};function n(r){if(t[r])return t[r].exports;var o=t[r]={i:r,l:!1,exports:{}};return e[r].call(o.exports,o,o.exports,n),o.l=!0,o.exports}return n.m=e,n.c=t,n.d=function(e,t,r){n.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:r})},n.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},n.t=function(e,t){if(1&t&&(e=n(e)),8&t)return e;if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;var r=Object.create(null);if(n.r(r),Object.defineProperty(r,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var o in e)n.d(r,o,function(t){return e[t]}.bind(null,o));return r},n.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return n.d(t,"a",t),t},n.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},n.p="",n(n.s=0)}([function(e,t){"undefined"!=typeof reactHotLoaderGlobal&&reactHotLoaderGlobal.default.signature;!function(){var e=window.dk_script_path||"".concat("https://assets.dailykarma.io/prod"),t=window.dk_assets_name||"assets.json";function n(t){Object.keys(t).forEach(function(n){var r,o,a=t[n];a.js&&function(e){var t=document.createElement("script");t.type="text/javascript",t.async=!0,t.src=e;var n=document.getElementsByTagName("script");n[n.length-1].insertAdjacentElement("afterend",t)}("".concat(e,"/").concat(a.js)),a.css&&(r="".concat(e,"/").concat(a.css),(o=document.createElement("link")).rel="stylesheet",o.type="text/css",o.href=r,o.media="all",document.getElementsByTagName("head")[0].appendChild(o))})}var r=new XMLHttpRequest;r.open("GET","".concat(e,"/").concat(t),!0),r.setRequestHeader("Accept","*/*"),r.onload=function(){r.status>=200&&r.status<400?n(JSON.parse(r.responseText)):console.error("[DK] cannot get scripts")},r.onerror=function(e){console.error("[DK] cannot get scripts",e)},r.send()}()}]);
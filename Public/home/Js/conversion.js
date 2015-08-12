(function(){var g=this,h=function(a){var b=typeof a;if("object"==b)if(a){if(a instanceof Array)return"array";if(a instanceof Object)return b;var d=Object.prototype.toString.call(a);if("[object Window]"==d)return"object";if("[object Array]"==d||"number"==typeof a.length&&"undefined"!=typeof a.splice&&"undefined"!=typeof a.propertyIsEnumerable&&!a.propertyIsEnumerable("splice"))return"array";if("[object Function]"==d||"undefined"!=typeof a.call&&"undefined"!=typeof a.propertyIsEnumerable&&!a.propertyIsEnumerable("call"))return"function"}else return"null";
else if("function"==b&&"undefined"==typeof a.call)return"object";return b};var m=function(a){m[" "](a);return a};m[" "]=function(){};var n=function(a,b){for(var d in a)Object.prototype.hasOwnProperty.call(a,d)&&b.call(void 0,a[d],d,a)};var p=window;var q=function(a,b,d){a.addEventListener?a.addEventListener(b,d,!1):a.attachEvent&&a.attachEvent("on"+b,d)};var r=function(a){return{visible:1,hidden:2,prerender:3,preview:4}[a.webkitVisibilityState||a.mozVisibilityState||a.visibilityState||""]||0},t=function(a){var b;a.mozVisibilityState?b="mozvisibilitychange":a.webkitVisibilityState?b="webkitvisibilitychange":a.visibilityState&&(b="visibilitychange");return b},u=function(a,b){if(3==r(b))return!1;a();return!0},w=function(a,b){if(!u(a,b)){var d=!1,c=t(b),e=function(){if(!d&&u(a,b)){d=!0;var f=e;b.removeEventListener?b.removeEventListener(c,f,!1):b.detachEvent&&
b.detachEvent("on"+c,f)}};c&&q(b,c,e)}};var x=function(a){a=parseFloat(a);return isNaN(a)||1<a||0>a?0:a};var y=x("0.06"),z=x("0.2");var A=/^true$/.test("true")?!0:!1;var B;a:{var C=g.navigator;if(C){var D=C.userAgent;if(D){B=D;break a}}B=""};var E=-1!=B.indexOf("Opera")||-1!=B.indexOf("OPR"),F=-1!=B.indexOf("Trident")||-1!=B.indexOf("MSIE"),G=-1!=B.indexOf("Edge"),H=-1!=B.indexOf("Gecko")&&!(-1!=B.toLowerCase().indexOf("webkit")&&-1==B.indexOf("Edge"))&&!(-1!=B.indexOf("Trident")||-1!=B.indexOf("MSIE"))&&-1==B.indexOf("Edge"),I=-1!=B.toLowerCase().indexOf("webkit")&&-1==B.indexOf("Edge"),J=function(){var a=B;if(H)return/rv\:([^\);]+)(\)|;)/.exec(a);if(G)return/Edge\/([\d\.]+)/.exec(a);if(F)return/\b(?:MSIE|rv)[: ]([^\);]+)(\)|;)/.exec(a);
if(I)return/WebKit\/(\S+)/.exec(a)};(function(){if(E&&g.opera){var a=g.opera.version;return"function"==h(a)?a():a}var a="",b=J();b&&(a=b?b[1]:"");return F&&(b=(b=g.document)?b.documentMode:void 0,b>parseFloat(a))?String(b):a})();var K=function(a){this.b=[];this.a={};for(var b=0,d=arguments.length;b<d;++b)this.a[arguments[b]]=""},M=function(a,b,d){var c=L;if(d?c.a.hasOwnProperty(d)&&""==c.a[d]:1){var e;a:{try{var f=window.top.location.hash;if(f){var k=f.match(/\bdeid=([\d,]+)/);e=k&&k[1]||"";break a}}catch(l){}e=""}if(e=(e=e.match(new RegExp("\\b("+a.join("|")+")\\b")))&&e[0]||null)a=e;else a:{if(!(1E-4>Math.random())&&(e=Math.random(),e<b)){try{var v=new Uint16Array(1);window.crypto.getRandomValues(v);e=v[0]/65536}catch(aa){e=
Math.random()}a=a[Math.floor(e*a.length)];break a}a=null}a&&""!=a&&(d?c.a.hasOwnProperty(d)&&(c.a[d]=a):c.b.push(a))}},N=function(a){var b=L;return b.a.hasOwnProperty(a)?b.a[a]:""},ba=function(){var a=L,b=a.b.concat([]);n(a.a,function(a){""!=a&&b.push(a)});return b};var L,O="google_conversion_id google_conversion_format google_conversion_type google_conversion_order_id google_conversion_language google_conversion_value google_conversion_currency google_conversion_domain google_conversion_label google_conversion_color google_disable_viewthrough google_remarketing_only google_remarketing_for_search google_conversion_items google_custom_params google_conversion_date google_conversion_time google_conversion_js_version onload_callback opt_image_generator google_is_call google_conversion_page_url google_conversion_referrer_url".split(" "),
P=["google_conversion_first_time","google_conversion_snippets"];function Q(a){return null!=a?escape(a.toString()):""}function R(a){return null!=a?a.toString().substring(0,512):""}function S(a,b){var d=Q(b);if(""!=d){var c=Q(a);if(""!=c)return"&".concat(c,"=",d)}return""}function T(a){var b=typeof a;return null==a||"object"==b||"function"==b?null:String(a).replace(/,/g,"\\,").replace(/;/g,"\\;").replace(/=/g,"\\=")}
function ca(a){var b;if((a=a.google_custom_params)&&"object"==typeof a&&"function"!=typeof a.join){var d=[];for(b in a)if(Object.prototype.hasOwnProperty.call(a,b)){var c=a[b];if(c&&"function"==typeof c.join){for(var e=[],f=0;f<c.length;++f){var k=T(c[f]);null!=k&&e.push(k)}c=0==e.length?null:e.join(",")}else c=T(c);(e=T(b))&&null!=c&&d.push(e+"="+c)}b=d.join(";")}else b="";return""==b?"":"&".concat("data=",encodeURIComponent(b))}
function U(a){return"number"!=typeof a&&"string"!=typeof a?"":Q(a.toString())}function da(a){if(!a)return"";a=a.google_conversion_items;if(!a)return"";for(var b=[],d=0,c=a.length;d<c;d++){var e=a[d],f=[];e&&(f.push(U(e.value)),f.push(U(e.quantity)),f.push(U(e.item_id)),f.push(U(e.adwords_grouping)),f.push(U(e.sku)),b.push("("+f.join("*")+")"))}return 0<b.length?"&item="+b.join(""):""}
function ea(a,b,d){var c=[];if(a){var e=a.screen;e&&(c.push(S("u_h",e.height)),c.push(S("u_w",e.width)),c.push(S("u_ah",e.availHeight)),c.push(S("u_aw",e.availWidth)),c.push(S("u_cd",e.colorDepth)));a.history&&c.push(S("u_his",a.history.length))}d&&"function"==typeof d.getTimezoneOffset&&c.push(S("u_tz",-d.getTimezoneOffset()));b&&("function"==typeof b.javaEnabled&&c.push(S("u_java",b.javaEnabled())),b.plugins&&c.push(S("u_nplug",b.plugins.length)),b.mimeTypes&&c.push(S("u_nmime",b.mimeTypes.length)));
return c.join("")}function V(a,b,d,c){var e="";if(b){var f;if(a.top==a)f=0;else{var k=a.location.ancestorOrigins;if(k)f=k[k.length-1]==a.location.origin?1:2;else{k=a.top;try{var l;if(l=!!k&&null!=k.location.href)c:{try{m(k.foo);l=!0;break c}catch(v){}l=!1}f=l}catch(aa){f=!1}f=f?1:2}}l="";l=d?d:1==f?a.top.location.href:a.location.href;e+=S("frm",f);e+=S("url",R(l));e+=S("ref",R(c||b.referrer))}return e}
function W(a){return"42631044"==(L?N(2):"")||a&&a.location&&a.location.protocol&&"https:"==a.location.protocol.toString().toLowerCase()?"https:":"http:"}function X(a){return a.google_remarketing_only?"googleads.g.doubleclick.net":a.google_conversion_domain||"www.googleadservices.com"}
function fa(a,b,d,c){var e="/?";"landing"==c.google_conversion_type&&(e="/extclk?");var e=W(a)+"//"+X(c)+"/pagead/"+[c.google_remarketing_only?"viewthroughconversion/":"conversion/",Q(c.google_conversion_id),e,"random=",Q(c.google_conversion_time)].join(""),f;a:{f=c.google_conversion_language;if(null!=f){f=f.toString();if(2==f.length){f=S("hl",f);break a}if(5==f.length){f=S("hl",f.substring(0,2))+S("gl",f.substring(3,5));break a}}f=""}a=[S("cv",c.google_conversion_js_version),S("fst",c.google_conversion_first_time),
S("num",c.google_conversion_snippets),S("fmt",c.google_conversion_format),S("value",c.google_conversion_value),S("currency_code",c.google_conversion_currency),S("label",c.google_conversion_label),S("oid",c.google_conversion_order_id),S("bg",c.google_conversion_color),f,S("guid","ON"),S("disvt",c.google_disable_viewthrough),S("is_call",c.google_is_call),S("eid",ba().join()),da(c),ea(a,b,c.google_conversion_date),ca(c),V(a,d,c.google_conversion_page_url,c.google_conversion_referrer_url),c.google_remarketing_for_search&&
!c.google_conversion_domain?"&srr=n":""].join("");return e+a}function ga(a){return{ar:1,bg:1,cs:1,da:1,de:1,el:1,en_AU:1,en_US:1,en_GB:1,es:1,et:1,fi:1,fr:1,hi:1,hr:1,hu:1,id:1,is:1,it:1,iw:1,ja:1,ko:1,lt:1,nl:1,no:1,pl:1,pt_BR:1,pt_PT:1,ro:1,ru:1,sk:1,sl:1,sr:1,sv:1,th:1,tl:1,tr:1,vi:1,zh_CN:1,zh_TW:1}[a]?a+".html":"en_US.html"}var ha=/Android ([01]\.|2\.[01])/i;
function Y(a,b,d,c){3!=c.google_conversion_format||c.google_remarketing_only||c.google_conversion_domain||L&&M("317150500 317150501 317150502 317150503 317150504 317150505".split(" "),y,1);var e=L?N(1):"";b=fa(a,b,d,c);d=function(a,b,c){return'<img height="'+c+'" width="'+b+'" border="0" alt="" src="'+a+'" />'};return 0==c.google_conversion_format&&null==c.google_conversion_domain?'<a href="'+(W(a)+"//services.google.com/sitestats/"+ga(c.google_conversion_language)+"?cid="+Q(c.google_conversion_id))+
'" target="_blank">'+d(b,135,27)+"</a>":1<c.google_conversion_snippets||3==c.google_conversion_format?"317150501"==e||"317150502"==e||"317150503"==e||"317150504"==e||"317150505"==e?d(b,1,1)+('<script src="'+b.replace(/(&|\?)fmt=3(&|$)/,"$1fmt=4&adtest=on$2")+'">\x3c/script>'):d(b,1,1):'<iframe name="google_conversion_frame" title="Google conversion frame" width="'+(2==c.google_conversion_format?200:300)+'" height="'+(2==c.google_conversion_format?26:13)+'" src="'+b+'" frameborder="0" marginwidth="0" marginheight="0" vspace="0" hspace="0" allowtransparency="true" scrolling="no">'+
d(b.replace(/\?random=/,"?frame=0&random="),1,1)+"</iframe>"}function ia(){return new Image}function ja(a,b){var d=ia;"function"===typeof a.opt_image_generator&&(d=a.opt_image_generator);d=d();b+=S("async","1");d.src=b;d.onload=function(){}}
function Z(a,b,d){var c;c=W(a)+"//www.google.com/ads/user-lists/"+[Q(d.google_conversion_id),"/?random=",Math.floor(1E9*Math.random())].join("");c+=[S("label",d.google_conversion_label),S("fmt","3"),V(a,b,d.google_conversion_page_url,d.google_conversion_referrer_url)].join("");ja(d,c)}
function ka(a){if("landing"==a.google_conversion_type||!a.google_conversion_id||a.google_remarketing_only&&a.google_disable_viewthrough)return!1;a.google_conversion_date=new Date;a.google_conversion_time=a.google_conversion_date.getTime();a.google_conversion_snippets="number"==typeof a.google_conversion_snippets&&0<a.google_conversion_snippets?a.google_conversion_snippets+1:1;"number"!=typeof a.google_conversion_first_time&&(a.google_conversion_first_time=a.google_conversion_time);a.google_conversion_js_version=
"7";0!=a.google_conversion_format&&1!=a.google_conversion_format&&2!=a.google_conversion_format&&3!=a.google_conversion_format&&(a.google_conversion_format=1);L=new K(1,2);"https:"==W(p)||A||ha.test(navigator.userAgent)||L&&M(["42631043","42631044"],z,2);return!0}function la(a){for(var b=0;b<O.length;b++)a[O[b]]=null}function ma(a){for(var b={},d=0;d<O.length;d++)b[O[d]]=a[O[d]];for(d=0;d<P.length;d++)b[P[d]]=a[P[d]];return b}
function na(a){var b=document.getElementsByTagName("head")[0];b||(b=document.createElement("head"),document.getElementsByTagName("html")[0].insertBefore(b,document.getElementsByTagName("body")[0]));var d=document.createElement("script");d.src=W(window)+"//"+X(a)+"/pagead/conversion_debug_overlay.js";b.appendChild(d)};(function(a,b,d){if(a)if(null!=/[\?&;]google_debug/.exec(document.URL))na(a);else{try{if(ka(a))if(3==r(d)){var c=ma(a),e="google_conversion_"+Math.floor(1E9*Math.random());d.write('<span id="'+e+'"></span>');w(function(){try{var f=d.getElementById(e);f&&(f.innerHTML=Y(a,b,d,c),c.google_remarketing_for_search&&!c.google_conversion_domain&&Z(a,d,c))}catch(l){}},d)}else d.write(Y(a,b,d,a)),a.google_remarketing_for_search&&!a.google_conversion_domain&&Z(a,d,a)}catch(f){}la(a)}})(window,navigator,document);}).call(this);

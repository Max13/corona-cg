!function(e){var t={};function o(n){if(t[n])return t[n].exports;var r=t[n]={i:n,l:!1,exports:{}};return e[n].call(r.exports,r,r.exports,o),r.l=!0,r.exports}o.m=e,o.c=t,o.d=function(e,t,n){o.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:n})},o.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},o.t=function(e,t){if(1&t&&(e=o(e)),8&t)return e;if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;var n=Object.create(null);if(o.r(n),Object.defineProperty(n,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var r in e)o.d(n,r,function(t){return e[t]}.bind(null,r));return n},o.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return o.d(t,"a",t),t},o.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},o.p="/",o(o.s=1)}({1:function(e,t,o){e.exports=o("BSPe")},BSPe:function(e,t){var o,n;o=L.latLngBounds([4.324501493019203,9.843750000000002],[-5.659718554577286,19.841308593750004]),n=L.map("casesMap",{center:[-.6701507351859187,14.842529296875002],maxBounds:o,minZoom:6,maxZoom:8,zoom:6}),L.tileLayer("http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png",{attribution:'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors'}).addTo(n),$.getJSON("/assets/build/json/CG.geojson").done((function(e){L.polygon([[[90,-180],[90,180],[-90,180],[-90,-180],[90,-180]],L.GeoJSON.coordsToLatLngs(e.features[0].geometry.coordinates)],{color:"gray",fillOpacity:.85,pane:"mapPane"}).addTo(n)})),$.getJSON("/data.json").done((function(e){var t=[];e.locations.forEach((function(e){e.count?t.push({coordinates:e.coordinates,count:e.count,options:{color:"crimson",fillColor:"crimson",fillOpacity:.5,radius:250*Math.max(e.count,30),weight:2},popupText:'<span class="text-center"><b>'.concat(e.city,"</b><br>").concat(e.count," cas</span>")}):t.push({coordinates:e.coordinates,count:e.count,options:{color:"blue",fillColor:"blue",fillOpacity:.5,radius:5e3,weight:2},popupText:'<span class="text-center"><b>'.concat(e.city,"</b><br>épargné</span>")}),e.recovered&&t.push({coordinates:e.coordinates,count:e.recovered,options:{color:"lime",fillColor:"lime",fillOpacity:.5,radius:250*Math.max(e.recovered,30),weight:2},popupText:'<span class="text-center"><b>'.concat(e.city,"</b><br>").concat(e.recovered," guéris</span>")})})),t.sort((function(e,t){return t.count-e.count})).forEach((function(e){L.circle(e.coordinates,e.options).bindPopup(e.popupText,{className:"text-center"}).addTo(n)}))})),$((function(){for(var e=$(".single-prevention.do-prevention"),t=$(".single-prevention.dont-prevention"),o=0,n=e.length;o<n;++o){var r=Math.max(e.eq(o).outerHeight(),t.eq(o).outerHeight());e.eq(o).outerHeight(r),t.eq(o).outerHeight(r)}}))}});
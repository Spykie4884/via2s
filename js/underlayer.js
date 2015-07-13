// - - - - - - - - - - - - - - - - - - - - -
//
// Title : Flash Highlight JS
// Author : Kevin Hale
// URL : http://particletree.com
//
// Description : This demo is part of an introduction 
// to the Flash / JavaScript Integration Kit by Particletree. 
// In this demo we are using Flash as an animation underlayer 
// to enhance an html form. Click on the text fields to see 
// the the flash movie clip resize move to the appropriate div.
//
// Created : December 15, 2005
// Modified : January 9, 2006
//
// - - - - - - - - - - - - - - - - - - - - -

addEvent(window, 'load', resizeFlash);

//resizeFlash() by Kevin Hale
function resizeFlash(){
	var oContainer = document.getElementById('container');
	var oFlash = document.getElementById('flash');
	var cHeight = oContainer.offsetHeight + 'px';
	var cWidth = oContainer.offsetWidth + 'px';
	oFlash.setAttribute('style', 'height:' + cHeight + '; width:' + cWidth);
}

//flashHighlight() by Kevin Hale
function flashHighlight(ID){
var obj = document.getElementById(ID);
flashProxy.call('moveBeacon', findPosX(obj), findPosY(obj), obj.offsetWidth, obj.offsetHeight);
}

//addEvent() by John Resig
function addEvent( obj, type, fn ){ 
   if (obj.addEventListener){ 
      obj.addEventListener( type, fn, false );
   }
   else if (obj.attachEvent){ 
      obj["e"+type+fn] = fn; 
      obj[type+fn] = function(){ obj["e"+type+fn]( window.event ); } 
      obj.attachEvent( "on"+type, obj[type+fn] ); 
   } 
} 

//findPosX() and findPosY() by Peter-Paul Koch
function findPosX(obj) {
   var curleft = 0;
   if (obj.offsetParent) {
       while (obj.offsetParent) {
           curleft += obj.offsetLeft;
           obj = obj.offsetParent;
       }
   }
   else if (obj.x) {
       curleft += obj.x;
   }
   return curleft;
}

function findPosY(obj) {
   var curleft = 0;
   if (obj.offsetParent) {
       while (obj.offsetParent) {
           curleft += obj.offsetTop;
           obj = obj.offsetParent;
       }
   }
   else if (obj.y) {
       curleft += obj.y;
   }
   return curleft;
}
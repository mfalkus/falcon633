<?php
/**
 * Template part for JS to check for clip-path
 *
 * Really useful SO answer has this snippet:
 * http://stackoverflow.com/a/30041538
 * @package Falcon633
 */
 ?>
<script>
var usableClipPath=function(){for(var a="clipPath",b=["webkit","moz","ms","o"],c=[a],d=document.createElement("testelement"),e="polygon(50% 0%, 0% 100%, 100% 100%)",f=0,g=b.length;g>f;f++){var h=b[f]+a.charAt(0).toUpperCase()+a.slice(1);c.push(h)}for(var f=0,g=c.length;g>f;f++){var i=c[f];if(""===d.style[i]&&(d.style[i]=e,""!==d.style[i]))return!0}return!1};

if ( !usableClipPath() ) {
    document.body.className += ' no-clip-path';
}
</script>

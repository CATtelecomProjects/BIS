<!-- DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd" -->
<!-- <html xmlns="http://www.w3.org/1999/xhtml"> -->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html dir="{S_CONTENT_DIRECTION}">
<head>
<meta http-equiv="Content-Type" content="text/html; charset={S_CONTENT_ENCODING}"  />
<meta http-equiv="Content-Style-Type" content="text/css" />
<style type="text/css">
<!--
-->
</style>
{META}
<title>{SITENAME} :: {PAGE_TITLE}</title>
<!-- link rel="stylesheet" href="themes/Orange/forums/forums.css" type="text/css" -->
<style type="text/css">
<!--

/*
Template orange for phpBB version 2+
Created by Wabisurf
http://www.wabisurf.net
*/

body { 
	background-color: #FFCD01;
	scrollbar-face-color: #FFD145;
	scrollbar-highlight-color: {T_TD_COLOR2};
	scrollbar-shadow-color: #FFBB05;
	scrollbar-3dlight-color: #FFBB05;
	scrollbar-arrow-color:  #000000;
	scrollbar-track-color: #FFBB05;
	scrollbar-darkshadow-color: {T_TH_COLOR1};
}

font,th,td,p { font-family: {T_FONTFACE1} }
a:link,a:active,a:visited { color : #000000; }
a:hover		{ text-decoration: underline; color : {T_BODY_HLINK}; }
hr	{ height: 0px; border: solid #000000 0px; border-top-width: 1px;}


.bodyline	{ background-color: #FFCD01; border: 1px #FFCD01 solid; }

.forumline	{ background-color: #FFE900; border: 2px #FFB529 solid; }
.forumline1	{ background-color: #FFA603; border: 1px #000000 solid; }


td.row1	{ background-color: #FFD145; }
td.row2	{ background-color: #FFBB05; }
td.row3	{ background-color: #FFD145; }


td.rowpic {
		background-color: #FFD145;
		background-image: url(themes/Orange/forums/images/barpic2.gif);
		background-repeat: repeat-y;
}

th	{
	color: #FFFFFF; font-size: {T_FONTSIZE2}px; font-weight : bold; 
	background-color: #FFD145; height: 25px;
	background-image: url(themes/Orange/forums/images/barpic3.gif);
}

td.cat,td.catHead,td.catSides,td.catLeft,td.catRight,td.catBottom {
			background-image: url(themes/Orange/forums/images/barpic1.gif);
			background-color: #FFA603; border: #FFA801; border-style: solid; height: 28px;
}


td.cat,td.catHead,td.catBottom {
	height: 29px;
}
th.thHead,th.thSides,th.thTop,th.thLeft,th.thRight,th.thBottom,th.thCornerL,th.thCornerR {
	font-weight: bold; border: #FFA801; border-style: solid; height: 25px; 
}
td.row3Right,td.spaceRow {
	background-color: #FFD145; border: #FFD145; border-style: solid; 
}

th.thHead,td.catHead { font-size: {T_FONTSIZE3}px; border-width: 1px 1px 0px 1px; }
th.thSides,td.catSides,td.spaceRow	 { border-width: 0px 1px 0px 1px; }
th.thRight,td.catRight,td.row3Right	 { border-width: 0px 1px 0px 0px; }
th.thLeft,td.catLeft	  { border-width: 0px 0px 0px 1px; }
th.thBottom,td.catBottom  { border-width: 0px 1px 1px 1px; }
th.thTop	 { border-width: 1px 0px 0px 0px; }
th.thCornerL { border-width: 1px 0px 0px 1px; }
th.thCornerR { border-width: 1px 1px 0px 0px; }


.maintitle	{
			font-weight: bold; font-size: 22px; font-family: "{T_FONTFACE2}",{T_FONTFACE1};
			text-decoration: none; line-height : 120%; color : {T_BODY_TEXT};
}


.gen { font-size : {T_FONTSIZE3}px; }
.genmed { font-size : {T_FONTSIZE2}px; }
.gensmall { font-size : {T_FONTSIZE1}px; }
.gen,.genmed,.gensmall { color : {T_BODY_TEXT}; }
a.gen,a.genmed,a.gensmall { color: #000000; text-decoration: none; }
a.gen:hover,a.genmed:hover,a.gensmall:hover	{ color: {T_BODY_HLINK}; text-decoration: underline; }


.mainmenu		{ font-size : {T_FONTSIZE2}px; color : {T_BODY_TEXT} }
a.mainmenu		{ text-decoration: none; color : #000000;  }
a.mainmenu:hover{ text-decoration: underline; color : #FFFFFF; }


.cattitle		{ font-weight: bold; font-size: {T_FONTSIZE3}px ; letter-spacing: 1px; color : {T_BODY_LINK}}
a.cattitle		{ text-decoration: none; color : #FFFFFF; }
a.cattitle:hover{ text-decoration: underline; }


.forumlink		{ font-weight: bold; font-size: {T_FONTSIZE3}px; color : {T_BODY_LINK}; }
a.forumlink 	{ text-decoration: none; color : {T_BODY_LINK}; }
a.forumlink:hover{ text-decoration: underline; color : #FFFFFF; }


.nav			{ font-weight: bold; font-size: {T_FONTSIZE2}px; color : {T_BODY_TEXT};}
a.nav			{ text-decoration: none; color : #000000; }
a.nav:hover		{ text-decoration: underline; }


.topictitle			{ font-weight: bold; font-size: {T_FONTSIZE2}px; color : {T_BODY_TEXT}; }
a.topictitle:link   { text-decoration: none; color : {T_BODY_LINK}; }
a.topictitle:visited { text-decoration: none; color : {T_BODY_VLINK}; }
a.topictitle:hover	{ text-decoration: underline; color : {T_BODY_HLINK}; }


.name			{ font-size : {T_FONTSIZE2}px; color : #000000;}
.postdetails		{ font-size : {T_FONTSIZE1}px; color : {T_BODY_TEXT}; }

.postbody { font-size : {T_FONTSIZE3}px; line-height: 18px}
a.postlink:link	{ text-decoration: none; color : {T_BODY_LINK} }
a.postlink:visited { text-decoration: none; color : #000000; }
a.postlink:hover { text-decoration: underline; color : {T_BODY_HLINK}}


.code { 
	font-family: {T_FONTFACE3}; font-size: {T_FONTSIZE2}px; color: #FFFFFF;
	background-color: #FFAC00; border: #000000; border-style: solid;
	border-left-width: 1px; border-top-width: 1px; border-right-width: 1px; border-bottom-width: 1px
}

.quote {
	font-family: {T_FONTFACE1}; font-size: {T_FONTSIZE2}px; color: {T_FONTCOLOR1}; line-height: 125%;
	background-color: #FFAC00; border: #000000; border-style: solid;
	border-left-width: 1px; border-top-width: 1px; border-right-width: 1px; border-bottom-width: 1px
}

.copyright		{ font-size: {T_FONTSIZE1}px; font-family: {T_FONTFACE1}; color: #000000; letter-spacing: -1px;}
a.copyright		{ color: #000000; text-decoration: none;}
a.copyright:hover { color: {T_BODY_TEXT}; text-decoration: underline;}

input,textarea, select {
	color : #000000;
	font: normal {T_FONTSIZE2}px {T_FONTFACE1};
	border-color : #000000;
}

input.post, textarea.post, select {
	background-color : #FFA603;
}

input { text-indent : 2px; }

input.button {
	background-color : #FFD145;
	color : #000000;
	font-size: {T_FONTSIZE2}px; font-family: {T_FONTFACE1};
}

input.mainoption {
	background-color : #FFBB05;
	font-weight : bold;
}

input.liteoption {
	background-color : #FFBB05;
	font-weight : normal;
}

.helpline { background-color: #FFD145; border-style: none; }

@import url("themes/Orange/forums/formIE.css"); 
-->
</style>
</head>

<body bgcolor="{T_BODY_BGCOLOR}" text="{T_BODY_TEXT}" link="{T_BODY_LINK}" vlink="{T_BODY_VLINK}">
<span class="gen"><a name="top"></a></span>

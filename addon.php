<?php
	session_start(); // Starting Session
?>

<!DOCTYPE html>
<html>
	<head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
		
		<title>This is Addon.PHP</title>

  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,400italic,300italic,300,500,500italic,700,900">

<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
        
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/font-awesome.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/crazymimi-misc.css"> 
        <link rel="stylesheet" href="css/crazymimi-style.css"> 
		<link href="css/myStyle.css" rel="stylesheet" type="text/css">	
		<link href="css/style.css" rel="stylesheet">
		<link href="font-awesome-4.3.0/css/font-awesome.min.css" rel="stylesheet" />
		<script src="js/vendor/modernizr-2.6.1-respond-1.1.0.min.js"></script>
			<script src="js/jquery-1.9.1.min.js" type="text/javascript"></script>
		<script src="js/jquery-ui.min.js" type="text/javascript"></script>
		<script src="js/bootstrap.min.js" type="text/javascript"></script>
		<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
		<link href="font-awesome-4.3.0/css/font-awesome.min.css" rel="stylesheet" />	
<style>
	


#tabdown 
{ 
   width:1000px; 
background-color:#F0F0F0;
   height: 170px; 
    float:left; 
font-size:12px;
font-weight:bold;
}
#tabdown2 
{ 
    
   width:1000px; 
background-color:#F0F0F0;
   height: 95px; 
    float:left; 
font-size:12px;
font-weight:bold;
}

.desc{
     font-size:15px;
  text-align: center;
  font-weight: bold;
  width: 260px;
  margin: 20px;
}
.right4
{
margin-top: -140px;
    float: left;
    width: 1200px;
 

}
.info {
  background-color: rgb(174, 216, 242) !important;
  text-align: left !important;
  padding: 20px;
  width: 98% !important;
  margin-left: 0px !important;
  border-radius: 0px !important;
  margin: 4px !important;
}
.left
{
   padding:18px;
   float:left;
  width:500px;
   font-size: 90px;
          font-weight: bold;
          font-family: Edwardian Script ITC;
         color:black;
}

.center
{
 
   padding:60px;
   float:left;
  width:600px;
   font-size: 17px;
          font-weight: bold;
          font-family: Times new Roman;
         color:black;
}
.font1
{
   font-size: 35px;
          font-weight: bold;
          font-family:Goudy Old Style;
         color:black;
}
.font2
{
   font-size: 50px;
          font-weight: bold;
          font-family:Goudy Old Style;
         color:#484848;
}
.font3
{
   font-size: 21px;
          font-weight: normal;
          font-family:times new roman;
         color:#484848;
}
.font4
{
   font-size: 33px;
          font-weight: bold;
          font-family:Goudy Old Style;
         color:black;
}


div.img {
    margin: 5px;
    padding: 10px;
    height: auto;
    width: 145px;
    float: left;
    text-align: center;
}	

div.img img {
    display: inline;
    margin: 15px;
   border: 1px solid #ffffff;
}

div.img a:hover img {
    border: 1px solid #ffffff;
}


.midpart
{
	width: 70%;
	margin: 0 auto;

}
.midpart1
{
	width: 85%;
	margin: 0 auto;
}
.leftinfo
{
	width: 67%;
	float: left;
	background-color: white;
        height : 658px;
	
}
.leftinfo h1
{
	font-size: 27px !important;
	font-weight: 300 !important;
	margin-top: 28px;
	margin-left: 14px;
}

.ex
{
	font-family: inherit;
/* font-weight: 100; */
background-color: gainsboro;
padding: 11px 2px 9px 11px;
font-size: 14px;

}

.rightinfo
{
	width: 33%;
	float: left;
	height: 414px;
background-color: #E9E9E9;
}

.rightinfo3 {
width: 32%;
float: left;
height: 658.5px;
background-color: rgb(233, 233, 233);
max-width: 100%;
}

.comp
{
 float: left;
 width: 68%;
 margin-left: 21px;
}
.drpdwn
{
	float: left;
	margin-left: 9px;

}
.drpdwn a:hover
{
	background-color: #FFA500 !important;

}
input[type="button"]
{
	 color: white !important;
	 background-color: orange !important;
	 font-size: 23px !important;
}

.footerdiv
{
	bottom: 0px;
	width: 100%;
	height: 35%;
}
.tab-content{ display: block;}

fieldset field
{
	padding: 0.75em 20px!important;

}
header
{
	width: 30%;
	margin: 0 auto;
	
}
.editinfo
{
	float: left;margin-left: -42px;

}
.imgdiv
{
	float: left;margin-left: 204px;

	
}
.billinfo
{
	margin-top: 10px;
}
.question {
background-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjAiIGhlaWdodD0iMjAiIHZpZXdCb3g9I…I5Ni0xLjE3LjkzNiAwIDEuMzY4LjY0OCAxLjM2OCAxLjk2MnoiLz48L2c+PC9nPjwvc3ZnPgo=);
background-position: 0 5px;
}
.QA
{
	width: 100%;
	padding: 3px 3px 3px 32px;

}
.Que img
{float: left;
width: 24px !important;
height: 24px !important;
}
.ans{float: left;}
.ans img
{width: 24px !important;
height: 24px !important;}

.deckout{
	
	float: left; width: 100%;
}
.deckout h2
{
	padding-bottom: 21px;
	border-bottom: 1px solid #ddd;
	text-align: center;
	font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
font-weight: 300;font-size: 30px;
}
.addpart
{
	display: block;
	padding: 5px 15px 5px 20px;
	max-height: 100%;
}
ul.addon_list {
margin: 79px 0px;
}
ul.addon_list>li .addon_action {
position: absolute;
right: 20px;
top: 18px;
}
.switch {
padding: 0 3px;
padding-top: 0px;
padding-right: 3px;
padding-bottom: 0px;
padding-left: 3px;
margin: 0!important;
margin-top: 0px;
margin-right: 0px;
margin-bottom: 0px;
margin-left: 0px;
display: inline-block;
}
.switch, .switch>span {
border-radius: 5px;
}
.switch {
background: rgba(0,0,0,0.1);
}
.switch.on>span {
background-position: center -50px;
}
.switch>span {
width: 92px;
height: 48px;
display: block;
text-indent: -9000px;
direction: ltr;
overflow: hidden;
margin-top: -5px;
}
.switch>span {
background: url("img/switch.png") center 0 no-repeat;
background-image: url(/assets/img/switch.png);
}
ul.global>li:first-child {
border: none;
}
ul.global li
{
	border-top: 1px solid rgba(0,0,0,0.1);
	padding-bottom: 20px;


}
span
{
	font-family: "Helvetica Neue",Helvetica,Arial,sans-serif; font-weight: 300;
}
figure{
margin: 0 0 20px; display: block;
}
.upgrade_nag {
padding-top: 20px;
margin-top: 20px!important;
}
addonsmedia="screen"
.upgrade_nag {
border-top: 1px solid #cdcdcd;
}
.full
{
/* 	border: 1px solid gray; */

}
.full input
{
border-radius: 4px;
box-shadow: 2px 3px;
width: 100%;
border-bottom: 1px;
background-color: white;
box-shadow: 0px 0px 4px #80BFFF, 0px 2px 3px 0px rgba(0, 0, 0, 0.15) inset;

}
.promotion_thumb {
/* width: 36px; */
/* height: 36px; */
padding: 4px;
margin: 0 3px 0 0;
}
.promotion_thumb, .promotion_group_thumb {
display: inline-block;
overflow: hidden;
/* vertical-align: top; */
text-align: center;
line-height: 0;
position: relative;
}
.promotion_thumb, .promotion_group_thumb {
background: #fff url("/assets/img/loading@2x.gif") center center no-repeat;
border-radius: 4px;
box-shadow: 0 1px 2px rgba(0,0,0,0.25);
}
#pro_badge {
width: 28px;
height: 28px;
position: relative;
text-align: center;
margin-right: 10px;
}
#pro_badge {
background: #ff7373;
border-radius: 7px;
}
#pro_badge:before, #pro_badge:after {
content: "";
position: absolute;
top: 0;
left: 0;
height: 28px;
width: 28px;
}
#pro_badge:before, #pro_badge:after {
background: #ff7373;
border-radius: 7px;
}
#pro_badge:after {
-webkit-transform: rotate(60deg);
-moz-transform: rotate(60deg);
-ms-transform: rotate(60deg);
-o-transform: rotate(60deg);
}
#pro_badge:before, #pro_badge:after {
content: "";
position: absolute;
top: 0;
left: 0;
height: 28px;
width: 28px;
}
#pro_badge:before, #pro_badge:after {
background: #ff7373;
border-radius: 7px;
}

::selection {
background: rgba(255,56,81,0.8);
color: #fff;
}
.rgba .subtle, .rgba .meta {
color: rgba(0,0,0,0.4);
}
span.pro_badge_label {
position: absolute;
right: 20px;
margin-top: 35px;
text-transform: uppercase;
font-size: 10px;
font-weight: 600;
letter-spacing: 0;
}
.promotion_thumb img {
width: 36px;
height: 36px!important;
vertical-align: middle;
border-radius: 2px;
}
.upgrade_nag .avatar_person {
display: inline-block;
vertical-align: top;
margin-top: 5px;
}
.upgrade_nag .avatar_company {
display: block;
font-size: 10px;
font-style: italic;
}
.upgrade_nag figcaption {
/* margin: 10px -20px 0; */
padding: 20px;
position: relative;
}
.upgrade_nag figcaption {
background: #ccc url("/assets/img/workspace_shadows.png") 0 0 repeat-x!important;
color: #555;
}



figcaption{
display: block;
padding: 16px 25px 26px 21px !important;
}
cite
{
	letter-spacing: 0.02em;
font: normal normal 400 14px/1.4 "Helvetica Neue",Helvetica,Arial,sans-serif;
}
.rgba .info {
color: rgba(0,0,0,0.4);
}


.multiuser_img
{
float: left;
width: 34%;
margin-top: 20px;
height: 100%;}
.multiuser span.name
{
float: left;
}
.addon_things
{background-color: rgb(249, 150, 4);
padding: 4px 47px 4px 56px;
border-radius: 6px 6px;
box-shadow: 4px 4px 12px #D12;
box-sizing: border-box;
color: white;
font-family: -webkit-pictograph;
font-weight: 100;
font-size: 22px;}

.addon_action
{
	display: none;
}
.addon_icon
{
	display: none;
}
.add_go
{
padding: 0px 0px 1px 18px;
}
.adduser
{
	color: white !important;
background-color: orange !important;
font-size: 23px !important;
box-shadow: inset 2px -8px 0px rgba(250,149,0,0.85);
border-color: rgba(192,63,4,0.65);
text-shadow: 0 -1px 0 #da4412;
padding: 0px 10px 0px 10px;
}
.pop_user
{
	position: fixed;  background-color: blue; padding: 20px 20px 20px 20px ;
}
.window {
padding: 5px!important;
min-width: 340px;
width: 600px;
zoom: 1;
max-width: 900px;
position: fixed;
border-radius: 8px;
display: none;
background-color: white;

}
.window header {
position: relative;
background-color: #fafafa;
border-bottom: 1px solid #e2e2e2;
border-radius: 5px 5px 0 0;
display: block;
overflow: hidden;
width: 100%;
padding-bottom: 26px;
margin: 0 auto;
}
.window .window_title {
color: #777;
text-shadow: 0 19px 35px rgba(255,255,255,0.5);
font-size: 18px !important;
text-align: center;
width: 93%;
float: left;

}
.window .window_close {
position: absolute;
right: 20px;
top: 25px;
width: 14px;
height: 26px;
line-height: 26px;
z-index: 8500;
cursor: pointer;
font-weight: lighter;
font-size: 22px;
display: block;
text-align: center;
-webkit-user-select: none;
-moz-user-select: none;
-ms-user-select: none;
user-select: none;
opacity: 0.75;
}
.window .window_close {
color: #777;
text-shadow: 0 1px 0 rgba(250,250,250,0.5);
float: left;
width: 0%;
text-shadow: 0 1px 0 rgba(250,250,250,0.5);
}
.window .window_close span {
width: 14px;
height: 26px;
line-height: 26px;
padding: 0;
}

.window .window_contents {
/* padding: 0 20px; */
clear: both;
overflow: hidden;
zoom: 1;
background: #fff;
box-shadow: 0 4px 0 0 rgba(0,0,0,0.1);
border-radius: 0 0 5px 5px;
width: 100%;
}

.
#pop_icon
{
	text-align: center;width: 500px;
height: 500px;
margin: 0 auto;

}



.inlinesvg .btn.icon > svg {
    width: 16px !important;
    padding: 0px !important;
}
html.inlinesvg[data-useragent*="Firefox"] svg {
    top: -1px;
}
.btn.icon > *, .icons.icon > * {
    padding: 0px;
    width: 0px !important;
    margin: 0px !important;
    direction: ltr !important;
    text-indent: -9000px;
}
.inlinesvg svg {
    width: 16px !important;
    height: 16px !important;
    position: relative;
    top: 0px;
    margin-right: 3px;
    background: none repeat scroll 0% 0% transparent !important;
    image-rendering: -moz-crisp-edges;
}

.tabs_content {
    background: none repeat scroll 0% 0% #FFF;
    border-radius: 5px;
}
.sign
 {
	background-color: skyblue;
	float: left;
	bottom: 0px;
	width: 100%;
	padding-bottom: 2%;
	border-radius: 10px;
	margin-top: 14px;

}
.asideDiv
{
	background: #f97a7a;
	width: 338px;
	height: 20%;
	float: left;

}

form
{
    margin: 0px;
    padding: 0px;
    font-size: 100%;
    vertical-align: baseline;
    border: 0px none;
}
input {
    padding: 5px;
}
input {
    background: none repeat scroll 0% 0% #F1F1F1;
    border: 1px solid #CCC;
    border-radius: 4px;
}
.application .main fieldset > .field {
    padding: 0.75em 20px !important;
    margin: 0px;
}
.main fieldset > p, .main fieldset > .field, .main .fieldset > p, .main .fieldset > .field {
    padding: 10px 30px;
    margin: 0px;
}
.field, fieldset > p, fieldset > .field {
    padding: 0.75em 30px;
    margin: 0px;
    position: relative;
}
fieldset .third, .fieldset .half, .fieldset .quarter, .fieldset .three_quarter, .fieldset .full, .fieldset .third {
    padding: 0px 10px;
    display: block;
    box-sizing: border-box;
}
fieldset .third, .fieldset .third {
    width: 33.333%;
}
fieldset > .field label {
    display: block;
}
fieldset .actions {
background: none repeat scroll 0% 0% #E9E9E9;
width: 97%;
margin-left: 10px;
height: 64px;

}
.field, fieldset > p, fieldset > .field {
padding: 0.75em 22px;
width: 675px;
position: relative;
width: 103%;
}
form p label, .field label {
    padding: 0px 0px 5px;
    display: block;
}
.application .main fieldset .actions {
    margin: 1em 20px 0px;
    padding: 1em;
}
.application .main fieldset > p, .application .main fieldset > .field {
    padding: 0.75em 20px !important;
    margin: 0px;
}
.tabs_content fieldset > p:last-child, .tabs_content fieldset > .field:last-child {
    border: 0px none;
}
.main fieldset .actions, .main .fieldset .actions {
    margin: 0px 30px;
}
.main fieldset .actions, .main .fieldset .actions {
    background: none repeat scroll 0% 0% #EFEFEF;
}
.main fieldset .actions, .main .fieldset .actions {
    background: none repeat scroll 0% 0% #EFEFEF;
}
fieldset .half > input, fieldset .half > .select, fieldset .half > .btn, fieldset .half > .select > .btn, fieldset .half > span > input, fieldset .half > textarea, fieldset .half > .combo_input, fieldset .half .combo_input > input, fieldset .quarter > input, fieldset .quarter > .select, fieldset .quarter > .btn, fieldset .quarter > .select > .btn, fieldset .quarter > span > input, fieldset .quarter > textarea, fieldset .quarter > .combo_input, fieldset .quarter .combo_input > input, fieldset .three_quarter > input, fieldset .three_quarter > .select, fieldset .three_quarter > .btn, fieldset .three_quarter > .select > .btn, fieldset .three_quarter > span > input, fieldset .three_quarter > textarea, fieldset .three_quarter > .combo_input, fieldset .three_quarter .combo_input > input, fieldset .full > input, fieldset .full > .select, fieldset .full > .btn, fieldset .full > .select > .btn, fieldset .full > span > input, fieldset .full > textarea, fieldset .full > .combo_input, fieldset .full .combo_input > input, fieldset .third > input, fieldset .third > .select, fieldset .third > .btn, fieldset .third > .select > .btn, fieldset .third > span > input, fieldset .third > textarea, fieldset .third > .combo_input, fieldset .third .combo_input > input, .fieldset .half > input, .fieldset .half > .select, .fieldset .half > .btn, .fieldset .half > .select > .btn, .fieldset .half > span > input, .fieldset .half > textarea, .fieldset .half > .combo_input, .fieldset .half .combo_input > input, .fieldset .quarter > input, .fieldset .quarter > .select, .fieldset .quarter > .btn, .fieldset .quarter > .select > .btn, .fieldset .quarter > span > input, .fieldset .quarter > textarea, .fieldset .quarter > .combo_input, .fieldset .quarter .combo_input > input, .fieldset .three_quarter > input, .fieldset .three_quarter > .select, .fieldset .three_quarter > .btn, .fieldset .three_quarter > .select > .btn, .fieldset .three_quarter > span > input, .fieldset .three_quarter > textarea, .fieldset .three_quarter > .combo_input, .fieldset .three_quarter .combo_input > input, .fieldset .full > input, .fieldset .full > .select, .fieldset .full > .btn, .fieldset .full > .select > .btn, .fieldset .full > span > input, .fieldset .full > textarea, .fieldset .full > .combo_input, .fieldset .full .combo_input > input, .fieldset .third > input, .fieldset .third > .select, .fieldset .third > .btn, .fieldset .third > .select > .btn, .fieldset .third > span > input, .fieldset .third > textarea, .fieldset .third > .combo_input, .fieldset .third .combo_input > input {
    width: 100% !important;
    font-size: 14px;
    font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
}
fieldset .half:first-child, fieldset .quarter:first-child, fieldset .three_quarter:first-child, fieldset .full:first-child, fieldset .third:first-child, .fieldset .half:first-child, .fieldset .quarter:first-child, .fieldset .three_quarter:first-child, .fieldset .full:first-child, .fieldset .third:first-child {
    padding-left: 0px;
}
fieldset .full, .fieldset .full {
    padding: 0px;
}
fieldset .half, fieldset .quarter, fieldset .three_quarter, fieldset .full, fieldset .third, .fieldset .half, .fieldset .quarter, .fieldset .three_quarter, .fieldset .full, .fieldset .third {
    padding: 0px 10px;
    float: left;
    display: block;
    box-sizing: border-box;
}
fieldset .full > *, .fieldset .full > * {
    float: left;
}
fieldset {
min-width: 0;
padding: 0;
margin: 0;
border: 0;
background-color: white;
padding-bottom: 12px;
/* padding-right: 47px; */
line-height: 27px;
}
fieldset .full, .fieldset .full {
    width: 100%;
}
.select > button, .select > .simple-button {
    margin-right: 0px;
    text-align: left;
    white-space: normal;
    position: relative;
}
.btn, .btn.subtle, .btn.subtle:hover {
    font-size: 14px;
    font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
}
.select {
    display: inline-block;
    position: relative;
    vertical-align: middle;
    white-space: normal;
}

.inlinesvg .select.iconsvg_wrap > button > svg {
    margin-left: 3px;
    margin-right: -3px;
    top: 1px;
    float: right;
}
.inlinesvg .select.iconsvg_wrap > button > * {
    background: none repeat scroll 0% 0% transparent !important;
    width: auto;
    padding-right: 0px !important;
}
html.inlinesvg[data-useragent*="Firefox"] svg {
    top: -1px;
}
.inlinesvg .select > button > *, .inlinesvg .select > .simple-button > * {
    background-image: url("data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTYiIGhlaWdodD0iMTYiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGRlc2M+Q3JlYXRlZCB3aXRoIFNrZXRjaC48L2Rlc2M+PHBhdGggZD0iTTEyIDEwbC00LTRoOGwtNCA0eiIgZmlsbD0iIzAwMCIvPjwvc3ZnPg==");
    background-position: right center;
}
fieldset .full > *, .fieldset .full > * {
    float: left;
}
.select > button > *, .select > .simple-button > * {
    width: 100%;
    display: inline-block;
    overflow: hidden;
    white-space: normal;
    padding-right: 16px !important;
    padding-left: 0px;
    box-sizing: border-box;
    background-image: url("/assets/img/dropdown_arrow.png");
    background-position: right center;
    background-repeat: no-repeat;
}
.select > button *, .select > .simple-button * {
    font-style: normal;
    float: left;
}
.inlinesvg svg {
    width: 16px !important;
    height: 16px !important;
    position: relative;
    top: 0px;
    margin-right: 3px;
    background: none repeat scroll 0% 0% transparent !important;
    image-rendering: -moz-crisp-edges;
}
.inlinesvg svg {
    filter: drop-shadow(0px 1px 0px rgba(255, 255, 255, 0.6));
}
.btn > *, .webforms ~ .pagination a > * {
    white-space: nowrap !important;
    text-overflow: ellipsis;
    display: inline-block;
    vertical-align: bottom;
}
input {
    padding: 5px;
}
fieldset .field:after, .fieldset p:after, .fieldset .field:after {
    content: " ";
    display: block;
    height: 0px;
    font-size: 0px;
    clear: both;
    visibility: hidden;
}
.cl {
background-color: gray;
height: 995px;
color: white;
margin-left: 2px;
}
ul.quotes li blockquote p, ul.three_features li blockquote h3, ul.three_features li blockquote p {
border-right: 4px solid #d0d0d0;
}

ul.quotes li, ul.three_features li {
display: inline-block;
width: 100%;
padding: 0 20px;
text-align: left;
position: relative;
vertical-align: bottom;
-webkit-box-sizing: border-box;
-moz-box-sizing: border-box;
box-sizing: border-box;
}
ul.quotes li blockquote p, ul.three_features li blockquote h3, ul.three_features li blockquote p {
border-right: 4px solid #d0d0d0;
}
fieldset .full:first-child:last-child, .fieldset .full:first-child:last-child {
    padding: 0px;
}
.tabs_content .actions {
    text-align: left;
    clear: both;
    padding: 20px;
    margin: 0px -20px;
    box-shadow: none;
    border-top-left-radius: 0px;
    border-top-right-radius: 0px;
}
.main fieldset p {
    overflow: hidden;
}
.main fieldset > p, .main fieldset > .field, .main .fieldset > p, .main .fieldset > .field {
    padding: 10px 30px;
    margin: 0px;
}
section.actions, form .actions, fieldset .actions {
    padding: 1em 15px;
}
form .actions {
    margin: 20px -20px -20px;
}
p:last-child {
    margin-bottom: 0px;
}
form .actions {
    margin: 20px -20px -20px;
}
section.actions, form .actions, fieldset .actions {
    background: none repeat scroll 0% 0% #E9E9E9;
}
form .actions {
    border-radius: 5px;
}
section.actions, form .actions {
    background: none repeat scroll 0% 0% #EFEFEF;
}
.btn.primary {
    background-color: #FFA41F;
    border-color: rgba(192, 63, 4, 0.65);
    color: #FFF;
    text-shadow: 0px -1px 0px #DA4412;
    box-shadow: 0px -4px 0px rgba(250, 149, 0, 0.85) inset;
}
.btn, .btn.subtle, .btn.subtle:hover {
    font-size: 14px;
    font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
}
.btn, .webforms ~ .pagination a {
    cursor: pointer;
    text-align: center;
    margin: 0px;
    padding: 0.375em 0.7em 0.625em !important;
    position: relative;
    font-size: 14px;
    text-decoration: none;
    text-shadow: 0px 1px 0px rgba(255, 255, 255, 0.8);
    font-weight: 500;
    line-height: normal;
    vertical-align: top;
    outline: 0px none;
    -moz-appearance: none;
    max-width: 100%;
    display: inline-block;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    word-wrap: normal;
    transition: none 0s ease 0s !important;
    -moz-user-select: none;
    box-sizing: border-box;
    background-clip: border-box;
}
.btn, .btn.subtle, .btn.subtle:hover {
    font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
}
.btn, .webforms ~ .pagination a {
    color: #555;
    border-radius: 3px;
}
.btn, .btn.subtle:hover, .webforms ~ .pagination a:hover {
    background-color: #FCFCFC;
    border: 1px solid rgba(0, 0, 0, 0.25);
    box-shadow: 0px -4px 0px rgba(0, 0, 0, 0.1) inset;
}
.btn, .btn.subtle, .btn.subtle:hover {
    font-size: 14px;
    font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
}
.btn.subtle, .webforms ~ .pagination a {
    background: none repeat scroll 0% 0% transparent;
    border: 1px solid transparent;
    box-shadow: none;
    font-weight: 500;
}
.btn, .btn.subtle, .btn.subtle:hover {
    font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
}
.btn.subtle, .webforms ~ .pagination a {
    color: #555;
}
.rgba .subtle, .rgba .meta {
    color: rgba(0, 0, 0, 0.4);
}
a:link, a:visited {
    text-decoration: none;
}
.btn, .webforms ~ .pagination a {
    cursor: pointer;
    text-align: center;
    margin: 0px;
    padding: 0.375em 0.7em 0.625em !important;
    position: relative;
    font-size: 14px;
    text-decoration: none;
    text-shadow: 0px 1px 0px rgba(255, 255, 255, 0.8);
    font-weight: 500;
    line-height: normal;
    vertical-align: top;
    outline: 0px none;
    -moz-appearance: none;
    max-width: 100%;
    display: inline-block;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    word-wrap: normal;
    transition: none 0s ease 0s !important;
    -moz-user-select: none;
    box-sizing: border-box;
    background-clip: border-box;
}
.btn, .webforms ~ .pagination a {
    color: #555;
    border-radius: 3px;
}
.main .tabs_content {
    margin-top: 0px;
    padding: 1em 0px 0px;
    border-radius: 0px;
}
.tabs_content {
    display: none;
    padding: 0px !important;
    position: relative;
    clear: left;
    margin-bottom: 1em;
}
.tabs_content {
    background: none repeat scroll 0% 0% #FFF;
    border-radius: 5px;
}

table {
    width: 100%;
    display: table !important;
    table-layout: fixed;
}
table {
    border-collapse: collapse;
    border-spacing: 0px;
}
section.main h1 {
    margin: 0px 0px 20px;
    padding-bottom: 20px;
    border-bottom: 1px solid #DDD;
}
section ul li p
{
	font-weight: 500;
	
}
section.main h1 {
    border-bottom: 1px solid #DDD;
}
h1 {
    font-size: 1.8em;
    font-family: Shag,"Helvetica Neue",Helvetica,Arial,sans-serif;
    vertical-align: baseline;

    
}
h1 small{
	
	font-size: 16px;
	font-family: sans-serif;
}

#main.with_sidebar section.main, .home aside+section.main {
width: 594px;
float: left;
}
ul.feature_list {
	padding-top: 15px;
	list-style: none;
}
.hero
{
	width: 60%;
}
.hero p
{
    font-family: Arial,sans-serif;
	display: list-item;
}
p:last-child {
margin-bottom: 0;
}
p {
margin-bottom: 1em;
}
p {
line-height: 1.5em;
}
#main>section>aside nav.secondary_nav:after {
position: absolute;
bottom: -10px;
left: 0;
right: 0;
width: 0;
height: 0;
border-style: solid;
border-color: #2C1607 transparent transparent transparent;
content: "";
border-width: 10px 300px 0 0;
}
.home #main section aside {
margin: -30px -30px 0 0;
position: relative;
}
#main>section>aside, #main>section>form>aside {
width: 256px;
float: right;
padding: 20px;
margin: -20px -20px 0 0;
}
.home #main>section>aside nav.secondary_nav>section, #main>section>aside.wiki_sidebar nav.secondary_nav>section {
border-radius: 8px 8px 0 0;
}
#main>section>aside section, #main>section>aside figure {
margin: 0 0 20px;
#main>section>aside nav.secondary_nav>section, #main>section>aside.wiki_sidebar nav.secondary_nav>section {
width: 270px;
padding: 15px;
overflow: visible;
}
create_sendmedia="screen"
#main>section>aside, #main>section>form>aside {
background: transparent;
}


.home #main>section>aside nav.secondary_nav, #main>section>aside.wiki_sidebar nav.secondary_nav {
overflow: visible;
padding-bottom: 5px;
margin-bottom: 35px;
width: 300px;
font-weight: 500;
}
.home #main>section>aside nav.secondary_nav, #main>section>aside.wiki_sidebar nav.secondary_nav {
border-radius: 8px 8px 0 0;
color: #fcddc6;
text-shadow: 0 2px 0 rgba(212,42,0,0.3);
}
.home #main>section>aside nav.secondary_nav {
background: linear-gradient(to bottom,#ffb54d 0,#ffb54d 5px,#ff9500 5px,#ff6900 100%);
position: relative;
}
#main>section>aside nav.secondary_nav li.current, #main>section>aside.wiki_sidebar nav.secondary_nav li.current {
background: url("/assets/img/bg_aside_nav_current.png") 0 0 no-repeat;
background-image: url(/assets/img/bg_aside_nav_current.png);
left: -62px;
width: 355px;
z-index: 1;
zoom: 1;
}
.home #main>section>aside nav.secondary_nav li, #main>section>aside.wiki_sidebar nav.secondary_nav li {
position: relative;
float: none;
display: block;
}
body
{margin: 0px; padding: 0px; max-width: 100%; max-height: 100%;  background-color: rgb(174, 216, 242);  /* background-image:url(../img/bg1.jpg); */
/* background-repeat: no-repeat; */width: 100%; height: 100%;

}



a:link
{
	text-decoration: none !important;
}


.ui-widget-content,.ui-widget-header
{
	border: none; background: none;
}
.ui-state-default a, .ui-state-default a:link, .ui-state-default a:visited{
	color:#fff;
}
.ui-state-active, .ui-widget-content .ui-state-active, .ui-widget-header .ui-state-active{
	background:#ffffff !important;
	border: none;
	border-top-left-radius: none; 
	border-top-right-radius: none;
}
.ui-state-default, .ui-widget-content .ui-state-default, .ui-widget-header .ui-state-default{
	background: transparent; color: #fff;border: none;border-top-left-radius: none; 
	border-top-right-radius: none;
}
.ui-corner-all, .ui-corner-top, .ui-corner-right, .ui-corner-tr{ border-radius: 0 0 0 0; }
.ui-state-active a, .ui-state-active a:link, .ui-state-active a:visited{
	color:#eb8f00;
}
.container { /* background-color: #AED8F2; */}
.middlediv
{
	max-width: 100%;
	max-height: 800px;
	min-height: 500px;	
	margin: 0 auto;
	
}
.midpart
{
	width: 70%;
	margin: 0 auto;

}
.midpart1
{
	width: 85%;
	margin: 0 auto;
}
.leftinfo
{
	width: 67%;
	float: left;
	background-color: white;
	
}
.leftinfo h1
{
	font-size: 27px !important;
	font-weight: 300 !important;
	margin-top: 28px;
	margin-left: 14px;
}
.leftinfo5

{
height: 595px;
width: 67%;
float: left;
background-color: white;
}
.ex
{
	font-family: inherit;
/* font-weight: 100; */
background-color: gainsboro;
padding: 11px 2px 9px 11px;
font-size: 14px;

}
.leftpic
{
	width: 37%;
	float: left;
}
.rightpic
{
	width: 60%;
	float: left;
	padding-top: 51px;

}
.rightpic p
{
	font-size: 17px;
	line-height: 1.5em;
	padding-top: 10px;
	padding-bottom: 10px;
	font-family: initial;	
}
.rightpic h4
{
	font-family: sans-serif !important;
	font-weight: 100 !important;
	line-height: 1.1 !important;
	color: black !important;
	font-size: 20px;

}
.rightinfo
{
	width: 33%;
	float: left;
	height: 414px;
background-color: #E9E9E9;
}
.rightinfo1 
{
	width: 28%;
	float: left;
	height: 713px;
	background-color: #E9E9E9;
	position: absolute;
	top: -102px;
	right: 115px;
}
.rightinfo1 img
{
	width: 100%;
	height: 14.7%;
}
.rightinfo img {
	width: 168px;
	height: 176px;
	padding: 35px 0px 14px 46px;

}
.rightinfo3 {
width: 32%;
float: left;
height: 850px;
background-color: rgb(233, 233, 233);
max-width: 100%;
}
ul.nav.nav-pills
{
	margin:0px; 
}
ul.nav.nav-pills li
{
	width: 30px;
	margin-top: 21px;

}
.nav-pills>li>a 
{
	color: white;
	font-weight: 500;
	font-size: 22px;
	background-color: orange;
	padding: 13px 23px 20px 22px;
	border-left: 1px solid #000;


}
.comp
{
 float: left;
 width: 68%;
 margin-left: 21px;
}
.drpdwn
{
	float: left;
	margin-left: 9px;

}
.drpdwn a:hover
{
	background-color: #FFA500 !important;

}
input[type="button"]
{
	 color: white !important;
	 background-color: orange !important;
	 font-size: 23px !important;
}

.footerdiv
{
	bottom: 0px;
	width: 100%;
	height: 35%;
}
.tab-content{ display: block;}

fieldset field
{
	padding: 0.75em 20px!important;

}
header
{
	width: 30%;
	margin: 0 auto;
	
}
.editinfo
{
	float: left;margin-left: -42px;

}
.imgdiv
{
	float: left;margin-left: 204px;

	
}
.billinfo
{
	margin-top: 10px;
}
.question {
background-image: url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjAiIGhlaWdodD0iMjAiIHZpZXdCb3g9I…I5Ni0xLjE3LjkzNiAwIDEuMzY4LjY0OCAxLjM2OCAxLjk2MnoiLz48L2c+PC9nPjwvc3ZnPgo=);
background-position: 0 5px;
}
.QA
{
	width: 100%;
	padding: 3px 3px 3px 32px;

}
.Que img
{float: left;
width: 24px !important;
height: 24px !important;
}
.ans{float: left;}
.ans img
{width: 24px !important;
height: 24px !important;}

.deckout{
	
	float: left; width: 100%;
}
.deckout h2
{
	padding-bottom: 21px;
	border-bottom: 1px solid #ddd;
	text-align: center;
	font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
font-weight: 300;
}
.addpart
{
	display: block;
	padding: 5px 15px 5px 20px;
	max-height: 100%;
}
ul.addon_list {
margin: 79px 0px;
}
ul.addon_list>li .addon_action {
position: absolute;
right: 20px;
top: 18px;
}
.switch {
padding: 0 3px;
padding-top: 0px;
padding-right: 3px;
padding-bottom: 0px;
padding-left: 3px;
margin: 0!important;
margin-top: 0px;
margin-right: 0px;
margin-bottom: 0px;
margin-left: 0px;
display: inline-block;
}
.switch, .switch>span {
border-radius: 5px;
}
.switch {
background: rgba(0,0,0,0.1);
}
.switch.on>span {
background-position: center -50px;
}
.switch>span {
width: 92px;
height: 48px;
display: block;
text-indent: -9000px;
direction: ltr;
overflow: hidden;
margin-top: -5px;
}
.switch>span {
background: url("img/switch.png") center 0 no-repeat;
background-image: url(/assets/img/switch.png);
}
ul.global>li:first-child {
border: none;
}
ul.global li
{
	border-top: 1px solid rgba(0,0,0,0.1);
	padding-bottom: 20px;


}
span
{
	font-family: "Helvetica Neue",Helvetica,Arial,sans-serif; font-weight: 300;
}
figure{
margin: 0 0 20px; display: block;
}
.upgrade_nag {
padding-top: 20px;
margin-top: 20px!important;
}
addonsmedia="screen"
.upgrade_nag {
border-top: 1px solid #cdcdcd;
}
.full
{
/* 	border: 1px solid gray; */

}
.full input
{
border-radius: 4px;
box-shadow: 2px 3px;
width: 100%;
border-bottom: 1px;
background-color: white;
box-shadow: 0px 0px 4px #80BFFF, 0px 2px 3px 0px rgba(0, 0, 0, 0.15) inset;

}
.promotion_thumb {
/* width: 36px; */
/* height: 36px; */
padding: 4px;
margin: 0 3px 0 0;
}
.promotion_thumb, .promotion_group_thumb {
display: inline-block;
overflow: hidden;
/* vertical-align: top; */
text-align: center;
line-height: 0;
position: relative;
}
.promotion_thumb, .promotion_group_thumb {
background: #fff url("/assets/img/loading@2x.gif") center center no-repeat;
border-radius: 4px;
box-shadow: 0 1px 2px rgba(0,0,0,0.25);
}
#pro_badge {
width: 28px;
height: 28px;
position: relative;
text-align: center;
margin-right: 10px;
}
#pro_badge {
background: #ff7373;
border-radius: 7px;
}
#pro_badge:before, #pro_badge:after {
content: "";
position: absolute;
top: 0;
left: 0;
height: 28px;
width: 28px;
}
#pro_badge:before, #pro_badge:after {
background: #ff7373;
border-radius: 7px;
}
#pro_badge:after {
-webkit-transform: rotate(60deg);
-moz-transform: rotate(60deg);
-ms-transform: rotate(60deg);
-o-transform: rotate(60deg);
}
#pro_badge:before, #pro_badge:after {
content: "";
position: absolute;
top: 0;
left: 0;
height: 28px;
width: 28px;
}
#pro_badge:before, #pro_badge:after {
background: #ff7373;
border-radius: 7px;
}

::selection {
background: rgba(255,56,81,0.8);
color: #fff;
}
.rgba .subtle, .rgba .meta {
color: rgba(0,0,0,0.4);
}
span.pro_badge_label {
position: absolute;
right: 20px;
margin-top: 35px;
text-transform: uppercase;
font-size: 10px;
font-weight: 600;
letter-spacing: 0;
}
.promotion_thumb img {
width: 36px;
height: 36px!important;
vertical-align: middle;
border-radius: 2px;
}
.upgrade_nag .avatar_person {
display: inline-block;
vertical-align: top;
margin-top: 5px;
}
.upgrade_nag .avatar_company {
display: block;
font-size: 10px;
font-style: italic;
}
.upgrade_nag figcaption {
/* margin: 10px -20px 0; */
padding: 20px;
position: relative;
}
.upgrade_nag figcaption {
background: #ccc url("/assets/img/workspace_shadows.png") 0 0 repeat-x!important;
color: #555;
}



figcaption{
display: block;
padding: 16px 25px 26px 21px !important;
}
cite
{
	letter-spacing: 0.02em;
font: normal normal 400 14px/1.4 "Helvetica Neue",Helvetica,Arial,sans-serif;
}
.rgba .info {
color: rgba(0,0,0,0.4);
}
.p_autho
{
	width: 100%;padding-top: 26px;

	
}
.p_autho input[type="button"]
{
background-color: #4264AA !important;
font-family: inherit;
font-weight: 100;
width: 93%;
height: 30px;
padding: 2px 0px 2px 0px;
font-size: small;

}
.p_fb
{
width: 50%;
float: left;
height: 11%;
padding: 0px 0px 10px 8px;
}
.p_tw
{
	width: 50%;
	float: left;
	padding: 0px 0px 10px 8px;

}
.p_items
{
	border-collapse: collapse;
border-spacing: 0px;
margin-bottom: 18px;
margin-left: 11px;
}
.a_fb {

background-color: #4264AA;
padding: 10px 77px 10px 90px;
text-align: center;
color: white;
border-radius: 5px 5px;
font-family: inherit;
}
.a_tw{

background-color: #4AC8F2;
padding: 10px 91px 10px 96px;
text-align: center;
color: white;
border-radius: 5px 5px;
font-family: inherit;
}
.fa fa-twitter-square
{
	color: #4AC8F2;
}
.upgradepro
{
	padding-left: 10px;
}
.multiuser_img
{
float: left;
width: 34%;
margin-top: 20px;
height: 100%;}
.multiuser span.name
{
float: left;
}
.addon_things
{background-color: rgb(249, 150, 4);
padding: 4px 47px 4px 56px;
border-radius: 6px 6px;
box-shadow: 4px 4px 12px #D12;
box-sizing: border-box;
color: white;
font-family: -webkit-pictograph;
font-weight: 100;
font-size: 22px;}

.addon_action
{
	display: none;
}
.addon_icon
{
	display: none;
}
.add_go
{
padding: 0px 0px 1px 18px;
}
.adduser
{
	color: white !important;
background-color: orange !important;
font-size: 23px !important;
box-shadow: inset 2px -8px 0px rgba(250,149,0,0.85);
border-color: rgba(192,63,4,0.65);
text-shadow: 0 -1px 0 #da4412;
padding: 0px 10px 0px 10px;
}
.pop_user
{
	position: fixed;  background-color: blue; padding: 20px 20px 20px 20px ;
}
.window {
padding: 5px!important;
min-width: 340px;
width: 600px;
zoom: 1;
max-width: 900px;
position: fixed;
border-radius: 8px;
display: none;
background-color: white;

}
.window header {
position: relative;
background-color: #fafafa;
border-bottom: 1px solid #e2e2e2;
border-radius: 5px 5px 0 0;
display: block;
overflow: hidden;
width: 100%;
padding-bottom: 26px;
margin: 0 auto;
}
.window .window_title {
color: #777;
text-shadow: 0 19px 35px rgba(255,255,255,0.5);
font-size: 18px !important;
text-align: center;
width: 93%;
float: left;

}
.window .window_close {
position: absolute;
right: 20px;
top: 25px;
width: 14px;
height: 26px;
line-height: 26px;
z-index: 8500;
cursor: pointer;
font-weight: lighter;
font-size: 22px;
display: block;
text-align: center;
-webkit-user-select: none;
-moz-user-select: none;
-ms-user-select: none;
user-select: none;
opacity: 0.75;
}
.window .window_close {
color: #777;
text-shadow: 0 1px 0 rgba(250,250,250,0.5);
float: left;
width: 0%;
text-shadow: 0 1px 0 rgba(250,250,250,0.5);
}
.window .window_close span {
width: 14px;
height: 26px;
line-height: 26px;
padding: 0;
}

.window .window_contents {
/* padding: 0 20px; */
clear: both;
overflow: hidden;
zoom: 1;
background: #fff;
box-shadow: 0 4px 0 0 rgba(0,0,0,0.1);
border-radius: 0 0 5px 5px;
width: 100%;
}

.window .field, .window>p, .popover .field, .popover>p {
margin: 15px 16px 14px 4px;
border-bottom: 1px solid #ddd;
width: 100%;
display: inline-flex;
border-bottom: 1px solid #ddd;
padding-bottom: 29px;
}
.window .field input
{
font-family: inherit;
font-size: inherit;
line-height: 19px;
margin-left: 20px;
box-shadow: 0px 0px 4px #80BFFF, 0px 2px 3px 0px rgba(0, 0, 0, 0.15) inset;
border-radius: 3px 3px;
}
fieldset p:after, fieldset .field:after, .fieldset p:after, .fieldset .field:after {
content: " ";
display: block;
height: 0;
font-size: 0;
clear: both;
visibility: hidden;
}
fieldset .half
{
	padding: 0 10px;
float: left;
display: block;
-webkit-box-sizing: border-box;
-moz-box-sizing: border-box;
box-sizing: border-box;
 
}

#down {
  width: 1600px;
  background-color: #F0F0F0;
  height: 300px;
  float: left;
  font-size: 12px;
  font-weight: bold;
}
.footer-right {
  padding-top: 210px;
  width: 800px;
  float: center;
}



	.multiuser_text h3
	{
		margin-top: 20px;
		
	}
	.avatar_person{
		
		  position: absolute;
  left: 889px;
  top: 366px;
	}
	.upgradepro
	{
		padding-right: 3px;
		padding-left:  0px !important;
		
	}
	.leftinfo{
		height: 700px;
	}
</style>
	</head>
  <body>
<!--[if lt IE 7]>
            <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
        <![endif]-->
        <section id="pageloader">
            <div class="loader-item fa fa-spin colored-border"></div>
        </section> <!-- /#pageloader -->

        <header class="site-header container-fluid" style="width:100%">
            <div class="top-header">
                <div class="logo col-md-6 col-sm-6">
  <h1><a href="index.php"><img src="./images/crazy3.jpg"></img></h1>
 
               
                </div> <!-- /.logo -->
                
                
                
            </div> <!-- /.top-header -->
            <div class="main-header">
                <div class="row">
                    <div class="main-header-left col-md-3 col-sm-6 col-xs-8">
                        <a href="logout.php"><img src="./images/home.png" height=42 width=40></img>
                    </div> <!-- /.main-header-left -->
                    <div class="menu-wrapper col-md-9 col-sm-6 col-xs-4">
                        <a href="#" class="toggle-menu visible-sm visible-xs"><i class="fa fa-bars"></i></a>
                        <ul class="sf-menu hidden-xs hidden-sm">
                            <li><a href="account.php">Account</a></li>
                            <li><a href="addon.php">Add Things</a>   </li>
                            <li><a href="gopro.php">Go Pro</a>   </li>
                            <li><a href="help.php">Help</a >      </li>
                             <li ><a href="logout.php">Logout, <?php include 'session.php'; echo $login_session ?></a > </li>
                        </ul>
                    </div> <!-- /.menu-wrapper -->
                </div> <!-- /.row -->
            </div> <!-- /.main-header -->
            <div id="responsive-menu">
                <ul>
                     <li><a href="account.php">Account</a></li>
                            <li><a href="addon.php">Add Things</a>   </li>
                            <li><a href="gopro.php">Go Pro</a>   </li>
                            <li><a href="help.php">Help</a >      </li>
                             <li ><a href="logout.php">Logout, <?php include 'session.php'; echo $login_session ?></a > </li>
                </ul>
            </div>
            
        </header> <!-- /.site-header -->

        <div class="content-wrapper">
<!-- middlediv strt			 -->
			<div class="middlediv container" style="height:800px;  background-color: #EFEFEF;">

				<div class="clearfix"></div>
				
						<div class="midpart1">
							
							<div class="leftinfo">
								<div class="deckout">
									<h2 >Deck out your account with add-ons</h2>
								</div>
								<div class="addpart">
									<ul id="addons" class="addon_list global free_user">
										<li id="addon-multiuser-row" class="unsubscribed free " data-keywords="multi-user logins child account">
											<div  class="multiuser_img">
												<img  src="images/multi.jpg" width="70%" height="20%">
											</div>
											<div class="multiuser_text">
												<h3>
													<span class="addon_things" > Multi User </span>
													<a href="multiuser.php" class="add_go" ><i class="fa fa-hand-o-up" ></i></a>

													<!--
<span class="addon-setup">
														<span id="addon-multiuser-settings" class="addon_settings" style="display:none;">
														<a href="/participants">Go set it up ?</a>
														</span>
														
														<small class="addon-status">
														Installed
														</small>
													</span>
-->
													<span class="addon-detail">
														<small class="addon_price">
														</small>
													</span>
												</h3>
												<span class="addon_action">
													<a id="addon-multiuser-toggle" href="/addons/61/toggle" class="switch ">
														<span id="addon-multiuser-activate" href="/addons/61/payment_or_setup_redirect">
														Activate
														</span>
														<span id="addon-multiuser-deactivate" style="display:none;">
														Deactivate
														</span>
													</a>
												</span>
												<span class="addon_icon">
													<img alt="Multiuser" src="/assets/addon_icons/multiuser-1b7baf1fab42dff489b42831aab36a80.png">
												</span>
												<p class="addon_description">
												Ever felt the need to give everyone in your organization a linked Mimi account and copy promotions between them easily? 
												If so, Mad Mimi's multiuser platform now lets you do just that. 
												Your parent account can clone promotions to child accounts in addition to tracking, 
												editing and giving child accounts colored labels.
												</p>	
											</div>							
										</li>
										<li id="addon-webforms-row" class="subscribed free" data-keywords="webforms signup subscription lead capture 
										builder online html wufoo subscribe">
											<div  class="multiuser_img"  style="margin-top:27px !important">
												<img  src="images/webform.jpg" width="70%" height="20%">
											</div>
											<div class="multiuser_text" > 
												<h3>
													<span class="addon_things" > Webforms </span>
													<a href="webform.php" class="add_go" ><i class="fa fa-hand-o-up" ></i></a>
														<!--
<span id="addon-webforms-settings" class="addon_settings">
															<a href="/signups">Go set it up ?</a>
														</span>
														<small class="addon-status">
															Installed
														</small>
													</span>
-->
													<span class="addon-detail">
														<small class="addon_price">
														</small>
													</span>
												</h3>
												<span class="addon_action">
													<a id="addon-webforms-toggle" href="/addons/62/toggle" class="switch on">
														<span id="addon-webforms-activate" style="display:none;" href="/addons/62/payment_or_setup_redirect">
														Activate
														</span>
														<span id="addon-webforms-deactivate">
														Deactivate
														</span>
													</a>
												</span>
												<span class="addon_icon">
													<img alt="Webforms" src="/assets/addon_icons/webforms-f0a2a07f0bb0fbd14c730b90c0dafbd4.png">
												</span>
												<p class="addon_description">
												Create sign up forms to allow people to subscribe to your audience lists.
												Webforms are a great way to build your list up organically and
												Mad Mimi's webforms give you super simple HTML to paste anywhere on your site. 
												You can also create a custom welcome note, use your own landing pages and customize the fields you need.
												</p>
											</div>
										</li>									
										<li id="addon-social_links-row" class="subscribed free" data-keywords="social links icons buttons blogger delicious facebook
										feed flickr lastfm linkedin myspace twitter wordpress youtube friendfeed plurk tumblr picasa vimeo viddler aim digg email 
										googletalk mobileme orkut paypal posterous reddit sharethis skype soundcloud st">
											<div  class="multiuser_img" style="">
												<img  src="images/social.jpg" width="70%" height="20%" style="margin-top:20px;">
											</div>
											<div class="multiuser_text" >
													<h3>
													<span class="addon_things" > Social Links </span>
													<a href="social_links.php" class="add_go" ><i class="fa fa-hand-o-up" ></i></a>
												<!--
<span class="addon-setup">
												<span id="addon-social_links-settings" class="addon_settings">
												<a href="/social_links">Go set it up ?</a>
												</span>

												<small class="addon-status">
												Installed
												</small>
												</span>
												<span class="addon-detail">
												<small class="addon_price">
												</small>
												</span> -->
												</h3>
												<span class="addon_action">
												<a id="addon-social_links-toggle" href="/addons/69/toggle" class="switch on">
												<span id="addon-social_links-activate" style="display:none;" href="/addons/69/payment_or_setup_redirect">
												Activate
												</span>
												<span id="addon-social_links-deactivate">
												Deactivate
												</span>
												</a>
												</span>
												<span class="addon_icon">
												<img alt="Social_links" src="/assets/addon_icons/social_links-c55bed608461ca9953316ee00b272714.png">
												</span>
												<p class="addon_description">
												Add a set of icons that link to your favorite social networking sites. Encourage your readers to connect 
												with you on twitter, facebook, LinkedIn and others. Just add your site URLs and Mad Mimi will place specially 
												designed icons to the bottom of your promotion.
												</p>
											</div>
										</li>
										
									</ul>
								</div> <!-- addpart end -->
							</div><!-- leftinfo end -->
					<div class="rightinfo3" >
						
						<div class="pro">
							<figure class="upgrade_nag">
								<span >
<!-- 									<span class="icon check-mark">Check</span> -->
								</span>
<!-- 								<span class="pro_badge_label subtle">Pro User</span> -->
									<span style="padding-left: 10px;">
									<img alt="Bdelpesco" src="images/bdel.jpg" style="  margin-left: 19px;">
									</span>
								<span class="avatar_person">
									<a href="https://twitter.com/bdelpesco" target="blank">@bdelpesco</a>
									<span class="avatar_company subtle">
										<a href="http://belindadelpesco.blogspot.com/" title="Visit Belinda Del Pesco Fine Art" target="_blank">
										Belinda Del Pesco Fine Art
										</a>
									</span>
								</span>
								<span class="prouser">
									<img src="images/prouser.jpg" style="  margin-left: 220px;margin-top: -68px;margin-bottom: 20px;">
								</span>
								<figcaption>
								

									<span class="upgrade_nag_action right" style="float: right">
										<a href="/service_agreements/change_plan" class="btn primary small">Go Pro Today</a>
									</span>
									<cite>Mad Mimi Pro rocks! Without fail, when I've announced an event with Mad Mimi, I've sold art to a patron pre-opening.</cite>
								</figcaption>
							</figure>
						</div>
						<div class="upgradepro">
							<p class="info">
							
							Some add-ons are only available on paid plans. <a href="gopro.php"> Upgrade now</a>
							</p>
						</div>
							
					</div> <!-- rightinfo3 end dash-->
				</div><!-- midpart end of dash-->	
			   </div><!-- tabpanel end dash -->
			</div> <!-- middlediv end-->			

        </div> <!-- /.content-wrapper -->
	
        <script src="js/vendor/jquery-1.11.0.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.0.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <!-- Preloader -->
        <script type="text/javascript">
            //<![CDATA[
            $(window).load(function() { 
                $('.loader-item').fadeOut(); 
                    $('#pageloader').delay(350).fadeOut('slow');
                $('body').delay(350).css({'overflow-y':'visible'});
            })
            //]]>
        </script>

	</body>
</html>

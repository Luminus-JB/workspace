<?php
/**
 * Created by PhpStorm.
 * User: Lumi
 * Date: 06/04/2017
 * Time: 14:09
 */

header('content-type: text/css');
//Contient les fonctions
include("../function.php");
?>

.full {
color: gray;
border-color: gray;
}
body {
font-family:"trebuchet ms",sans-serif;
font-size:90%;
display: flex;
flex-direction: column;
align-items: center;
}
form {
padding:10px;
width:280px;
}
legend {
color:#DF3F3F;
font-weight:bold
}
label {
margin-top:10px;
display:block;
color: black;
}
input, textarea, select, option {
background-color:white;
color: black;
}
input, textarea, select {
padding:3px;
border:1px solid RGB(5,74,89);
border-radius:5px;
width:200px;
box-shadow:1px 1px 2px #C0C0C0 inset;
}
input[type=submit], input[type=reset] {
width:100px;
margin-left:5px;
box-shadow:1px 1px 1px #020C18;
cursor:pointer;
}
input[type=submit]:hover, input[type=reset]:hover {
background-color:#020C18;
color: silver;
}
input[type=submit]:active, input[type=reset]:active {
background-color:#FCDEDE;
box-shadow:1px 1px 1px #D83F3D inset;
}
#head {
background-color: #00b3ff;

}
#nav {
background-color: #1883ba;
}
#games {
background-color: #3a768f;
}
#devtools {
background-color: #04569A;
}
#administratif {
background-color: #024378;
}
#divers {
background-color: darkblue;
}
.limit_link_message {
font-size: x-small;
}
.required_message, .form_img{
font-size: smaller;
}



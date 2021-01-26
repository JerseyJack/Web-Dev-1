
////////////////////////// ACCESSIBILITY BUTTONS ////////////////////////
//A function to change the font size of on screen writing
function resizeText(multiplier) {
  if (document.getElementById("content").style.fontSize == "") {
    document.getElementById("content").style.fontSize = "16px";
  }
  document.getElementById("content").style.fontSize = parseFloat(document.getElementById("content").style.fontSize) + (multiplier * 0.2) + "px";
}

//A function to reset the on screen writing font size to its original state if the text, if the size has been changed
function resetText() {
  if (document.getElementById("content").style.fontSize == "") {
    document.getElementById("content").style.fontSize = "16px";
  }
  document.getElementById("content").style.fontSize = "16px";
}

//A function to set the content of the single page to a high contrast
function highContrast() {
  document.getElementById("content").style.background = "#000";
  document.getElementById("content").style.color = "#fff";
}

//A function to reset the contrast of the single page content
function resetContrast() {
  document.getElementById("content").style.background = "#6c757d";
  document.getElementById("content").style.color = "#242532";
}

/////////////////////////////// SINGLE BACKGROUND FADE //////////////////////
//Make the single background fade
//Get the element by id and store it in a variables
var p = document.getElementById("content");
//The value of the above variable's offest from the top of the page is stored in a variable
var singlebg = p.offsetTop;
//The background where the image is found is stored in a variable
background = document.getElementById("single-background");

//Add function for when the window is scrolled on
window.onscroll = function fade() {
  //If the window Y position has changed to above 0, the below will occur
  if (window.pageYOffset > 0) {
    //The opacity is stored as a vaule. It is proportional to the offset of the window and single background
    var opacity = (window.pageYOffset / singlebg);
    //The background of the image will fade and the opacity value increases
    document.background = "linear-gradient(rgba(255, 255, 255, " + opacity + "), rgba(255, 255, 255, " + opacity + ")), url(http://127.0.0.1/wp-content/themes/assignmenttheme/image/<?php echo $key_1_value; ?>) no-repeat";
    }
  }

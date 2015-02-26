/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



$("document").ready(function() {
    $(".umm").css("background-color", "cyan");
    $("p:first").css({"background-color": "magenta", "color": "white"});
    $('.logo').bind('mouseover', mouseOverMe).bind('mouseout', mouseOutMe);
    $('h1').bind('click', mouseClick);
    $('#replaceWHtml').bind('click', replaceWHtml);
    $('#replaceWText').bind('click', replaceWText);
    $('#addAPara').bind('click', addAPara);
    $('#removeAPara').bind('click', removeAPara);
    $('#hideLogo').bind('click', hideTheImage);
    $('#showLogo').bind('click', showTheImage);
    $('#fadeLogo').bind('click', fadeTheImage);
    $('#fadeALittle').bind('click', fadeALittle);

    $('#sortMe').sortable();

    $('#accordion').accordion({header: "h4"});
});
//hover on the logo it will say that you put your cursor on my logo
function mouseOverMe() {
    $("#second").html("you put your cursor on my logo");
}
//if you stop hovering on the logo it will say you stopped touching my logo
function mouseOutMe() {
    $("#second").html("you stopped touching my logo");
}
function mouseClick() {
    $('h1').html("click");
}
function replaceWHtml() {
    $('#h2tag').html('<h4>Now I/m on h4</h4>');
}
//replaces the html code
function replaceWText() {
    $('#h2tag').text('<h4>Now I/m on h4</h4>');
}
//this will add extra code
function addAPara() {
    $('#randPara').append('<p>Another Paragraph</p>');
}
//this will remove the code that been added
function removeAPara() {
    $('#randPara p:last').remove();
}
//hides my logo on my page
function hideTheImage() {
    $('.logo').hide('explode', {}, 2500);
}
//after hiding the logo i can show it back again
function showTheImage() {
    $('.logo').show('fold', {}, 2500);
}
//fades my logo
function fadeTheImage() {
    $('.logo').fadeOut(2500);
}
//fades my logo a liitle
function fadeALittle() {
    $('.logo').fadeTo(2500, .30);
}

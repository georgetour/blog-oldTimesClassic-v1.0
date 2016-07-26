$(document).ready(function () {

    //We ll create an array that will store all images paths
    //so later we can retrive them with jquery
   var images = new Array();
    images[0] = "images/gameCovers/bubble-bobble-arcade-copy.jpg";
    images[1] = "images/gameCovers/Heroes_of_Might_and_Magic_III_Cover_Art copy.jpg";
    images[2] = "images/gameCovers/residentevil1 copy.jpg";
    images[3] = "images/gameCovers/metal-gear-solid copy.jpg";
    images[4] = "images/gameCovers/nba jam copy.jpg";
    images[5] = "images/gameCovers/warcraft-ii-tides-of-darkness-dos-other copy.jpg";
    images[6] = "images/gameCovers/Super_Mario_All-Stars.jpg";
    images[7] = "images/gameCovers/master system shinobi copy.jpg";
    images[8] = "images/gameCovers/prince of persia copy.jpg";
    images[9] = "images/gameCovers/mk1 copy.jpg";

    //Starting data
    $('#imageSlide').attr('src',images[8]);

    //The setInterval function so the timer starts and changes the images and text
  //  setInterval(imageSlider,4500);


    var imagesLength = images.length;

    //The functions for sliders for images and description with titles etc
    function imageSlider() {


            $('#imageSlide').fadeOut(1800, function () {
                $('#imageSlide').attr('src', images[(images.length++)%imagesLength]).fadeIn('slow');

            })

    }














});
    


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

    //The setInterval function so the timer starts and runs the imageSlider 
     setInterval(imageSlider,4500);


    var imagesLength = images.length;

    //A starting counter for the loop of images
    var i = 0

    //The functions for sliders for images and description with titles etc
    function imageSlider() {

				$('#imageSlide').fadeOut(1800, function () {
                if(i<imagesLength){
                    i++;
                }
                else{
                    i=0;
                }

                $('#imageSlide').attr('src', images[i]).fadeIn('slow');

            })

    }

  //check for email validation with pattern
    $('#error').hide();//First we have hidden the error message
    $('#subscribeForm').submit(function (event) {
        
        //This is the pattern
        function isValidEmailAddress(emailAddress) {
            var pattern = /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;
            return pattern.test(emailAddress);
        }

        //if the email address s not valid according to pattern prevent event submitting and
        //give error
        if(!isValidEmailAddress($('#email').val())){
            event.preventDefault();
            $('#error').show();
            $('#error').fadeOut(3000);
        }
            //If the email matches the pattern process with form submition
        else if(isValidEmailAddress($('#email').val())){
            $('#subscribeForm').submit();
        }


    })









});
    


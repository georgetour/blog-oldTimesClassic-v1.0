$(document).ready(function () {
    //Hiding from html the error message
    $('#error').hide();

    //Creating empty string variable to use in error id  message below
    var errorMessage = "";

    //Flag variuable to cntrol when form wil be submitted
    var flag = 0;

    $('#contact').submit(function (event) {

        //Pattern for only letters and numbers
        function validation(gameTitle) {
            var pattern = /^\s*[a-zA-Z0-9,\s]+\s*$/;
            return pattern.test(gameTitle);

        }

        //Pattern for email only
        function isValidEmailAddress(emailAddress) {
            var pattern = /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;
            return pattern.test(emailAddress);
        }




        if (!validation($('#gameTitle').val())||(!validation($('#suggestedBy').val()))) {
            event.preventDefault();
            errorMessage = 'Only letters and numbers please';
            $('#error').html(errorMessage);
            $('#error').show();
            $('#error').fadeOut(3000);
            flag = 1;
        }
        if (!isValidEmailAddress($('#email').val())) {
            event.preventDefault();
            errorMessage = 'Give correct email';
            $('#error').html(errorMessage);
            $('#error').show();
            $('#error').fadeOut(3000);
            flag = 2;
        }




        else if(flag==0){
            $('#subscribeForm').submit();
        }



    })



});

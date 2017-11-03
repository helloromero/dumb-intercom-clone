$(function() {
    var cookieData = Cookies.get('intercom_clone_cookie');
    // if the cookie is set then show the sucess message
    if (cookieData == 1) {
        $('#email_form').hide();
        $('#second_message').show();
    }
});

$('#chat_open_button').click(function() {
    // toggle icon and remov animaton 
    $(this).find('i').toggleClass('fa-comments fa-times');
    $(this).find('i').removeClass('animated');

    // show chat box
    $('#intercom_box_wrapper').fadeToggle();
});

$('#email_form').submit(function(e) {
    // stop form submitting normally
    e.preventDefault();

    var url = "intercom_clone/intercom_clone_post.php";
    $.ajax({
        type: "POST",
        url: url,
        data: $("#email_form").serialize(),
        success: function(data) {

            if (data == "true") {

                // hide email form and show sucess message
                $('#email_form').hide();
                $('#second_message').show();

                // set cookie so it doesn't show form again (expire in 1 day)
                Cookies.set('intercom_clone_cookie', '1', { expires: 1 });

            } else if (data == "false") {

                // hide form and show error message
                $('#email_form').hide();
                $('#error_message').show();

            }
        }
    });

});
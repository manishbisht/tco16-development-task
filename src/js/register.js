/**
 * Created by Manish Bisht on 7/30/2016.
 */
$(document).ready(function () {
    $('#error').hide();
});
$("#register").click(function () {
    var username=$('#username').val();
    var email = $("#email").val();
    var college = $("#college").val();
    var city = $("#city").val();
    var country = $("#country").val();
    var password = $("#password").val();
    var cpassword = $("#cpassword").val();
    if (username == "") {
        $('#error').html("<strong>Enter your Username</strong>");
        $('#error').show();
        $('#username').focus();
    }
    /*else if (email) {
        $('#error').html("<strong>Invalid Username !!<br>Your username should not contain spaces</strong>");
        $('#error').show();
        $('#email').focus();
    }*/
    else if (email == "") {
        $('#error').html("<strong>Enter your Email</strong>");
        $('#error').show();
        $('#email').focus();
    }
    else if (college == "") {
        $('#error').html("<strong>Enter your College Name</strong>");
        $('#error').show();
        $('#college').focus();
    }
    else if (city == "") {
        $('#error').html("<strong>Enter your City</strong>");
        $('#error').show();
        $('#city').focus();
    }
    else if (country == "") {
        $('#error').html("<strong>Enter your Country</strong>");
        $('#error').show();
        $('#country').focus();
    }
    else if (password == "") {
        $('#error').html("<strong>Enter your Password</strong>");
        $('#error').show();
        $('#password').focus();
    }
    else if (cpassword == "") {
        $('#error').html("<strong>Enter your Confirm Password</strong>");
        $('#error').show();
        $('#cpassword').focus();
    }

    else if (cpassword!=password) {
        $('#error').html("<strong>Password doesn't match</strong>");
        $('#error').show();
        $('#password').focus();
    }
    else {
        $.ajax({
            type: 'POST',
            url: 'php/registeruser.php',
            data: {username : username, email: email, college:college, city:city, country:country, password: password},
            success: function (response) {
                //alert(response);
                if (response == 1) {
                    window.open("index.php", "_self");
                }
                else if (response == 0) {
                    $('#error').html("<strong>Error in Registering you</strong>");
                    $('#error').show();
                    $("#register").reset();
                }

            }
        });
    }
});
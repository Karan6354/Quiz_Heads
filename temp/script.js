var inP = $('.input-field');

inP.on('blur', function () {
    if (!this.value) {
        $(this).parent('.f_row').removeClass('focus');
    } else {
        $(this).parent('.f_row').addClass('focus');
    }
}).on('focus', function () {
    $(this).parent('.f_row').addClass('focus');
    $('.btn').removeClass('active');
    $('.f_row').removeClass('shake');
});


$('.resetTag').click(function (e) {
    e.preventDefault();
    $('.formBox').addClass('level-forget').removeClass('level-reg');
});

$('.back').click(function (e) {
    e.preventDefault();
    $('.formBox').removeClass('level-forget').addClass('level-login');
});



$('.regTag').click(function (e) {
    e.preventDefault();
    $('.formBox').removeClass('level-reg-revers');
    $('.formBox').toggleClass('level-login').toggleClass('level-reg');
    if (!$('.formBox').hasClass('level-reg')) {
        $('.formBox').addClass('level-reg-revers');
    }
});
$('.btn').each(function () {
    $(this).on('click', function (e) {
        e.preventDefault();

        var finp = $(this).parent('form').find('input');

        console.log(finp.html());

        if (!finp.val() == 0) {
            $(this).addClass('active');
        }

        setTimeout(function () {

            inP.val('');

            $('.f_row').removeClass('shake focus');
            $('.btn').removeClass('active');

        }, 2000);

        if (inP.val() == 0) {
            inP.parent('.f_row').addClass('shake');
        }

        //inP.val('');
        //$('.f_row').removeClass('focus');

    });
});
function vlogin() {
    var returnval = true;
    var username = document.getElementById("l_username").value;
    var pass = document.getElementById("l_password").value;
    if (username == "" && pass == "") {
        document.getElementById("error").innerHTML = "username and password required";
        returnval = false;
    }
    else if (username == "") {
        document.getElementById("error").innerHTML = "username required";
        returnval = false;
    }
    else if (pass == "") {
        document.getElementById("error").innerHTML = "password required";
        returnval = false;
    }
    else if (username && pass != "") {
        document.getElementById("login").submit();
    }
    return returnval;
}
function validateEmail(email) {
    var re = /\S+@\S+\.\S+/;
    return re.test(email);
}
function vregister() {
    var returnval = true;
    var username = document.getElementById("r_username").value;
    var password = document.getElementById("r_password").value;
    var cpassword = document.getElementById("r_cpassword").value;
    var email = document.getElementById("r_email").value;

    if (username == "" && password == "" && cpassword == "" && email == "") {
        document.getElementById("error2").innerHTML = "username required";
        returnval = false;
    }
    else if (username == "") {
        document.getElementById("error2").innerHTML = "username required";
        returnval = false;
    }
    else if (email == "") {
        document.getElementById("error2").innerHTML = "email required";
        returnval = false;
    }
    else if (password == "") {
        document.getElementById("error2").innerHTML = "password required";
        returnval = false;
    }
    else if (cpassword == "") {
        document.getElementById("error2").innerHTML = "confirm password required";
        returnval = false;
    }
    else if (password !== cpassword) {
        document.getElementById("error2").innerHTML = "password and confirm password do not match";
        returnval = false;
    }
    else if (username && password != "" && cpassword != "" && email != "") {
        document.getElementById("register").submit();
    }
    if (email != "") {
        if (validateEmail(email)) {
            returnval = true;
        }
        else {
            document.getElementById("error2").innerHTML = "email not valid";
            returnval = false;
        }
    }
    return returnval;
}
// $(document).ready(function () {
//     $(document).on("click", "#register_btn", function (form) {
//         form.preventDefault();
//         if(form.r_username ==""){
//             alert("username is required");
//         }
//     });
// });
$.ajaxSetup({
    global: true
});
// $("#cat_score").filestyle();
$(document).ready(function() {
    $('.selectpicker').selectpicker();

    function checkEmail(email) {
        var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        if (!filter.test(email))
            return false;
        email.focus;
        return true;
    }

    function isAlphanumeric(str) {
        return /^[a-zA-Z]+$/.test(str);
    }
    $("#teamsize").change(function() {
        teamsz = $("#teamsize").val();
        if (teamsz.localeCompare("2") == 0) {
            $("contestant").empty();

            //            alert(teamsz);

            $("#contestant").append(
                " <div class=\"row\">" + "<div class=\"col-xs-12 col-sm-6 col-md-6\">" +
                "<div class=\"form-group\">" +
                "<input type=\"text\" name=\"name_contestant2\" id=\"name_contestant2\" class=\"form-control input-lg\" placeholder=\"Enter Contestant2 Name\" tabindex=\"1\">" +
                "<\/div>" +
                "<\/div>" +
                "<div class=\"col-xs-12 col-sm-6 col-md-6\">" +
                "<div class=\"form-group\">" +
                "   <input type=\"email\" name=\"email_contestant2\" id=\"email_contestant2\" class=\"form-control input-lg\" placeholder=\"Email Address\" tabindex=\"1\">" +
                "<\/div>" +
                "<\/div>" +
                "<\/div>" +

                "<div class=\"row\">" +
                "<div class=\"col-xs-12 col-sm-6 col-md-6\">" +
                "<div class=\"form-group\">" +
                "<input type=\"text\" name=\"phone_contestant2\" id=\"phone_contestant2\" maxlength=\"10\" size=\"10\" class=\"form-control input-lg\" placeholder=\"Phone Number Contestant2\" tabindex=\"1\">" +
                "<\/div>" +
                "<\/div>" +
                "<div class=\"col-xs-12 col-sm-6 col-md-6\">" +
                "<div class=\"form-group\">" +
                "<input type=\"text\" name=\"college_contestant2\" id=\"college_contestant2\" maxlength=\"12\" size=\"12\" class=\"form-control input-lg\" placeholder=\"college Contestant2\" tabindex=\"1\">" +
                "<\/div>" +
                "<\/div>" +
                "<\/div>");
        } else
            $("#contestant").empty();

    });
    $("form").submit(function(event) {
        $body = $("body");
        //$body.addClass("loading");
        alert("fash");
        event.preventDefault();
        // var numericReg=/((\+*)((0[ -]+)*|(91 )*)(\d{12}+|\d{10}+))|\d{5}([- ]*)\d{6}/;
        var teamname = $("#teamname").val().trim();
        var teamsize = $("#teamsize").val();
        var password = $("#password").val();

        var phone = [];
        var college = [];
        var realname = [];
        var email = [];

        phone.push($("#phone_contestant1").val());
        college.push($("#college_contestant1").val().trim());
        realname.push($("#name_contestant1").val().trim());
        email.push($("#email_contestant1").val().trim());
        if (teamsize == 2) {
            phone.push($("#phone_contestant2").val());
            college.push($("#college_contestant2").val().trim());
            realname.push($("#name_contestant2").val().trim());
            email.push($("#email_contestant2").val().trim());
        }

        var err = "";
        //alert(grad_year);


        if (teamname.length == 0 || !isAlphanumeric(teamname))
            err += "team name should not be empty and should not contain any special characters\n";
        for (var i = 0; i < college.length; i++)
            if (college[i].length == 0 || !isAlphanumeric(college[i])) {
                err += "college name should not be empty and should not contain any special characters\n";
                break;
            }
        for (var i = 0; i < realname.length; i++)
            if (realname[i].length == 0 || !isAlphanumeric(realname[i])) {
                err += "contestant name should not be empty and should not contain any special characters\n";
                break;
            }
        for (var i = 0; i < phone.length; i++)
            if (!/[2-9]{2}\d{8}/.test(phone[i])) {
                err += "please enter a proper phone number\n";
                break;
            }
        for (var i = 0; i < email.length; i++)
            if (!checkEmail(email[i])) {
                err += "please enter a email address\n";
                break;
            }
        alert("def");
        if (err.localeCompare("") != 0) {
            //alert(err);
            BootstrapDialog.alert(err);
            return;
        }



        var formData = new FormData($(this)[0]);
        $.ajax({
            url: "register.php",
            type: "POST",
            data: formData,
            async: false,
            cache: false,
            contentType: false,
            processData: false,
            success: function(data, textStatus, jqXHR) {
                //if (data.localeCompare(data, "success") == 0)
                    alert("sent data" + data);
                //else
                  //  alert("sent data" + data);
               // $body.removeClass("loading");

            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert(textStatus + "failed" + errorThrown + " " + jqXHR);
                console.log(jqXHR);
                //$body.removeClass("loading");

            }

        });
    });
});


/*
   $body = $("body"); 
$(document).ready(function() {
    $.ajaxSetup({
        'beforeSend' : function() {
           $body.addClass("loading");
        },
    'complete'   : function() {
            $body.removeClass("loading");
        }
    });
});*/
/* $body = $("body");

$(document).on({
    ajaxStart: function() { $body.addClass("loading");    },
     ajaxStop: function() { $body.removeClass("loading"); }    
});*/
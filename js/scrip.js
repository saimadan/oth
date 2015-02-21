$.ajaxSetup({global:true});
   // $("#cat_score").filestyle();
    $(document).ready(function(){
     	$('.selectpicker').selectpicker();
    $('file').filestyle()
/*    var first_name=$("#first_name").val();
    var last_name=$("#last_name").val();
    var email=$("#email").val();
    var phone=$("#phone").val();
    var roll=$("#roll").val();
    var grad_year=$("#grad_year").val();
    var branch=$("#branch").val();
    var gre_score=$("#gre_score").val();
    var toefl_score=$("#toefl_score").val();
    var cat_score=$("#cat_score").val();*/
           function isAlphanumeric( str ) {
            return /^[a-zA-Z]+$/.test(str);
        }
    $("form#data").submit(function(event){
    
            $body = $("body"); 
       $body.addClass("loading");
   
    	event.preventDefault();
       // var numericReg=/((\+*)((0[ -]+)*|(91 )*)(\d{12}+|\d{10}+))|\d{5}([- ]*)\d{6}/;
        var phone=$("#phone").val();
        var roll=$("#roll").val();
        var grad_year=parseInt($("#grad_year").val().trim());
        var gre=parseInt($("#gre").val().trim());///!/\d{3}/.test(gre) &&
        var toefl=parseInt($("#toefl").val().trim());
        var cat=$("#cat").val();
        var email=$("#email").val();
        var message=$("#message").val();

        var err="";
        //alert(grad_year);



        if($("#cat").val().length==4)
            cat+="0";

        if(!isAlphanumeric( $("#first_name").val() ))        
            err+="first name should not be empty and should not contain any special characters\n\n";
        if(!isAlphanumeric( $("#last_name").val() ))        
            err+="last name should not be empty and should not contain any special characters\n\n";
        if(!/\(|\)|\d{12}/.test(roll))
            err+="please enter a proper roll number\n";
        if(! /[2-9]{2}\d{8}/.test(phone))
            err+="please enter a proper phone number\n";
        if(email.localeCompare("")==0)
            err+="please enter email address\n"
        if(grad_year<1981 || grad_year>2099)
            err+="please enter a proper year\n";
        if( gre<260 || gre>340)
            err+="please enter a proper gre score\n";
        if( toefl<0 || toefl>120)
            err+="please enter a proper toefl score\n";
        if( !(cat.localeCompare("")==0) && !/^(100\.0000|[1-9]?\d\.\d{2})$/.test(cat))
            err+="please enter a proper cat percentile";
        if( message.localeCompare("")==0)
            err+="please tell your concern or purpose of registration as a message";
        if(err.localeCompare("")!=0)
        {
            alert(err);
            return;
        }
        else if(isNaN(gre)&&isNaN(toefl)&&(cat.localeCompare("")==0))
        {
                alert("please enter gre score or cat score or toefl score");
                return;
        }
            //alert("gre"+gre+"\n"+"cat"+cat+"\n"+"toefl"+toefl+"\n");
        
    
     var formData = new FormData($(this)[0]);
   
    	$.ajax({
    	url:"uploader.php",
    	type:"POST",
    	data:formData,
        async: false,
        cache: false,
        contentType: false,
        processData: false,
    	success:function(data, textStatus, jqXHR)
    	{
            if(data.localeCompare(data,"success")==0)
    		  alert("sent data"+data);
            else
               alert("sent data"+data);
                     $body.removeClass("loading");
   
    	},
    	error:function(jqXHR, textStatus, errorThrown)
    	{
    		alert(textStatus+"failed"+errorThrown+" "+jqXHR);
    		console.log(jqXHR);
                     $body.removeClass("loading");
   
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
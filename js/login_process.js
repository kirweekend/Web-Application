$('document').ready(function() { 
    $("#login-form").submit(function(e){
    e.preventDefault();
    $.ajax({
        type: 'POST',
        url : 'login_script.php',
        data: $(this).serialize(),
        beforeSend: function() { 
        $("#error").fadeOut();
        $("#btn-login").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; sending ...');
        },
        success:  function(data)
        {
        if(data.trim() == 'ok') {
            window.location.replace( '../index.php');
        }else {
              $("#error").fadeIn(1000, function(){      
              $("#error").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; '+data+' !</div>');
              $("#btn-login").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Sign In');
              });
        }
        }
    });
    });
});

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
        
    });
    });
});

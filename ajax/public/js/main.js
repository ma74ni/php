$(document).ready(function(){
    $('#btn_guardar').on('click',function(e){
        event.preventDefault(e);
        
        var nameUser = $('input[name = nameUser]').val();
        var emailUser = $('input[name = emailUser]').val();
        var bdayUser = $('input[name = bdayUser]').val();
        var stateUser = $('select[name = stateUser]').val();
        
        $.ajax({
            type: 'POST',
            url: '?m=create',
            data:{
                nameUser: nameUser, 
                emailUser: emailUser, 
                bdayUser: bdayUser, 
                stateUser: stateUser
            }
        }).done(function (res) {
            console.log(res);
        }).fail(function(res) {
            console.log(res);
        });
    })
})
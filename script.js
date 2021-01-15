function send_message(){
    var name=jQuery("#name").val();
    var number=jQuery("#number").val();
    var email=jQuery("#email").val();
    var message=jQuery("#message").val();
    alert("Hello");
    var is_error="";
    if(name==""){
        alert("Pleaser Enter Name");
    }else if(number==""){
        alert("Pleaser Enter Number");
    }else if(email==""){
        alert("Pleaser Enter Email");
    }else if(message==""){
        alert("Pleaser Enter Message");
    }else{
            jQuery.ajax({
                url:'send_message.php',
                type:'POST',
                data:'name='+name+'&number='+number+'&email='+email+'&message='+message,
                success:function(result){
                    alert(result);
                }
            });
    }


}
console.log("Hello dinesh");
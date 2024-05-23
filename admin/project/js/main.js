$(document).ready(function(){
    let SITE =$("body").data("url");
    $(".loginBtn").on("click",function(){
        let username=$("#username").val();
        let password=$("#password").val();
        let remember=0;
        if($("#remember").is(":checked")){
            remember=1;
        }

        $.ajax({
            type: "POST",
            url: SITE+"ajax",
            data: {"username":username,"password":password,"remember":remember,"process":"login"},
            dataType: "json",
            success: function(result){

            }
          });
    });
});
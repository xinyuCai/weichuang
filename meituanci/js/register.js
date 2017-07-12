$(document).on("pageinit", function(){
    $("#login_page").on("tap", function(){
        location.href = "user/login_page";
    });

    var $username = $("#username");
    var $password = $("#password");

    $username.on("blur",function(){
        if($username.val()==""){
            $("#is-use").html("");
            return false;
        }
        $.post("user/check_username",{
            "username": $(this).val()
        },function(res){
            if(res == "no"){
                $("#is-use").html("用户名已存在！");
            }
            /*else{
                $("#is-use").html("用户名可用");
            }*/
        })
    });

    $("#login-form").on("submit",function(){
        if($username.val() == "" || $password.val()==""){
            $("#is-null").html("用户名和密码不能为空！");
            return false;
        }
    });
});
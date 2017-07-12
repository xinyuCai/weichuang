$(document).on("pageinit", function(){
    $("#register_page").on("tap", function(){
        location.href = "user/register_page";
    });

    var $username = $("#username");
    var $password = $("#password");
    $("#login-form").on("submit",function(){
        if($username.val() == "" || $password.val()==""){
            $("#is-null").html("用户名和密码不能为空！");
            return false;
        }
    });
});

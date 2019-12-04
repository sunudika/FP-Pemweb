function scTop(){
 $(".msgs").animate({scrollTop:$(".msgs")[0].scrollHeight});
}
function load_new_stuff(){
 localStorage['lpid']=$(".msgs .msg:last").attr("title");
 $(".msgs").load("msgs.php",function(){
  if(localStorage['lpid']!=$(".msgs .msg:last").attr("title")){
   scTop();
  }
 });
 $(".users").load("users.php");
}
$(document).ready(function(){
 scTop();
 $("#msg_form").on("submit",function(){
  t=$(this);
  val=$(this).find("input[type=text]").val();
  if(val!=""){
   t.after("<span id='send_status'>Sending.....</span>");
   $.post("send.php",{msg:val},function(){
    load_new_stuff();
    $("#send_status").remove();
    t[0].reset();
   });
  }
  return false;
 });
});
setInterval(function(){
 load_new_stuff();
},1000);

$("#search_chat").keyup(function(){
    var val =  $.trim($(this).val());
    $(".chat .users").find("div").each(function(){
        if ($(this).text().search(new RegExp(val, "i")) < 0 ) 
        {
            $(this).fadeOut(); 
        } 
        else 
        {
            $(this).show();              
        }
    });
});

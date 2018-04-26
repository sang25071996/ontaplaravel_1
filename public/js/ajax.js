$(document).ready(function() {
  $("button[name='get_data']").click(function(){
      get_data();
  });
});
function get_data()
{
  $.ajax({
     type: "get",
     url: "http://localhost:8080/sang/laravel/laravel-lession/get",
     dataType: "html",
     success:function(kq){
       $('.content').html(kq);
     }
  });
}

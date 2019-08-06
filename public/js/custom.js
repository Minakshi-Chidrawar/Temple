$(document).ready(function(e) {
    $(".copy").hide();
    $(".btn-add-more").click(function () {
      //alert("ok");
       var html = $(".copy").html();
       $(".add-more-button").after(html);
   });

    $("body").on("click", ".remove", function () {
        $(this).parents(".control-group").remove();
    });
});
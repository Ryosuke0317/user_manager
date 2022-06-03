// function clickDelete(id) {
//     var res;
//     res = confirm("削除します。よろしいですか？");
//     if (res == true) {
//       location.href = "http://localhost/Smarty_prac/delete.php?id=" + id ;
//     }
//   }

// window.onload = function(){
//   alert("Hello World!");
// }

$(function() {
  $(".clearForm").on("click", function(){
    // $("#name").val("");
    // $(".radio").find(":checked").prop("checked", false);
    $(this.form).find("textarea, :text, select").val("").end().find(":checked").prop("checked", false);
});
});

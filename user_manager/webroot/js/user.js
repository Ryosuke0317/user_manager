function clickDelete(id) {
    var res;
    res = confirm("削除します。よろしいですか？");
    if (res == true) {
      location.href = "http://localhost/Smarty_prac/delete.php?id=" + id ;
    }
  }
{
  // 1秒待ってからloadingのクラスを削除する
  setTimeout(function () {
    jQuery(".p-loading__bg").addClass("loaded");
  }, 1000);
}

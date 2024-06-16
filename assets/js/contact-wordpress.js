jQuery(document).ready(function () {
  // form全体
  const form = jQuery(".wpcf7-form");

  // form送信ボタン
  const submit = jQuery(".js-submit");

  // formがない場合、送信ボタンがない場合は処理をしない
  if (!form.length || !submit.length) {
    return;
  }

  // 送信ボタンは初期値disabled
  submit.prop("disabled", true);

  // required属性の付与
  form.find(".wpcf7-validates-as-required").attr("required", true);

  form.on("input change", function () {
    // required設定されている要素のみをチェック対象としてしまうので、
    // checkbox,selectは個別のバリデーションチェックを行う

    if (form.get(0).checkValidity()) {
      // 一旦バリデーションチェックOKにするけど、追加チェック結果により再度NGにする
      submit.prop("disabled", false);
      if (jQuery('input[type="checkbox"]:checked').length === 0) submit.prop("disabled", true);
    } else {
      submit.prop("disabled", true);
    }
  });

  // safari：✘ready,○load、✘blur,○change
  jQuery(window).on("load", function () {
    var $require = jQuery(".wpcf7-form [required]");
    if ($require.length === 0) return;
    $require.on("change", function () {
      var $this = jQuery(this);
      // input要素が単体：input要素のnextにエラーメッセージ
      var $errorMessage = $this.closest(".wpcf7-form-control-wrap").next(".error-message"); //thisに対するエラーメッセージの要素

      // お名前、お問い合わせ内容のバリデーション
      if ($this.hasClass("js-text")) {
        // お名前、お問い合わせ内容が入力必須の場合は、空文字か否かのチェックのみ行う
        // trimで空白を削除し、空白削除後が空文字かチェック
        if ($this.val().trim() === "") {
          $errorMessage.text("このフィールドは必須です。").show();
        } else {
          $errorMessage.hide(); // 条件を満たす場合はエラーメッセージを隠す
        }
      }

      // メールアドレスのバリデーション
      if ($this.hasClass("js-mail")) {
        // メールアドレスのパターン
        var mailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!$this.val().match(mailPattern)) {
          $errorMessage.text("有効なメールアドレスを入力してください。（例: user@example.com）").show();
        } else {
          $errorMessage.hide(); // 条件を満たす場合はエラーメッセージを隠す
        }
      }

      // チェックボックスのバリデーション
      if ($this.hasClass("js-checkbox")) {
        console.log("test");

        if (jQuery('input[type="checkbox"]:checked').length === 0) {
          var $errorMessageCheckbox = $this.closest(".js-form--wrapper").next(".error-message"); //thisに対するエラーメッセージの要素
          $errorMessageCheckbox.text("チェックされておりません。").show();
        } else {
          $errorMessageCheckbox.hide(); // 条件を満たす場合はエラーメッセージを隠す
        }
      }
    });
  });
});

{
  document.addEventListener("DOMContentLoaded", function () {
    const checkbox = document.querySelector('input[name="privacy-policy"]');
    const privacySpan = document.querySelector(".privacy-span");
    if (!checkbox || !privacySpan) return;
    checkbox.addEventListener("change", function () {
      if (checkbox.checked) {
        privacySpan.classList.add("checked");
      } else {
        privacySpan.classList.remove("checked");
      }
    });
  });
}

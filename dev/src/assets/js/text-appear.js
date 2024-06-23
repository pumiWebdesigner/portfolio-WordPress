document.addEventListener("DOMContentLoaded", function () {
  var text = document.querySelector(".intro-text").innerText;
  var container = document.querySelector(".intro-text");
  container.innerHTML = ""; // テキストを一旦クリア
  //   var text2 = document.querySelector(".schedule-text").innerText;
  var container2 = document.querySelector(".schedule-text");
  //   container2.innerHTML = ""; // テキストを一旦クリア
  container2.style.opacity = 0.25;
  var delay = 25; // 0.025秒

  // 1文字ずつspanタグで囲んで追加
  for (var i = 0; i < text.length; i++) {
    var span = document.createElement("span");
    span.innerText = text[i];
    span.style.opacity = 0.25;
    span.style.color = "black";
    // 強調する文字を直接指定して、その文字だけspan.style.color = "red";にする

    if ((37 <= i && i <= 45) || (72 <= i && i <= 83) || (116 <= i && i <= 125)) {
      span.style.color = "#ff8b71";
    }

    container.appendChild(span);
  }

  var spans = container.querySelectorAll("span");

  function showCharacter(index) {
    if (index < spans.length) {
      spans[index].style.opacity = 1; // 透明度を1にする

      // 次の文字を表示
      setTimeout(function () {
        showCharacter(index + 1);
      }, delay);
    } else {
      container2.style.opacity = 1; // テキストを表示
    }
  }
  // IntersectionObserverのオプションを設定
  var options = {
    root: null, // ビューポートを基準にする
    rootMargin: "0px 0px -600px 0px", // ビューポートの下部から200px上の位置を基準にする
    threshold: 0, // 要素が少しでも表示されたらコールバックを呼び出す
  };

  // #idが画面に表示されたら最初の文字を表示
  var target = document.querySelector("#about");
  var observer = new IntersectionObserver(function (changes) {
    changes.forEach(function (change) {
      if (change.isIntersecting) {
        showCharacter(0);
        observer.disconnect();
      }
    });
  }, options);
  observer.observe(target);
});

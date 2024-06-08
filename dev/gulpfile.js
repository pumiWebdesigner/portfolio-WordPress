const gulp = require("gulp");
const sass = require("gulp-sass")(require("sass"));
const postcss = require("gulp-postcss"); //cssの後処理を行うツール。autoprefixerを使うために必要
//https://www.npmjs.com/package/gulp-postcss
const autoprefixer = require("autoprefixer"); //ベンダープレフィックスを付加するプラグイン
//https://github.com/postcss/autoprefixer
// どのブラウザがサポートされてるか確認
// npx autoprefixer --info
const cssSorter = require("css-declaration-sorter"); //cssのプロパティをソートするプラグイン（デフォルトでアルファベット順）
const mmq = require("gulp-merge-media-queries"); // メディアクエリをまとめるプラグイン（容量圧縮に効果ある（見やすさも向上？）

const browserSync = require("browser-sync"); // ブラウザの自動読み込み、リロード
// const browserSync = require("browser-sync").create(); // ブラウザの自動読み込み、リロードChatGPT提案
const cleanCss = require("gulp-clean-css"); //cssの圧縮
const uglify = require("gulp-uglify"); //jsの圧縮
const rename = require("gulp-rename"); //ファイル名変更
const htmlBeautify = require("gulp-html-beautify"); //htmlの整形
const gulpIf = require("gulp-if"); //gulpの条件分岐
const ejs = require("gulp-ejs"); //ejsのコンパイル

// gulp-webpはESモジュールのためrequireで読み込めず、importで読み込む
async function importWebp() {
  // importする際はawaitをセットで使う必要がある
  const webpModule = await import("gulp-webp");
  //   webpの処理がexport default functionなので、import結果に.defaultをつける
  return webpModule.default;
}

let webp;

// gulp-webpのindex.jsに記載されていた対象拡張子 [".png", ".jpg", ".jpeg", ".tif", ".tiff", ".webp"];
const webpExtensions = [".png", ".jpg", ".jpeg"];

async function copyImage() {
  if (!webp) {
    // copyImage タスクを定義する非同期関数（既にimport済なら再度importしない）
    webp = await importWebp();
  }
  return (
    gulp
      .src("./src/assets/img/**/*")
      //そのままの画像も格納
      .pipe(gulp.dest("../assets/img/"))
      //extname: ファイルの拡張子を取得,toLowerCase: 小文字に変換,拡張子が対象の拡張子に含まれているか確認
      .pipe(gulpIf((file) => webpExtensions.includes(file.extname.toLowerCase()), webp()))
      .pipe(gulp.dest("../assets/img/"))
      .on("error", (err) => {
        console.error("gulp-webpがエラーです", err);
      })
  );
}

function compileSass() {
  return gulp
    .src("./src/assets/sass/**/*.scss") // sassフォルダ内のsassファイルすべてを対象とする
    .pipe(sass()) //sassコンパイルを実行
    .pipe(postcss([autoprefixer(), cssSorter()])) // ベンダープレフィックスを付加して、プロパティをソート
    .pipe(mmq()) // メディアクエリをまとめる
    .pipe(gulp.dest("../")) // 圧縮前ファイルを一旦出力ディレクトリに書き出し
    .pipe(cleanCss()) // cssの圧縮処理
    .pipe(
      rename({
        suffix: ".min", //.minをファイル名に追加
      })
    )
    .pipe(gulp.dest("../")); // 出力ディレクトリに書き出し
}

function watch() {
  gulp.watch("./src/**/*.html", gulp.series(formatHTML, browserReload)); // HTMLファイルの変更を監視
  gulp.watch("./src/assets/sass/**/*.scss", gulp.series(compileSass, browserReload)); // Sassファイルの変更を監視
  gulp.watch("./src/assets/js/**/*.js", gulp.series(minJS, browserReload)); // jsファイルの変更を監視
  gulp.watch("./src/assets/img/**/*", gulp.series(copyImage, browserReload)); // 画像ファイルの変更を監視
  gulp.watch("./src/**/*.ejs", gulp.series(compileEJS, browserReload)); // HTMLファイルの変更を監視
  gulp.watch("../**/*.php", browserReload); // phpファイルの変更を監視
}

function browserInit(done) {
  browserSync.init({
    server: {
      baseDir: "../",
    },
    // proxy: "http://localhost:8888/dev/",
  });
  done();
}

function browserReload(done) {
  browserSync.reload();
  done();
}

function minJS() {
  return gulp
    .src("./src/assets/js/**/*.js")
    .pipe(gulp.dest("../assets/js/")) // 圧縮前ファイルを一旦出力ディレクトリに書き出し
    .pipe(uglify()) //jsの圧縮処理
    .pipe(
      rename({
        suffix: ".min",
      })
    )
    .pipe(gulp.dest("../assets/js/"));
}

function formatHTML() {
  return gulp
    .src("./src/**/*.html")
    .pipe(
      htmlBeautify({
        indent_size: 2,
        indent_with_tabs: true,
      })
    )
    .pipe(gulp.dest("../"));
}

function compileEJS() {
  return gulp
    .src(["./src/**/*.ejs", "!./src/**/_*.ejs"])
    .pipe(ejs())
    .pipe(rename({ extname: ".php" }))
    .pipe(
      htmlBeautify({
        indent_size: 2,
        indent_with_tabs: true,
      })
    )
    .pipe(gulp.dest("../"));
}

function copyCss() {
  return gulp.src("./src/**/*.css").pipe(gulp.dest("../"));
}

// wacthする前の初回出力ファイル作成
exports.build = gulp.parallel(compileEJS, formatHTML, minJS, compileSass, copyImage, copyCss);
// 初回以外の出力ファイル作成
// ブラウザ表示、変更監視まとめて実行
exports.dev = gulp.parallel(browserInit, watch);
// exports.dev = gulp.series(browserInit, watch);
// 画面表示
exports.browserInit = browserInit;
// 変更監視
exports.watch = watch;
// 変更箇所の監視対象：EJS
exports.compileEJS = compileEJS;
// 変更箇所の監視対象：HTML
exports.formatHTML = formatHTML;
// 変更箇所の監視対象：SASS
exports.compileSass = compileSass;
// 変更箇所の監視対象：JS
exports.minJS = minJS;
// 変更箇所の監視対象：img
exports.copyImage = copyImage;

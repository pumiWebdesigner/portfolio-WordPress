<!DOCTYPE html>
<html lang="ja">
<!-- head -->
<!-- prettier-ignore -->

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

	<!-- nodndexの記載 -->
	<meta name="robots" content="noindex" />

	<!-- twitterｶｰﾄﾞ,OGP -->
	<meta name="twitter:card" content="summary_large_image" />
	<meta name="twitter:site" content="@pumiWebcoder" />
	<meta property="og:url" content="https://pumiwebcoder.xsrv.jp/" />
	<meta property="og:title" content="Pumi&#39;s Portfolio" />
	<meta property="og:description" content="WEBコーダーpumiのポートフォリオサイトです。" />
	<meta property="og:image" content="./assets/img/OGP.webp" />
	<meta property="og:image" content="./assets/img/favicon.webp" />
	<link rel="icon" href="./assets/img/favicon.webp" type="image/webp" />

	<!-- title,description -->
	<title>Pumi&#39;s Portfolio</title>
	<meta name="description" content="WEBコーダーpumiのポートフォリオサイトです。" />

	<!-- GoogleFonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com" />
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;600&amp;family=Oswald:wght@400;500&amp;display=swap" rel="stylesheet" />

	<!-- swiper -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
	<!-- font-awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
	<!-- wow -->
	<link rel="stylesheet" href="./assets/css/animate.css" />
	<!-- css読み込み -->
	<link rel="stylesheet" href="./assets/css/style.css" />
</head>

<body>
	<!-- header -->
	<!-- prettier-ignore -->
	<header class="l-header p-header">
		<div class="l-inner">
			<!-- ロゴ、グローバルナビ、ハンバーガーメニュー -->
			<div class="p-header__container">
				<!-- ロゴ -->
				<h1 class="c-logo">
					<a href="./index.html">Pumi's<br />Portfolio</a>
				</h1>
				<!-- グローバルナビ -->
				<nav class="p-header__nav">
					<div class="p-header__nav--item">
						<a class="p-header__link hover__underline--from-left" href="../#works" target="_self">works</a>
					</div>
					<div class="p-header__nav--item">
						<a class="p-header__link hover__underline--from-left" href="../#about" target="_self">about</a>
					</div>
					<div class="p-header__nav--item">
						<a class="p-header__link hover__underline--from-left" href="../#skills" target="_self">skills</a>
					</div>
					<div class="p-header__nav--item">
						<a class="p-header__link hover__underline--from-left" href="../#contact" target="_self">contact</a>
					</div>
					<div class="p-header__nav--item">
						<a class="p-header__link hover__underline--from-left" href="https://twitter.com/pumi_webcoder" target="_blank">Twitter(X)</a>
					</div>
				</nav>
				<!-- ハンバーガーメニュー -->
				<div class="p-header__hamburger--button">
					<button id="js-drawer__btn" class="c-hamburger-btn" aria-label="ハンバーガーメニュー">

						<span class="c-hamburger-bar"></span>

						<span class="c-hamburger-bar"></span>

						<span class="c-hamburger-bar"></span>

					</button>
				</div>
			</div>
			<!-- ドロワーメニュー（ヘッダーコンテナの外） -->
			<nav class="p-drawer__nav">
				<div class="p-drawer__nav--item">
					<a class="p-drawer__link" href="../#works">works</a>
				</div>
				<div class="p-drawer__nav--item">
					<a class="p-drawer__link" href="../#about">about</a>
				</div>
				<div class="p-drawer__nav--item">
					<a class="p-drawer__link" href="../#skills">skills</a>
				</div>
				<div class="p-drawer__nav--item">
					<a class="p-drawer__link" href="../#contact">contact</a>
				</div>
				<div class="p-drawer__nav--item">
					<a class="p-drawer__link" href="https://twitter.com/pumi_webcoder">Twitter(X)</a>
				</div>
			</nav>
		</div>
	</header>

	<main class="main">
		<!-- BackGround -->
		<!-- prettier-ignore -->

		<div class="p-bg"></div>
		<!-- headerの高さ分の余白を取る -->
		<div class="u-separeta--header"></div>
		<!-- contact -->
		<!-- prettier-ignore -->

		<!-- privacy-policy -->
		<div class="p-privacy-policy">
			<div class="p-privacy-policy__head">
				<h2 class="p-privacy-policy__title">プライバシー <br class="u-hidden-pc" />ポリシー</h2>
				<div class="p-privacy-policy__content">本ポートフォリオサイト（以下 当サイト）では、個人情報の取り扱いについて下記の様に定めます。</div>
			</div>
			<div class="p-privacy-policy__body">
				<div class="p-privacy-policy__box">
					<h2 class="p-privacy-policy__title-sub">1. 個人情報の取得</h2>
					<p class="p-privacy-policy__text">当サイトでは、ユーザーの皆様の個人情報（氏名、住所、メールアドレス、電話番号などを個人で特定できる情報）を取得させていただく事があります。</p>
				</div>
				<div class="p-privacy-policy__box">
					<h2 class="p-privacy-policy__title-sub">2. 個人情報の利用</h2>
					<p class="p-privacy-policy__text">取得した個人情報は以下の目的で使用致します。</p>
					<ul>
						<li class="p-privacy-policy__detail">お客様からのお問い合わせに対する回答送付</li>
						<li class="p-privacy-policy__detail">資料を送付する際などでの本人確認</li>
						<li class="p-privacy-policy__detail">当サイトのサービスに関するご案内</li>
						<li class="p-privacy-policy__detail">当サイトのサービスの変更、提供中止、終了等のご連絡</li>
						<li class="p-privacy-policy__detail">市場分析およびマーケティング</li>
						<li class="p-privacy-policy__detail">広告配信、表示および効果測定</li>
						<li class="p-privacy-policy__detail">当サイトのサービス提供、維持、保護および改善の為に必要な場合</li>
					</ul>
				</div>
				<div class="p-privacy-policy__box">
					<h2 class="p-privacy-policy__title-sub">3. 個人情報の安全管理</h2>
					<p class="p-privacy-policy__text">当サイトでは取得した個人情報について適切な管理に努めるとともに個人情報の漏洩、改ざん、不正な侵入の防止に努めます。</p>
				</div>
				<div class="p-privacy-policy__box">
					<h2 class="p-privacy-policy__title-sub">4. 第3者への開示/提供の禁止</h2>
					<p class="p-privacy-policy__text">当サイトではお客様よりお預かりした個人情報を適切に管理し、次のいずれかに該当する場合を除き、個人情報を第3者に開示致しません。</p>
					<ul>
						<li class="p-privacy-policy__detail">法律上、照会権限を有する者から書面による正式な協力要請、照会があった場合</li>
						<li class="p-privacy-policy__detail">お客様の同意があった場合</li>
						<li class="p-privacy-policy__detail">当サイトのサービスに関するご案内</li>
						<li class="p-privacy-policy__detail">事業パートナーと共同利用する場合</li>
						<li class="p-privacy-policy__text">※具体的な共同利用がある場合には別途ご連絡させて頂きます。</li>
					</ul>
				</div>
				<div class="p-privacy-policy__box">
					<h2 class="p-privacy-policy__title-sub">5. 個人情報に関するお問い合わせ</h2>
					<p class="p-privacy-policy__text">個人情報に関するお問い合わせは以下までお願いします。</p>
					<p class="p-privacy-policy__text">
						<a href="mailto:pumi.Webdesigner@gmail.com">pumi.Webdesigner@gmail.com</a>
					</p>
				</div>
				<div class="p-privacy-policy__box">
					<h2 class="p-privacy-policy__title-sub">6. 改変と見直しについて</h2>
					<p class="p-privacy-policy__text">個人情報について、法令変更など発生した際は随時見直しを行います。</p>
				</div>
				<div class="p-privacy-policy__submit">
					<button class="c-btn p-privacy-policy__btn js-closeBtn">閉じる</button>
				</div>
			</div>
		</div>
		<!-- footer -->
		<!-- prettier-ignore -->

		<footer class="p-footer">
			<div class="l-inner">
				<div class="p-footer__contents">
					<small class="p-footer__copyright">&copy;Pumi's Portfolio All rights reserved.</small>
				</div>
			</div>
		</footer>
		<!-- to-top -->
		<!-- prettier-ignore -->

		<div class="p-to-top">
			<a href="#" aria-label="Go to top">
				<svg width="56" height="56" viewBox="0 0 56 56" fill="none">
					<path d="M54 28C54 42.3594 42.3594 54 28 54C13.6406 54 2 42.3594 2 28C2 13.6406 13.6406 2 28 2C42.3594 2 54 13.6406 54 28V28Z" fill="white" stroke="#7777FF" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
					<path d="M38.4001 28.0001L28.0001 17.6001L17.6001 28.0001" stroke="#7777FF" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
					<path d="M28 38.4001V17.6001" stroke="#7777FF" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
				</svg>
			</a>
		</div>
	</main>
	<!-- script-js -->
	<!-- jQuery読み込み -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js" defer></script>
	<!-- swiper -->
	<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js" defer></script>

	<!-- slider -->
	<script src="./assets/js/slider.js" defer></script>
	<!-- wow -->
	<script src="./assets/js/wow.min.js"></script>
	<script>
		new WOW().init();
	</script>
	<!-- dialog -->
	<script src="./assets/js/dialog.js" defer></script>
	<!-- contact-html -->
	<script src="./assets/js/contact-html.js" defer></script>
	<!-- JavaScript読み込み -->
	<script src="./assets/js/script.js" defer></script>
</body>

</html>
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
	<meta property="og:image" content="./img/OGP.webp" />
	<!-- <meta property="og:image" content="./img/favicon.webp" /> -->
	<!-- <link rel="icon" href="./img/favicon.webp" type="image/png" /> -->

	<!-- title,description -->
	<title>Pumi&#39;s Portfolio</title>
	<meta name="description" content="WEBコーダーpumiのポートフォリオサイトです。" />
	<!-- GoogleFonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com" />
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;600&amp;family=Oswald:wght@400;500&amp;display=swap" rel="stylesheet" />

	<!-- font-awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />

	<!-- jQuery読み込み -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js" defer></script>
	<!-- swiper -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
	<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js" defer></script>
	<script src="./assets/js/slider.js" defer></script>
	<!-- wow -->
	<!-- wow.jsはwow().initより先に実行する必要があるので、deferを外す -->
	<link rel="stylesheet" href="./assets/css/animate.css" />
	<!-- css読み込み -->
	<link rel="stylesheet" href="./assets/css/style.css" />

	<!-- JavaScript読み込み -->
	<script src="./assets/js/wow.min.js"></script>
	<script>
		new WOW().init();
	</script>
	<script src="./assets/js/dialog.js" defer></script>
	<script src="./assets/js/contact-html.js" defer></script>
	<script src="./assets/js/script.js" defer></script>
	<!-- 優先表示画像の事前読込 -->
	<link rel="preload" href="./assets/img/img_fv.jpg" as="image" />
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
						<a class="p-header__link" href="./index.html" target="_self">works</a>
					</div>
					<div class="p-header__nav--item">
						<a class="p-header__link" href="./index.html" target="_self">skills</a>
					</div>
					<div class="p-header__nav--item">
						<a class="p-header__link" href="./index.html" target="_self">promise</a>
					</div>
					<div class="p-header__nav--item">
						<a class="p-header__link" href="./contact.html" target="_self">contact</a>
					</div>
					<div class="p-header__nav--item">
						<a class="p-header__link" href="https://twitter.com/pumi_webcoder" target="_blank">Twitter(X)</a>
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
					<a class="p-drawer__link" href="./index.html">works</a>
				</div>
				<div class="p-drawer__nav--item">
					<a class="p-drawer__link" href="./index.html">skills</a>
				</div>
				<div class="p-drawer__nav--item">
					<a class="p-drawer__link" href="./index.html">promise</a>
				</div>
				<div class="p-drawer__nav--item">
					<a class="p-drawer__link" href="./contact.html">contact</a>
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
					<h2 class="p-privacy-policy__subTitle">1. 個人情報の取得</h2>
					<p class="p-privacy-policy__text">当サイトでは、ユーザーの皆様の個人情報（氏名、住所、メールアドレス、電話番号などを個人で特定できる情報）を取得させていただく事があります。</p>
				</div>
				<div class="p-privacy-policy__box">
					<h2 class="p-privacy-policy__subTitle">2. 個人情報の利用</h2>
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
					<h2 class="p-privacy-policy__subTitle">3. 個人情報の安全管理</h2>
					<p class="p-privacy-policy__text">当サイトでは取得した個人情報について適切な管理に努めるとともに個人情報の漏洩、改ざん、不正な侵入の防止に努めます。</p>
				</div>
				<div class="p-privacy-policy__box">
					<h2 class="p-privacy-policy__subTitle">4. 第3者への開示/提供の禁止</h2>
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
					<h2 class="p-privacy-policy__subTitle">5. 個人情報に関するお問い合わせ</h2>
					<p class="p-privacy-policy__text">個人情報に関するお問い合わせは以下までお願いします。</p>
					<p class="p-privacy-policy__text">
						<a href="mailto:pumi.Webdesigner@gmail.com">pumi.Webdesigner@gmail.com</a>
					</p>
				</div>
				<div class="p-privacy-policy__box">
					<h2 class="p-privacy-policy__subTitle">6. 改変と見直しについて</h2>
					<p class="p-privacy-policy__text">個人情報について、法令変更など発生した際は随時見直しを行います。</p>
				</div>
				<div class="p-privacy-policy__submit">
					<a href="contact.html" class="c-btn p-privacy-policy__btn">戻る</a>
				</div>
			</div>
		</div>
		<!-- contact-twitter -->
		<!-- prettier-ignore -->

		<section id="contact-twitter" class="l-section p-contact-twitter wow fadeInUp">
			<!-- contact -->
			<div class="p-contact-twitter__item p-contact-twitter__item-contact">
				<hgroup class="p-section__title">
					<h2 class="p-section__title--main">Contact</h2>
					<p class="p-section__title--sub">お問い合わせ</p>
				</hgroup>
				<a href="./contact.html" target="_blank" class="p-contact-twitter__button">
					<span class="p-contact-twitter__button__icon">
						<svg width="20" height="16" viewBox="0 0 20 16" fill="white">
							<path d="M2.5 2.28406C2.15625 2.28406 1.875 2.56339 1.875 2.90479V3.76217L8.61328 9.25563C9.42188 9.91515 10.582 9.91515 11.3906 9.25563L18.125 3.76217V2.90479C18.125 2.56339 17.8438 2.28406 17.5 2.28406H2.5ZM1.875 6.17138V12.8365C1.875 13.1779 2.15625 13.4572 2.5 13.4572H17.5C17.8438 13.4572 18.125 13.1779 18.125 12.8365V6.17138L12.5781 10.6949C11.0781 11.917 8.91797 11.917 7.42188 10.6949L1.875 6.17138ZM0 2.90479C0 1.53531 1.12109 0.421875 2.5 0.421875H17.5C18.8789 0.421875 20 1.53531 20 2.90479V12.8365C20 14.2059 18.8789 15.3194 17.5 15.3194H2.5C1.12109 15.3194 0 14.2059 0 12.8365V2.90479Z" fill="white" class="p-contact-twitter__button__icon-path" />
						</svg>
					</span>
					<span class="p-contact-twitter__button__text">Contact</span>
				</a>
			</div>
			<!-- twitter(X) -->
			<div class="p-contact-twitter__item p-contact-twitter__item-twitter">
				<hgroup class="p-section__title">
					<h2 class="p-section__title--main">Twitter(X)</h2>
					<p class="p-section__title--sub">ツイッター(X)</p>
				</hgroup>
				<a href="https://twitter.com/pumi_webcoder" target="_blank" class="p-contact-twitter__button">
					<span class="p-contact-twitter__button__icon">
						<svg width="20" height="21" viewBox="0 0 20 21" fill="white">
							<path d="M17.9441 6.40799C17.9568 6.58444 17.9568 6.76092 17.9568 6.93736C17.9568 12.3191 13.8325 18.5201 6.29441 18.5201C3.97207 18.5201 1.81473 17.8521 0 16.6926C0.329961 16.7304 0.647187 16.743 0.989844 16.743C2.90605 16.743 4.67004 16.1002 6.07867 15.0037C4.27664 14.9659 2.76648 13.7937 2.24617 12.1805C2.5 12.2183 2.75379 12.2435 3.02031 12.2435C3.38832 12.2435 3.75637 12.193 4.09898 12.1049C2.22082 11.7267 0.812148 10.0883 0.812148 8.10949V8.05909C1.35781 8.36158 1.99238 8.55063 2.66492 8.57581C1.56086 7.84479 0.837539 6.59704 0.837539 5.18543C0.837539 4.42922 1.04055 3.73602 1.3959 3.13105C3.41367 5.60136 6.44668 7.21459 9.84766 7.39107C9.78422 7.08858 9.74613 6.77353 9.74613 6.45843C9.74613 4.21496 11.5736 2.38745 13.8451 2.38745C15.0253 2.38745 16.0913 2.87899 16.84 3.67302C17.7664 3.49658 18.6547 3.15626 19.4416 2.68994C19.137 3.63523 18.4898 4.42926 17.6395 4.93337C18.4644 4.84519 19.2639 4.61827 19.9999 4.30322C19.4416 5.10981 18.7436 5.82819 17.9441 6.40799Z" fill="white" class="p-contact-twitter__button__icon-path" />
						</svg>
					</span>
					<span class="p-contact-twitter__button__text">Twitter(X)</span>
				</a>
			</div>
		</section>
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
</body>

</html>
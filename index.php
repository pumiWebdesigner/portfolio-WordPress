<?php get_header(); ?>
<!-- BackGround -->
<div class="p-bg"></div>
<!-- work -->
<section id="works" class="l-section l-first-view p-section wow fadeInUp">
	<div class="l-inner">
		<hgroup class="p-section__title">
			<h2 class="p-section__title--main">Works</h2>
			<p class="p-section__title--sub">実績</p>
		</hgroup>

		<div class="p-section__contents swiper p-works__contents">
			<ul class="swiper-wrapper">
				<li class="swiper-slide">
					<div class="p-works__img c-img js-modal__btn--open">
						<img src="<?php echo get_template_directory_uri() ?>/assets/img/comp/clinic.webp" alt="仮想の歯医者HP" width="1422" height="862" loading="lazy" decoding="async"/>
					</div>
					<dialog class="dialog__wrapper" aria-label="Dialog Box">
						<div class="dialog__container">
							<div class="dialog__img">
								
								<img src="<?php echo get_template_directory_uri() ?>/assets/img/comp/clinic.webp" alt="仮想の歯医者HP" width="1422" height="862" loading="lazy" decoding="async"/>
							</div>
							<div class="dialog__text">
								<dl>
									<dt>スキル</dt>
									<dd>HTML、Sass、jQuery、GitHub、WordPress</dd>
									<dt>制作時期</dt>
									<dd>2024年3月～5月</dd>
									<dt>制作時間</dt>
									<dd>約2ヶ月（113時間）</dd>
									<dt>制作概要</dt>
									<dd>スクール卒業課題です。FigmaカンプからHTMLサイト作成し、WordPress化しました。カスタム投稿・カスタムフィールドを実装しており、サイト所有者によるブログ投稿やスタッフ追加が可能となります。表示速度を意識した画像圧縮やプラグイン導入を実施しました。</dd>
								</dl>
							</div>
						</div>
						<div class="p-modal__buttons">
							<a class="c-btn p-btn-modal js-modal__btn--link" href="https://pumi-webcoder.com/" target="_blank">ページを見る </a>
							<form method="dialog">
								<button class="c-btn p-btn-modal js-modal__btn--close">閉じる</button>
							</form>
						</div>
					</dialog>
				</li>

				<li class="swiper-slide">
					<div class="p-works__img c-img js-modal__btn--open">
						<img src="<?php echo get_template_directory_uri() ?>/assets/img/comp/Portfolio.webp" alt="本サイト（ポートフォリオサイト）" width="1431" height="903" loading="lazy" decoding="async"/>
					</div>
					<dialog class="dialog__wrapper" aria-label="Dialog Box">
						<div class="dialog__container">
							<div class="dialog__img">
								<img src="<?php echo get_template_directory_uri() ?>/assets/img/comp/Portfolio.webp" alt="本サイト（ポートフォリオサイト）" width="1431" height="903" loading="lazy" decoding="async"/>
							</div>
							<div class="dialog__text">
								<dl>
									<dt>スキル</dt>
									<dd>HTML、Sass、jQuery、GitHub、Gulp、EJS</dd>
									<dt>制作時期</dt>
									<dd>2023年3月～4月</dd>
									<dt>制作時間</dt>
									<dd>約2週間（40時間）</dd>
									<dt>制作概要</dt>
									<dd>一度BEMで作成しましたが、FLOCSS、EJSを学習し再構築しました。一番ご覧になっていただきたい「実績」セクションは、Swiperによるスライダーの実装にdialogタグによるモーダル表示を組み合わせました。</dd>
								</dl>
							</div>
						</div>
						<div class="p-modal__buttons">
							
							<a class="c-btn p-btn-modal js-modal__btn--link" href="<?php echo esc_url(home_url('/')); ?>" target="_blank">ページを見る </a>
							<form method="dialog">
								<button class="c-btn p-btn-modal js-modal__btn--close">閉じる</button>
							</form>
						</div>
					</dialog>
				</li>

				<li class="swiper-slide">
					<div class="p-works__img c-img js-modal__btn--open">
						<img src="<?php echo get_template_directory_uri() ?>/assets/img/comp/lp-team-h.webp" alt="仮想の子供向けクリニックLP（チーム開発）" width="1794" height="1101" loading="lazy" decoding="async"/>
					</div>
					<dialog class="dialog__wrapper" aria-label="Dialog Box">
						<div class="dialog__container">
							<div class="dialog__img">
								<img src="<?php echo get_template_directory_uri() ?>/assets/img/comp/lp-team-h.webp" alt="仮想の子供向けクリニックLP（チーム開発）" width="1794" height="1101" loading="lazy" decoding="async"/>
							</div>
							<div class="dialog__text">
								<dl>
									<dt>スキル</dt>
									<dd>HTML、SASS、jQuery、GitHub</dd>
									<dt>制作時期</dt>
									<dd>2023年12月～2月（コーディングは1ヶ月）</dd>
									<dt>制作時間</dt>
									<dd>約2週間（32時間）</dd>
									<dt>制作概要</dt>
									<dd>デザイナー2名、コーダー（私含め）3人で共同開発した架空クリニックのHPです。GitHubを用いて共同開発し私はヘッダーとアニメーションを担当しました。レスポンシブやアニメーションについても、MTGにて認識合わせしながら開発を進めました。</dd>
								</dl>
							</div>
						</div>
						<div class="p-modal__buttons">
							<a class="c-btn p-btn-modal js-modal__btn--link" href="<?php echo get_template_directory_uri() ?>/works/Lp-Team_H/index.html" target="_blank">ページを見る </a>
							<form method="dialog">
								<button class="c-btn p-btn-modal js-modal__btn--close">閉じる</button>
							</form>
						</div>
					</dialog>
				</li>

				<li class="swiper-slide">
					<div class="p-works__img c-img js-modal__btn--open">
						<img src="<?php echo get_template_directory_uri() ?>/assets/img/comp/Rich-Life.webp" alt="家具のレンタルサービスサイトLP" width="1007" height="779" loading="lazy" decoding="async"/>
					</div>
					<dialog class="dialog__wrapper" aria-label="Dialog Box">
						<div class="dialog__container">
							<div class="dialog__img">
								<img src="<?php echo get_template_directory_uri() ?>/assets/img/comp/Rich-Life.webp" alt="家具のレンタルサービスサイトLP" width="1007" height="779" loading="lazy" decoding="async"/>
							</div>
							<div class="dialog__text">
								<dl>
									<dt>スキル</dt>
									<dd>HTML、Sass、jQuery、GitHub</dd>
									<dt>制作時期</dt>
									<dd>2024年3月</dd>
									<dt>制作時間</dt>
									<dd>約2週間（33時間）</dd>
									<dt>制作概要</dt>
									<dd>デイトラが開催した実案件チャレンジ企画の作成物です。メガメニューやアコーディオンの実装を行いました。</dd>
								</dl>
							</div>
						</div>
						<div class="p-modal__buttons">
							<a class="c-btn p-btn-modal js-modal__btn--link" href="<?php echo get_template_directory_uri() ?>/works/RPC/index.html" target="_blank">ページを見る </a>
							<form method="dialog">
								<button class="c-btn p-btn-modal js-modal__btn--close">閉じる</button>
							</form>
						</div>
					</dialog>
				</li>

				<li class="swiper-slide">
					<div class="p-works__img c-img js-modal__btn--open">
						<img src="<?php echo get_template_directory_uri() ?>/assets/img/comp/onomichi.webp" alt="尾道キャンペーンのLP" width="1261" height="841" loading="lazy" decoding="async"/>
					</div>
					<dialog class="dialog__wrapper" aria-label="Dialog Box">
						<div class="dialog__container">
							<div class="dialog__img">
								<img src="<?php echo get_template_directory_uri() ?>/assets/img/comp/onomichi.webp" alt="尾道キャンペーンのLP" width="1261" height="841" loading="lazy" decoding="async"/>
							</div>
							<div class="dialog__text">
								<dl>
									<dt>スキル</dt>
									<dd>HTML、Sass、jQuery</dd>
									<dt>制作時期</dt>
									<dd>2023年11月</dd>
									<dt>制作時間</dt>
									<dd>2週間（38時間）</dd>
									<dt>制作概要</dt>
									<dd>スクール課題です。dialogタグやsummaryタグなど比較的新しい技術を取り入れながら実装しました。複数スライドの実装も行っております。</dd>
								</dl>
							</div>
						</div>
						<div class="p-modal__buttons">
							<a class="c-btn p-btn-modal js-modal__btn--link" href="<?php echo get_template_directory_uri() ?>/works/LP-Onomichi_campaign/index.html" target="_blank">ページを見る </a>
							<form method="dialog">
								<button class="c-btn p-btn-modal js-modal__btn--close">閉じる</button>
							</form>
						</div>
					</dialog>
				</li>

				<li class="swiper-slide">
					<div class="p-works__img c-img js-modal__btn--open">
						<img src="<?php echo get_template_directory_uri() ?>/assets/img/comp/tokaniku.webp" alt="ﾎﾟｰﾄﾌｫﾘｵｻｲﾄ" width="1215" height="632" loading="lazy" decoding="async"/>
					</div>
					<dialog class="dialog__wrapper" aria-label="Dialog Box">
						<div class="dialog__container">
							<div class="dialog__img">
								<img src="<?php echo get_template_directory_uri() ?>/assets/img/comp/tokaniku.webp" alt="ﾎﾟｰﾄﾌｫﾘｵｻｲﾄ" width="1215" height="632" loading="lazy" decoding="async"/>
							</div>
							<div class="dialog__text">
								<dl>
									<dt>スキル</dt>
									<dd>HTML、Sass、jQuery</dd>
									<dt>制作時期</dt>
									<dd>2023年9月</dd>
									<dt>制作時間</dt>
									<dd>5日（28時間）</dd>
									<dt>制作概要</dt>
									<dd>スクール課題です。ライブラリswiperを使ってスライダーを実装しました。また、ドロワーメニュー、アコーディオンメニューの制御をjQueryで実装しました。</dd>
								</dl>
							</div>
						</div>
						<div class="p-modal__buttons">
							<a class="c-btn p-btn-modal js-modal__btn--link" href="<?php echo get_template_directory_uri() ?>/works/tokakuni/index.html" target="_blank">ページを見る </a>
							<form method="dialog">
								<button class="c-btn p-btn-modal js-modal__btn--close">閉じる</button>
							</form>
						</div>
					</dialog>
				</li>

				<li class="swiper-slide">
					<div class="p-works__img c-img js-modal__btn--open">
						<img src="<?php echo get_template_directory_uri() ?>/assets/img/comp/sobolon.webp" alt="ｱｸｾｻﾘｼｮｯﾌﾟのLP" width="1232" height="719" loading="lazy" decoding="async"/>
					</div>
					<dialog class="dialog__wrapper" aria-label="Dialog Box">
						<div class="dialog__container">
							<div class="dialog__img">
								<img src="<?php echo get_template_directory_uri() ?>/assets/img/comp/sobolon.webp" alt="ｱｸｾｻﾘｼｮｯﾌﾟのLP" width="1232" height="719" loading="lazy" decoding="async"/>
							</div>
							<div class="dialog__text">
								<dl>
									<dt>スキル</dt>
									<dd>HTML、Sass、jQuery</dd>
									<dt>制作時期</dt>
									<dd>2023年9月</dd>
									<dt>制作時間</dt>
									<dd>3日（23時間）</dd>
									<dt>制作概要</dt>
									<dd>スクール課題です。wowやdrawerのライブラリを使って実装しています。</dd>
								</dl>
							</div>
						</div>
						<div class="p-modal__buttons">
							<a class="c-btn p-btn-modal js-modal__btn--link" href="<?php echo get_template_directory_uri() ?>/works/soboron/index.html" target="_blank">ページを見る </a>
							<form method="dialog">
								<button class="c-btn p-btn-modal js-modal__btn--close">閉じる</button>
							</form>
						</div>
					</dialog>
				</li>

			</ul>
			<div class="swiper-button-prev"></div>
			<div class="swiper-button-next"></div>
			<div class="swiper-pagination"></div>

			<div class="p-works__explanation">
				<p>Basic認証を設定しております。<br />ユーザー名・パスワードともに<strong>『demo』</strong>となります。</p>
				<!-- <p>これまで制作したWebサイトです。また、当サイトも自ら制作していますので実績の一つとして御覧ください。</p> -->
			</div>
		</div>
	</div>
</section>
<!-- about -->

<section id="about" class="l-section p-section wow fadeInUp">
	<div class="l-inner">
		<hgroup class="p-section__title">
			<h2 class="p-section__title--main">About</h2>
			<p class="p-section__title--sub">私について</p>
		</hgroup>

		<div class="p-section__contents p-about__contents">
			<div class="p-about__container">
				<div class="p-about__text--contents">
					<div class="p-about__text--main">
						ポートフォリオをご覧頂き、ありがとうございます。
						<br />
						お客様のご要望に合わせて<strong class="color-accent">最適なサイト</strong>を制作いたします。
						<br />
						ご満足いただけるサイトを提供できるよう<strong class="color-accent">修正についても柔軟に対応</strong>させていただきます。
						<br />
						一度きりのお仕事のお付き合いだけではなく、<strong class="color-accent">継続的に信頼し合える</strong>お付き合いをさせていただけると誠に嬉しいです。
					</div>

					<div class="p-about__text--sub-title">稼働時間</div>
					<div class="p-about__text--sub-message">
						平　日：
						<strong class="color-accent"> 4時間 </strong>
						対応可能です（5:00〜7:00、19:00〜21:00）
					</div>
					<div class="p-about__text--sub-message">
						土日祝：
						<strong class="color-accent"> 16時間 </strong>
						対応可能です（5:00〜21:00）
					</div>
				</div>
				<div class="p-about__img">
					<img src="<?php echo get_template_directory_uri() ?>/assets/img/pumi.webp" alt="プミ画像" width="1000" height="1000" loading="lazy" decoding="async"/>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- skills -->

<section id="skills" class="l-section p-section wow fadeInUp">
	<div class="l-inner">
		<hgroup class="p-section__title">
			<h2 class="p-section__title--main">Skills</h2>
			<p class="p-section__title--sub">スキル</p>
		</hgroup>

		<div class="p-section__contents p-skills__contents">
			<ul class="p-skills__list">
				<li class="p-skills__item wow fadeInUp">
					<div class="p-skills__item--img">
						<img src="<?php echo get_template_directory_uri() ?>/assets/img/skills/html5.svg" alt="html5" width="800" height="800" loading="lazy" decoding="async"/>
					</div>
					<h3 class="p-skills__item-name">HTML</h3>
				</li>
				<li class="p-skills__item wow fadeInUp">
					<div class="p-skills__item--img">
						<img src="<?php echo get_template_directory_uri() ?>/assets/img/skills/css3.svg" alt="css3" width="800" height="800" loading="lazy" decoding="async"/>
					</div>
					<h3 class="p-skills__item-name">CSS</h3>
				</li>
				<li class="p-skills__item wow fadeInUp">
					<div class="p-skills__item--img">
						<img src="<?php echo get_template_directory_uri() ?>/assets/img/skills/sass.svg" alt="sass" width="800" height="800" loading="lazy" decoding="async"/>
					</div>
					<h3 class="p-skills__item-name">Sass</h3>
				</li>
				<li class="p-skills__item wow fadeInUp">
					<div class="p-skills__item--img">
						<img src="<?php echo get_template_directory_uri() ?>/assets/img/skills/javascript.svg" alt="JavaScript" width="800" height="800" loading="lazy" decoding="async"/>
					</div>
					<h3 class="p-skills__item-name">JavaScript</h3>
				</li>
				<li class="p-skills__item wow fadeInUp">
					<div class="p-skills__item--img">
						<img src="<?php echo get_template_directory_uri() ?>/assets/img/skills/jquery.svg" alt="jQuery" width="800" height="800" loading="lazy" decoding="async"/>
					</div>
					<h3 class="p-skills__item-name">jQuery</h3>
				</li>
				<li class="p-skills__item wow fadeInUp">
					<div class="p-skills__item--img">
						<img src="<?php echo get_template_directory_uri() ?>/assets/img/skills/wordpress.svg" alt="WordPress" width="512" height="512" loading="lazy" decoding="async"/>
					</div>
					<h3 class="p-skills__item-name">WordPress</h3>
				</li>
				<li class="p-skills__item wow fadeInUp">
					<div class="p-skills__item--img">
						<img src="<?php echo get_template_directory_uri() ?>/assets/img/skills/github.svg" alt="github" width="496" height="512" loading="lazy" decoding="async"/>
					</div>
					<h3 class="p-skills__item-name">github</h3>
				</li>
				<li class="p-skills__item wow fadeInUp">
					<div class="p-skills__item--img">
						<img src="<?php echo get_template_directory_uri() ?>/assets/img/skills/gulp.svg" alt="gulp" width="800" height="800" loading="lazy" decoding="async"/>
					</div>
					<h3 class="p-skills__item-name">gulp</h3>
				</li>
			</ul>
			<div class="p-skills__messages">
				<ul>
					<li class="p-skills__text--item">
						<div class="p-skills__text--title-main">HTMLサイト</div>
						<div class="p-skills__text--title-sub"><strong class="color-accent">W3C標準に準拠</strong>したコーディングを行います。</div>
					</li>
					<li class="p-skills__text--item">
						<div class="p-skills__text--title-main">WordPressサイト</div>
						<div class="p-skills__text--title-sub">ブログ投稿者の操作しやすさを意識して<strong class="color-accent">カスタム</strong>いたします</div>
					</li>
					<li class="p-skills__text--item">
						<div class="p-skills__text--title-main">SEO</div>
						<div class="p-skills__text--title-sub"><strong class="color-accent">パーツの役割を意識して適切なタグを使用する</strong>等、適切なページ構成で実装します。</div>
					</li>
					<li class="p-skills__text--item">
						<div class="p-skills__text--title-main">アニメーション</div>
						<div class="p-skills__text--title-sub">
							<strong class="color-accent">CSS・javaScript・jQuery</strong>
							を使用した簡易なアニメーションを実装可能です。
						</div>
					</li>
					<li class="p-skills__text--item">
						<div class="p-skills__text--title-main">レスポンシブデザイン</div>
						<div class="p-skills__text--title-sub">
							<strong class="color-accent">スマホ・タブレット・パソコン</strong>
							に合わせた画面レイアウトを実装可能です。
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
</section>
<!-- contact -->

<!-- wordPress化する時 -->
<!-- formタグをdivタグに置換え -->
<!-- inputタグもCONTACT7用に置換え -->
<section id="contact" class="l-section p-contact wow fadeInUp">
	<div class="l-inner">
		<hgroup class="p-section__title">
			<h2 class="p-section__title--main">Contact</h2>
			<p class="p-section__title--sub">お問い合わせ</p>
		</hgroup>

		<form id="js-form" class="p-contact__form" method="post" action="
		https://docs.google.com/forms/u/0/d/e/1FAIpQLSdJq9RtyK_ZOIa4ehi92lMGJouvBIXhEBzSsltfstKmzat1Jg/formResponse
		">
			<!-- フォーム項目_ポートフォリオ用（お名前、メールアドレス、お問い合わせ種類、お問い合わせ内容）、送信ボタン -->
			
			<!-- テキスト（名前） -->
			
			<!-- テキスト（名前） -->
			<!-- wordPress化する時はinputタグをCONTACT7用に置換える -->
			<div class="p-contact__form--item">
				<div class="p-contact__form--title">
					<label for="your-name" class="p-contact__form--title-text">お名前</label>
					<span class="p-contact__form--require">必須</span>
				</div>
				<div class="p-contact__form--input">
					<input class="js-text" type="text" id="your-name" placeholder="山田太郎" name="entry.530212225" required />
					<!-- <span class="wpcf7-form-control-wrap" data-name="your-name"
><input
	size="40"
	class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required reserve__form--input js-text"
	id="your-name"
	aria-required="true"
	aria-invalid="false"
	placeholder="山田　太郎"
	value=""
	type="text"
	name="your-name"
	required="required"
/></span> -->
					<div class="error-message"></div>
				</div>
			</div>
			<!-- メールアドレス -->
			
			<!-- メールアドレス -->
			<!-- wordPress化する時はinputタグをCONTACT7用に置換える -->
			<div class="p-contact__form--item">
				<div class="p-contact__form--title">
					<label for="email" class="p-contact__form--title-text">メールアドレス</label>
					<span class="p-contact__form--require">必須</span>
				</div>
				<div class="p-contact__form--input">
					<!-- <span class="wpcf7-form-control-wrap" data-name="emailAddress"
><input
	size="40"
	class="wpcf7-form-control wpcf7-email wpcf7-validates-as-required wpcf7-text wpcf7-validates-as-email reserve__form--input js-mail"
	id="email"
	aria-required="true"
	aria-invalid="false"
	placeholder="xxx@example.com"
	value=""
	type="email"
	name="emailAddress"
	required="required"
/>
</span> -->
					<input class="js-mail" type="email" id="your-email" placeholder="info@example.com" name="emailAddress" required />
					<div class="error-message"></div>
				</div>
			</div>
			<!-- ラジオボタン -->
			
			<!-- ラジオボタン -->
			<!-- wordPress化する時はinputタグをCONTACT7用に置換える -->
			<div class="p-contact__form--item reserve__form--item-radio">
				<div class="p-contact__form--title">
					<!-- <div class="p-contact__form--title-text">初診/再診</div> -->
					<div class="p-contact__form--title-text">お問い合わせ種類</div>
					<!-- <label for="radio-button" class="p-contact__form--title-text">初診/再診</label> -->
					<span class="p-contact__form--require">必須</span>
				</div>
				<div class="p-contact__form--input">
					<!-- wrapperの構成が違ってたので、HTML用にクラスをコピーしてDIVタグ作成した -->
					<!-- <span class="wpcf7-form-control-wrap" data-name="radio-button">
<span class="wpcf7-form-control wpcf7-radio reserve__form--radio-wrapper js-radio" id="radio-button">
	<span class="wpcf7-list-item first">
	<label>
		<input type="radio" name="radio-button" value="初診" checked="checked" />
		<span class="wpcf7-list-item-label">初診</span>
	</label>
	</span>
	<span class="wpcf7-list-item last">
	<label>
		<input type="radio" name="radio-button" value="再診" />
		<span class="wpcf7-list-item-label">再診</span>
	</label>
	</span>
</span>
</span> -->
					<div class="p-contact__form--radio-wrapper js-radio">
						<label class="p-contact__field--radio">
							<input type="radio" name="entry.716562788" value="ホームページ制作" required />
							<span class="p-contact-radio-label">ホームページ制作</span>
						</label>
						<label class="p-contact__field--radio">
							<input type="radio" name="entry.716562788" value="ホームページ修正" />
							<span class="p-contact-radio-label">ホームページ修正</span>
						</label>
						<label class="p-contact__field--radio">
							<input type="radio" name="entry.716562788" value="ホームページ相談" />
							<span class="p-contact-radio-label">ホームページ相談</span>
						</label>
					</div>
					<div class="error-message"></div>
				</div>
			</div>
			<!-- テキストアリア -->
			
			<!-- テキストアリア -->
			<!-- wordPress化する時はinputタグをCONTACT7用に置換える -->
			<div class="p-contact__form--item reserve__form--item-textarea">
				<div class="p-contact__form--title">
					<label for="message" class="p-contact__form--title-text"> お問い合わせ内容 </label>
					<span class="p-contact__form--require">必須</span>
				</div>
				<div class="p-contact__form--input">
					<!-- <span class="wpcf7-form-control-wrap" data-name="message">
<textarea
cols="40"
rows="5"
class="wpcf7-form-control wpcf7-textarea reserve__form--input reserve__form--textarea"
id="message"
aria-invalid="false"
placeholder="ご自由にご記入ください。"
name="message"
required="required"
></textarea>
</span> -->
					<textarea class="js-text" id="your-message" placeholder="お問い合わせ内容をご入力ください。3営業日以内にご返信いたします。" name="entry.1269014493" required></textarea>
					<div class="error-message"></div>
				</div>
			</div>
			<!-- チェックボックス -->
			
			<!-- チェックボックス -->
			<!-- wordPress化する時はinputタグをCONTACT7用に置換える -->
			<div class="p-contact__form--item p-contact__form--item-privacy">
				<label class="p-contact__form--title p-contact__wrapper-privacy js-form--wrapper">
					<input class="js-checkbox" type="checkbox" name="entry.2114229630" value="プライバシーポリシーに合意する" required aria-label="プライバシーポリシーに合意する" />
					<span>
						
						<a href="<?php echo esc_url(home_url('/')); ?>policy/" target="_blank""> プライバシーポリシー </a>
に合意する
</span>
<span class=" p-contact__form--require">必須</span>
				</label>
				<div class="error-message"></div>

			</div>
			<!-- 送信ボタン -->
			
			<!-- 送信ボタン -->
			<button id="js-submit" class="c-btn p-contact__btn" type="submit">上記の内容を送信する</button>
			<!-- wordPress化する時は以下に置換えられる（CONTACT7用） -->
			<!-- <input class="wpcf7-form-control wpcf7-submit has-spinner js-submit button contact__button" id="js-submit" type="submit" value="送信" disabled="" /> -->
		</form>
		<!-- 送信後のメッセージ -->
		
		<div id="js-success" class="p-contact__message--success">
			<p>
				送信完了しました。
				<br />ありがとうございました。 <br />3営業日以内にご返信いたします。
			</p>
		</div>
		<div id="js-error" class="p-contact__message--error">
			<p>
				送信に失敗しました。
				<br />ページを更新して再度送信してください。
			</p>
		</div>
	</div>
</section>

<?php get_footer(); ?>
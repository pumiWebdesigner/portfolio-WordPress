<!DOCTYPE html>
	<html lang="ja">
	<!-- head -->
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<!-- nodndexの記載 -->
		<meta name="robots" content="noindex" />
		<!-- GoogleFonts -->
		<link rel="preconnect" href="https://fonts.googleapis.com" />
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
		<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;600&amp;family=Oswald:wght@400;500&amp;display=swap" rel="stylesheet" />
		<?php wp_head(); ?>
	</head>

	<body>
		<!-- header -->
		<header class="l-header p-header">
			<div class="l-inner">
				<!-- ロゴ、グローバルナビ、ハンバーガーメニュー -->
				<div class="p-header__container">
					<!-- ロゴ -->
					<h1 class="c-logo">
						<a href="<?php echo esc_url(home_url('/')); ?>">Pumi's<br />Portfolio</a>
					</h1>
					<!-- グローバルナビ -->
					<nav class="p-header__nav">
						<?php
							wp_nav_menu(
								array(
									'depth' => 1,//階層の深さ
									'theme_location' => 'global', // グローバルメニューをここに表示すると指定
									'container' => false,//ulリストのさらに外側にcontainerを作りたい時のタグ名（divやul）
									'menu_class' => 'p-header__nav--list',//ulに付与するクラス名
									'li_class' => 'p-header__nav--item', // liタグへclass追加
									'a_class' => 'p-header__nav--link hover__underline--from-left' // aタグへclass追加
								)
							);
						?>
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
					<?php
						wp_nav_menu(
							array(
								'depth' => 1,//階層の深さ
								'theme_location' => 'drawer', // グローバルメニューをここに表示すると指定
								'container' => false,//ulリストのさらに外側にcontainerを作りたい時のタグ名（divやul）
								'menu_class' => 'p-drawer__nav--list',//ulに付与するクラス名
								'li_class' => 'p-drawer__nav--item', // liタグへclass追加
								'a_class' => 'p-drawer__nav--link js-drawer__nav--link' // aタグへclass追加
							)
						);
					?>
				</nav>
			</div>
		</header>

		<main class="main">
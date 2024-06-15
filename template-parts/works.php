<section id="works" class="l-section l-first-view p-section wow fadeInUp">
	<div class="l-inner">
		<hgroup class="p-section__title">
			<h2 class="p-section__title--main">Works</h2>
			<p class="p-section__title--sub">実績</p>
		</hgroup>

		<div class="p-section__contents swiper p-works__contents">
			<ul class="swiper-wrapper">

			<?php
			// カスタム投稿タイプ 'work' の最新投稿を取得
			$args = array(
				'post_type' => 'work',
				'posts_per_page' => 10, // 表示したい投稿数
			);
			$work_query = new WP_Query($args);
			
			if ($work_query->have_posts()) :
				while ($work_query->have_posts()) : $work_query->the_post(); ?>
					
		

					<li class="swiper-slide">
						<?php if (has_post_thumbnail()) : ?>
							<div class="p-works__img c-img js-modal__btn--open">
								<?php the_post_thumbnail(); ?>
								<!-- <img src="/assets/img/comp/clinic.webp" alt="仮想の歯医者HP" /> -->
							</div>
						<?php endif; ?>
					<dialog class="dialog__wrapper" aria-label="Dialog Box">
						<div class="dialog__container">
							<div class="dialog__img">
								<?php if (has_post_thumbnail()) : ?>
									<?php the_post_thumbnail('medium'); ?>
								<?php endif; ?>
							</div>
							<!-- <img src="/assets/img/comp/clinic.webp" alt="仮想の歯医者HP" /> -->
							<div class="dialog__text">
								<?php
								// カスタムフィールドの設定を配列でまとめる
									$args = array(
										'dt1' => 'スキル',
										'dd1' => 'skills',
										'dt2' => '制作時期',
										'dd2' => 'date',
										'dt3' => '制作時間',
										'dd3' => 'time',
										'dt4' => '制作概要',
										'dd4' => 'overview',
										'URL' => 'url',
									);

									get_template_part('template-parts/portfolio-summary', null, $args);
								?>
							</div>
						</div>
						<div class="p-modal__buttons">
							<a class="c-btn p-btn-modal js-modal__btn--link" 
							href="
							<?php echo get_field($args['URL']) ?  esc_url(the_field($args['URL'])) : "#";  ?>
							" 
							target="_blank">ページを見る </a>
							<form method="dialog">
								<button class="c-btn p-btn-modal js-modal__btn--close">閉じる</button>
							</form>
						</div>
					</dialog>
				</li>

				<?php endwhile;
					wp_reset_postdata();
				endif; ?>

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
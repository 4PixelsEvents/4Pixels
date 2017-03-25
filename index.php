<?php get_header(); ?>

	<section class="slider">
		<div class="innerSlider">
			<div class="wrap">
				<div class="eventSlider">

					<div class="event">
						<div class="card">
							<div class="eventOverlay"></div>
							<span class="title">Coming Soon</span>
						</div>
					</div>

				</div>
			</div>
		</diV>
	</section>

	<section class="videos">
		<div class="wrap">
			<h2 class="col100">Video's</h2>
			<div class="videoWrapper">
				<div class="col100 videoBox">
					<div class="video">
						<script src= "https://player.twitch.tv/js/embed/v1.js"></script>
						<div class="videoRatio" id="homeTwitchVideo"></div>
						<script type="text/javascript">
							var options = {
								channel: "syveri",
								autoplay: "false",
							};
							var player = new Twitch.Player("homeTwitchVideo", options);
							player.setVolume(0.5);
						</script>
						<div class="content">Twitch / 4 Pixels (Syveri)</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<main role="main">
		<section class="stories">
      <div class="wrap">
        <h2 class="col100">Stories</h2>
        <div class="storiesWrapper">
					<?php get_template_part('loop'); ?>
				</div>
      </div>
    </section>

			<?php // get_template_part('pagination'); ?>
	</main>

<?php get_footer(); ?>

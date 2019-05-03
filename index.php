<?php
	$pagetitle = 'Download Photo from Instagram Online Made in Easy';
	$pagedesc = 'Instagram Downloader: Save photo from Instagram without install any app by URL. Get pictures in just click.';
	require_once 'include/header.php';
		
	$link = isset($_POST['url']) ? $_POST['url'] : NULL;
	
	if (strpos( $link, "/?" ) !== false ) {
		$variable = substr($link, 0, strpos($link, "/?"));
	} else if (substr($link, -1) == "/") {
		$variable = rtrim($link, "/");
	} else {
		$variable = $link;
	}
?>
<section class="hero-sec">
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="hero-content">
					<h1 class="cd-headline">Instagram Photo Downloader</h1>
					<form action="http://gramtool.net/media/" method="post" class="input-group">
						<input type="text" name="url" class="form-control" placeholder="e.g. https://www.instagram.com/p/BTOs9p4j4Jk">
						<div class="input-group-btn">
							<button type="submit" class="btn btn-violet no-border"><i class="glyphicon glyphicon-menu-right"></i></button>
						</div>
					</form>
					<p>Enter Instagram image URL you want and just Download it!</p>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="article">
	<div class="container">
		<div class="row">
			<div class="col-md-8 how-to">
				<h2>How to Download photo from instagram</h2>
				<p><b>Step 1</b>: Copy the photo’s URL from your browser or app.</p>
				<p><b>Step 2</b>: Go to Instatool.net website.</p>
				<p><b>Step 3</b>: Input the photo’s URL into box.</p>
				<p><b>Step 4</b>: Enter. Then, click the resulting Download Picture button to save your image.</p>

				<h3>Quick tips:</h3>
				<p>Easy way to get photo's URL / link in the app, tap <img src="img/tap-ios.png" alt="get url instagram photo" /> (iOS) or <img src="img/tap-android.jpg" alt="copy url instagram" /> (Android) above the post and then tap <b>Copy Share URL</b>. The link will be saved to your clipboard.</p>
				<img src="img/save-instagram-photos.jpg" alt="save instagram photos">
			</div>
		</div>
	</div>
</section>
<?php require_once "include/footer.php"; ?>
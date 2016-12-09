<?php 
require_once('../inc/func.std.html.php');
$rootDir = ROOT_DIR;
?>
<?=getHeaderHtml( $pageTitle, $otherStr );?>
<?php 
	// $images = array("img/brands/waka/image01.jpg",
	// 			"img/brands/waka/image02.jpg",
	// 			"img/brands/waka/image03.jpg",
	// 			"img/brands/waka/image04.jpg",
	// 			"img/brands/waka/image05.jpg",
	// 			"img/brands/waka/image06.jpg",
	// 		);
	// $dirname = $rootDir.'img/brands/waka/bags';
$dir = "../img/brands/waka/bags/*";
$images = glob( $dir);
$dir_b = "../img/brands/waka/*jpg";
$images_b = glob($dir_b);
?>
<body>

	<?=getGlobalNaviHtml();?>
	</div><!-- #header -->


	<div class="container">
		<div class="wrap_brands">

			<div id="waka" class="brand_block amb">
				<div class='brand-header' style="padding-left:7px;">
					<div class='brand-image-wrapper'>
						<div class='brand-img'>
						</div>
					</div>
					<div class='brand-text'>
						<p>WAKA TAKAHASHI is a women's handbag brand established in New York City by a Japanese designer with A/W 	2016 collection. Each piece is sophisticatedly crafted in Italy
						</p>
					</div>
				</div>
				<div class='image-container'>
				<?php
					foreach($images as $img){
						echo '<div class=image-wrapper>' . '<img class=images src='.$rootDir. $img . ' />' . '</div>';
					};
					foreach($images_b as $img){
						echo '<div class=image-wrapper>' . '<img class=images_b src='.$rootDir. $img . ' />' . '</div>';
					};				 
				?>
				</div>
			</div>				
		</div><!-- /.wrap -->
	</div><!-- /.container -->

	<?=getFooterHtml();?> 

</body>
</html>
<?php 
require_once('../inc/func.std.html.php');
$rootDir = ROOT_DIR;
?>
<?=getHeaderHtml( $pageTitle, $otherStr );?>
<body>

	<?=getGlobalNaviHtml();?>
	</div><!-- #header -->
<? 
$dir = "../img/brands/amb/aw16/*.jpg";
$images = glob( $dir);
?>
	<div class="container">
		<div class="wrap_brands">

			<div id="amb" class="brand_block amb">
				<div class='brand-header' style="padding-left:7px;">
				<div class='brand-image-wrapper'>
					<div class='brand-img'>
					</div>
				</div>
				<div class='brand-text'>
					<p>
						Amb Ambassadors of minimalism is an original footwear label of Highbridge International, 		established in 2008.
						The collection expands from our classic style sneakers for men’s and women’s. Manufactured in Portugal.
						We focus on “fashionable minimal design”, “quality of material & construction”, “comfort & functionality”.
						WEBSITE : <a href="amb-tokyo.com">amb-tokyo.com</a>
					</p>
				</div>
				</div>
				<div class='image-container'>
				<?php 
					foreach($images as $img){
						echo '<div class=image-wrapper>' . '<img class=images src='.$rootDir.$img .' />' . '</div>';
					};
				?>
				</div>
			</div>
<!-- 			<div id="waka" class="brand_block amb" style="display:none;">
				<h3>WAKA TAKAHASHI</h3>
				<p>is a women's handbag brand established in New York City by a Japanese designer with A/W 2016 collection. Each piece is sophisticatedly crafted in Italy</p>
				<div class='image-container'>
				</div>
			</div>	 -->			
		</div><!-- /.wrap -->
	</div><!-- /.container -->

	<?=getFooterHtml();?> 

</body>

</html>
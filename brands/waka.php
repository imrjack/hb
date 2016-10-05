<?php 
require_once('../inc/func.std.html.php');
$rootDir = ROOT_DIR;
?>
<?=getHeaderHtml( $pageTitle, $otherStr );?>
<body>

	<?=getGlobalNaviHtml();?>
	</div><!-- #header -->
<? $images = array("img/brands/waka/image01.jpg",
				"img/brands/waka/image02.jpg",
				"img/brands/waka/image03.jpg",
				"img/brands/waka/image04.jpg",
				"img/brands/waka/image05.jpg",
				"img/brands/waka/image06.jpg",
			);
?>
	<div class="container">
		<div class="wrap_brands">

			<div id="waka" class="brand_block amb">
				<div style="padding-left:7px;">
					<h3>WAKA TAKAHASHI</h3>
					<p>is a women's handbag brand established in New York City by a Japanese designer with A/W 2016 collection. Each piece is sophisticatedly crafted in Italy</p>
				</div>
				<div class='image-container'>
				<?php 
					foreach($images as $img){
						echo '<div class=image-wrapper>' . '<img class=images src='.$rootDir.$img .' />' . '</div>';
					};
				?>
				</div>
			</div>				
		</div><!-- /.wrap -->
	</div><!-- /.container -->

	<?=getFooterHtml();?> 

</body>
</html>
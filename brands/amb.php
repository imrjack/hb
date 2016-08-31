<?php 
require_once('../inc/func.std.html.php');
$rootDir = ROOT_DIR;
?>
<?=getHeaderHtml( $pageTitle, $otherStr );?>
<body>

	<?=getGlobalNaviHtml();?>
	</div><!-- #header -->
<? $images = array("img/brands/amb/image01.jpg",
				"img/brands/amb/image02.jpg",
				"img/brands/amb/image03.jpg",
				"img/brands/amb/image04.jpg",
				"img/brands/amb/image05.jpg",
				"img/brands/amb/image06.jpg",
				"img/brands/amb/image07.jpg",
				"img/brands/amb/image08.jpg",
				"img/brands/amb/image09.jpg"
			);
?>
	<div class="container">
		<div class="wrap_brands">

			<div id="amb" class="brand_block amb">
				<h3>WAKA TAKAHASHI</h3>
				<p>is a women's handbag brand established in New York City by a Japanese designer with A/W 2016 collection. Each piece is sophisticatedly crafted in Italy</p>
				<div class='image-container'>
				<?php 
					foreach($images as $img=>$value){
						echo '<div class=image-wrapper>' . '<img class=images id=img_'.$img.' src='.'http://placehold.it/350x450' .' />' . '</div>';
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
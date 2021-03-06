<?php 
require_once('../inc/func.std.html.php');
$rootDir = ROOT_DIR;
?>
<?=getHeaderHtml( $pageTitle, $otherStr );?>
<?php
	$aboutMsg = '<h3>About</h3>
				<p>
					Highbridge New York Inc. is a company established in 2013 in NY, as the branch of 
					Highbridge International Co., Ltd. founded in 1987 in Tokyo, Japan.
				</p>
				</br>
				<p>
					We specialize in import and wholesale of multiple European footwear and handbag brands,
					as well as out original label.
				</p>
				</br>
				<p>
					Our goal in this New York office is to develop our original labels absorbing world aspects
					of design with the quality of European craftsmanship, and to investigate in new designers
					to share the growing vision of luxury design to the world customers.
				</p>';

	$newYorkOffice = '<h3>NEW YORK OFFICE</h3>
						<p>136 Madison Avenue, 5th flr</p>
						<p>New York, NY 10016</p>
						<p>TEL: +1 646 722 3810</p>
						<p>FAX: +1 646 722 3301</p>
						<p>E-MAIL:info@highbridge-ny.com</p>
						<p>www.highbridge-ny.com</p>
						</br>
						<a href="https://www.google.com/maps/place/136+Madison+Avenue,+New+york,+ny+10016/"><img src="../img/gmap/map1.png" width="100%"></a>';
	$japanOffice = '<h3>JAPAN OFFICE</h3>
					<p>5-45-2, JINGUMAE, SHIBUYA-KU,</p>
					<p>TOKYOO, 150-0001, JAPAN</p>
					<p>TEL: +81 3 3486 8844</p>
					<p>TEL: +81 3 3486 8845</p>
					<p>E-MAIL:info@highbridge.co.jp</p>
					<p>www.highbridge-co.jp</p>	
					</br>
					<a href="https://www.google.com/maps/place/5-45-2,+JINGUMAE,+SHIBUYA-KU/"><img src="../img/gmap/map2.png" width="100%"></a>									
					'
?>
<body>
	<?=getGlobalNaviHtml();?>
	</div>
	<div class="container">
		<div id="contact">
			
			<?php createBox("350px", "350px", null, $aboutMsg); ?>

		
			<?php createBox("250px","450px", null, $newYorkOffice); ?>

		
			<?php createBox("250px","450px", null, $japanOffice);?>

		</div>
	</div>

</body>
<?php
//--------------------------------------------------------------------------------------------------
// Module Name : 
//.File Name   : brands/index.php
//.Description : HBNY　BRANDS画面
// @author	HiroshiTanaka
// @create	2014/03/08
// @Maintenance Date: 20YY/MM/DD    : Reason
//--------------------------------------------------------------------------------------------------
//                  Maintenance History
//  Rev.   Date           Reason              Comment
//  1.0.0  2012/03/23     新規作成
//--------------------------------------------------------------------------------------------------

//------------------------------------------------------------------------------
// インクルード
require_once('../inc/func.std.html.php');

//--------------------------------------------------------------------------------------------------
// 認証

//--------------------------------------------------------------------------------------------------
// 宣言部
//--------------------------------------------------------------------------------------------------
// 変数宣言とREQUESTデータ取得
$cat = $_REQUEST['cat'];
$pageTitle = 'BRANDS Highbridge New York Inc.';

//--------------------------------------------------------------------------------------------------
// メイン処理部
//--------------------------------------------------------------------------------------------------

//------------------------------------------------------------------------------
//　javascript設定

$rootDir = ROOT_DIR;

$otherStr = <<< EOF
<script type="text/javascript" src="{$rootDir}js/jquery.bxslider/jquery.bxslider.js"></script>
<link href="{$rootDir}js/jquery.bxslider/jquery.bxslider_brands.css" rel="stylesheet" />

<script type="text/javascript">
$(document).ready(function(){
	$('#brand_waka_slider').bxSlider({
		mode:'horizontal'
		,speed:750
		,pager:false
		,controls:true
		,auto:false
		,pause:6000
		,responsive:false
	});

	$('#brand_amb_slider').bxSlider({
		mode:'horizontal'
		,speed:750
		,pager:false
		,controls:true
		,auto:false
		,pause:6000
		,responsive:false
	});

});
</script>

EOF;


//------------------------------------------------------------------------------
//　画面表示処理
?>
<?=getHeaderHtml( $pageTitle, $otherStr );?>
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
<body>

	<?=getGlobalNaviHtml();?>
	</div><!-- #header -->

	<div class="container">
		<div class="wrap_brands">

			<div id="amb" class="brand_block amb" style="display:none;">
				<h3>WAKA TAKAHASHI</h3>
				<p>is a women's handbag brand established in New York City by a Japanese designer with A/W 2016 collection. Each piece is sophisticatedly crafted in Italy</p>
				<div class='image-container'>
				<?php 
					foreach($images as $img){
						echo '<div class=image-wrapper>' . '<img class=images src='.'http://placehold.it/350x450' .' />' . '</div>';
					};
				?>
				</div>
			</div>
			<div id="waka" class="brand_block amb" style="display:none;">
				<h3>WAKA TAKAHASHI</h3>
				<p>is a women's handbag brand established in New York City by a Japanese designer with A/W 2016 collection. Each piece is sophisticatedly crafted in Italy</p>
				<div class='image-container'>
				<?php 
					foreach($images as $img){
						echo '<div class=image-wrapper>' . '<img class=images src='.'http://placehold.it/350x450' .' />' . '</div>';
					};
				?>
				</div>
			</div>				
		</div><!-- /.wrap -->
	</div><!-- /.container -->

	<?=getFooterHtml();?> 

</body>
</html>

<?php
//--------------------------------------------------------------------------------------------------
// ↓以降ファイル内プライベート関数群
//--------------------------------------------------------------------------------------------------

?>

<script>
// $(function(){
// 		var url = window.location.href;
// 		var urlId = url.match(/#.*/)[0];
// 		showDiv(urlId);
// 	$('.sub-menu li a').on('click',function(event){
// 		var url = window.location.hash;
// 		showDiv(url);
//     })
// });
// function showDiv(option){
// 	$(option).toggle();
// }
</script>


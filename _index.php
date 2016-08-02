<?php
//--------------------------------------------------------------------------------------------------
// Module Name : 
//.File Name   : index.php
//.Description : HBNY　トップ画面
// @author	HiroshiTanaka
// @create	2014/03/06
// @Maintenance Date: 20YY/MM/DD    : Reason
//--------------------------------------------------------------------------------------------------
//                  Maintenance History
//  Rev.   Date           Reason              Comment
//  1.0.0  2012/03/23     新規作成
//--------------------------------------------------------------------------------------------------

//------------------------------------------------------------------------------
// インクルード
require_once('./inc/func.std.html.php');

//--------------------------------------------------------------------------------------------------
// 認証

//--------------------------------------------------------------------------------------------------
// 宣言部
//--------------------------------------------------------------------------------------------------
// 変数宣言とREQUESTデータ取得
$cat = $_REQUEST['cat'];
$pageTitle = 'Highbridge New York Inc.';

//--------------------------------------------------------------------------------------------------
// メイン処理部
//--------------------------------------------------------------------------------------------------

//------------------------------------------------------------------------------
//　javascript設定

$rootDir = ROOT_DIR;

$otherStr = <<< EOF
<script type="text/javascript" src="{$rootDir}js/jquery.bxslider/jquery.bxslider.js"></script>
<link href="{$rootDir}js/jquery.bxslider/jquery.bxslider.css" rel="stylesheet" />

<script type="text/javascript">
$(document).ready(function(){
	$('#top_slider').bxSlider({
		mode:'horizontal'
		,speed:750
		,pager:false
		,controls:false
		,auto:false
		,randomStart:true
		,pause:6000
		,responsive:false
	});

	$('#recent_post').bxSlider({
		mode:'horizontal'
		,speed:750
		,controls:false
		,auto:false
		,pause:8000
		,responsive:false
		,pager:false
		,responsive:false
	});

});
</script>

<script type='text/javascript' src='//maps.google.com/maps/api/js?sensor=false'></script>
<script src="./js/hbny_store.js"></script>

EOF;


//------------------------------------------------------------------------------
//　画面表示処理
?>
<?=getHeaderHtml( $pageTitle, $otherStr );?>
<body onLoad="initializeMap('newyork');initializeMap('tokyo');">

	<?=getGlobalNaviHtml();?>
	</div><!-- #header -->

	<div class="container">
		<div class="wrap_top">
		
		<div class="main_banner">
			<ul id="top_slider">
				<li><img src="<?=ROOT_DIR?>img/topimages/topimage01.jpg" /></li>
			</ul>
		</div>

		<div class="banner_bottom">
			<ul>
				<li class="bnr_waka">
					<a href="<?=ROOT_DIR?>brands/#waka"><img src="<?=ROOT_DIR?>img/top/news01.jpg" /></a>
					<h3><a href="<?=ROOT_DIR?>brands/#waka">GET A SNEAK PEEK OF WAKA.</a></h3>
				</li>
				<li class="bnr_ambassadors">
					<a href="<?=ROOT_DIR?>brands/#amb"><img src="<?=ROOT_DIR?>img/top/news02.jpg" /></a>
					<h3><a href="<?=ROOT_DIR?>brands/#amb">SEE OUR S/S 2014<br />AMBASSADORS</a></h3>
				</li>
				<li class="bnr_right">
					<ul>
						<li><a href="http://highbridge.co.jp/" target="_blank"><img src="<?=ROOT_DIR?>img/top/bnr_01.gif" /></a></li>
						<li><a href="http://ellegirl.jp/blogs/wakatakahashi/" target="_blank"><img src="<?=ROOT_DIR?>img/top/bnr_02.gif" /></a></li>
						<li><a href="https://www.facebook.com/amb.footwear?fref=ts" target="_blank"><img src="<?=ROOT_DIR?>img/top/bnr_03.gif" /></a></li>
					</ul>
				</li>
			</ul>
		</div>

		<div id="about">
			<h2>ABOUT US</h2>
			<div class="map_block">

				<div class="storeblock" id="newyork">
					<div class="top">
<h4>Highbridge New York Inc.(USA)</h4>
<p>
275 Seventh Ave. 7th Fl, New York, NY 10001 ,USA <br />
TEL: +1 646 722 3128<br />
FAX: +1 646 722 3001<br />
E-MAIL: info@highbridge-ny.com<br />
www.highbridge-ny.com<br />
</p>
					</div>
					<div class="bottom">
						<div id="storemap_newyork" class="map">
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
		
				<div class="storeblock" id="tokyo">
					<div class="top">
<h4>Highbridge International Co.,Ltd(JAPAN)</h4>
<p>
5-45-2, JINGUMAE, SHIBUYA-KU, TOKYO, 150-0001, JAPAN<br />
TEL：+81 3 3486 8844<br />
FAX：+81 3 3486 8845<br />
E-MAIL: info@highbridge.co.jp<br />
<a href="http://highbridge.co.jp/" target="_blank">www.highbridge.co.jp</a><br />
</p>
					</div>
					<div class="bottom">
						<div id="storemap_tokyo" class="map">
						</div>
					</div>
					<div class="clearfix"></div>
				</div>

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


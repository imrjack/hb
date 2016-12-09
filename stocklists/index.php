<?php
//--------------------------------------------------------------------------------------------------
// Module Name : 
//.File Name   : stocklists/index.php
//.Description : HBNY　STOCKLISTS画面
// @author	HiroshiTanaka
// @create	2014/03/10
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
$pageTitle = 'STOCK LISTS Highbridge New York Inc.';

//--------------------------------------------------------------------------------------------------
// メイン処理部
//--------------------------------------------------------------------------------------------------

//------------------------------------------------------------------------------
//　javascript設定

$rootDir = ROOT_DIR;

$otherStr = <<< EOF
EOF;


//------------------------------------------------------------------------------
//　画面表示処理
?>
<?=getHeaderHtml( $pageTitle, $otherStr );?>
<? $amb = array("img/stocklist/urbanoffitter.jpeg",
				"img/stocklist/store-2.jpg",
				"img/stocklist/store-3.jpeg",
			);
	$amb_links = array("Urban Outfitters", "Japan Store", "Korea");
?>
<? $waka = array("img/stocklist/store-9.jpg",
				"img/stocklist/store-7.jpg",
				"img/stocklist/store-8.jpg",
			);
	$waka_links = array("New York Retailer", "Korea Retailer", "Japan Retailer");
?>
<body>

	<?=getGlobalNaviHtml();?>
	</div><!-- #header -->

	<div class="container">
		<div style="padding-left:7px;margin-bottom:10px;margin-left:3px;">
			<!-- <h2 style='font-size:3em'>AMB</h2>
			<p style='font-style:italic; font-size: 13px; margin-top:6px'> Ambassadors of Minimalism</p> -->
			<img width='190px' src="<?= $rootDir; ?>img/logo/amb-logo.jpg"/>
		</div>
		<div class="stocklists">
				<?php 
					foreach($amb as $key=>$value){
						echo '<div class=image-wrapper>' . '<img class=images src='. $rootDir . $value .' />' . "<div class='stocklist-link'>{$amb_links[$key]}</div></div>";
					}
				?>

		</div><!-- /.wrap -->
			<div style="padding-left:7px; font-size:16px;margin-bottom:10px;margin-left:3px; color:gray;">
				<p>WAKA TAKAHASHI</p>
			</div>
		<div class="stocklists">
				<?php 
					foreach($waka as $key=>$value){
						echo '<div class=image-wrapper>' . '<img class=images src='. $rootDir . $value .' />' . "<div class='stocklist-link'>{$waka_links[$key]}</div></div>";
					};
				?>			
		</div>
	</div><!-- /.container -->

	<?=getFooterHtml();?> 

</body>
</html>

<?php
//--------------------------------------------------------------------------------------------------
// ↓以降ファイル内プライベート関数群
//--------------------------------------------------------------------------------------------------

?>


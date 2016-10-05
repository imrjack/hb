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
<? $amb = array("img/brands/amb/image01.jpg",
				"img/brands/amb/image02.jpg",
				"img/brands/amb/image03.jpg",
			);
	$amb_links = array("Urban Outfitters", "Japan Store", "Korea");
?>
<? $waka = array("img/brands/amb/image01.jpg",
				"img/brands/amb/image02.jpg",
				"img/brands/amb/image03.jpg",
			);
?>
<body>

	<?=getGlobalNaviHtml();?>
	</div><!-- #header -->

	<div class="container">
		<div class="stocklists">
		<div style="padding-left:20px;">
			<h1>AMB</h1>
			<p>Ambassadors of Minimalism</p>
		</div>
				<?php 
					foreach($amb as $img){
						echo '<div class=image-wrapper>' . '<img class=images src='.'http://placehold.it/350x350' .' />' . '</div>';
					};
				?>

		</div><!-- /.wrap -->
		<div class="stocklists">
			<div style="padding-left:20px;">
				<p>Waka Takahashi</p>
			</div>
				<?php 
					foreach($amb as $img){
						echo '<div class=image-wrapper>' . '<img class=images src='.'http://placehold.it/350x350' .' />' . '</div>';
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


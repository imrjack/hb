<?php
//--------------------------------------------------------------------------------------------------
// Module Name : 
//.File Name   : news/index.php
//.Description : HBNY　NEWS画面
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
$pageTitle = 'NEWS Highbridge New York Inc.';

//--------------------------------------------------------------------------------------------------
// メイン処理部
//--------------------------------------------------------------------------------------------------

//------------------------------------------------------------------------------
//　javascript設定

$rootDir = ROOT_DIR;

$otherStr = <<< EOF
EOF;

function createNewsBox( $outerwidth, $outerHeight, $img, $msg=null){
	echo '<div style="margin-top:15px; background:#f4f5f7; width:' . $outerwidth . '; height:' . $outerHeight . ';padding:15px">
			<div>
				<img src="'.$img.';"/>
			</div>
			<div style="margin-top:15px;">
				<p>
					'.$msg.'
				</p>
			</div>
			</div>';
}
?>
<?=getHeaderHtml( $pageTitle, $otherStr );?>
<body>

	<?=getGlobalNaviHtml();?>
	</div><!-- #header -->

	<div class="container">
		<section>
		<div class="left" style="width:27.333%;">
			<?php createNewsBox("100%", "360px","https://placeimg.com/320/180/nature", 'fasdfas')?>
			<?php createNewsBox("100%", "360px","https://placeimg.com/320/180/nature", 'fasdfas')?>
		</div>
		<div class="right" style="width:69.3333%">
			<div style="width:85%;">
				<?php createNewsBox("100%", "360px","https://placeimg.com/320/360/nature", 'fasdfas')?>
			</div>
			<div>
			<div style='width:39.333%;'>
				<?php createNewsBox("100%", "360px","https://placeimg.com/320/180/nature", 'fasdfas')?>	
			</div>
			<div style='width:39.333%;'>
				<?php createNewsBox("100%", "360px","https://placeimg.com/320/180/nature", 'fasdfas')?>	
			</div>
			</div>
		</div> 
		</section>
	</div><!-- /.container -->

	<?=getFooterHtml();?> 

</body>
</html>

<?php
//--------------------------------------------------------------------------------------------------
// ↓以降ファイル内プライベート関数群
//--------------------------------------------------------------------------------------------------

?>


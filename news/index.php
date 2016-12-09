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
	echo '<div style="background:#f4f5f7; width:' . $outerwidth . '; height:' . $outerHeight . ';padding:15px">
			<div>
				<img src="'.$img.'"/>
			</div>
			<div style="margin-top:15px;">
				<p>
					'.$msg.'
				</p>
			</div>
			</div>';
}
$autumn="Autumn Winter 2016 Collection
					
<p>The brand expresses exquisite balance of beauty in independent woman and innocence of girl. The theme of Autumn Winter 2016 collection is “What if I still believe in?”
</p>
<p>					
With simple bold form, functionality and delicate design details, it brings out uncovered beauty of the holder, and stands out in every occasion from day and night.
The design of frontal metal work is inspired by bitter and sweet chocolate.
</p>
<p>					
WAKA TAKAHASHI currently consists of two divisions.
The “Classic collection” this season, is represented with 5 styles,
“I” “AM” “IN LOVE” “WITH” “PIXIE”.
As the collection expands every season, possibility of words play comes in, to create stories with different selections of bags.
</p>
<p>					
The other collection, “ONOMATOPÈe” is more about play, inspired by Japanese onomatopoeia words connected to appearance, sound, texture, movements, and emotions.
This season, it has 2 styles, “MOCO MOCO” and “KIRA KIRA”
</p>
";
$bio="<p>					
This brand established in New York in 2016.
The designer, Waka Takahashi is from Tokyo. She moves to spend her teenage in Switzerland and relocate to New York City, to study Fashion design in Parsons The New School for Design.
After graduating in 2013, she decides to create her own brand based in NY
under Highbridge New York Inc.
Each piece is sophisticatedly crafted in Italy with finest Italian leathers.
</p>";

?>
<?=getHeaderHtml( $pageTitle, $otherStr );?>

<body>

	<?=getGlobalNaviHtml();?>
	</div><!-- #header -->

	<div class="container" id="media">
		<section>
		<div class='news-stuff' style='margin-bottom:10px;'>
			<div class="left" style="width:27.333%;">
		<div class='waka-profile'>
			<a href="http://ellegirl.jp/blogs/wakatakahashi/">
			<?php createNewsBox("100%", "400px","{$rootDir}img/Waka_profile.jpg", $bio)?>
			</a>
		</div>
			<?php {/*createNewsBox("100%", "360px","https://placeimg.com/320/180/nature", 'fasdfas')*/}?>
			<?php {/*} createNewsBox("100%", "360px","https://placeimg.com/320/180/nature", 'fasdfas') */}?>
		</div>
		<div class="right" style="width:69.3333%">
			<div style="width:85%;" class="big-news-box">
				<div class="image-wrapper">
				<img src = "<?= $rootDir;?>img/logo/Brand-logo.jpg"/>
				</div>
				<div class="text-wrapper">
					<?= $autumn ?>
				</div>
			</div>
		<!-- 	<div>
			<div style='width:39.333%;'>
				<?php createNewsBox("100%", "360px","https://placeimg.com/320/180/nature", 'fasdfas')?>	
			</div>
			<div style='width:39.333%;'>
				<?php createNewsBox("100%", "360px","https://placeimg.com/320/180/nature", 'fasdfas')?>	
			</div>
			</div> -->
		</div> 
		</div>
			<ul class="juicer-feed" data-feed-id="waka-media"></ul>
		</section>
	</div><!-- /.container 

	<?=getFooterHtml();?> 

</body>
</html>

<?php
//--------------------------------------------------------------------------------------------------
// ↓以降ファイル内プライベート関数群
//--------------------------------------------------------------------------------------------------

?>


<?php
ini_set( 'error_reporting', E_ERROR );

define('ROOT_DIR', '/' );
define('ITEM_PER_PAGE', 12 );
define('DEFAULT_COLLECTION_ID', 1 );

function getHeaderHtml( $title, $otherStr ){

$rootDir = ROOT_DIR;
$retStr = <<< EOF
<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=1170" />
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="shortcut icon" href="{$rootDir}img/favicon.ico">
	<title>{$title}</title>
	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
	<link href="{$rootDir}css/reset.css" rel="stylesheet">
	<link href="{$rootDir}css/style.css" rel="stylesheet">
	<link href="//assets.juicer.io/embed.css" media="all" rel="stylesheet" type="text/css" />
	<link href="{$rootDir}css/new-style.css" rel="stylesheet">	
	<link href="{$rootDir}css/magnific-popup.css" rel="stylesheet">	
	<script src="//assets.juicer.io/embed.js" type="text/javascript"></script>
	<script src="{$rootDir}js/jquery.fademover/jquery.fademover.js"></script>
	<script src=}{$rootDir}js/jquery.magnific-popup.min.js"></script>
	{$otherStr}

<script type="text/javascript">

$('head').append('<style>#content { opacity: 0;-ms-filter:"alpha( opacity=0 )";filter: alpha( opacity=0 ); }</style>');
$(function(){

	$('body').fadeMover({
		'outSpeed': 250,
		'inSpeed': 1000,
		'effectType': 1,
		//'nofadeOut' : 'nonmover' //fadeOut no thx (class name)
	});

	$('a[href^=#]').click(function(){
		var speed = 500;
		var href= $(this).attr("href");
		var target = $(href == "#" || href == "" ? 'html' : href);
		var position = target.offset().top;
		$("html, body").animate({scrollTop:position}, speed, "swing");
		return false;
	});

	if( $('.nav_collection').hasClass('active') ){
		var nav_position = $('.nav_collection').offset();
		$('.menu_category li:first-child').animate({ 'marginLeft': '-117px'}, 400);
	}
	if( $('.nav_about').hasClass('active') ){
		var nav_position = $('.nav_about').offset();
		$('.menu_category li:first-child').animate({ 'marginLeft': '-27px'}, 400);
	}

});

</script>

</head>

EOF;

	return $retStr;
}

function getGlobalNaviHtml( ){

$rootDir = ROOT_DIR;
//var_dump($_SERVER['REQUEST_URI']);

	$activeCollection = '';
	$activeAbout = '';
	$activeStore = '';
	
	$topUrl = $rootDir;

	// if( strstr( $_SERVER['REQUEST_URI'], 'brands' ) ){
	// 	$activeBrands = ' active ';
	// }elseif( strstr( $_SERVER['REQUEST_URI'], 'news' ) ){
	// 	$activeNews = ' active ';
	// }elseif( strstr( $_SERVER['REQUEST_URI'], $topUrl ) ){
	// 	$activeAbout = ' active ';
	// }elseif( strstr( $_SERVER['REQUEST_URI'], 'stocklists' ) ){
	// 	$activeStocklists = ' active ';
	// }elseif( strstr( $_SERVER['REQUEST_URI'], 'storeonline' ) ){
	// 	$activeStoreonlise = ' active ';
	// }else{
	// 	$activeTop = ' active ';
	// 	$topUrl = '';
	// }
	
$retStr = <<< EOF
	<div class='container' id="header">
		<div id="logo">
			<a href="{$rootDir}"><div class='logo-image'></div></a>
		</div>	

		<div id="nav">
			<ul>
				<li class="dropdown nav_about">BRANDS
					<ul class='sub-menu'>
						<li> <a href="{$rootDir}brands/amb.php"> AMB </a></li>
						<li> <a href="{$rootDir}brands/waka.php"> Waka Takahashi </a></li>
					</ul> 
				</li>
				<li class="nav_news"><a href="{$rootDir}news/">MEDIA</a></li>
				<li class="nav_stocklists"><a href="{$rootDir}stocklists/">STOCKISTS</a></li>
				<li class="nav_contact"><a href="{$rootDir}contact/">CONTACT</a></li>
			</ul>
		</div>

EOF;
	return $retStr;
}

function getFooterHtml( ){

$rootDir = ROOT_DIR;
	
$year = date('Y', time());

$retStr = <<< EOF
	<div id="footer">
		<div id="top_wrapper">
			<div id="top">
				<ul>
					<li class="btn_facebook"><a target="_blank" href="https://www.facebook.com/pages/Highbridge-international-PR/365254633552143"></a></li>
					<li class="btn_instagram"><a target="_blank" href="http://instagram.com/highbridge_official"></a></li>
				</ul>
			</div>
		</div>
		<div id="bottom">
			&copy; COPYRIGHT {$year} Highbridge New York Inc. RIGHT RESERVED.
		</div>
	</div>

EOF;
	return $retStr;
}

function reqEsc( $value )
{
	$value = trim( $value );
	$value = htmlspecialchars( $value );

	return $value;
}

?>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<script type="text/javascript">
$(function(){
    $('.dropdown' ).hover(
        function(){
            $(this).children('.sub-menu').stop(true,true).slideDown(200);
        },
        function(){
            $(this).children('.sub-menu').stop(true,true).slideUp(200);
        }
    );
    // console.log($('.sub-menu li'))
    // $('.sub-menu li a').on('click',function(event){
    // 	var url = $(this)['context'].href;
    // 	console.log(url);

    // 	// window.location.replace(url);
    // 	// return true;
    // })
	var url = window.location.href;
	$("#nav ul a").each(function(){
		if(url == (this.href)){
			$(this).closest("li").addClass("active");
		}
		console.log(url.indexOf('brands'));
		if(url.indexOf("brands") >= 0){
			$('#nav ul .dropdown').addClass("brand-active");
		}
	});


});
</script>
<script>
	var $img_open = false;
	function enlarge(el){
		$(el).on('click',function(){
			    var $next_img = $(this).parent().next();
				$img_open = true
				var $div = $('<div>',{id:'enlarge_img'});
				var $closeX = $('<div>',{id:'closeX', a:'#'});
				$closeX.text('X');
				var $op = $('<div>',{id:'op'});
				$('.image-container').append($div);
				$closeX.appendTo('#enlarge_img');
				var $img = $(this).clone().appendTo('#enlarge_img');
				$op.appendTo('body');
				
				// $('#enlarge_img').on("click",function(){
				// 	console.log('clicked')
				// 	$img =  $next_img.children();
				// 	var $old_img = $(this).children()[1].remove();
				// 	$img.clone().appendTo($($("#enlarge_img")));
				// });

				$('#closeX').click(function(){
					$(this).parent().remove();
					$op.remove();
				});
			})
	}
	$(function(){
		enlarge('.brand_block .image-wrapper img')
	});
</script>
<?php 
function createBox( $outerwidth, $outerHeight, $img=null, $msg=null){
?>	
	<div style="margin-top:15px; background:#f4f5f7; width:<?=$outerwidth?>; height:<?=$outerHeight?>;padding:15px">
		<div>
			<?php $img != null ? '<img src='. $img  .'/>' : ""?>
		</div>
		<div style="margin-top:15px;">
				<?=$msg?>
		</div>
	</div>
<?php
}
?>

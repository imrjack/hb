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
	<meta name="viewport" content="width=975" />
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="shortcut icon" href="{$rootDir}img/favicon.ico">
	<title>{$title}</title>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<link href="{$rootDir}css/reset.css" rel="stylesheet">
	<link href="{$rootDir}css/style.css" rel="stylesheet">
	<script src="{$rootDir}js/jquery.fademover/jquery.fademover.js"></script>
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

	if( strstr( $_SERVER['REQUEST_URI'], 'brands' ) ){
		$activeBrands = ' active ';
	}elseif( strstr( $_SERVER['REQUEST_URI'], 'news' ) ){
		$activeNews = ' active ';
	}elseif( strstr( $_SERVER['REQUEST_URI'], 'stocklists' ) ){
		$activeStocklists = ' active ';
	}elseif( strstr( $_SERVER['REQUEST_URI'], 'storeonline' ) ){
		$activeStoreonlise = ' active ';
	}else{
		$activeTop = ' active ';
		$topUrl = '';
	}
	
$retStr = <<< EOF
	<div id="header">
		<div id="logo">
			<a href="{$rootDir}">Highbridge New York Inc.</a>
		</div>	

		<div id="nav">
			<ul>
				<li class="nav_collection {$activeAbout}"><a href="{$topUrl}#about">ABOUT</a></li>
				<li class="nav_about {$activeBrands}"><a href="{$rootDir}brands/">BRANDS</a></li>
				<li class="nav_news {$activeNews}"><a href="{$rootDir}news/">NEWS</a></li>
				<li class="nav_stocklists {$activeStocklists}"><a href="{$rootDir}stocklists/">STOCKISTS</a></li>
				<li class="nav_link {$activeLink}"><a href="{$topUrl}#link">LINK</a></li>
				<li class="nav_contact {$activeContact}"><a href="mailto:info@highbridge-ny.com">CONTACT</a></li>
				<li class="nav_onlinestore {$activeStoreonlise}"><a href="{$rootDir}storeonline/">STORE ONLINE</a></li>
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
		<div id="link">
			<h2>LINK</h2>
			<div class="wrap_link">
				<ul class="left">
					<li><a href="" target="_blank">HIGHBRIDGE INTERTNATIONAL WEBSITE</a></li>
				</ul>
				<ul class="right">
					<li><a href="http://highbridge-online.com/" target="_blank">HIGHBRIDGE INTERTNATIONAL ONLINE STORE(JAPAN)</a></li>
					<li><a href="" target="_blank">HIGHBRIDGE NEW YORK ONLINE STORE(USA))</a></li>
				</ul>
			</div>			
			<div class="btn_pagetop"><a href="#header">PAGE TOP</a></div>

		</div>

		<div id="top_wrapper">
			<div id="top">
				<ul>
					<li class="btn_facebook"><a target="_blank" href="https://www.facebook.com/pages/Highbridge-international-PR/365254633552143">facebook</a></li>
					<li class="btn_instagram"><a target="_blank" href="http://instagram.com/highbridge_official">instagram</a></li>
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

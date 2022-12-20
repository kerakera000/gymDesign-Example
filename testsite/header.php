<!DOCTYPE html>
<html lang="ja" dir="ltr">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="format-detection" content="telephone=no">
		
		<link rel="stylesheet" href="<?php echo get_theme_file_uri('css/reset.css'); ?>">
		<link rel="stylesheet" href="<?php echo get_theme_file_uri('css/style.css'); ?>">
		<link rel="stylesheet" href="style.css">

		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@500;700;900&family=Roboto:wght@500;700&display=swap" rel="stylesheet">
		
		<title><?php wp_title(); ?> test site</title>

    <?php wp_head(); ?>
	</head>
	<body class="body">
		<header class="header">
			<nav class="header__nav">
				<h2 class="header__nav--title">LOGO</h2>
				<ul class="header__nav--list-box">
					<li class="header__nav--list-box--list"><a href="">NEWS</a></li>
					<li class="header__nav--list-box--list"><a href="">BLOG</a></li>
					<li class="header__nav--list-box--list"><a href="">ABOUT</a></li>
					<li class="header__nav--list-box--list"><a href="">PLAN</a></li>
					<li class="header__nav--list-box--list"><a href="">FAQ</a></li>
					<li class="header__nav--list-box--list"><a href="">PAGE01</a>
						<ul class="header__nav--list-box--list--dropdown-box">
							<li class="header__nav--list-box--list--dropdown-box-list">PAGE02</li>
							<li class="header__nav--list-box--list--dropdown-box-list">PAGE03</li>
						</ul>
					</li>
					<li class="header__nav--list-box--list">
						<div class="header__nav--list-box--list--contact">
						<img class="header__nav--list-box--list--contact--icon" src="<?php echo get_stylesheet_directory_uri(); ?>/images/nav-contact.png" alt="なし">
						<p class="header__nav--list-box--list--contact--text">お問い合わせ</p>
						</div>
					</li>
				</ul>
			</nav>
		</header>
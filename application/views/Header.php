<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?=(isset($pageTitle) ? $pageTitle : 'Attic Lib Test')?></title>

    <!-- Bootstrap Core CSS -->
    <link href="/public/css/bootstrap.min.css" rel="stylesheet">
	
    <!-- Custom CSS -->
    <link href="/public/css/style.css" rel="stylesheet">
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
	
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<div style="display:none;" id="language-code"><?=Model_Language::instance()->getCurrentLanguage()?></div>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/">Attic Lib Test</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
				<?php if(!Model_User::isLogged()):?>
                    <li>
                        <a href="<?=Model_Tools::getUrl('user', 'auth')?>"><?=__('Войти')?></a>
                    </li>
				<?php endif;?>
				<?php if(Model_User::isLogged()):?>
                    <li>
                        <a href="<?=Model_Tools::getUrl('user', 'logout')?>"><?=__('Выйти')?></a>
                    </li>
					<li>
                        <a href="<?=Model_Tools::getUrl('user', 'bookmarks')?>"><?=__('Мне понравилось')?></a>
                    </li>
				<?php endif;?>
				
                </ul>
								
				<ul class="nav navbar-nav navbar-right">
				<li class="dropdown">
				  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
				  <img src="/public/images/flags/<?=Model_Language::instance()->getCurrentLanguage()?>.png" alt="Language flag" width="20" height="20">
				  <span class="caret"></span></a>
				  <ul class="dropdown-menu" role="menu">
					<?php foreach(Model_Language::instance()->list as $language):?>
					<?php if(Model_Language::instance()->getCurrentLanguage() == $language)
						continue;
					?>
					
					<li><a href="<?= Model_Language::instance()->getUrlToSwitchLanguage($language, URL::base(true).Request::current()->uri().URL::query())?>"><img src="/public/images/flags/<?=$language?>.png" alt="Language flag" width="20" height="20"></a></li>
					<?php endforeach; ?>
				  </ul>
				</li>
				</ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
 <!-- Page Content -->
    <div class="container">

        <div class="row">

            <?=View::factory('Sidebar')?>
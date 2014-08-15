<?php if (!defined('PLX_ROOT')) exit; ?>

<!DOCTYPE html>
<html lang="<?php $plxShow->defaultLang() ?>">

<!--[if lt IE 9]><html class="ie"><![endif]-->
<!--[if gte IE 9]><!--><html><!--<![endif]-->


<head>
<meta charset="<?php $plxShow->charset('min'); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;" />

<title><?php $plxShow->pageTitle(); ?></title>
<?php $plxShow->meta('description') ?>
<?php $plxShow->meta('keywords') ?>
<meta name="author" content="GNANGANI" />

    
<link rel="stylesheet" href="<?php $plxShow->template(); ?>/style.css"/>

<?php $plxShow->templateCss() ?>
<?php $plxShow->pluginsCss() ?>

<link rel="alternate" type="application/rss+xml" title="<?php $plxShow->lang('ARTICLES_RSS_FEEDS') ?>" href="<?php $plxShow->urlRewrite('feed.php?rss') ?>" />
<link rel="alternate" type="application/rss+xml" title="<?php $plxShow->lang('COMMENTS_RSS_FEEDS') ?>" href="<?php $plxShow->urlRewrite('feed.php?rss/commentaires') ?>" />

<!--[if lt IE 9]>
	<script src="http://css3-mediaqueries-js.googlecode.com/files/css3-mediaqueries.js"></script>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

</head>

<body lang="<?php $plxShow->defaultLang() ?>" id="top">
   
    <header>
       <div class="wrap">
          <!--Title et subTitle -->
           <div class="bloc-4" role="banner">
                <h1><?php $plxShow->mainTitle('link'); ?></h1>
                <h2><?php $plxShow->subTitle(); ?></h2>
           </div>
           
           <!--Navigation -->
            <nav class="bloc-8" role="navigation">
               <div class="nav">
                    <ul>
                        <li class="navigation"><a href="#" >Navigation</a></li>
                        <?php $plxShow->staticList($plxShow->getLang('HOME'),'<li id="#static_id"><a href="#static_url" class="#static_status" title="#static_name">#static_name</a></li>'); ?>
                        <?php $plxShow->pageBlog('<li id="#page_id"><a class="#page_status" href="#page_url" title="#page_name">#page_name</a></li>'); ?>
                    </ul> 
               </div>
            </nav> 
       </div>
    </header>
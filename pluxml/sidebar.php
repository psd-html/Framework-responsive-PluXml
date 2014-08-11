<?php if(!defined('PLX_ROOT')) exit; ?>

    <div class="widget">
       <!-- les catégories --> 
        <h3><?php $plxShow->lang('CATEGORIES'); ?></h3>
        <ul>
            <?php $plxShow->catList('','<li id="#cat_id"><a class="#cat_status" href="#cat_url" title="#cat_name"><span class="symbol">D</span>#cat_name</a> (#art_nb)</li>'); ?>
        </ul> 
    </div>
 
    
    <div class="widget">
         <!-- les derniers articles -->
        <h3><?php $plxShow->lang('LATEST_ARTICLES'); ?></h3>
        <ul>
            <?php $plxShow->lastArtList('<li><a class="#art_status" href="#art_url" title="#art_title">#art_title</a></li>'); ?>
        </ul>   
    </div>
    
    <div class="widget">
       <!-- la liste des tags -->
        <h3><?php $plxShow->lang('TAGS'); ?></h3>
        <ul>
            <?php $plxShow->tagList('<li class="tag #tag_size"><a class="#tag_status" href="#tag_url" title="#tag_name"><span class="symbol">,</span>#tag_name</a></li>', 20); ?>
        </ul> 
    </div>
    
    <div class="widget">
        <!-- les dernieres commentaires -->
        <h3><?php $plxShow->lang('LATEST_COMMENTS'); ?></h3>
        <ul>
            <?php $plxShow->lastComList('<li><a href="#com_url">#com_author '.$plxShow->getLang('SAID').' : #com_content(34)</a></li>'); ?>
        </ul>    
    </div>
    
    <div class="widget">
    <!-- les archives -->
        <h3><?php $plxShow->lang('ARCHIVES'); ?></h3>
        <ul>
            <?php $plxShow->archList('<li id="#archives_id"><a class="#archives_status" href="#archives_url" title="#archives_name">#archives_name</a> (#archives_nbart)</li>'); ?>
        </ul>
    </div>
    
    <div class="widget">
       <!-- Affichage les flux RSS -->
        <p class="rss">
           <a href="<?php $plxShow->urlRewrite('feed.php?rss') ?>" title="<?php $plxShow->lang('ARTICLES_RSS_FEEDS'); ?>">
            <span class="symbol">r</span><?php $plxShow->lang('ARTICLES'); ?></a>
        </p>
        <p class="rss">
            <a href="<?php $plxShow->urlRewrite('feed.php?rss/commentaires'); ?>" title="<?php $plxShow->lang('COMMENTS_RSS_FEEDS') ?>">
            <span class="symbol">r</span><?php $plxShow->lang('COMMENTS'); ?></a>
        </p>  
    </div>
<?php include(dirname(__FILE__).'/header.php'); ?>
   
    <section class="wrap">
       <article class="bloc-9">   
               
              <article role="article" class="blog">
                
                <!-- Titre de l'article -->
                <h1><?php $plxShow->artTitle(''); ?></h1>

                <p>
                    <span class="symbol">U</span><?php $plxShow->lang('WRITTEN_BY'); ?> <?php $plxShow->artAuthor() ?> 
                    <span class="symbol">P</span><time datetime="<?php $plxShow->artDate('#num_year(4)-#num_month-#num_day'); ?>"><?php $plxShow->artDate('#num_day #month #num_year(4)'); ?></time> 
                    <span class="symbol">e</span><?php $plxShow->artNbCom(); ?>
                </p>

                <!-- Affichage de l'article-->
                <?php $plxShow->artContent(); ?>


                <!-- informations de l'article, catégorie et Tags -->
                <p>
                    <span class="symbol">D</span><?php $plxShow->lang('CLASSIFIED_IN') ?> : <?php $plxShow->artCat(); ?> 
                    <span class="symbol">,</span><?php $plxShow->lang('TAGS') ?> : <?php $plxShow->artTags(); ?>
                </p>

              </article>
              
              
            <h2>A propos de l'auteur, <?php $plxShow->artAuthor() ?>:</h2>
            <?php $plxShow->artAuthorInfos('<div class="author-infos">#art_authorinfos</div>'); ?>

			<?php include(dirname(__FILE__).'/commentaires.php'); ?>

       </article>

        <aside class="bloc-3">
            <?php include(dirname(__FILE__).'/sidebar.php'); ?>
        </aside>

    </section>
    
<?php include(dirname(__FILE__).'/footer.php'); ?>
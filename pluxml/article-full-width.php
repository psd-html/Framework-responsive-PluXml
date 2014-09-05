<?php include(dirname(__FILE__).'/header.php'); ?>
   
    <div class="section wrap">
      
       <article class="bloc-12" role="article">   
               
              <div class="blog">
                
                <!-- Titre de l'article -->
                <h2><?php $plxShow->artTitle(''); ?></h2>

                <p>
                    <i class="flaticon-pencil5"></i><?php $plxShow->lang('WRITTEN_BY'); ?> <?php $plxShow->artAuthor() ?> 
                    <i class="flaticon-diary"></i><time datetime="<?php $plxShow->artDate('#num_year(4)-#num_month-#num_day'); ?>"><?php $plxShow->artDate('#num_day #month #num_year(4)'); ?></time> 
                    <i class="flaticon-text"></i><?php $plxShow->artNbCom(); ?>
                </p>

                <!-- Affichage de l'article-->
                <?php $plxShow->artContent(); ?>


                <!-- informations de l'article, catégorie et Tags -->
                <p>
                    <i class="flaticon-folder5"></i><?php $plxShow->lang('CLASSIFIED_IN') ?> : <?php $plxShow->artCat(); ?> 
                    <i class="flaticon-botton4"></i><?php $plxShow->lang('TAGS') ?> : <?php $plxShow->artTags(); ?>
                </p>

              </div>
              
              
            <h3>A propos de l'auteur, <?php $plxShow->artAuthor() ?>:</h3>
            <?php $plxShow->artAuthorInfos('<blockquote>#art_authorinfos</blockquote>'); ?>

			<?php include(dirname(__FILE__).'/commentaires.php'); ?>

       </article>

    </div>
    
<?php include(dirname(__FILE__).'/footer.php'); ?>
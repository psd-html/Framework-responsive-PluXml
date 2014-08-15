<?php include(dirname(__FILE__).'/header.php'); ?>

<div class="section wrap">
   <article class="bloc-9" role="article">
      
          <div class="blog" id="static-page-<?php echo $plxShow->staticId(); ?>">

            <!-- Titre de l'article -->
            <h2><?php $plxShow->lang('ERROR'); ?></h2>


            <!-- Affichage le type d'erreur -->
            <p>
                <?php $plxShow->erreurMessage(); ?>
            </p>

          </div>
          
   </article>
   
    <aside class="bloc-3">
        <?php include(dirname(__FILE__).'/sidebar.php'); ?>
    </aside>
    
</div>

<?php include(dirname(__FILE__).'/footer.php'); ?>
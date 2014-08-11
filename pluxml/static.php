<?php include(dirname(__FILE__).'/header.php'); ?>

<section class="wrap">
   <article class="bloc-9" role="article" >
      
          <div class="blog" id="static-page-<?php echo $plxShow->staticId(); ?>">

            <!-- Titre de l'article -->
            <h1><?php $plxShow->staticTitle(); ?></h1>


            <!-- Affichage le contenu de la page statique -->
            <?php $plxShow->staticContent(); ?>

          </div>
          
   </article>
   
    <aside class="bloc-3">
        <?php include(dirname(__FILE__).'/sidebar.php'); ?>
    </aside>
    
</section>

<?php include(dirname(__FILE__).'/footer.php'); ?>
<?php include(dirname(__FILE__).'/header.php'); ?>

<section class="wrap">
   <article class="bloc-12">
      
          <article role="article" id="static-page-<?php echo $plxShow->staticId(); ?>">

            <!-- Titre de l'article -->
            <h1><?php $plxShow->staticTitle(); ?></h1>


            <!-- Affichage le contenu de la page statique -->
            <?php $plxShow->staticContent(); ?>

          </article>
          
   </article>
   
</section>

<?php include(dirname(__FILE__).'/footer.php'); ?>
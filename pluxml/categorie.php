<?php include(dirname(__FILE__).'/header.php'); ?>

<section class="wrap">
   <article class="bloc-9">
     
    <p>
        <span class="symbol">D</span> Vous êtes dans la catégorie: <?php $plxShow->catName(); ?>
            <br/>
        <?php $plxShow->catDescription(' : #cat_description'); ?>
    </p>
      
      <!-- création de la boucle pour récuperer les articles du blog -->
      <?php while($plxShow->plxMotor->plxRecord_arts->loop()): ?>
      
          <article role="article" class="blog" id="post-<?php echo $plxShow->artId(); ?>">

            <!-- Titre de l'article -->
            <h1><?php $plxShow->artTitle('link'); ?></h1>

            <!-- informations de l'article -->
            <p>
                <span class="symbol">U</span><?php $plxShow->lang('WRITTEN_BY'); ?> <?php $plxShow->artAuthor() ?> 
                <span class="symbol">P</span><time datetime="<?php $plxShow->artDate('#num_year(4)-#num_month-#num_day'); ?>"><?php $plxShow->artDate('#num_day #month #num_year(4)'); ?></time> 
                <span class="symbol">e</span><?php $plxShow->artNbCom(); ?>
            </p>

            <!-- Affichage du bloc Chapo -->
            <?php $plxShow->artChapo(); ?>


            <!-- informations de l'article, catégorie et Tags -->
            <p>
                <span class="symbol">D</span><?php $plxShow->lang('CLASSIFIED_IN') ?> : <?php $plxShow->artCat(); ?> 
                <span class="symbol">,</span><?php $plxShow->lang('TAGS') ?> : <?php $plxShow->artTags(); ?>
            </p>

          </article>
          
       <!-- fin de la boucle -->
       <?php endwhile; ?>
       
       
        <div class="pagination">
            <?php $plxShow->pagination(); ?>
        </div>
        
   </article>
   
    <aside class="bloc-3">
        <?php include(dirname(__FILE__).'/sidebar.php'); ?>
    </aside>
    
</section>

<?php include(dirname(__FILE__).'/footer.php'); ?>
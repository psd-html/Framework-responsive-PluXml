<?php include(dirname(__FILE__).'/header.php'); ?>

<div class="section wrap">
  
   <article class="bloc-9" role="article">
      
      <!-- création de la boucle pour récuperer les articles du blog -->
      <?php while($plxShow->plxMotor->plxRecord_arts->loop()): ?>
      
          <div class="blog" id="post-<?php echo $plxShow->artId(); ?>">

            <!-- Titre de l'article -->
            <h2><?php $plxShow->artTitle('link'); ?></h2>

            <!-- informations de l'article -->
            <p>
                <i class="flaticon-pencil5"></i><?php $plxShow->lang('WRITTEN_BY'); ?> <?php $plxShow->artAuthor() ?> 
                <i class="flaticon-diary"></i><time datetime="<?php $plxShow->artDate('#num_year(4)-#num_month-#num_day'); ?>"><?php $plxShow->artDate('#num_day #month #num_year(4)'); ?></time> 
                <i class="flaticon-text"></i><?php $plxShow->artNbCom(); ?>
            </p>

            <!-- Affichage du bloc Chapo -->
            <?php $plxShow->artChapo(); ?>


            <!-- informations de l'article, catégorie et Tags -->
            <p>
                <i class="flaticon-folder5"></i><?php $plxShow->lang('CLASSIFIED_IN') ?> : <?php $plxShow->artCat(); ?> 
                <i class="flaticon-botton4"></i><?php $plxShow->lang('TAGS') ?> : <?php $plxShow->artTags(); ?>
            </p>

          </div>
          
       <!-- fin de la boucle -->
       <?php endwhile; ?>
       
       
        <div class="pagination">
            <?php $plxShow->pagination(); ?>
        </div>
        
   </article>
   
    <aside class="bloc-3">
        <?php include(dirname(__FILE__).'/sidebar.php'); ?>
    </aside>
    
</div>

<?php include(dirname(__FILE__).'/footer.php'); ?>
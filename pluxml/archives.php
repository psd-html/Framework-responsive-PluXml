<?php include(dirname(__FILE__).'/header.php'); ?>
   
    <section class="wrap">
       <article class="bloc-9" role="article">   
              
            <!-- création de la boucle pour récuperer les archives du blog -->
            <?php while($plxShow->plxMotor->plxRecord_arts->loop()): ?>    

              <div class="blog">
                
                <!-- Titre des archives -->
                <h2><?php $plxShow->artTitle('link'); ?></h2>

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

    </section>
    
<?php include(dirname(__FILE__).'/footer.php'); ?>
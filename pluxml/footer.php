<?php if (!defined('PLX_ROOT')) exit; ?>

    <footer role="contentinfo">
        <div class="wrap">
            <div class="bloc-12">
                <p>
                    <?php $plxShow->mainTitle('link'); ?> © 2014 - <?php $plxShow->subTitle(); ?>
                </p>

                <p>
                    <?php $plxShow->lang('POWERED_BY') ?> <a href="http://www.pluxml.org" title="<?php $plxShow->lang('PLUXML_DESCRIPTION') ?>"><i class="flaticon-leaf3"></i>PluXml</a> 
                    <?php $plxShow->lang('IN') ?> <?php $plxShow->chrono(); ?> utilisant la technologie <a href="https://github.com/psd-html/Framework-responsive-PluXml">SASS</a> <i class="flaticon-lock4"> </i><a rel="nofollow" href="<?php $plxShow->urlRewrite('core/admin/'); ?>" title="<?php $plxShow->lang('ADMINISTRATION') ?>"><?php $plxShow->lang('ADMINISTRATION') ?></a> -  <a href="<?php $plxShow->urlRewrite('#top') ?>" title="<?php $plxShow->lang('GOTO_TOP') ?>"><?php $plxShow->lang('TOP') ?></a> - <?php $plxShow->httpEncoding() ?>  <i class="flaticon-accepted"> </i><a href="http://validator.w3.org/check?uri=referer">W3C</a>
                </p>
            </div>
        </div>
    </footer>

</body>

</html>
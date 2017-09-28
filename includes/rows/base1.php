<?php  
defined('_JEXEC') or die;
?>



<!-- BOX CONTENT
 ================================================================================== -->

<section id="box-down-all" class="clearfix">

<div class="container">
<div id="box-down-content" class="row">

    <?php if ($this->countModules('box-down')) : ?>
    <div id="box-down">
		<jdoc:include type="modules" name="box-down" style="xhtml" />
    </div>
    <?php endif ?>

</div>
</div>

</section>

<!-- // BOX CONTENT
 ================================================================================== -->



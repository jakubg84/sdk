<?php  
defined('_JEXEC') or die;
?>

<!-- OKNO GŁÓWNE   
 ================================================================================== -->

<div id="main-content-box" class="clearfix">
<div class="container">
<div id="main" class="row">
	
	<?php if ($this->countModules('left')) : ?>
	<div id="left" class="col-lg-<?php echo $leftcolgrid;?>">
		<jdoc:include type="modules" name="left" style="xhtml" />
	</div>
	<?php endif; ?>

	
	<div id="main" class="col-lg-<?php echo (12-$leftcolgrid-$rightcolgrid);?>">
 			<jdoc:include type="message" />
			<jdoc:include type="component" />
	</div>
	
    
   
	
	<?php if ($this->countModules('right')) : ?>
	<div id="right" class="col-lg-<?php echo $rightcolgrid;?>">
		<jdoc:include type="modules" name="right" style="xhtml" />
	</div>
	<?php endif; ?>

</div>
</div><!--  koniec wiersza  -->
</div>

<!-- // KONIEC OKNO GŁÓWNE
 ================================================================================== -->
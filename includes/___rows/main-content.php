<?php  
defined('_JEXEC') or die;
?>

<!-- OKNO GŁÓWNE   
 ================================================================================== -->

<div id="main-content-box" class="clearfix">

<div id="main" class="row">
	
	<?php if ($this->countModules('left')) : ?>
	<div id="left" class="col-lg-<?php echo $leftcolgrid;?>">
		<jdoc:include type="modules" name="left" style="xhtml" />
	</div>
	<?php endif; ?>

	
			<div id="main-1" class="col-lg-<?php echo (12-$leftcolgrid-$rightcolgrid);?>">
 			<jdoc:include type="message" />
			<jdoc:include type="component" />
            </div>
           
       
	<!--<div class="clearfix"></div>-->
	<?php if ($this->countModules('right')) : ?>
	<div id="right" class="col-lg-<?php echo $rightcolgrid;?>">
		<jdoc:include type="modules" name="right" style="xhtml" />
	</div>
	<?php endif; ?>

</div>
</div>

<!--</div>  koniec wiersza  -->


<!-- // KONIEC OKNO GŁÓWNE
 ================================================================================== -->
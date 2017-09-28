<?php  
defined('_JEXEC') or die;
?>

<!-- OKNO GŁÓWNE   
 ================================================================================== -->

<div class="main-content-box clearfix">

<div class="main row">
	
		
			<div class="main-content col-lg-<?php echo (12-$rightcolgrid);?>">
 				<jdoc:include type="component" />
                <div class="clearfix"></div>
            </div>
            
            
       
	<!--<div class="clearfix"></div>-->
	<?php if ($this->countModules('right')) : ?>
	<div class="right col-lg-<?php echo $rightcolgrid;?>">
		<jdoc:include type="modules" name="right" style="xhtml" />
	</div>
	<?php endif; ?>
    
<jdoc:include type="message" />
</div>
</div>

<!--</div>  koniec wiersza  -->


<!-- // KONIEC OKNO GŁÓWNE
 ================================================================================== -->
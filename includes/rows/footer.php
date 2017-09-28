<?php  
defined('_JEXEC') or die;
?>




<section id="footer-container" class="footer-all">

<div class="container">
	
    
<!-- FOOTER LEFT
================================================================================== -->    

<?php if ($this->countModules('footer-left')) : ?>
        <div class="footer-left col-lg-6 col-xs-12">
            <jdoc:include type="modules" name="footer-left" style="xhtml" />
        </div>
<?php endif ?>        

<!--  KONIEC FOOTER LEFT 
 ================================================================================== -->
	

<!-- FOOTER RIGHT
================================================================================== -->
<?php if ($this->countModules('footer-right')) : ?>
    <div class="footer-right col-lg-6 col-xs-12">
            <jdoc:include type="modules" name="footer-right" style="xhtml" />
        </div>
<?php endif ?>

<!--  KONIEC FOOTER RIGHT
 ================================================================================== --> 

 </div>
 <div class="clearfix"></div>
 

 

</section>
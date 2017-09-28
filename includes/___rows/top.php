<?php  
defined('_JEXEC') or die;
?>



<section id="top-box" class="top-site">

<div class="container">
	<div id="top" class="row top">
    
<!-- TOP LEFT
================================================================================== -->    

<?php if ($this->countModules('top-left')) : ?>
        <div class="top-left col-lg-6 col-xs-12">
            <jdoc:include type="modules" name="top-left" style="xhtml" />
        </div>
<?php endif ?>        

<!--  KONIEC TOP LEFT 
 ================================================================================== -->
	

<!-- TOP RIGHT
================================================================================== -->
<?php if ($this->countModules('top-right')) : ?>
    <div class="top-right col-lg-6 col-xs-12">
            <jdoc:include type="modules" name="top-right" style="xhtml" />
        </div>
<?php endif ?>

<!--  KONIEC TOP RIGHT
 ================================================================================== --> 
 </div>
 </div>
 <div class="clearfix"></div>
 
 <!-- MENU MAIN MENU
================================================================================== -->
<div class="box-menu">
<!--	<div class="container">-->
<?php if ($this->countModules('main-nav')) : ?>
    <div class="menu-all">
            <jdoc:include type="modules" name="main-nav" style="xhtml" />
        </div>
<?php endif ?>

	<!-- </div>-->
 </div>
<!--  KONIEC MAIN MENU
 ================================================================================== --> 
 

</section>



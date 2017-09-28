<?php  
defined('_JEXEC') or die;
?>


<section id="top-box" class="top-site">

<div class="container">
	<div id="top" class="row top">
    
<!-- TOP LEFT
================================================================================== -->    

<?php if ($this->countModules('top-box-left')) : ?>
        <div class="top-box-left col-lg-8 col-xs-12">
            <jdoc:include type="modules" name="top-box-left" style="xhtml" />
        </div>
<?php endif ?>        

<!--  KONIEC TOP LEFT 
 ================================================================================== -->
	

<!-- TOP RIGHT
================================================================================== -->
<?php if ($this->countModules('top-box-right')) : ?>
    <div class="top-box-right col-lg-4 col-xs-12">
            <jdoc:include type="modules" name="top-box-right" style="xhtml" />
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



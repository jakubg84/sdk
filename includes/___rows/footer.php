<?php  
defined('_JEXEC') or die;
?>




<?php if ($this->countModules('footer')) : ?>

<!-- STOPKA
 ================================================================================== -->

<div id="footer-box-all" class="clearfix">
<div class="container">
	<div id="footer-box" class="row">
		<jdoc:include type="modules" name="footer" style="xhtml" />
	</div>
</div>
</div>

<!-- // KONIEC STOPKA
 ================================================================================== -->

<?php endif; ?>


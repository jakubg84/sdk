<?php

// no direct access
defined('_JEXEC') or die;


// Getting params from template
$params = JFactory::getApplication()->getTemplate(true)->params;

// add stylesheets
$doc->addStyleSheet('templates/' . $this->template . '/css/bootstrap.css');
// $doc->addStyleSheet('templates/' . $this->template . '/css/docs.css');
$doc->addStyleSheet('templates/' . $this->template . '/css/custom.css');

// add javascript files
// JavaScript plugins (requires jQuery) 
$doc->addScript('templates/' . $this->template . '/js/jquery.js');
// Include all compiled plugins (below), or include individual files as needed 
$doc->addScript('templates/' . $this->template . '/js/bootstrap.min.js');
$doc->addScript('templates/' . $this->template . '/js/holder.js');
$doc->addScript('templates/' . $this->template . '/js/dropdown.js');
$doc->addScript('templates/' . $this->template . '/js/tooltip.js');
$doc->addScript('templates/' . $this->template . '/js/popover.js');



// LEFT AND RIGHT COLUMN WIDTHS
$leftcolgrid 	= $this->params->get('leftColumnWidth', 4);
$rightcolgrid	= $this->params->get('rightColumnWidth', 4);
?>


<?php
// ADJUST COLUMN WIDTHS
if ($this->countModules('left') == 0):?>
<?php $leftcolgrid  = "0";?>
<?php endif; ?>

<?php
if ($this->countModules('right') == 0):?>
<?php $rightcolgrid  = "0";?>
<?php endif; ?>





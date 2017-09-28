<?php

// no direct access
defined('_JEXEC') or die;
$app = JFactory::getApplication();

$doc = JFactory::getDocument();

// Add JavaScript Frameworks
JHtml::_('bootstrap.framework');

include 'includes/temp/params.php';

?>


<!DOCTYPE html>   
<html lang="pl">

<?php
include 'includes/temp/head.php';
?>

<body>

<?php include 'includes/rows/top.php'; ?>

<?php include 'includes/rows/header.php'; ?>

<?php include 'includes/rows/home.php'; ?>

<?php include 'includes/rows/main-content.php'; ?>

<?php include 'includes/rows/base1.php'; ?>

<?php include 'includes/rows/footer.php'; ?>



</body>
</html>


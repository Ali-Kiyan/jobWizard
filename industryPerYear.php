<?php
require_once "./Views/Template/includedFunctions.php";
confirmLoggedIn();
$view = new stdClass();
$view->pageTitle = 'Industry Per Year Analysis';
require_once './vendor/autoload.php';

$API = new jobWizardProject\InnerAPI();
$industries = $API->AllIndustries();
require_once "./Views/industryPerYear.phtml";
?>

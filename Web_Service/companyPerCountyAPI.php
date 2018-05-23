<?php
header('Content-Type: application/json');
require_once "../Views/Template/includedFunctions.php";
confirmLoggedIn();

require_once '../vendor/autoload.php';
$companies = new jobWizardProject\InnerAPI();
$companiesPerCounty = $companies->companiesPerCounty();
echo $companiesPerCounty;

?>

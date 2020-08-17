<?php

require("config.php");
$action = isset($_GET['action']) ? $_GET['action'] : "";

switch ($action) {
	case 'orbat':
		orbat();
		break;
	case 'about':
		about();
		break;
	default:
		homepage();
		break;
}

function homepage()
{
	$results = array();

	$carouselJson = file_get_contents(DATA_STORE . "/carousel.json");
	$carouselDecoded = json_decode($carouselJson, true);
	$carouselSize = sizeof($carouselDecoded);

	$results['carousel'] = $carouselDecoded;
	$results['carouselSize'] = $carouselSize;
 
	$results['pageTitle'] = "212th Home";
	require(TEMPLATES . "/homepage.php");
}

function orbat()
{
	$results = array();
	$results['pageTitle'] = "212th Orbat";

	$orbatData = file_get_contents(DATA_STORE . "/orbat.json");
	$orbatDecoded = json_decode($orbatData, false);
	$results['orbatData'] = $orbatDecoded;

	require(TEMPLATES . "/orbat.php");
}

function about()
{
	$results = array();
	$results['pageTitle'] = "212th About";
	require(TEMPLATES . "/about.php");
}

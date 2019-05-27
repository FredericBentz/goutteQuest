<?php
require 'vendor/autoload.php';
use Goutte\Client;

$url = "http://scraping-challenge-2.herokuapp.com/";
$css_selector = "div.profile:nth-child(1) > a:nth-child(1)"; 
$thing_to_scrape = "_text";

$client = new Client();
$crawler = $client->request('GET', $url);
$output = $crawler->filter($css_selector)->extract($thing_to_scrape);

var_dump($output);
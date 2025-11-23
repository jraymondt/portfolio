<?php

// gets the base URL of the site so it will work on any server/local/dir
function getBaseUrl() {
    $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';
    $host = $_SERVER['HTTP_HOST'];
    $scriptName = dirname($_SERVER['SCRIPT_NAME']);
    $baseUrl = $protocol . '://' . $host . rtrim($scriptName, '/\\');
    return $baseUrl;
}

$baseUrl = getBaseUrl();

// site configuration
$site_title = "James Portfolio";
$site_description = "Personal Portfolio";
$site_author = "James Raymond Thompson";
$site_url = $baseUrl;

// metadata (can be overridden per page)
$page_title = "James Raymond Thompson";
$page_description = "Personal Portfolio";
$page_keywords = "Personal portfolio, front end, web development";

// nav items
$nav_items = [
    ['url' => 'index.php', 'title' => 'Home'],
    ['url' => 'about.php', 'title' => 'About'],
    ['url' => 'portfolio.php', 'title' => 'Portfolio'],
    ['url' => 'contact.php', 'title' => 'Contact']
];
?>
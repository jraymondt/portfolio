<?php
// Configuration - this can be run as a cron job on our server
// # Run weekly on Sunday at 1:00 AM
// 0 1 * * 0 php /path/to/your/site/update_sitemap.php
$base_url = 'https://jraymondt.com';
$sitemap_file = 'sitemap.xml';
$site_root = __DIR__; // Current directory

// Pages to include with their priorities and change frequencies
$pages = [
    '/' => ['priority' => '1.0', 'changefreq' => 'weekly'],
    '/about.php' => ['priority' => '0.7', 'changefreq' => 'monthly'],
    '/portfolio.php' => ['priority' => '0.8', 'changefreq' => 'weekly'],
    '/contact.php' => ['priority' => '0.6', 'changefreq' => 'monthly'],
    '/blog' => ['priority' => '0.7', 'changefreq' => 'weekly'],
];

// Files to include 
$files = [
    '/resources/2025_APRIL_JRT-web.pdf' => ['priority' => '0.5', 'changefreq' => 'monthly'],
];

// Start XML
$xml = '<?xml version="1.0" encoding="UTF-8"?>'."\n";
$xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">'."\n";

// Add pages
foreach ($pages as $page => $meta) {
    $url = rtrim($base_url, '/') . $page;
    
    // Remove .php extension if clean URLs are enabled
    $url = str_replace('.php', '', $url);
    
    // Get file path 
    $file_path = $site_root . str_replace('/', DIRECTORY_SEPARATOR, $page);
    
    // Add .php back for file system check if needed
    if (!file_exists($file_path) && !file_exists($file_path.'.php')) {
        // Skip if file doesn't exist
        continue;
    }
    
    // Get last modified time
    $last_mod = file_exists($file_path) ? filemtime($file_path) : filemtime($file_path.'.php');
    $last_mod_date = date('Y-m-d', $last_mod);
    
    $xml .= "  <url>\n";
    $xml .= "    <loc>".htmlspecialchars($url)."</loc>\n";
    $xml .= "    <lastmod>{$last_mod_date}</lastmod>\n";
    $xml .= "    <changefreq>{$meta['changefreq']}</changefreq>\n";
    $xml .= "    <priority>{$meta['priority']}</priority>\n";
    $xml .= "  </url>\n";
}

// Add files
foreach ($files as $file => $meta) {
    $url = rtrim($base_url, '/') . $file;
    $file_path = $site_root . str_replace('/', DIRECTORY_SEPARATOR, $file);
    
    if (!file_exists($file_path)) {
        continue;
    }
    
    $last_mod = filemtime($file_path);
    $last_mod_date = date('Y-m-d', $last_mod);
    
    $xml .= "  <url>\n";
    $xml .= "    <loc>".htmlspecialchars($url)."</loc>\n";
    $xml .= "    <lastmod>{$last_mod_date}</lastmod>\n";
    $xml .= "    <changefreq>{$meta['changefreq']}</changefreq>\n";
    $xml .= "    <priority>{$meta['priority']}</priority>\n";
    $xml .= "  </url>\n";
}

$xml .= "</urlset>";

// Write sitemap file
file_put_contents($sitemap_file, $xml);

echo "Sitemap updated successfully at " . date('Y-m-d H:i:s');
?>
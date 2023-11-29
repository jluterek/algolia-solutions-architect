<?php

require __DIR__."/vendor/autoload.php";
use Algolia\AlgoliaSearch\SearchClient;

$client = SearchClient::create(
    '5HPD9Y8WYP', // Algolia Application ID
    '19c87e53eb6d60b69e3a79d9669f25b0'    // Algolia API Key
);

$index = $client->initIndex('products_dev'); // Algolia Index Name
$menuLimit = 5; // Limit for menu items

$facetForMenu = 'hierarchicalCategories.lvl0';
try {
    echo "GO!";
    $response = $index->search('', [
        'facets' => [$facetForMenu], // Facet for building server-rendered menu
    ]);
    
    $counter = 0;

    foreach ($response['facets']['hierarchicalCategories.lvl0'] as $category => $count) {
        echo "<li><a href=\"#\">" . htmlspecialchars($category) . "</a></li>";
        $counter++;

        if ($counter >= $menuLimit) {
            break;
        }
    }

} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}

?>

        
        <!-- Pull from algolia 
        <li><a href="#">Cameras</a></li>
        <li><a href="#">Lences</a></li>
        <li><a href="#">Accesories</a></li>
        <li><a href="#">Tripods</a></li>
        <li><a href="#">Lighting</a></li>
        <li><a href="#">Video</a></li>
        <li><a href="#">Drones</a></li>
        <li><a href="#">Brands</a></li>
        <li><a href="#">Special</a></li>-->
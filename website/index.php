<!DOCTYPE html>
<head>
  <meta charset="UTF-8" />
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="theme-color" content="#000000">
  <link rel="shortcut icon" href="./favicon.png">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@algolia/autocomplete-theme-classic@1.11.0/dist/theme.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/instantsearch.css@8.1.0/themes/satellite-min.css" integrity="sha256-p/rGN4RGy6EDumyxF9t7LKxWGg6/MZfGhJM/asKkqvA=" crossorigin="anonymous">
  <link rel="stylesheet" href="template.css">
  <link rel="stylesheet" href="style.css">
  <script src="https://kit.fontawesome.com/3318035e44.js"></script>
</head>
<body>
  <!-- Navbar -->
  <nav class="nav-container">
      <!-- Website nav-menu -->
      <ul class="nav-web">
        <li>
          <a href="/" id="logo" title="Home"
            ><img src="https://www.jamesluterek.com/content/images/2022/05/JL-04-white-transparent-1.png" alt="logo" style="max-height: 40px;"
          /></a>
        </li>
        <?php include 'nav.php';?>
      </ul>
      <!-- Mobile nav-menu -->
      <div class="nav-mobile">
          <a href="/" id="logo" title="Home"
            ><img src="https://www.jamesluterek.com/content/images/2022/05/JL-04-white-transparent-1.png" alt="logo" style="max-height: 40px;"
          /></a>
        <div id="myLinks">
          <?php include 'nav.php';?>
        </div>
        <a href="javascript:void(0);" class="icon" onclick="hamburgerMenu()">
          <i class="fa fa-bars"></i>
        </a>
      </div>
    </nav>

      <!-- Header -->
      <header class="header">
        <img style="max-height: 30px;" src="https://cdn-assets-eu.frontify.com/s3/frontify-enterprise-files-eu/eyJwYXRoIjoiYWxnb2xpYS1icmFuZFwvZmlsZVwveXpEbzVvc1hXNTlGcVlnWlQ2SEguc3ZnIn0:algolia-brand:Bbl0TCQZ4yWnfRou9C9wQjeQxx0QVhpbULuoYy4-AX4?width={width}" alt="logo" style="max-height: 40px;" />
        <div id="searchbox"></div>
        <div class="header-spans">
          <span class="user-wrapper">
            <i class="fa-solid fa-heart"></i>
            <i class="fa-solid fa-user"></i>
            <a href="shopping-cart.html"
              ><i class="fa-solid fa-cart-shopping" value="0"></i
            ></a>
          </span>
        </div>
      </header>
  <main>

    <div class="container">
      <div class="search-panel">
        <div class="search-panel__filters">
          <div id="dynamic-widgets"></div>
        </div>
        <div class="search-panel__results">
          <div id="hits" class="products-container">
          </div>
          <div id="pagination"></div>
        </div>
      </div>
    </div>
  </main>
  <footer>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/algoliasearch@4.10.5/dist/algoliasearch-lite.umd.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/instantsearch.js@4.60.0"></script>
  <script src="https://cdn.jsdelivr.net/npm/@algolia/autocomplete-js@1.12.1/dist/umd/index.production.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@algolia/autocomplete-plugin-query-suggestions@1.12.1/dist/umd/index.production.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@algolia/autocomplete-plugin-recent-searches@1.12.1/dist/umd/index.production.min.js"></script>
  <script src="app.js"></script>
</body>

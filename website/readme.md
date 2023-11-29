# PHP Website Example

A basic website to demonstrate integration of Algolia search with a PHP website.

![Current State](php-website.gif)

## Table of Contents

- [Installation](#installation)
- [Usage](#usage)
- [Content](#Content)
- [Notes](#Notes)
- [TODO](#TODO)

## Installation

PHP, Composer, and php-curl are required

```
    composer install
```

## Usage

### Prerequisites

1. ** Algolia Account and Index **

Users are expected to have a search index in algolia. Update app.js and nav.php will the appropriate values.

### Running

```
php -S localhost:8000
```

## Content

*index.php*

A search implementation leveraging the Vanilla JS version of [InstantSearch](https://www.algolia.com/doc/guides/building-search-ui/what-is-instantsearch/js/).

All files are included via CDN. The configuration code exists in [app.js](app.js).

*nav.php*

This file demonstrates how the PHP client can be leveraged for server-side rendering (SSR) of certain website aspects. In this example the Hierarchical Categories are leveraged to display the most populated 5 categories that exist at lvl0 for this index.

## Notes

 - If php-curl is not installed, composer will install version 1.25 of the Algolia package. The code examples for this version and documentation are very different. For those unfamiliar with PHP development, this could waste a lot of time.

## TODO

 - Homepage Recommendations
 - PHP Product Listing Page (PLP)
 - PHP Product Display Page (PDP)
 - User Token for Analytics
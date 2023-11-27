# Product Import CLI

A small NodeJS CLI to import a Products JSON file to Algolia.

## Table of Contents

- [Installation](#installation)
- [Usage](#usage)
- [Development](#Development)

## Installation

NodeJS & NPM are required for this application

```
    npm install
```

## Usage

### Prerequisites

1. ** Algolia Account and Index **

Users are expected to have a search index in algolia. Rename the .env.example file to *.env* and set your specific values.

```
ALGOLIA_APPLICATION_ID=
ALGOLIA_API_KEY=
ALGOLIA_INDEX=
ALGOLIA_BATCH_SIZE=
PRODUCTS_FILE_PATH=
```

Set an appropriate batch size (ex. 1000) and the path to your products.json file.

### Modifications

If the products file requires transformation, update the src/product-mapper.js file accordingly.

### Running the CLI

To run the sync use:

```
npm run start
```

## Development

The project contains a few scripts to help with development including:

```
npm run lint
npm run prettier
npm run test
```
# Solutions Architect Assignment

## Sections

#### System Integration

A [Systems Integration](SystemsIntegration.md) document walking through the proposed integration architecture. Diagrams are built with [Excalidraw](https://marketplace.visualstudio.com/items?itemName=pomdtr.excalidraw-editor) and can be found in the *diagrams* folder.

#### Product Sync CLI

A product sync tool written in NodeJS that accepts a JSON file as input. Code and [readme](/full-sync-cli/readme.md) can be found in the *full-sync-cli* folder.

#### Platform Configuration

A development tenant was configured under application name *Luterek* or ApplicationID *[5HPD9Y8WYP](https://dashboard.algolia.com/apps/5HPD9Y8WYP)*. The index is *products_dev* for searching and *products_dev_query_suggestions* for search suggestions.

#### UI

An example PHP website implementing a basic VanillaJS search experience and server rendered menu. Code and [readme](/website/readme.md) can be found in the *website* folder.

## Notes for Reviewer

As PHP is not a primary language, I hit some roadblocks in development related to development environment configuration. I have included a list of TODO items that I did not complete for the sake of time.

If desired I can revisit these items and make improvements to the PHP examples. Alternatively, I can build a more comprhensive example application in React/Next, Svelte-Kit, or Vue.

## Applicant Questions

 - Is jsdelivr a recommended practice?
 - Did the inclusion in blacklists (https://github.com/StevenBlack/hosts/issues/2515) have any customer impact?
 - What percentage of people are using the JS libraries vs the APIs directly?
 - What is the breakdown between custom integrations and prebuilt connectors with standard ecommerce platforms?
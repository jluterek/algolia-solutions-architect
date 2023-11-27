import algoliasearch from "algoliasearch";
import { default as formatProductForAlgolia } from "./product-mapper.js";

export default async function saveProducts(
  algoliaApplicationId,
  algoliaApiKey,
  algoliaIndex,
  products,
  batchSize,
  logger,
) {
  const client = algoliasearch(algoliaApplicationId, algoliaApiKey);
  const index = client.initIndex(algoliaIndex);

  let productChunks = [];
  for (let i = 0; i < products.length; i++) {
    const product = products[i];
    productChunks.push(formatProductForAlgolia(product));

    if (productChunks.length === batchSize || i === products.length - 1) {
      logger.info(`Saving ${productChunks.length} products to Algolia.`);
      try {
        await index.saveObjects(productChunks, {
          autoGenerateObjectIDIfNotExist: true,
        });
        productChunks.length = 0;
      } catch (err) {
        logger.error(err);
      }
    }
  }
}

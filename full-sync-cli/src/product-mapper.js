export default function formatProductForAlgolia(product) {
  // Map the product to the Algolia format
  const algoliaProduct = {
    ...product,
  };

  // Return the formatted product
  return algoliaProduct;
}

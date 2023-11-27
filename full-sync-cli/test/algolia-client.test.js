import algoliasearch from "algoliasearch";
import formatProductForAlgolia from "../src/product-mapper.js";
import saveProducts from "../src/algolia-client.js";

jest.mock("algoliasearch");

describe("saveProducts", () => {
    const mockAlgoliaApplicationId = "app-id";
    const mockAlgoliaApiKey = "api-key";
    const mockAlgoliaIndex = "products";
    let mockIndex;
    let mockClient;
    let mockLogger;

    beforeEach(() => {
        mockIndex = {
            saveObjects: jest.fn(),
        };
        mockClient = {
            initIndex: jest.fn().mockReturnValue(mockIndex),
        };
        algoliasearch.mockReturnValue(mockClient);

        mockLogger = {
            info: jest.fn(),
            error: jest.fn(),
        };
    });

    it("should save products in batches", async () => {
        const products = [{ id: 1 }, { id: 2 }, { id: 3 }];
        const batchSize = 2;

        await saveProducts(
            mockAlgoliaApplicationId,
            mockAlgoliaApiKey,
            mockAlgoliaIndex,
            products,
            batchSize,
            mockLogger
        );

        expect(mockClient.initIndex).toHaveBeenCalledWith(mockAlgoliaIndex);
        expect(mockIndex.saveObjects).toHaveBeenCalledTimes(2);
        expect(mockLogger.info).toHaveBeenCalledWith(`Saving 2 products to Algolia.`);
        expect(mockLogger.info).toHaveBeenCalledWith(`Saving 1 products to Algolia.`);
    });

});

import "dotenv/config";
import pino from "pino";
import { readFileSync } from "fs";
import path from "path";
import SaveProducts from "./algolia-client.js";

const logger = pino();
logger.info("Starting full-sync-cli...");

const applicationId = process.env.ALGOLIA_APPLICATION_ID;
const apiKey = process.env.ALGOLIA_API_KEY;
const index = process.env.ALGOLIA_INDEX;

const batchSize = parseInt(process.env.ALGOLIA_BATCH_SIZE);

logger.info(`applicationId: ${applicationId}`);
logger.info(`index: ${index}`);

const __dirname = path.resolve();
const filePath = path.resolve(__dirname, process.env.PRODUCTS_FILE_PATH);
logger.info(`Reading file ${filePath}`);

// read products from file
const products = JSON.parse(readFileSync(filePath));

logger.info(`Loaded ${products.length} products from file.`);

// save products to Algolia
SaveProducts(applicationId, apiKey, index, products, batchSize, logger)
  .then(() => {
    logger.info("Finished full-sync-cli.");
  })
  .catch((error) => {
    logger.error("Error occurred:", error);
  });

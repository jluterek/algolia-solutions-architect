// __mocks__/algoliasearch.js

const algoliasearch = jest.fn(() => ({
    initIndex: jest.fn().mockReturnValue({
      saveObjects: jest.fn().mockResolvedValue({}),
    }),
  }));
  
  export default algoliasearch;
  
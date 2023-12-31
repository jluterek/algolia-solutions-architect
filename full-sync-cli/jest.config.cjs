module.exports = {
    displayName: 'Tests NodeJS Application',
    moduleDirectories: ['node_modules', 'src'],
    testMatch: ['**/tests/**/*.js?(x)', '**/?(*.)+(spec|test).js?(x)'],
    testEnvironment: 'node',
    verbose: true,
    silent: false,
    transform: {
        "^.+\\.[t|j]sx?$": "babel-jest"
    },
};
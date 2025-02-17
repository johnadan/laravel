// export default {
//     plugins: {
//         tailwindcss: {},
//         autoprefixer: {},
//     },
// };
// module.exports = {
//     plugins: {
//         // ... other plugins
//         '@tailwindcss/postcss': {}, // Use the correct package name
//         autoprefixer: {},
//     },
// };
module.exports = {
    plugins: [
        // ... other plugins
        require('@tailwindcss/postcss'), // Require the package
        require('autoprefixer'),
    ],
};

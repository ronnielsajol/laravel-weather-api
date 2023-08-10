/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                pastel: {
                    50: "#BEADFA",
                    100: "#9f92d3",
                },
                peach: "#FFF3DA",
                darkPeach: "#fffce2",
            },
        },
    },
    plugins: [],
};

const defaultTheme = require("tailwindcss/defaultTheme");

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: ["./**/*.blade.php"],
    darkMode: "class",
    theme: {
        extend: {
            colors: {
                customBlue: "#1E3A8A",
            },
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
                montserrat: ["Montserrat", "sans-serif"],
            },
        },
    },
    plugins: [],
};

import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],

    theme: {
        extend: {
            fontFamily: {
                titulo: ['"Suez One"', "serif"],
                cuerpo: ["Raleway", "sans-serif"],
            },
            colors: {
                "custom-red": "#AC2C28",
                "custom-red-darker": "#9A2724",
                "custom-white": "#ededed",
                "custom-amber": "#fbf3e7",
                facebook: "#1877F2",
                youtube: "#FF0000",
                instagram: "#E1306C",
                spotify: "#1DB954",
                bandcamp: "#1DA0C3",
            },
            minHeight: {
                35: "35rem",
            },
            letterSpacing: {
                "letter-spacing-25": "2.5rem",
            },
            width: {
                "95p": "95%",
                "85p": "85%",
            },
            maxWidth: {
                "1300px": "1300px",
            },
        },
    },

    plugins: [forms],
};

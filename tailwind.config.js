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
                titulo: ['"Aleo"', "serif"],
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

                // Design tokens — rediseño "cartel de rock sureño"
                cream: {
                    DEFAULT: "#F3EAD9",
                    field: "#FBF5E9",
                    hover: "#EBE0CC",
                    white: "#FBF6EC",
                },
                ink: {
                    DEFAULT: "#231A13",
                    hero: "#261C15",
                    heading: "#2B2018",
                    body: "#3E3025",
                    muted: "#5A4938",
                },
                oxide: {
                    DEFAULT: "#AC2C28",
                    hover: "#9A2724",
                    light: "#C2453D",
                    focus: "#BF3A2E",
                },
                amber: {
                    DEFAULT: "#E9A845",
                },
                onblack: {
                    body: "#E4D9C7",
                    heading: "#FBF6EC",
                },
                rule: {
                    light: "#D8CBB6",
                    "light-soft": "#E2D7C3",
                    input: "#B9A992",
                    dark: "#463729",
                    "on-dark": "#6B5744",
                },
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
                content: "1120px",
                home: "1280px",
            },
            borderRadius: {
                sharp: "2px",
            },
        },
    },

    plugins: [forms],
};

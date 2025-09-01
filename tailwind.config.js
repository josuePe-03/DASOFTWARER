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
            colors: {
                brand: {
                    50: "#ecfeff", // aqua muy claro
                    100: "#cffafe",
                    200: "#a5f3fc",
                    300: "#67e8f9",
                    400: "#22d3ee",
                    500: "#06b6d4", // turquesa
                    600: "#0891b2", // azul océano
                    700: "#0e7490",
                    800: "#155e75",
                    900: "#164e63", // azul profundo
                },
                sand: {
                    50: "#fefce8",
                    100: "#fef9c3",
                    200: "#fef08a",
                    300: "#fde047",
                    400: "#facc15",
                    500: "#eab308", // arena dorada
                },
            },
            boxShadow: {
                soft: "0 10px 30px rgba(2, 6, 23, 0.08)",
            },
        },
    },

    plugins: [forms],
};

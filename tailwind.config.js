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
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
            },
            colors: {
                primary: "#3874f8",
                secondary: "#FACC15",
                accent: "#FACC15",
                primaryDark: "#1E3A8A",
                error: "#EF4444",
                success: "#10B981",
                background: "#F9FAFB",
                surface: "#FFFFFF",
                border: "#E5E7EB",
            },
        },
    },

    plugins: [forms],
};

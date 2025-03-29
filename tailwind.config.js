/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/views/components/**/*.blade.php",
  ],
  theme: {
    extend: {
        fontFamily: {
            poppins: ["Poppins", "sans-serif"],
        },
        animation: {
          floating: "floating 3s ease-in-out infinite",
        },
        keyframes: {
          floating: {
            "0%": { transform: "translateY(0px)" },
            "50%": { transform: "translateY(-20px)" },
            "100%": { transform: "translateY(0px)" },
          },
        },
    },
  },
  plugins: [],
}


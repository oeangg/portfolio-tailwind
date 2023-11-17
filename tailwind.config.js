/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./index.php"],
  theme: {
    container: {
      center: true,
      padding: "16px",
    },
    extend: {
      colors: {
        primary: "#2563eb",
        secondary: "#64748b",
        gelap: "#0f172a",
      },
      screens: {
        "2xl": "1320px",
      },
    },
  },
  plugins: [],
};

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js"
      ],
      theme: {
        screens: {
          sm: "300px",
          // => @media (min-width: 576px) { ... }

          md: "580px",
          // => @media (min-width: 768px) { ... }

          lg: "960px",
          // => @media (min-width: 992px) { ... }

          xl: "1140px",
          // => @media (min-width: 1200px) { ... }

          "2xl": "1320px",
          // => @media (min-width: 1400px) { ... }
        },
        container: {
          center: true,
          padding: "16px",
        },
        extend: {
          backgroundImage: {
            'gradient-radial': 'radial-gradient(var(--tw-gradient-stops))',
            'gradient-conic':
              'conic-gradient(from 180deg at 50% 50%, var(--tw-gradient-stops))',
          },
          colors: {
            black: "#212b36",
            dark: "#090E34",
            "dark-700": "#090e34b3",
            primary: "#3056D3",
            secondary: "#13C296",
            "body-color": "#637381",
            warning: "#FBBF24",
          },
          boxShadow: {
            input: "0px 7px 20px rgba(0, 0, 0, 0.03)",
            pricing: "0px 39px 23px -27px rgba(0, 0, 0, 0.04)",
            "switch-1": "0px 0px 5px rgba(0, 0, 0, 0.15)",
            testimonial: "0px 60px 120px -20px #EBEFFD",
          },
        },
      },
      plugins: [
          require('flowbite/plugin')
      ],
}


import daisyui from 'daisyui';

/** @type {import('tailwindcss').Config} */
export default {
  content: ['./app/Views/**/*.{php,html,twig}'],
  theme: {
    extend: {},
  },
  plugins: [daisyui],
};

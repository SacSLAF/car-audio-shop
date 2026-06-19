/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./app/Filament/**/*.php",
    "./app/Http/Livewire/**/*.php",
    "./vendor/filament/**/*.blade.php",
  ],
  theme: {
    extend: {},
  },
  plugins: [],
}

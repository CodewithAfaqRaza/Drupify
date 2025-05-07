module.exports = {
  content: [
    "./templates/**/*.html",
    "./templates/**/*.twig",
    "./**/*.twig",
    "./**/*.html",
  ],
  safelist: [
    "grid-cols-1",
    "grid-cols-2",
    "grid-cols-1 md:grid-cols-2 lg:grid-cols-3",
    "grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4",
    "grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 2xl:grid-cols-5",
    "grid-cols-6",
    "grid-cols-7",
    "grid-cols-8",
  ],
};

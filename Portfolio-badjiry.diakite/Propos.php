<php>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acceuil-Portfolio</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>

<body class="font-serif bg-gray-900">

<!-- Navbar -->
<nav class="bg-gray-900 sticky top-0 z-10 backdrop-filter backdrop-blur-sm bg-opacity-50">
  <div class="max-w-5xl mx-auto px-4">
    <div class="flex items-center justify-between h-16">
      <!-- Logo -->
      <p class="text-2xl text-sky-400 font-semibold">Badjiry Diakité</p>

      <!-- Hamburger button -->
      <button id="menu-btn" class="md:hidden text-gray-300 focus:outline-none">
        <svg class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="2"
          viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
          <path d="M4 6h16M4 12h16M4 18h16" />
        </svg>
      </button>

      <!-- Desktop menu -->
      <div class="hidden md:flex space-x-4">
        <a href="index.php" class="text-gray-300 font-bold hover:bg-sky-500 hover:text-white px-3 py-2 rounded">Présentation</a>
        <a href="Propos.php" class="text-gray-300 font-bold hover:bg-sky-500 hover:text-white px-3 py-2 rounded">À Propos</a>
        <a href="Projets.php" class="text-gray-300 font-bold hover:bg-sky-500 hover:text-white px-3 py-2 rounded">Projets</a>
        <a href="Contact.php" class="text-gray-300 font-bold hover:bg-sky-500 hover:text-white px-3 py-2 rounded">Contact</a>
      </div>
    </div>

    <!-- Mobile menu (hidden by default) -->
    <div id="mobile-menu" class="hidden md:hidden flex-col space-y-2 mt-2">
      <a href="index.php" class="block text-gray-300 font-bold hover:bg-sky-500 hover:text-white px-3 py-2 rounded">Présentation</a>
      <a href="Propos.php" class="block text-gray-300 font-bold hover:bg-sky-500 hover:text-white px-3 py-2 rounded">À Propos</a>
      <a href="Projets.php" class="block text-gray-300 font-bold hover:bg-sky-500 hover:text-white px-3 py-2 rounded">Projets</a>
      <a href="Contact.php" class="block text-gray-300 font-bold hover:bg-sky-500 hover:text-white px-3 py-2 rounded">Contact</a>
    </div>
  </div>
</nav>

<!-- JS Script -->
<script>
  const menuBtn = document.getElementById('menu-btn');
  const mobileMenu = document.getElementById('mobile-menu');

  menuBtn.addEventListener('click', () => {
    mobileMenu.classList.toggle('hidden');
  });

  // Optionnel : Fermer le menu quand on clique sur un lien
  const links = mobileMenu.querySelectorAll('a');
  links.forEach(link => {
    link.addEventListener('click', () => {
      mobileMenu.classList.add('hidden');
    });
  });
</script>

<main class="bg-black flex flex-col items-center justify-start  min-h-[150vh] text-gray-300 px-4 space-y-12">
    <h1 class="text-4xl italic font-bold text-sky-400 mb-6 p-4 border-4 border-sky-500 rounded-lg shadow-lg mt-4 text-center">
        Je suis Développeur Web Full Stack en formation !
    </h1>

    <div class="w-full max-w-5xl mx-auto p-6 bg-gray-800 bg-opacity-70 rounded-2xl shadow-lg border-4 border-sky-500 transition duration-500 hover:shadow-sky-500 opacity-0 translate-y-10 transform transition-all duration-700 ease-in-out scroll-fade mb-4">
        <h2 class="text-2xl text-sky-400 font-bold mb-4 text-center">Compétences Techniques acquises</h2>
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-7 gap-6">
            <div class="flex items-center justify-center p-4 bg-gray-700 rounded-lg shadow-md hover:shadow-sky-500 transition duration-300">
                <i class="fab fa-js-square text-4xl text-yellow-500"></i>
            </div>

            <div class="flex items-center justify-center p-4 bg-gray-700 rounded-lg shadow-md hover:shadow-sky-500 transition duration-300">
                <i class="fab fa-html5 text-4xl text-orange-500"></i>
            </div>

            <div class="flex items-center justify-center p-4 bg-gray-700 rounded-lg shadow-md hover:shadow-sky-500 transition duration-300">
                <i class="fab fa-css3-alt text-4xl text-blue-500"></i>
            </div>

            <div class="flex items-center justify-center p-4 bg-gray-700 rounded-lg shadow-md hover:shadow-sky-500 transition duration-300">
                <i class="fab fa-react text-4xl text-cyan-400"></i>
            </div>

            <div class="flex items-center justify-center p-4 bg-gray-700 rounded-lg shadow-md hover:shadow-sky-500 transition duration-300">
                <i class="fab fa-php text-4xl text-blue-700"></i>
            </div>

            <div class="flex items-center justify-center p-4 bg-gray-700 rounded-lg shadow-md hover:shadow-sky-500 transition duration-300">
                <i class="fab fa-node text-4xl text-green-500"></i>
            </div>

            <div class="flex items-center justify-center p-4 bg-gray-700 rounded-lg shadow-md hover:shadow-sky-500 transition duration-300">
            <img src="Assets/Tailwindlogo.png" alt="Tailwind CSS Logo" class="w-12 h-12">
            </div>
        </div>
        <h2 class="text-2xl text-sky-400 font-bold mb-4 text-center">Compétences Techniques en cours</h2>
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-6">

            <div class="flex items-center justify-center p-4 bg-gray-700 rounded-lg shadow-md hover:shadow-sky-500 transition duration-300">
            <i class="fab fa-python text-4xl text-yellow-500"></i>
            </div>

            <div class="flex items-center justify-center p-4 bg-gray-700 rounded-lg shadow-md hover:shadow-sky-500 transition duration-300">
            <i class="fab fa-vuejs text-4xl text-blue-700"></i>
            </div>

            <div class="flex items-center justify-center p-4 bg-gray-700 rounded-lg shadow-md hover:shadow-sky-500 transition duration-300">
            <i class="fab fa-angular text-4xl text-red-600"></i>
            </div>

            <div class="flex items-center justify-center p-4 bg-gray-700 rounded-lg shadow-md hover:shadow-sky-500 transition duration-300">
            <i class="fab fa-docker text-4xl text-blue-400"></i>
            </div>

            <div class="flex items-center justify-center p-4 bg-gray-700 rounded-lg shadow-md hover:shadow-sky-500 transition duration-300">
            <i class="fab fa-figma text-4xl text-purple-500"></i>
            </div>

       </div>
    </div>

    <div class="flex flex-col md:flex-row items-center justify-center w-full px-6 mt-9 space-x-0 space-y-4 md:space-x-6 md:space-y-0">
    
    <div class="max-w-xl w-full text-xl text-left p-6 bg-gray-800 bg-opacity-70 rounded-2xl shadow-lg border-4 border-sky-500 transition duration-500 hover:shadow-sky-500 mr-2">
        <h2 class="text-2xl text-sky-400 font-bold mb-4">À Propos de moi</h2>
        <ul class="space-y-4">
            <li class="flex items-center">
                <span class="text-sky-400 text-2xl">🔹</span>
                <p class="ml-2">Expérience projet : Participation à plusieurs projets concrets.</p>
            </li>
            <li class="flex items-center">
                <span class="text-sky-400 text-2xl">🔹</span>
                <p class="ml-2">Rigueur & collaboration : Challenge intensif de la Piscine, travail en équipe.</p>
            </li>
            <li class="flex items-center">
                <span class="text-sky-400 text-2xl">🔹</span>
                <p class="ml-2">Compétences techniques : JavaScript, React, HTML, CSS, PHP, MySQL, Shell, Tailwind CSS.</p>
            </li>
            <li class="flex items-center">
                <span class="text-sky-400 text-2xl">🔹</span>
                <p class="ml-2">De la vente au développement : un tournant décidé avec humilité, détermination et une soif d'apprendre.</p>
            </li>
            <li class="flex items-center">
                <span class="text-sky-400 text-2xl">🔹</span>
                <p class="ml-2">Motivation & engagement : Recherche d’une alternance pour Septembre 2025 (1 an, rythme 3 sem. entreprise / 1 sem. école).</p>
            </li>
            <li class="flex items-center">
                <span class="text-sky-400 text-2xl">↗️</span>
                <p class="ml-2">Objectifs : Apprendre, relever de nouveaux défis en entreprise.</p>
            </li>
        </ul>
    </div>

    
    <img class="max-w-sm rounded-2xl shadow-2xl border-4 border-sky-500 transition duration-500 hover:scale-105 hover:shadow-sky-500"
        src="Assets/CVInfo.jpg" alt="Mon CV">
</div>


    <div class=" text-white font-bold italic rounded-lg shadow-lg mt-5 mb-4 ml-1 text-center">
        Portfolio by Badjiry Diakité
    </div>
</main>


<script>
document.addEventListener("DOMContentLoaded", function() {
    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.remove("opacity-0", "translate-y-10");
            }
        });
    }, { threshold: 0.3 });

    document.querySelectorAll(".scroll-fade").forEach((el) => observer.observe(el));
});
</script>

</body>
</html>
</php>

<php>

<html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>

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



<main class="relative flex flex-col items-center justify-center w-full h-screen text-gray-300 overflow-hidden">
  
 
  <video autoplay loop muted playsinline class="absolute top-0 left-0 w-full h-full object-cover z-0">
    <source src="Assets/vidéoBG.mp4" type="video/mp4">
  </video>

 
  <div class="relative z-10 flex flex-col items-center text-center rounded-lg">
    
    <img id="Accueil-image" src="Assets/ImageBadji.jpeg" class="w-48 h-48 rounded-full object-cover border-4 border-gray-300 shadow-lg transition duration-300 hover:border-sky-500 mb-4">

    <div class="text-3xl font-bold">Je suis Badjiry Diakité.</div>
    <p class="text-xl font-bold text-gray-400 mt-2">"Je ne prétends pas tout savoir, mais j’apprends chaque jour pour devenir meilleur."</p>
    <div class="text-lg text-sky-400 italic mt-2">Développeur Web Full Stack en formation/Epitech.</div>

    <div class="text-sm font-bold text-gray-400 italic mt-4">
      Ce PORTFOLIO permet de démontrer mes compétences en <br> vous présentant mes différents projets au cours de l'année.
    </div>
<div class="flex space-x-4 mt-4">

    <button class="px-6 py-2 rounded-full border-4 border-gray-400 hover:bg-sky-400 transition">
      <a href="Projets.php" class="text-gray-300 font-bold italic">MES PROJETS</a>
    </button>

    <button class="px-6 py-2 rounded-full border-4 border-gray-400 hover:bg-sky-400 transition">
        <a href="Assets/CVInfo.jpg" download class="text-gray-300 font-bold italic">VOIR MON CV</a>
    </button>

</div>

    <div class="mt-14 text-white font-bold italic shadow-lg">
      Portfolio by Badjiry Diakité
    </div>

  </div>

</main>


</body>
</html>

</php>


 
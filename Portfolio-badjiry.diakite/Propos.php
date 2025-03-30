<php>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acceuil-Portfolio</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="font-serif bg-gray-900">

<nav id="nav" class="bg-gray-900 sticky top-0 z-10 backdrop-filter backdrop-blur-sm bg-opacity-50">
    <div class="max-w-5xl mx-auto px-4">
        <div class="flex items-center justify-between h-16">
        <p class="text-2xl text-sky-400 font-semibold">Badjiry Diakité</p>
        <div class="flex space-x-4 text-gray-900">
            <a href="index.php" class="text-gray-300 font-bold hover:bg-sky-500 hover:text-white px-3 py-2 rounded">Présentation</a>
            <a href="Propos.php" class="text-gray-300 font-bold hover:bg-sky-500 hover:text-white px-3 py-2 rounded">À Propos</a>
            <a href="Projets.php" class="text-gray-300 font-bold hover:bg-sky-500 hover:text-white px-3 py-2 rounded">Projets</a>
            <a href="Contact.php" class="text-gray-300  font-bold hover:bg-sky-500 hover:text-white px-3 py-2 rounded">Contact</a>
        </div>
        </div>
    </div>
</nav>

<main class="bg-black flex flex-col items-center min-h-[150vh] justify-center h-screen text-gray-300">

<h1 class="text-4xl italic font-bold text-sky-400 mb-6 p-4 border-4 border-sky-500 rounded-lg shadow-lg hover:scale-105 hover:shadow-white transition duration-300">
    Je suis Développeur Web Full Stack en formation !
</h1>



    <div class="flex items-center justify-between h-screen px-10 mt-9">

        
        <div class="max-w-xl text-xl text-left mb-8 p-6 bg-gray-800 bg-opacity-70 rounded-2xl shadow-lg border-4 border-sky-500 transition duration-500 hover:shadow-sky-500 opacity-0 translate-y-10 transform transition-all duration-700 ease-in-out scroll-fade mr-4">
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

      
        <img class="max-w-sm rounded-2xl shadow-2xl border-4 border-sky-500 transition duration-500 hover:scale-105 hover:shadow-sky-500 ml-9 mt-2 mb-14" 
            src="Assets/CVInfo.jpg" alt="Mon CV">
    </div>

    <div class="text-white font-bold italic rounded-lg shadow-lg mt-5 mb-4">
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
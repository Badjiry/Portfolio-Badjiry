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
    <nav class="bg-gray-900 sticky top-0 z-10 backdrop-filter backdrop-blur-sm bg-opacity-50">
        <div class="max-w-5xl mx-auto px-4">
            <div class="flex items-center justify-between h-16">
                <p class="text-2xl text-sky-400 font-semibold">Badjiry Diakité</p>
                <button id="menu-btn" class="md:hidden text-gray-300 focus:outline-none">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
                <div class="hidden md:flex space-x-4">
                    <a href="index.php" class="text-gray-300 font-bold hover:bg-sky-500 hover:text-white px-3 py-2 rounded">Présentation</a>
                    <a href="Propos.php" class="text-gray-300 font-bold hover:bg-sky-500 hover:text-white px-3 py-2 rounded">À Propos</a>
                    <a href="Projets.php" class="text-gray-300 font-bold hover:bg-sky-500 hover:text-white px-3 py-2 rounded">Projets</a>
                    <a href="Contact.php" class="text-gray-300 font-bold hover:bg-sky-500 hover:text-white px-3 py-2 rounded">Contact</a>
                </div>
            </div>
            <div id="mobile-menu" class="hidden md:hidden flex-col space-y-2 mt-2">
                <a href="index.php" class="block text-gray-300 font-bold hover:bg-sky-500 hover:text-white px-3 py-2 rounded">Présentation</a>
                <a href="Propos.php" class="block text-gray-300 font-bold hover:bg-sky-500 hover:text-white px-3 py-2 rounded">À Propos</a>
                <a href="Projets.php" class="block text-gray-300 font-bold hover:bg-sky-500 hover:text-white px-3 py-2 rounded">Projets</a>
                <a href="Contact.php" class="block text-gray-300 font-bold hover:bg-sky-500 hover:text-white px-3 py-2 rounded">Contact</a>
            </div>
        </div>
    </nav>

    <main class="bg-black flex flex-col items-center justify-center min-h-screen text-gray-300">
        <section id="projects" class="py-20 px-4 bg-gray-900 text-center mt-2 w-full">
            <h2 class="text-4xl font-extrabold text-sky-500 mb-10 uppercase tracking-wide">Mes Projets</h2>
            <div id="project-list" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 max-w-7xl mx-auto">
                <div class="project-card bg-gray-800 p-6 rounded-xl shadow-xl hover:shadow-2xl cursor-pointer transition duration-300 relative overflow-hidden">
                    <img src="Assets/Black_Illustration_Ninja_Esport_Or_Gaming_Mascot_Logo_-3-removebg-preview.png" alt="Nxggachain" class="w-full h-40 object-cover rounded-md mb-4">
                    <h3 class="text-xl font-bold text-white">Nxggachain - Clone de Twitter</h3>
                    <p class="text-gray-400 mt-2">Reproduire les fonctionnalités de Twitter.</p>
                    <a href="https://github.com/Badjiry/CloneTwitter-Badjiry" class="hidden">GitHub</a>
                </div>
                <div class="project-card bg-gray-800 p-6 rounded-xl shadow-xl hover:shadow-2xl cursor-pointer transition duration-300 relative overflow-hidden">
                    <img src="Assets/Puissance4logo.jpg" alt="Puissance-4" class="w-full h-40 object-cover rounded-md mb-4">
                    <h3 class="text-xl font-bold text-white">Puissance-4</h3>
                    <p class="text-gray-400 mt-2">Jeu Puissance 4 en JavaScript.</p>
                    <a href="https://github.com/Badjiry/Puissance4-badjiry.diakite" class="hidden">GitHub</a>
                </div>
                 <div class="project-card bg-gray-800 p-6 rounded-xl shadow-xl hover:shadow-2xl cursor-pointer transition duration-300 relative overflow-hidden">
                    <img src="Assets/quizzcapture.png" alt="Quizz" class="w-full h-40 object-cover rounded-md mb-4">
                    <h3 class="text-xl font-bold text-white">Quizz Légendaire</h3>
                    <p class="text-gray-400 mt-2">Quizz fait en 2 Heures.</p>
                    <a href="https://github.com/Badjiry/Quizz-badjiry.diakite" class="hidden">GitHub</a>
                </div>
                <div class="project-card bg-gray-800 p-6 rounded-xl shadow-xl hover:shadow-2xl cursor-pointer transition duration-300 relative overflow-hidden">
                     <video  autoplay muted loop class="w-full h-90 object-cover rounded-md mb-40">
                        <source src="Assets/morpion.mp4" type="video/mp4">
                    </video>
                    <h3 class="text-xl font-bold text-white">Morpion Alpha</h3>
                    <p class="text-gray-400 mt-2">Le morpion qui te donne le goût de la victoire.</p>
                    <a href="https://github.com/Badjiry/Morpion" class="hidden">GitHub</a>
                </div>
                <div class="project-card bg-gray-800 p-6 rounded-xl shadow-xl hover:shadow-2xl cursor-pointer transition duration-300 relative overflow-hidden">
                    <video  autoplay muted loop class="w-full h-90 object-cover rounded-md mb-40">
                        <source src="Assets/videoSnapchat.mp4" type="video/mp4">
                    </video>
                    <h3 class="text-xl font-bold text-white">SnapChainx - Clône de Snapchat</h3>
                    <p class="text-gray-400 mt-2">Le morpion qui te donne le goût de la victoire.</p>
                    <a href="https://github.com/Badjiry/SnapChainxClone" class="hidden">GitHub</a>
                </div>
            </div>
        </section>
    </main>

    <div id="project-popup" class="fixed inset-0 hidden z-50 flex items-center justify-center bg-black bg-opacity-70">
        <div class="bg-gray-900 text-white p-6 rounded-xl shadow-xl max-w-lg w-full relative">
            <button id="popup-close" class="absolute top-2 right-2 text-gray-400 hover:text-white">
                <i class="fas fa-times text-2xl"></i>
            </button>
            <img id="popup-image" src="" alt="Projet" class="w-full h-48 object-cover rounded mb-4">
            <h3 id="popup-title" class="text-2xl font-bold mb-2"></h3>
            <p id="popup-description" class="text-gray-300 mb-4"></p>
            <a id="popup-link" href="#" target="_blank" class="inline-block bg-sky-500 text-white px-5 py-2 rounded hover:bg-sky-600 transition">
                Voir le code sur GitHub <i class="fab fa-github ml-2"></i>
            </a>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const menuBtn = document.getElementById('menu-btn');
            const mobileMenu = document.getElementById('mobile-menu');
            menuBtn.addEventListener('click', () => {
                mobileMenu.classList.toggle('hidden');
            });

            const cards = document.querySelectorAll('.project-card');
            const popup = document.getElementById('project-popup');
            const popupTitle = document.getElementById('popup-title');
            const popupDescription = document.getElementById('popup-description');
            const popupImage = document.getElementById('popup-image');
            const popupLink = document.getElementById('popup-link');
            const closeBtn = document.getElementById('popup-close');

            cards.forEach(card => {
                card.addEventListener('click', () => {
                    popupTitle.textContent = card.querySelector('h3').textContent;
                    popupDescription.textContent = card.querySelector('p').textContent;
                    popupImage.src = card.querySelector('img').src;
                    popupLink.href = card.querySelector('a').href;
                    popup.classList.remove('hidden');
                });
            });

            closeBtn.addEventListener('click', () => popup.classList.add('hidden'));
            document.addEventListener('keydown', (e) => {
                if (e.key === 'Escape') popup.classList.add('hidden');
            });
        });
    </script>

    <footer class="py-4 text-center text-white italic font-bold rounded-lg shadow-lg mt-8">
        Portfolio by Badjiry Diakité
    </footer>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</body>
</html>

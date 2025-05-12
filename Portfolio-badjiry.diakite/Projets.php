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
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
                <div class="hidden md:flex space-x-4">
                    <a href="index.php"
                        class="text-gray-300 font-bold hover:bg-sky-500 hover:text-white px-3 py-2 rounded">Présentation</a>
                    <a href="Propos.php"
                        class="text-gray-300 font-bold hover:bg-sky-500 hover:text-white px-3 py-2 rounded">À Propos</a>
                    <a href="Projets.php"
                        class="text-gray-300 font-bold hover:bg-sky-500 hover:text-white px-3 py-2 rounded">Projets</a>
                    <a href="Contact.php"
                        class="text-gray-300 font-bold hover:bg-sky-500 hover:text-white px-3 py-2 rounded">Contact</a>
                </div>
            </div>
            <div id="mobile-menu" class="hidden md:hidden flex-col space-y-2 mt-2">
                <a href="index.php"
                    class="block text-gray-300 font-bold hover:bg-sky-500 hover:text-white px-3 py-2 rounded">Présentation</a>
                <a href="Propos.php"
                    class="block text-gray-300 font-bold hover:bg-sky-500 hover:text-white px-3 py-2 rounded">À Propos</a>
                <a href="Projets.php"
                    class="block text-gray-300 font-bold hover:bg-sky-500 hover:text-white px-3 py-2 rounded">Projets</a>
                <a href="Contact.php"
                    class="block text-gray-300 font-bold hover:bg-sky-500 hover:text-white px-3 py-2 rounded">Contact</a>
            </div>
        </div>
    </nav>

    <main class="bg-black flex flex-col items-center justify-center min-h-screen text-gray-300">
        <section id="projects" class="py-20 px-4 bg-gray-900 text-center mt-2 w-full">
            <h2
                class="text-4xl font-extrabold text-sky-500 mb-10 uppercase tracking-wide opacity-0 translate-y-5 transition-all duration-700 ease-out will-change-transform">
                Mes Projets
            </h2>
            <div class="flex justify-center gap-8 gap-y-8 px-2 flex-wrap max-w-7xl mx-auto">
                <div
                    class="relative w-full max-w-[400px] bg-gray-800 p-6 rounded-xl shadow-lg 
                            hover:shadow-2xl transition transform hover:-translate-y-2 scale-95 opacity-0 translate-y-5 
                            duration-700 ease-out delay-200 hover:scale-105 hover:shadow-sky-500 will-change-transform">
                    <div
                        class="absolute inset-0 bg-cover bg-center opacity-40 rounded-xl transition-opacity duration-500 hover:opacity-60"
                        style="background-image: url('Assets/Black_Illustration_Ninja_Esport_Or_Gaming_Mascot_Logo_-3-removebg-preview.png');">
                    </div>
                    <h3 class="text-2xl font-semibold text-white relative">Nxggachain - Clone de Twitter</h3>
                    <p class="text-gray-400 mt-3 font-bold relative">Reproduire les fonctionnalités de Twitter.</p>
                    <a href="https://github.com/Badjiry/CloneTwitter-Badjiry"
                        class="mt-5 inline-block px-5 py-2 bg-sky-500 text-white font-semibold rounded-full 
                                    hover:bg-sky-600 transition duration-300 relative transform hover:scale-110">
                        Voir le code sur GitHub
                        <i class="fab fa-github text-xl"></i>
                    </a>
                </div>

                <div
                    class="relative w-full max-w-[400px] bg-gray-800 p-6 rounded-xl shadow-lg 
                            hover:shadow-2xl transition transform hover:-translate-y-2 scale-95 opacity-0 translate-y-5 
                            duration-700 ease-out delay-300 hover:scale-105 hover:shadow-sky-500 will-change-transform">
                    <div
                        class="absolute inset-0 bg-cover bg-center opacity-40 rounded-xl transition-opacity duration-500 hover:opacity-60"
                        style="background-image: url('Assets/Puissance4logo.jpg');">
                    </div>
                    <h3 class="text-2xl font-semibold text-white relative">Puissance-4</h3>
                    <p class="text-gray-400 mt-3 font-bold relative">Jeu Puissance 4 en JavaScript.</p>
                    <a href="https://github.com/Badjiry/Puissance4-badjiry.diakite"
                        class="mt-5 inline-block px-5 py-2 bg-sky-500 text-white font-semibold rounded-full 
                                    hover:bg-sky-600 transition duration-300 relative transform hover:scale-110">
                        Voir le code sur GitHub
                        <i class="fab fa-github text-xl"></i>
                    </a>
                </div>

                <div
                    class="relative w-full max-w-[400px] bg-gray-800 p-6 rounded-xl shadow-lg 
                            hover:shadow-2xl transition transform hover:-translate-y-2 scale-95 opacity-0 translate-y-5 
                            duration-700 ease-out delay-400 hover:scale-105 hover:shadow-sky-500 will-change-transform">
                    <div
                        class="absolute inset-0 bg-cover bg-center opacity-40 rounded-xl transition-opacity duration-500 hover:opacity-60"
                        style="background-image: url('Assets/quizzlégendaire.jpg');">
                    </div>
                    <h3 class="text-2xl font-semibold text-white relative">Quizz-Légendaire</h3>
                    <p class="text-gray-400 mt-3 font-bold relative">Quizz à temps limité.</p>
                    <a href="https://github.com/Badjiry/Quizz-badjiry.diakite"
                        class="mt-5 inline-block px-5 py-2 bg-sky-500 text-white font-semibold rounded-full 
                                    hover:bg-sky-600 transition duration-300 relative transform hover:scale-110">
                        Voir le code sur GitHub
                        <i class="fab fa-github text-xl"></i>
                    </a>
                </div>

                <div class="relative w-full max-w-[400px] bg-gray-800 p-6 rounded-xl shadow-lg 
                            hover:shadow-2xl transition transform hover:-translate-y-2 scale-95 opacity-0 translate-y-5 
                            duration-700 ease-out delay-400 hover:scale-105 hover:shadow-sky-500 will-change-transform">
                    <div
                        class="absolute inset-0 bg-cover bg-center opacity-40 rounded-xl transition-opacity duration-500 hover:opacity-60"
                        style="background-image: url('Assets/morpionimage.jpg');">
                    </div>
                    <h3 class="text-2xl font-semibold text-white relative">Morpion Alpha</h3>
                    <p class="text-gray-400 mt-3 font-bold relative">le morpion qui te donne le goût de la victoire.</p>
                    <a href="https://github.com/Badjiry/Morpion"
                        class="mt-5 inline-block px-5 py-2 bg-sky-500 text-white font-semibold rounded-full 
                                    hover:bg-sky-600 transition duration-300 relative transform hover:scale-110">
                        Voir le code sur GitHub
                        <i class="fab fa-github text-xl"></i>
                    </a>
                </div>
            </div>
        </section>
    </main>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const appearElements = document.querySelectorAll(".opacity-0");

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.remove("opacity-0", "translate-y-5");
                        entry.target.classList.add("opacity-100", "translate-y-0", "transition-opacity",
                            "transition-transform", "duration-500");
                    }
                });
            }, {
                threshold: 0.1,
            });

            appearElements.forEach(el => observer.observe(el));
        });
    </script>
    <div class="absolute left-1/2 transform -translate-x-1/2 -translate-y-1/2 flex items-center text-white italic font-bold rounded-lg shadow-lg mt-5 mb-3">
        Portfolio by Badjiry Diakité
    </div>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</body>
</html>

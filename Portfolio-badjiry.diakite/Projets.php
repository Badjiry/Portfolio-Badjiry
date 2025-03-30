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

<nav id="nav" class="bg-gray-900 sticky top-0 z-10 backdrop-filter backdrop-blur-sm bg-opacity-50">
    <div class="max-w-5xl mx-auto px-4">
        <div class="flex items-center justify-between h-16">
        <p class="text-2xl text-sky-400 font-semibold">Badjiry Diakité</p>
        <div class="flex space-x-4 text-gray-900">
            <a href="index.php" class="text-gray-300 font-bold hover:bg-sky-500 hover:text-white px-3 py-2 rounded">Présentation</a>
            <a href="Propos.php" class="text-gray-300 font-bold hover:bg-sky-500 hover:text-white px-3 py-2 rounded">À Propos</a>
            <a href="Projets.php" class="text-gray-300 font-bold hover:bg-sky-500 hover:text-white px-3 py-2 rounded">Projets</a>
            <a href="Contact.php" class="text-gray-300 font-bold  hover:bg-sky-500 hover:text-white px-3 py-2 rounded">Contact</a>
            
        </div>
    </div>
</nav>

<main class="bg-black flex flex-col items-center min-h-[130vh] justify-center h-screen text-gray-300">

<section id="projects" class="py-20 px-10 bg-gray-900 text-center mt-2">
    <h2 class="text-4xl font-extrabold text-sky-500 mb-10 uppercase tracking-wide opacity-0 translate-y-5 transition-all duration-700 ease-out">
        Mes Projets
    </h2>

  
    <div class="overflow-x-auto scrollbar-hide">
        <div class="flex space-x-8 px-5 md:justify-center">
            <!-- Projet 1 -->
            <div class="relative min-h-[270px] md:min-w-[350px] bg-gray-800 p-6 rounded-xl shadow-lg 
                        hover:shadow-2xl transition transform hover:-translate-y-2 scale-95 opacity-0 translate-y-5 
                        duration-700 ease-out delay-200 hover:scale-105 hover:shadow-sky-500">
                
            
                <div class="absolute inset-0 bg-cover bg-center opacity-40 rounded-xl transition-opacity duration-500 hover:opacity-60" 
                     style="background-image: url('Assets/Black_Illustration_Ninja_Esport_Or_Gaming_Mascot_Logo_-3-removebg-preview.png');">
                </div>

                <h3 class="text-2xl font-semibold text-white relative">Nxggachain - Clone de Twitter</h3>
                <p class="text-gray-400 mt-3 font-bold  relative">Reproduire les fonctionnalités de Twitter.</p>
                <a href="https://github.com/Badjiry/CloneTwitter-Badjiry" 
                   class="mt-5 inline-block px-5 py-2 bg-sky-500 text-white font-semibold rounded-full 
                          hover:bg-sky-600 transition duration-300 relative transform hover:scale-110">
                    Voir le code sur GitHub
                    <i class="fab fa-github text-xl"></i>
                </a>
            </div>

            <!-- Projet 2 -->
            <div class="relative min-h-[270px] md:min-w-[360px] bg-gray-800 p-6 rounded-xl shadow-lg 
                        hover:shadow-2xl transition transform hover:-translate-y-2 scale-95 opacity-0 translate-y-5 
                        duration-700 ease-out delay-300 hover:scale-105 hover:shadow-sky-500">
                
            
                <div class="absolute inset-0 bg-cover bg-center opacity-40 rounded-xl transition-opacity duration-500 hover:opacity-60" 
                     style="background-image: url('Assets/Puissance4logo.jpg');">
                </div>

                <h3 class="text-2xl font-semibold text-white relative">Puissance-4</h3>
                <p class="text-gray-400 mt-3 font-bold relative">Création du légendaire Puissance 4.</p>
                <a href="https://github.com/Badjiry/Puissance4-badjiry.diakite" 
                   class="mt-5 inline-block px-5 py-2 bg-sky-500 text-white font-semibold rounded-full 
                          hover:bg-sky-600 transition duration-300 relative transform hover:scale-110">
                    Voir le code sur GitHub
                    <i class="fab fa-github text-xl"></i>
                </a>
            </div>

             <!-- Projet 3 -->
            <div class="relative min-h-[270px] md:min-w-[350px] bg-gray-800 p-6 rounded-xl shadow-lg 
                        hover:shadow-2xl transition transform hover:-translate-y-2 scale-95 opacity-0 translate-y-5 
                        duration-700 ease-out delay-400 hover:scale-105 hover:shadow-sky-500">
          
                <div class="absolute inset-0 bg-cover bg-center opacity-40 rounded-xl transition-opacity duration-500 hover:opacity-60" 
                     style="background-image: url('Assets/quizzlégendaire.jpg');">
                </div>

                <h3 class="text-2xl font-semibold text-white relative">Quizz-Légendaire</h3>
                <p class="text-gray-400 mt-3 font-bold  relative">Quizz fait avec une restriction de temps durant un examen.</p>
                <a href="https://github.com/Badjiry/Quizz-badjiry.diakite" 
                   class="mt-5 inline-block px-5 py-2 bg-sky-500 text-white font-semibold rounded-full 
                          hover:bg-sky-600 transition duration-300 relative transform hover:scale-110">
                    Voir le code sur GitHub
                    <i class="fab fa-github text-xl"></i>
                </a>
            </div>
        </div>
    </div>  
</section>

<script>
    
    document.addEventListener("DOMContentLoaded", function () {
        const elements = document.querySelectorAll(".opacity-0");
        
        function checkScroll() {
            const triggerBottom = window.innerHeight * 0.9;
            
            elements.forEach(el => {
                const boxTop = el.getBoundingClientRect().top;
                
                if (boxTop < triggerBottom) {
                    el.classList.remove("opacity-0", "translate-y-5");
                }
            });
        }
        
        window.addEventListener("scroll", checkScroll);
        checkScroll();
    });
</script>




        <div class="flex left 1/2 items-center text-white italic font-bold rounded-lg shadow-lg mt-11 mb-4">
        Portfolio by Badjiry Diakité
        </div>

</main>



<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

</body>
</html>
</php> 


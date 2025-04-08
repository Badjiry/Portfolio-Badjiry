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

<main class="bg-black flex flex-col items-center min-h-[150vh] justify-center h-screen text-gray-300">

<section id="projects" class="py-20 px-4 bg-gray-900 text-center mt-2">
  <h2 class="text-4xl font-extrabold text-sky-500 mb-10 uppercase tracking-wide opacity-0 translate-y-5 transition-all duration-700 ease-out will-change-transform">
    Mes Projets
  </h2>

  <div class="overflow-x-auto scrollbar-hide">
  <div class="flex justify-center gap-8 gap-y-8 px-2 flex-wrap md:flex-nowrap">
        <!-- Projet 1 -->
        <div class="relative w-full max-w-[400px] bg-gray-800 p-6 rounded-xl shadow-lg 
                  hover:shadow-2xl transition transform hover:-translate-y-2 scale-95 opacity-0 translate-y-5 
                  duration-700 ease-out delay-200 hover:scale-105 hover:shadow-sky-500 will-change-transform">
          <div class="absolute inset-0 bg-cover bg-center opacity-40 rounded-xl transition-opacity duration-500 hover:opacity-60" 
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

      <!-- Projet 2 -->
<div class="relative min-h-[270px] md:min-w-[360px] bg-gray-800 p-6 rounded-xl shadow-lg 
            hover:shadow-2xl transition transform hover:-translate-y-2 scale-95 opacity-0 translate-y-5 
            duration-700 ease-out delay-300 hover:scale-105 hover:shadow-sky-500 will-change-transform">
  <div class="absolute inset-0 bg-cover bg-center opacity-40 rounded-xl transition-opacity duration-500 hover:opacity-60" 
       style="background-image: url('Assets/Puissance4logo.jpg');"></div>

  <h3 class="text-2xl font-semibold text-white relative">Puissance-4</h3>
  <p class="text-gray-400 mt-3 font-bold relative">Création du légendaire Puissance 4 avec JavaScript.</p>
  <a href="https://github.com/Badjiry/Puissance4-badjiry.diakite" 
     class="mt-5 inline-block px-5 py-2 bg-sky-500 text-white font-semibold rounded-full 
            hover:bg-sky-600 transition duration-300 relative transform hover:scale-110">
    Voir le code sur GitHub
    <i class="fab fa-github text-xl"></i>
  </a>

  <!-- Jeu intégré (affiché uniquement sur grands écrans) -->
  <div class="relative z-10 mt-6 text-center hidden md:block">
      <div class="flex justify-center gap-10 mb-3 text-white text-sm font-bold">
          <div>🔴 Joueur 1: <span id="scoreR">0</span></div>
          <div>🟡 Joueur 2: <span id="scoreY">0</span></div>
      </div>

      <div class="buttons flex justify-center gap-1 mb-3"></div>
      <div id="table" class="flex flex-col items-center gap-1"></div>

      <button onclick="setup(6,7)" class="mt-4 bg-white text-gray-800 font-bold px-4 py-1 rounded hover:bg-sky-200 text-sm">
          🔁 Rejouer
      </button>

  <style>
    .row {
        display: flex;
        gap: 4px;
    }
    .case, .jeton {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background-color: white;
    }
    .jeton.R {
        background-color: red;
    }
    .jeton.Y {
        background-color: yellow;
    }
    .buttons .jeton {
        cursor: pointer;
        opacity: 0.9;
        transition: transform 0.2s ease;
    }
    .buttons .jeton:hover {
        transform: scale(1.1);
    }
</style>

<!-- Script -->
<script>
    let Table;
    let TableGUI, buttonsDiv;
    let currPlayer = "R";
    let scores = { R: 0, Y: 0 };

    function setup(rows, columns) {
        TableGUI = document.querySelector("#table");
        buttonsDiv = document.querySelector(".buttons");
        Table = Array.from({ length: rows }, () => Array(columns).fill(0));
        TableGUI.innerHTML = "";
        buttonsDiv.innerHTML = "";

        for (let i = 0; i < columns; i++) {
            buttonsDiv.innerHTML += `<div class='jeton ${currPlayer}' data-col='${i}'></div>`;
        }

        for (let r = 0; r < rows; r++) {
            let rowDiv = document.createElement("div");
            rowDiv.classList.add("row");
            for (let c = 0; c < columns; c++) {
                let cell = document.createElement("div");
                cell.classList.add("case");
                rowDiv.appendChild(cell);
            }
            TableGUI.appendChild(rowDiv);
        }

        document.querySelectorAll(".buttons .jeton").forEach(button => {
            button.addEventListener("click", () => {
                let col = parseInt(button.dataset.col);
                placeCoin(currPlayer, col);
                if (checkWinner()) {
                    setTimeout(() => {
                        alert(`🎉 Le joueur ${currPlayer === 'R' ? '1 (🔴)' : '2 (🟡)'} gagne !`);
                        scores[currPlayer]++;
                        updateScore();
                        setup(6, 7);
                    }, 100);
                } else if (isBoardFull()) {
                    setTimeout(() => {
                        alert("Match nul !");
                        setup(6, 7);
                    }, 100);
                } else {
                    nextPlayer();
                }
            });
        });
        updateScore();
    }

    function updateScore() {
        document.getElementById("scoreR").textContent = scores.R;
        document.getElementById("scoreY").textContent = scores.Y;
    }

    function nextPlayer() {
        currPlayer = currPlayer === "R" ? "Y" : "R";
        document.querySelectorAll(".buttons .jeton").forEach(btn => {
            btn.classList.remove("R", "Y");
            btn.classList.add(currPlayer);
        });
    }

    function placeCoin(coin, column) {
        for (let i = Table.length - 1; i >= 0; i--) {
            if (Table[i][column] === 0) {
                Table[i][column] = coin;
                let cell = TableGUI.querySelectorAll(".row")[i].children[column];
                cell.classList.remove("case");
                cell.classList.add("jeton", coin);
                return;
            }
        }
    }

    function checkWinner() {
        const directions = [[0, 1], [1, 0], [1, 1], [-1, 1]];
        for (let r = 0; r < Table.length; r++) {
            for (let c = 0; c < Table[0].length; c++) {
                let player = Table[r][c];
                if (player === 0) continue;
                for (let [dr, dc] of directions) {
                    let count = 1;
                    for (let i = 1; i < 4; i++) {
                        let nr = r + dr * i, nc = c + dc * i;
                        if (nr >= 0 && nr < Table.length && nc >= 0 && nc < Table[0].length && Table[nr][nc] === player) {
                            count++;
                        } else break;
                    }
                    if (count === 4) return true;
                }
            }
        }
        return false;
    }

    function isBoardFull() {
        return Table.flat().every(cell => cell !== 0);
    }


    window.onload = () => setup(6, 7);
</script>
</div>

  <!-- Message affiché uniquement sur petits écrans -->
  <div class="text-sm text-gray-400 mt-4 block md:hidden">
      ⚠️ Le jeu Puissance 4 est disponible uniquement sur ordinateur.
  </div>
</div>



   <!-- Projet 3 -->
        <div class="relative min-h-[270px] md:min-w-[350px] bg-gray-800 p-6 rounded-xl shadow-lg 
                    hover:shadow-2xl transition transform hover:-translate-y-2 scale-95 opacity-0 translate-y-5 
                    duration-700 ease-out delay-400 hover:scale-105 hover:shadow-sky-500 will-change-transform">
          <div class="absolute inset-0 bg-cover bg-center opacity-40 rounded-xl transition-opacity duration-500 hover:opacity-60" 
               style="background-image: url('Assets/quizzlégendaire.jpg');"></div>

          <h3 class="text-2xl font-semibold text-white relative">Quizz-Légendaire</h3>
          <p class="text-gray-400 mt-3 font-bold relative">Quizz fait avec une restriction de temps durant un examen.</p>
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
</main>

<!-- ✅ Script d’animation au scroll -->
<script>
  document.addEventListener("DOMContentLoaded", () => {
    const appearElements = document.querySelectorAll(".opacity-0");

    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.remove("opacity-0", "translate-y-5");
          entry.target.classList.add("opacity-100", "translate-y-0");
        }
      });
    }, {
      threshold: 0.1,
    });

    appearElements.forEach(el => observer.observe(el));
  });
</script>


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

<div class="absolute left-1/2 transform -translate-x-1/2 -translate-y-1/2 flex items-center text-white italic font-bold rounded-lg shadow-lg mt-5 mb-3">
    Portfolio by Badjiry Diakité
</div>


</main>







<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

</body>
</html>
</php> 


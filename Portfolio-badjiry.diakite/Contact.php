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

 
  const links = mobileMenu.querySelectorAll('a');
  links.forEach(link => {
    link.addEventListener('click', () => {
      mobileMenu.classList.add('hidden');
    });
  });
</script>

<main class="bg-black flex flex-col items-center min-h-[100vh] justify-center h-screen text-gray-300">
       
        <h2 class="text-4xl font-extrabold text-sky-500 text-center mb-8">
            Vous souhaitez échanger ou collaborer ?
        </h2>
       


<form method="POST" action="" class="space-y-8 w-80 h-50">

<?php
    $success = null;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $to = "diakitebadjirypro@gmail.com";
        $subject = "Nouveau message depuis le Portfolio";

        $name = htmlspecialchars($_POST["name"]);
        $email = htmlspecialchars($_POST["email"]);
        $message = htmlspecialchars($_POST["message"]);

        $headers = "From: $email\r\n";
        $headers .= "Reply-To: $email\r\n";
        $headers .= "Content-Type: text/plain; charset=utf-8\r\n";

        $body = "Nom: $name\nEmail: $email\n\nMessage:\n$message";

        if (mail($to, $subject, $body, $headers)) {
            $success = true;
        } else {
            $success = false;
        }
    }
  ?>
    <div>
        <label for="name" class="block text-left text-sm text-gray-300 font-medium">Nom</label>
        <input type="text" name="name" id="name" required class="mt-1 w-full px-4 py-2 rounded-md bg-gray-700 text-white focus:outline-none focus:ring-2 focus:ring-sky-500">
    </div>

    <div>
        <label for="email" class="block text-left text-sm text-gray-300 font-medium">Email</label>
        <input type="email" name="email" id="email" required class="mt-1 w-full px-4 py-2 rounded-md bg-gray-700 text-white focus:outline-none focus:ring-2 focus:ring-sky-500">
    </div>

    <div>
        <label for="message" class="block text-left text-sm text-gray-300 font-medium">Message</label>
        <textarea name="message" id="message" rows="4" required class="mt-1 w-full px-4 py-2 rounded-md bg-gray-700 text-white focus:outline-none focus:ring-2 focus:ring-sky-500"></textarea>
    </div>

    <button type="submit" class="w-full bg-sky-500 text-white font-semibold py-2 rounded-md hover:bg-sky-600 transition">
        Envoyer
    </button>

    <?php if ($success !== null): ?>
        <p class="mt-4 text-sm font-bold text-center <?= $success ? 'text-green-400' : 'text-red-400' ?>">
            <?= $success ? 'Message envoyé avec succès ! 🎉' : 'Échec de l’envoi du message. ❌' ?>
        </p>
    <?php endif; ?>

</form>




    
    <div class="flex space-x-6 mt-8">
        <a href="https://www.linkedin.com/in/badjiry-diakit%C3%A9-d%C3%A9v/" target="_blank" class="text-sky-500 text-3xl hover:text-sky-600">
            <i class="fab fa-linkedin"></i>
        </a>
        <a href="https://github.com/Badjiry" target="_blank" class="text-sky-500 text-3xl hover:text-sky-600">
            <i class="fab fa-github"></i>
        </a>
    </div>

        <div class="flex left 1/2 items-center text-white italic font-bold rounded-lg shadow-lg mt-11 mb-4">
        Portfolio by Badjiry Diakité
        </div>

</main>

<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

</body>
</html>
</php> 


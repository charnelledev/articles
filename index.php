<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./src/output.css">
    <script src="https://cdn.tailwindcss"></script>
    <title>articles</title>
</head>
<body>
    
<nav class="bg-white shadow-md fixed top-0 left-0 w-full   z-50">
  <div class="container mx-auto px-4">
    <div class="flex justify-between items-center py-4">

      <!-- Logo -->


      <div class="flex-shrink-0">
        <a href="#" class="text-2xl font-bold text-gray-800">ShopBeauty Stores</a>
      </div>


      <!-- Menu  -->
       
      <div class="hidden md:flex space-x-6">
        <a href="#" class="text-gray-800 hover:text-green-600">Accueil</a>
        <a href="about.php" class="text-gray-800 hover:text-blue-600">À propos</a>

        <!-- Menu Produits avec dropdown -->

        <div class="relative group">
          <button class="flex items-center text-gray-800 hover:text-blue-600 focus:outline-none">
            Produits
            <svg class="ml-1 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
            </svg>
          </button>
          <!-- Dropdown -->

          <div class="absolute left-0 mt-2 w-48 bg-white border rounded shadow-md opacity-0 group-hover:opacity-100 transition-opacity duration-200 z-10">
            <a href="produits/maquillage.php" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Maquillage</a>
            <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Soins du visage</a>
            <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Soins corporel</a>
            <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Cheveux</a>
          </div>
        </div>
        <a href="Nouveautés.php" class="text-gray-800 hover:text-blue-600">Nouveautés</a>
        <a href="promotions.php" class="text-gray-800 hover:text-blue-600">Promotions</a>
        <a href="conseille&tutoriel.php" class="text-gray-800 hover:text-blue-600">Conseils &amp; Tutoriels</a>
        <a href="contact.php" class="text-gray-800 hover:text-blue-600">Contact</a>
      </div>

      <!--  Mon Compte / Panier -->
      <div class="hidden md:flex space-x-4">
        <a href="mon compte.php" class="text-gray-800 hover:text-blue-600">Mon Compte</a>
        <a href="panier.php" class="text-gray-800 hover:text-blue-600">Panier</a>
      </div>


      <!-- Bouton menu mobile -->
      <div class="md:hidden">
        <button id="mobile-menu-button" type="button" class="text-gray-800 hover:text-blue-600 focus:outline-none">
          <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
          </svg>
        </button>
      </div>
    </div>
  </div>
  <!-- Menu Mobile -->
  <div id="mobile-menu" class="md:hidden hidden">
    <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Accueil</a>
    <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">À propos</a>
    <!-- Produits avec sous-menu (peut être amélioré avec un script pour l'expand/collapse) -->
    <div class="block px-4 py-2 text-gray-800 hover:bg-gray-200">
      <button class="w-full text-left flex items-center justify-between focus:outline-none">
        Produits
        <svg class="ml-1 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
        </svg>
      </button>
      
      <!-- Sous-menu (initialement caché, à rendre interactif via JavaScript) -->
      <div class="mt-2 pl-4 hidden">
        <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Maquillage</a>
        <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Soins du visage</a>
        <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Soins du corps</a>
        <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Cheveux</a>
      </div>
    </div>
    <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Nouveautés</a>
    <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Promotions</a>
    <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Conseils &amp; Tutoriels</a>
    <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Contact</a>
    <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Mon Compte</a>
    <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Panier</a>
  </div>
</nav>

<!-- <div class="h-20"></div> -->


  <!-- Hero Section -->
  <header class="bg-cover bg-center" style="background-image: url('https://via.placeholder.com/1920x600');">
    <div class="bg-black bg-opacity-50">
      <div class="container mx-auto px-4 py-32 text-center">
        <h1 class="text-4xl md:text-6xl font-bold text-white">Bienvenue chez ShopBeauty Stores</h1>
        <p class="mt-4 text-xl text-gray-200">Découvrez nos produits de beauté exclusifs et les dernières tendances pour sublimer votre style.</p>
        <a href="#produits" class="mt-8 inline-block bg-blue-600 text-white px-6 py-3 rounded-full hover:bg-blue-700 transition">Explorer nos produits</a>
      </div>
    </div>
  </header>


  <!-- Section "Nos Produits" -->
  <section id="produits" class="py-16 bg-white">
    <div class="container mx-auto px-4">
      <h2 class="text-3xl font-bold text-center text-gray-800">Nos Produits</h2>
      <p class="mt-4 text-center text-gray-600">Un aperçu de notre sélection exclusive de produits beauté.</p>
      <div class="mt-8 grid grid-cols-1 md:grid-cols-3 gap-8">
        <!-- Exemple de produit -->
        <div class="bg-gray-100 p-6 rounded-lg shadow">
          <img src="https://i.pinimg.com/474x/ff/3a/3f/ff3a3fdc59ae645f5673a11e47dad7cc.jpg" alt="Produit 1" class="w-full rounded">
          <h3 class="mt-4 text-xl font-bold text-gray-800">nos laces frontal métissé</h3>
          <p  id="shortText"class="mt-2 text-gray-600"> "Offrez-vous une transformation instantanée grâce à nos perruques de qualité supérieure. Confectionnées avec des fibres naturelles, elles vous offrent un rendu ultra réaliste et une douceur incomparable, assurant un confort optimal toute la journée. Disponibles dans une large gamme de styles, de couleurs et de longueurs, nos perruques s’adaptent à toutes vos envies, que vous recherchiez un look audacieux ou une élégance subtile. Chaque pièce est le fruit d’un savoir-faire minutieux, alliant modernité et tradition pour sublimer votre beauté au quotidien. Adoptez un style unique et affirmez votre personnalité avec nos perruques haut de gamme."
          </p>
          <a href="#" class="mt-4 inline-block text-blue-600 hover:underline">En savoir plus</a>
        </div>
        <div class="bg-gray-100 p-6 rounded-lg shadow">
          <img src="https://i.pinimg.com/236x/47/d0/80/47d080e93076db2bda0af4c3404483e9.jpg" alt="Produit 2" class="w-full rounded">
          <h3 class="mt-4 text-xl font-bold text-gray-800">Produits de beauté de qualités</h3>
          <p class="mt-2 text-gray-600">"Prenez soin de votre peau avec notre gamme de soins corporels spécialement conçus pour nourrir, hydrater et sublimer votre épiderme. Formulés avec des ingrédients naturels et bienfaisants, nos produits vous offrent une expérience sensorielle unique tout en respectant l’équilibre de votre peau. Que ce soit pour une hydratation intense, un gommage exfoliant ou un rituel de bien-être, chaque soin est pensé pour révéler l’éclat naturel de votre peau. Offrez-vous un moment de douceur et de plaisir au quotidien avec nos soins corporels de qualité."
          </p>
          <a href="#" class="mt-4 inline-block text-blue-600 hover:underline">En savoir plus</a>
        </div>
        <div class="bg-gray-100 p-6 rounded-lg shadow">
          <img src="https://i.pinimg.com/474x/64/c1/ce/64c1cec779c9722cf581d9534292476e.jpg" alt="Produit 3" class="w-full rounded">
          <h3 class="mt-4 text-xl font-bold text-gray-800">Produits makeup </h3>
          <p class="mt-2 text-gray-600">"Sublimez votre beauté avec notre collection de maquillage alliant performance et éclat. Que vous recherchiez un teint parfait, un regard intense ou des lèvres irrésistibles, nos produits haute qualité sont conçus pour révéler le meilleur de vous-même. Formulés avec des ingrédients doux et longue tenue, ils assurent confort et éclat tout au long de la journée. Du naturel au glamour, exprimez votre style et laissez libre cours à votre créativité avec notre sélection de fonds de teint, palettes, rouges à lèvres et bien plus encore. Découvrez le maquillage qui vous met en lumière !"
          </p>
          <a href="#" class="mt-4 inline-block text-blue-600 hover:underline">En savoir plus</a>
        </div>
      </div>
      <div class="mt-8 text-center">
        <a href="#" class="inline-block bg-blue-600 text-white px-6 py-3 rounded-full hover:bg-blue-700 transition">Voir tous les produits</a>
      </div>
    </div>
  </section>


  <!-- Section "Promotions" -->

  <section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
      <h2 class="text-3xl font-bold text-center text-gray-800">Promotions</h2>
      <p class="mt-4 text-center text-gray-600">Profitez de nos offres spéciales et réductions exceptionnelles.</p>
      <div class="mt-8 grid grid-cols-1 md:grid-cols-3 gap-8">
        <div class="bg-white p-6 rounded-lg shadow">
          <img src="https://i.pinimg.com/736x/09/88/6d/09886decc868a51bb32d2ccd39bfaed3.jpg" alt="Promotion 1" class="w-full rounded">
          <h3 class="mt-4 text-xl font-bold text-gray-800">Promotion 1</h3>
          <p class="mt-2 text-gray-600">Réduction de 20% sur ce produit phare.</p>
          <a href="#" class="mt-4 inline-block text-blue-600 hover:underline">Découvrir</a>
        </div>
        <div class="bg-white p-6 rounded-lg shadow">
          <img src="https://i.pinimg.com/736x/39/79/2d/39792da1cfd59fda5450780272ceba61.jpg" alt="Promotion 2" class="w-full rounded">
          <h3 class="mt-4 text-xl font-bold text-gray-800">Promotion 2</h3>
          <p class="mt-2 text-gray-600">Offre spéciale sur une sélection de produits.</p>
          <a href="#" class="mt-4 inline-block text-blue-600 hover:underline">Découvrir</a>
        </div>
        <div class="bg-white p-6 rounded-lg shadow">
          <img src="https://i.pinimg.com/736x/99/e9/57/99e957bb6d7991262a51f682e1db96a2.jpg" alt="Promotion 3" class="w-full rounded">
          <h3 class="mt-4 text-xl font-bold text-gray-800">Promotion 3</h3>
          <p class="mt-2 text-gray-600">Offres limitées pour sublimer votre routine beauté.</p>
          <a href="#" class="mt-4 inline-block text-blue-600 hover:underline">Découvrir</a>
        </div>
      </div>
      <div class="mt-8 text-center">
        <a href="#" class="inline-block bg-blue-600 text-white px-6 py-3 rounded-full hover:bg-blue-700 transition">Voir toutes les promotions</a>
      </div>
    </div>
  </section>


  <!-- Section "Conseils & Tutoriels" -->

  <section class="py-16 bg-white">
    <div class="container mx-auto px-4">
      <h2 class="text-3xl font-bold text-center text-gray-800">Conseils &amp; Tutoriels</h2>
      <p class="mt-4 text-center text-gray-600">Découvrez nos articles et vidéos pour maîtriser les tendances beauté.</p>
      <div class="mt-8 grid grid-cols-1 md:grid-cols-2 gap-8">
        <div class="flex bg-gray-100 rounded-lg shadow overflow-hidden">
          <img src="https://i.pinimg.com/736x/14/91/fd/1491fd10ddef20312421f55c2de63333.jpg" alt="Conseil 1" class="w-1/3 object-cover">
          <div class="p-4">
            <h3 class="text-xl font-bold text-gray-800">Conseil 1</h3>
            <p class="mt-2 text-gray-600">Astuces pour un maquillage parfait au quotidien.</p>
            <a href="#" class="mt-4 inline-block text-blue-600 hover:underline">Lire la suite</a>
          </div>
        </div>
        <div class="flex bg-gray-100 rounded-lg shadow overflow-hidden">
          <img src="https://i.pinimg.com/736x/09/73/31/097331d1a39d4daac8d9b8a58ddba99c.jpg" alt="Conseil 2" class="w-1/3 object-cover">
          <div class="p-4">
            <h3 class="text-xl font-bold text-gray-800">Conseil 2</h3>
            <p class="mt-2 text-gray-600">Les secrets d'une peau radieuse.</p>
            <a href="#" class="mt-4 inline-block text-blue-600 hover:underline">Lire la suite</a>
          </div>
        </div>
      </div>
      <div class="mt-8 text-center">
        <a href="#" class="inline-block bg-blue-600 text-white px-6 py-3 rounded-full hover:bg-blue-700 transition">Voir tous les conseils</a>
      </div>
    </div>
  </section>

  <!-- Footer -->

  <footer class="bg-gray-800 text-gray-200 py-8">
    <div class="container mx-auto px-4">
      <div class="flex flex-col md:flex-row justify-between">
        <div class="mb-4 md:mb-0">
          <h3 class="text-lg font-bold">ShopBeauty Stores</h3>
          <p class="mt-2 text-gray-400">Votre destination beauté, chaque jour.</p>
        </div>
        <div>
          <ul class="flex space-x-4">
            <li><a href="#" class="hover:text-white">Accueil</a></li>
            <li><a href="#" class="hover:text-white">À propos</a></li>
            <li><a href="#" class="hover:text-white">Contact</a></li>
            <li><a href="#" class="hover:text-white">Mentions légales</a></li>
          </ul>
        </div>
      </div>
      <div class="mt-4 text-center text-gray-500">
        © 2025 ShopBeauty Stores. Tous droits réservés.
      </div>
    </div>
  </footer>


  <!-- Script pour le menu mobile (optionnel) -->

  <script>
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');
    mobileMenuButton.addEventListener('click', () => {
      mobileMenu.classList.toggle('hidden');
    });
  </script>



</body>
</html>
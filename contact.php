<?php include 'header.php'; ?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact - ShopBeauty Stores</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> -->
</head>
<body class="bg-gray-50">

  <!-- Section Contact -->
  <section class="py-16 bg-white">
    <div class="container mx-auto px-4">
      <h2 class="text-3xl font-bold text-center text-gray-800">Contactez-nous</h2>
      <p class="mt-4 text-center text-gray-600">Si vous avez des questions ou des demandes, n'hésitez pas à nous contacter via les moyens ci-dessous.</p>
      
      <!-- Formulaire de contact -->
      <div class="mt-8 max-w-lg mx-auto">
        <form action="#" method="POST" class="bg-gray-100 p-6 rounded-lg shadow-md">
          <div class="mb-4">
            <label for="name" class="block text-gray-800 font-medium">Nom</label>
            <input type="text" id="name" name="name" required class="mt-2 w-full p-3 bg-white border border-gray-300 rounded-md">
          </div>
          <div class="mb-4">
            <label for="email" class="block text-gray-800 font-medium">Email</label>
            <input type="email" id="email" name="email" required class="mt-2 w-full p-3 bg-white border border-gray-300 rounded-md">
          </div>
          <div class="mb-4">
            <label for="message" class="block text-gray-800 font-medium">Message</label>
            <textarea id="message" name="message" rows="4" required class="mt-2 w-full p-3 bg-white border border-gray-300 rounded-md"></textarea>
          </div>
          <button type="submit" class="w-full bg-blue-600 text-white py-3 rounded-md hover:bg-blue-700 transition">Envoyer le message</button>
        </form>
      </div>

      <!-- Liens vers les réseaux sociaux -->
      <div class="mt-8 text-center">
        <h3 class="text-xl font-bold text-gray-800">Suivez-nous sur les réseaux sociaux</h3>
        <div class="mt-4 flex justify-center space-x-6">
          <a href="https://wa.me/1234567890" target="_blank" class="text-green-600 hover:text-green-700">
            <i class="fab fa-whatsapp text-3xl"></i>
          </a>
          <a href="https://www.facebook.com/ShopBeautyStores" target="_blank" class="text-blue-600 hover:text-blue-700">
            <i class="fab fa-facebook text-3xl"></i>
          </a>
          <a href="https://www.instagram.com/ShopBeautyStores" target="_blank" class="text-pink-600 hover:text-pink-700">
            <i class="fab fa-instagram text-3xl"></i>
          </a>
          <a href="https://github.com/ShopBeautyStores" target="_blank" class="text-gray-800 hover:text-gray-900">
            <i class="fab fa-github text-3xl"></i>
          </a>
        </div>
      </div>
    </div>
  </section>

  <?php include 'footer.php'; ?>

  <!-- Script FontAwesome pour les icônes sociales -->
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>


  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> -->
</body>
</html>
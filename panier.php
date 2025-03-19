<?php

session_start();

// verifie si le pagner existe
$panier = isset($_SESSION['panier']) ? $_SESSION['panier'] : [];

// Calculer le total du panier
$total_panier = 0;
foreach ($panier as $item) {
    $total_panier += $item['prix'] * $item['quantite'];
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Panier - ShopBeauty Stores</title>
  <script src="https://kit.fontawesome.com/a076d05399.js"></script> <!-- Import Font Awesome -->
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-50">

  <!-- Menu Panier -->
  <div class="bg-white shadow-lg rounded-lg max-w-xs mx-auto mt-10">
    <div class="text-center py-6 border-b">
      <h2 class="text-2xl font-bold text-gray-800">Mon Panier</h2>
    </div>
    <div class="p-4">
      <?php if (count($panier) > 0): ?>
        <ul class="space-y-4">
          <?php foreach ($panier as $item): ?>
            <li class="flex justify-between items-center">
              <div class="flex items-center space-x-2">
                <img src="<?php echo $item['image']; ?>" alt="<?php echo $item['nom']; ?>" class="w-12 h-12 object-cover">
                <span class="text-gray-700"><?php echo $item['nom']; ?> (x<?php echo $item['quantite']; ?>)</span>
              </div>
              <span class="text-gray-700"><?php echo number_format($item['prix'] * $item['quantite'], 2); ?> €</span>
            </li>
          <?php endforeach; ?>
        </ul>
        <div class="mt-4 flex justify-between items-center">
          <span class="font-bold text-gray-800">Total:</span>
          <span class="text-xl font-bold text-gray-800"><?php echo number_format($total_panier, 2); ?> €</span>
        </div>
        <div class="mt-6">
          <a href="panier.php" class="block bg-blue-500 text-white text-center py-2 rounded-lg hover:bg-blue-600">
            Voir le panier
          </a>
          <a href="commande.php" class="block bg-green-500 text-white text-center py-2 mt-2 rounded-lg hover:bg-green-600">
            Passer à la caisse
          </a>
        </div>
      <?php else: ?>
        <p class="text-center text-gray-500">Votre panier est vide.</p>
      <?php endif; ?>
    </div>
  </div>

</body>
</html>
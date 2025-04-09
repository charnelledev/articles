
<?php include 'header.php'; ?>


<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Menu Mon Compte - ShopBeauty Stores</title>
  <script src="https://kit.fontawesome.com/a076d05399.js"></script> 
  <!-- Import Font Awesome -->
</head>
<body class="bg-gray-50">

  <!-- Menu Mon Compte -->
  <div class="bg-white shadow-lg rounded-lg max-w-xs mx-auto mt-10">
    <div class="text-center py-6 border-b">
      <h2 class="text-2xl font-bold text-gray-800">Mon Compte</h2>
    </div>
    <div class="p-4">
      <ul class="space-y-4">
        <!-- Profil Utilisateur -->
        <li>
          <a href="mon-compte.php" class="text-gray-700 flex items-center space-x-3 hover:text-blue-600">
            <i class="fas fa-user-circle text-lg"></i>
            <span>Mon Profil</span>
          </a>
        </li>

        <!-- Commandes -->
        <li>
          <a href="commandes.php" class="text-gray-700 flex items-center space-x-3 hover:text-blue-600">
            <i class="fas fa-box-open text-lg"></i>
            <span>Mes Commandes</span>
          </a>
        </li>

        <!-- Informations de paiement -->
        <li>
          <a href="paiement.php" class="text-gray-700 flex items-center space-x-3 hover:text-blue-600">
            <i class="fas fa-credit-card text-lg"></i>
            <span>Mes Informations de Paiement</span>
          </a>
        </li>

        <!-- Adresse -->
        <li>
          <a href="adresse.php" class="text-gray-700 flex items-center space-x-3 hover:text-blue-600">
            <i class="fas fa-map-marker-alt text-lg"></i>
            <span>Mes Adresses</span>
          </a>
        </li>

        <!-- Déconnexion -->
        <li>
          <a href="deconnexion.php" class="text-gray-700 flex items-center space-x-3 hover:text-blue-600">
            <i class="fas fa-sign-out-alt text-lg"></i>
            <span>Se Déconnecter</span>
          </a>
        </li>
      </ul>
    </div>
  </div>

</body>
</html>
 
<?php

// Exemple d'ajout d'article au panier
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['ajouter_panier'])) {
    $nom = $_POST['nom']; // Nom de l'article
    $prix = $_POST['prix']; // Prix de l'article
    $image = $_POST['image']; // URL de l'image
    $quantite = 1; // Quantité de l'article ajoutée au panier

    // Ajouter l'article au panier dans la session
    $_SESSION['panier'][] = [
        'nom' => $nom,
        'prix' => $prix,
        'image' => $image,
        'quantite' => $quantite
    ];

    header("Location: panier.php"); // Rediriger vers la page panier après l'ajout
}


?>









<?php include 'header.php'; ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ShopBeauty Stores - Nouveautés</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-50">

    <!-- Navbar -->
     <!-- header -->
   

    <!-- Section Nouveautés -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-center text-gray-800">Nos Nouveautés</h2>
            <p class="mt-4 text-center text-gray-600">Découvrez les derniers produits ajoutés à notre boutique.</p>

            <div class="mt-8 grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Produit 1 -->
                <div class="bg-gray-100 p-6 rounded-lg shadow">
                    <img src="https://i.pinimg.com/736x/21/24/c6/2124c66dc6afb36444dbe4184391d4e8.jpg" alt="Produit 1" class="w-full rounded">
                    <h3 class="mt-4 text-xl font-bold text-gray-800">Rouge à lèvres Luxe</h3>
                    <p class="mt-2 text-gray-600">Une nouvelle gamme de rouges à lèvres hydratants.</p>
                    <a href="#" class="mt-4 inline-block text-blue-600 hover:underline">En savoir plus</a>
                </div>

                <!-- Produit 2 -->
                <div class="bg-gray-100 p-6 rounded-lg shadow">
                    <img src="https://i.pinimg.com/736x/a1/a9/0c/a1a90cebae02cc95ca574f0133fa9878.jpg" alt="Produit 2" class="w-full rounded">
                    <h3 class="mt-4 text-xl font-bold text-gray-800">Palette Yeux Glam</h3>
                    <p class="mt-2 text-gray-600">Une palette avec des couleurs vibrantes pour tous les styles.</p>
                    <a href="#" class="mt-4 inline-block text-blue-600 hover:underline">En savoir plus</a>
                </div>

                <!-- Produit 3 -->
                <div class="bg-gray-100 p-6 rounded-lg shadow">
                    <img src="https://i.pinimg.com/736x/cc/63/6b/cc636b10ef6260da9d7683724e542d92.jpg" alt="Produit 3" class="w-full rounded">
                    <h3 class="mt-4 text-xl font-bold text-gray-800">Soin Hydratant Bio</h3>
                    <p class="mt-2 text-gray-600">Un soin visage naturel pour une peau éclatante.</p>
                    <a href="#" class="mt-4 inline-block text-blue-600 hover:underline">En savoir plus</a>
                </div>
                <div class="bg-gray-100 p-6 rounded-lg shadow">
                    <img src="https://i.pinimg.com/736x/0e/4c/99/0e4c99a7a8a636cf059b7307159b5727.jpg" alt="Produit 3" class="w-full rounded">
                    <h3 class="mt-4 text-xl font-bold text-gray-800">Soin Hydratant Bio</h3>
                    <p class="mt-2 text-gray-600">Un soin visage naturel pour une peau éclatante.</p>
                    <a href="#" class="mt-4 inline-block text-blue-600 hover:underline">En savoir plus</a>
                </div>
                <div class="bg-gray-100 p-6 rounded-lg shadow">
                    <img src="https://i.pinimg.com/736x/bf/72/be/bf72bebaa399e6bb90d6008dcb22a7d0.jpg" alt="Produit 3" class="w-full rounded">
                    <h3 class="mt-4 text-xl font-bold text-gray-800">Soin Hydratant Bio</h3>
                    <p class="mt-2 text-gray-600">Un soin visage naturel pour une peau éclatante.</p>
                    <a href="#" class="mt-4 inline-block text-blue-600 hover:underline">En savoir plus</a>
                </div>
                <div class="bg-gray-100 p-6 rounded-lg shadow">
                    <img src="https://i.pinimg.com/736x/7d/20/a6/7d20a6e4746a2342a1ac79bffb7e0f74.jpg" alt="Produit 3" class="w-full rounded">
                    <h3 class="mt-4 text-xl font-bold text-gray-800">Soin Hydratant Bio</h3>
                    <p class="mt-2 text-gray-600">Un soin visage naturel pour une peau éclatante.</p>
                    <a href="#" class="mt-4 inline-block text-blue-600 hover:underline">En savoir plus</a>
                </div>
                <div class="bg-gray-100 p-6 rounded-lg shadow">
                    <img src="https://i.pinimg.com/736x/b6/1e/9f/b61e9f1bc169d0bee1bb62b741c2bc9e.jpg" alt="Produit 3" class="w-full rounded">
                    <h3 class="mt-4 text-xl font-bold text-gray-800">Soin Hydratant Bio</h3>
                    <p class="mt-2 text-gray-600">Un soin visage naturel pour une peau éclatante.</p>
                    <a href="#" class="mt-4 inline-block text-blue-600 hover:underline">En savoir plus</a>
                </div>
                <div class="bg-gray-100 p-6 rounded-lg shadow">
                    <img src="https://i.pinimg.com/736x/ac/a5/d0/aca5d0bee71acff017fc2726d10198b2.jpg" alt="Produit 3" class="w-full rounded">
                    <h3 class="mt-4 text-xl font-bold text-gray-800">Soin Hydratant Bio</h3>
                    <p class="mt-2 text-gray-600">Un soin visage naturel pour une peau éclatante.</p>
                    <a href="#" class="mt-4 inline-block text-blue-600 hover:underline">En savoir plus</a>
                </div>
                <div class="bg-gray-100 p-6 rounded-lg shadow">
                    <img src="https://i.pinimg.com/736x/15/44/c3/1544c3edee8637c5f6b0209ec1393174.jpg" alt="Produit 3" class="w-full rounded">
                    <h3 class="mt-4 text-xl font-bold text-gray-800">Soin Hydratant Bio</h3>
                    <p class="mt-2 text-gray-600">Un soin visage naturel pour une peau éclatante.</p>
                    <a href="#" class="mt-4 inline-block text-blue-600 hover:underline">En savoir plus</a>
                </div>
                <div class="bg-gray-100 p-6 rounded-lg shadow">
                    <img src="https://i.pinimg.com/736x/74/fb/f7/74fbf7e773fcf69c2f116574f108ca1b.jpg" alt="Produit 3" class="w-full rounded">
                    <h3 class="mt-4 text-xl font-bold text-gray-800">Soin Hydratant Bio</h3>
                    <p class="mt-2 text-gray-600">Un soin visage naturel pour une peau éclatante.</p>
                    <a href="#" class="mt-4 inline-block text-blue-600 hover:underline">En savoir plus</a>
                </div>
                <div class="bg-gray-100 p-6 rounded-lg shadow">
                    <img src="https://i.pinimg.com/736x/0a/f3/a5/0af3a5b0feffab8ddc5e003884c62423.jpg" alt="Produit 3" class="w-full rounded">
                    <h3 class="mt-4 text-xl font-bold text-gray-800">Soin Hydratant Bio</h3>
                    <p class="mt-2 text-gray-600">Un soin visage naturel pour une peau éclatante.</p>
                    <a href="#" class="mt-4 inline-block text-blue-600 hover:underline">En savoir plus</a>
                </div>
                <div class="bg-gray-100 p-6 rounded-lg shadow">
                    <img src="https://i.pinimg.com/736x/0b/0d/f0/0b0df0a2a5546ad7056e65b5b7954788.jpg" alt="Produit 3" class="w-full rounded">
                    <h3 class="mt-4 text-xl font-bold text-gray-800">Soin Hydratant Bio</h3>
                    <p class="mt-2 text-gray-600">Un soin visage naturel pour une peau éclatante.</p>
                    <a href="#" class="mt-4 inline-block text-blue-600 hover:underline">En savoir plus</a>
                </div>
            </div>

            <div class="mt-8 text-center">
                <a href="#" class="inline-block bg-blue-600 text-white px-6 py-3 rounded-full hover:bg-blue-700 transition">Voir toutes les nouveautés</a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php include 'footer.php'; ?>

</body>
</html>
<?php include 'header.php'; ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Maquillage</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body class="bg-pink-50 text-gray-800 font-sans">
    <div class="min-h-screen px-4 py-10">
        <div class="max-w-5xl mx-auto bg-white p-8 rounded-2xl shadow-lg">
            <h1 class="text-4xl font-bold text-pink-600 mb-6 text-center">L'univers du Maquillage</h1>
            <p class="text-center mb-10">Découvrez nos produits coups cœur pour sublimer votre beauté au quotidien 💋</p>

            <!-- Galerie -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
                <div class="bg-pink-100 rounded-xl p-4 shadow-md">
                    <img src="https://i.pinimg.com/474x/7e/b5/c3/7eb5c3b552361b82aa2f48e1ac29b5a5.jpg" class="rounded-lg mb-3" alt="Rouge à lèvres">
                    <h2 class="text-lg font-semibold">Rouge à lèvres</h2>
                    <button class="mt-2 bg-pink-500 text-white px-4 py-2 rounded-lg hover:bg-pink-600">Voir</button>
                </div>

                <div class="bg-pink-100 rounded-xl p-4 shadow-md">
                    <img src="https://i.pinimg.com/236x/dd/a2/64/dda2646a54a66d47d49401b06effd1bb.jpg" class="rounded-lg mb-3" alt="Palette yeux">
                    <h2 class="text-lg font-semibold">Palette Yeux</h2>
                    <button class="mt-2 bg-pink-500 text-white px-4 py-2 rounded-lg hover:bg-pink-600">Voir</button>
                </div>

                <div class="bg-pink-100 rounded-xl p-4 shadow-md">
                    <img src="https://i.pinimg.com/236x/5c/80/1f/5c801f636368de16f2c2bc0ff18dda69.jpg" class="rounded-lg mb-3" alt="Fond de teint">
                    <h2 class="text-lg font-semibold">Fond de Teint</h2>
                    <button class="mt-2 bg-pink-500 text-white px-4 py-2 rounded-lg hover:bg-pink-600">Voir</button>
                </div>
            </div>

            <!-- Bouton retour -->
            <div class="mt-12 text-center">
                <a href="../index.php" class="inline-block bg-gray-700 hover:bg-gray-800 text-white font-semibold py-2 px-6 rounded-xl transition duration-300">
                    Retour à l'accueil
                </a>
            </div>
        </div>
    </div>
</body>
</html>

<?php include 'footer.php'; ?>
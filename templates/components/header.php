<?php
    // Récupération de la page courante
    $currentPage = $_SERVER['REQUEST_URI']; // '/quelque-chose'
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Space+Grotesk:wght@300..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./assets/style.css">
    <script src="./assets/main.js" defer></script>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <header class="bg-white text-slate-700">
        <nav class="p-2 flex justify-between items-center border-b border-slate-200 sticky top-0">
            <!-- Logo -->
            <a href="/">
                <img src="./images/logo.png" alt="votre logo" width="50">
            </a>

            <!-- Bouton hamburger pour mobile -->
            <button id="menu-btn" class="md:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>

            <!-- Menu navigation -->
            <ul class="bg-slate-100 p-1 rounded-lg hidden md:flex gap-4" id="menu">
                <li class="p-2 hover:text-slate-800 <?= $currentPage == '/about' ? 'bg-white text-slate-800 b rounded-lg shadow-md' : '' ?>">
                    <a href="/about">Présentation</a>
                </li>
                <li class="p-2 hover:text-slate-800 <?= $currentPage == '/skills' ? 'bg-white text-slate-800 b rounded-lg shadow-md' : '' ?>">
                    <a href="/skills">Mes compétences</a>
                </li>
                <li class="p-2 hover:text-slate-800 <?= $currentPage == '/projets' ? 'bg-white text-slate-800 b rounded-lg shadow-md' : '' ?>">
                    <a href="/projets">Mes projets</a>
                </li>
                <li class="p-2 hover:text-slate-800 <?= $currentPage == '/contact' ? 'bg-white text-slate-800 b rounded-lg shadow-md' : '' ?>">
                    <a href="/contact">Contact</a>
                </li>
            </ul>
        </nav>

        <!-- Menu mobile -->
        <nav id="mobile-menu" class="hidden md:hidden fixed top-18 right-0 w-1/2 h-screen border-l border-slate-200 bg-white text-slate-700">
            <ul class="flex flex-col p-4">
                <li class="p-2 hover:bg-slate-100 hover:text-amber-600"><a href="/about" class="">Présentation</a></li>
                <li class="p-2 hover:bg-slate-100 hover:text-amber-600"><a href="/skills" class="">Mes compétences</a></li>
                <li class="p-2 hover:bg-slate-100 hover:text-amber-600"><a href="/projets" class="">Mes projets</a></li>
                <li class="p-2 hover:bg-slate-100 hover:text-amber-600"><a href="/contact" class="">Contact</a></li>
            </ul>
        </nav>
    </header>
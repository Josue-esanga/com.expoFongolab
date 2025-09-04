<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./src/output.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <script src="./all.js" defer></script>
    <link rel="icon" type="image/png" href="./pictures/icon (2).png" />
    <title>Akazilink</title>
</head>
<body>
     <?php include 'navbar2.php'; ?>
     
      <!-- la partie pour la mini section du profil -->
      <section id="miniSection" class="w-[250px] border-gray-700 left-300 fixed p-3 font-[450] min-h-auto bg-gray-100 flex-col rounded-[6px] shadow-xl hidden">
            <p class="mb-2 cursor-pointer w-[120px]">Table de bord</p>
            <p class="mb-2 cursor-pointer w-[50px]">Profil</p>
            <p class="mb-2 cursor-pointer w-[60px]">Alertes</p>
            <p class="mb-2 cursor-pointer w-[170px]">Articles sauvegardés</p>
            <p class="mb-2 cursor-pointer w-[90px]">Paramètres</p><hr class="text-gray-500">
            <p id="deconnexion" class="mb-2 mt-2  cursor-pointer w-[95px]">Déconnexion</p>
    </section>
    <section class="sm:pl-7 pl-2 mt-[12vh]">
        <div class="pt-5">
            <h2 class="text-[16px] font-semibold">Prim's bienvenue dans votre suivi de candidatures !</h2>
            <p class="text-gray-500">Actualisez votre avancement, triez vos jobs, échangez avec les recruteurs... Vous avez la main.</p>
        </div>
        <ul class="flex gap-5 font-semibold mt-6 mb-3">
            <li id="encours" class="cursor-pointer hover:border-b-[3px]">Candidatures en cours</li>
            <li class="cursor-pointer border-b-[3px]">Candidatures passées</li>
        </ul><hr class="border-gray-300">
        <div class="w-full flex flex-col justify-center items-center h-[40vh]">
            <h1 class="font-semibold text-[40px] sm:mb-15">Oh, il semblerait que vous n'ayez jamais postulé !</h1>
            <div class=" flex gap-5 sm:mt-2 mt-4">
                <button id="btnJob" class="px-2 py-1.5 rounded-[5px] font-semibold text-white bg-amber-400 cursor-pointer">Trouver un job</button>
                <button id="btnEntreprise" class=" px-2 py-1.5 border rounded-[5px] cursor-pointer">Trouver entreprise</button>
            </div>
        </div>
        </div>
    </section>
</body>
</html>
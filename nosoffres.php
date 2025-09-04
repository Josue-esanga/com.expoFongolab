<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./src/output.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Anton&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />
    <link rel="icon" type="image/png" href="./pictures/icon (2).png" />
    <script src="./index1.js" defer></script>
    <title>Akazilink</title>
  </head>
  <body>
    <main>
      <?php include 'navbar2.php'; ?>
      
      <!-- la partie pour la mini section du profil -->
      <section id="miniSection" class="w-[250px] border-gray-700 left-250 fixed p-3 font-[450] min-h-auto bg-gray-100 flex-col rounded-[6px] shadow-xl hidden">
            <p class="mb-2 cursor-pointer w-[120px]">Table de bord</p>
            <p class="mb-2 cursor-pointer w-[50px]">Profil</p>
            <p class="mb-2 cursor-pointer w-[60px]">Alertes</p>
            <p class="mb-2 cursor-pointer w-[170px]">Articles sauvegardés</p>
            <p class="mb-2 cursor-pointer w-[90px]">Paramètres</p><hr class="text-gray-500">
            <p id="deconnexion" class="mb-2 mt-2  cursor-pointer w-[95px]">Déconnexion</p>
    </section>
      <!-- la partie pour la mini section du profil -->
      <section class="mt-[12vh] pt-1">
        <div class="pl-8 w-full">
          <h2 class="mt-6 md:mt-10 font-semibold text-2xl">
            Recherche d'emplois par domaine
          </h2>
          <form
            action=""
            class="flex flex-col md:flex-row w-full md:w-[96%] mt-6 gap-2 md:gap-3"
          >
            <input
              class="sm:w-[70%] w-[90%] rounded-2xl border py-1.5 pl-3 outline-gray-400"
              type="text"
              placeholder="Recherche"
            />
            <input
              class="sm:w-[70%] w-[90%] rounded-2xl border py-1.5 pl-3 outline-gray-400"
              type="text"
              id="localisation"
              name="localisation"
              placeholder="Ex: Burndi, RDCongo"
            />
          </form>
        </div>
        <div class="w-full flex flex-wrap gap-2 justify-center">
          <div
            class="rounded-2xl border-gray-500 w-[45%] sm:w-[30%] md:w-[10%] bg-gray-300 mt-4 py-1 cursor-pointer text-[14px] font-semibold hover:scale-110 transition-all"
          >
            <p class="text-center">Programmeur</p>
          </div>
          <div
            class="rounded-2xl border-gray-500 w-[45%] sm:w-[30%] md:w-[10%] bg-gray-300 mt-4 py-1 cursor-pointer text-[14px] font-semibold hover:scale-110 transition-all"
          >
            <p class="text-center">Medecin</p>
          </div>
          <div
            class="rounded-2xl border-gray-500 w-[45%] sm:w-[30%] md:w-[10%] bg-gray-300 mt-4 py-1 cursor-pointer text-[14px] font-semibold hover:scale-110 transition-all"
          >
            <p class="text-center">Professeur</p>
          </div>
          <div
            class="rounded-2xl border-gray-500 w-[45%] sm:w-[30%] md:w-[10%] bg-gray-300 mt-4 py-1 cursor-pointer text-[14px] font-semibold hover:scale-110 transition-all"
          >
            <p class="text-center">Mecanicien</p>
          </div>
          <div
            class="rounded-2xl border-gray-500 w-[45%] sm:w-[30%] md:w-[10%] bg-gray-300 mt-4 py-1 cursor-pointer text-[14px] font-semibold hover:scale-110 transition-all"
          >
            <p class="text-center">Couturier</p>
          </div>
          <div
            class="rounded-2xl border-gray-500 w-[45%] sm:w-[30%] md:w-[10%] bg-gray-300 mt-4 py-1 cursor-pointer text-[14px] font-semibold hover:scale-110 transition-all"
          >
            <p class="text-center">Programmeur</p>
          </div>
          <div
            class="rounded-2xl border-gray-500 w-[45%] sm:w-[30%] md:w-[10%] bg-gray-300 mt-4 py-1 cursor-pointer text-[14px] font-semibold hover:scale-110 transition-all"
          >
            <p class="text-center">Pompier</p>
          </div>
          <div
            class="rounded-2xl border-gray-500 w-[45%] sm:w-[30%] md:w-[10%] bg-gray-300 mt-4 py-1 cursor-pointer text-[14px] font-semibold hover:scale-110 transition-all"
          >
            <p class="text-center">Avocat</p>
          </div>
          <div
            class="rounded-2xl border-gray-500 w-[45%] sm:w-[30%] md:w-[10%] bg-gray-300 mt-4 py-1 cursor-pointer text-[14px] font-semibold hover:scale-110 transition-all"
          >
            <p class="text-center">Informaticien</p>
          </div>
        </div>
      </section>
      <!-- Create your profiles -->
      <section
        class="sm:w-[96%] text-center w-[100%] sm:h-[30vh] h-[22vh] px-5 bg-white pt-1 mt-8 sm:ml-5 rounded-xl shadow-lg"
      >
        <p class="md:text-2xl font-semibold mt-3">
          Trouver le job de vos reves en quelques clics ! Notre application
          connecte les meilleurs talents aux entreprises qui recrutent
        </p>
        <button
          id="create-profile"
          class="bg-cyan-900 animate-bounce mb-2 py-1.5 rounded-xl px-3.5 mt-6 text-white font-semibold cursor-pointer"
        >
          Creer mon profil
        </button>
      </section>
      <!-- section jobs -->
      <section class="w-full min-h-[40vh] bg-gray-300 mt-12 pb-4 flex flex-col items-center">
        <p class="text-4xl pl-6 mb-4 pt-2 font-bold">Jobs</p>
        <div class="w-[97%] sm:ml-6 flex gap-3.5 flex-wrap">
          <div class="sm:w-[32%] w-[100%]">
            <img class="h-[40vh] w-full rounded-t-[8px] object-cover" src="./Pins/7.jpg" />
            <div class="px-3 flex flex-col rounded-b-[8px] bg-white">
              <h1 class="font-bold text-[19px]">Développeur Web Full Stack</h1>
              <p class="text-xs text-gray-500">Burundi Tech Solutions</p>
              <p class="text-xs mt-3 mb-2 text-gray-500">Conception et développement d'applications web pour PME locales.</p>
              <div class="pb-2">
                <button class="bg-gray-400 rounded-xs text-xs px-1 py-1 font-semibold">CDI / Temps plein</button>
                <button class="bg-gray-400 rounded-xs text-[10px] px-1 py-1 font-semibold">Bujumbura</button>
                <button class="bg-gray-400 rounded-xs text-[10px] px-1 py-1 font-semibold">Salaire : 1 200 000 BIF</button>
                <button class="bg-gray-400 rounded-xs text-[10px] px-1 py-1 font-semibold">JavaScript, Python, Django</button>
                <button class="bg-gray-400 rounded-xs text-[10px] px-1 py-1 font-semibold">Équipe de 10 personnes</button>
              </div>
            </div>
          </div>
          <div class="sm:w-[32%] w-[100%]">
            <img class="h-[40vh] w-full rounded-t-[8px] object-cover" src="./Pins/9.jpg" />
            <div class="px-3 flex flex-col rounded-b-[8px] bg-white">
              <h1 class="font-bold text-[19px]">Analyste Data & BI</h1>
              <p class="text-xs text-gray-500">SmartData Burundi</p>
              <p class="text-xs mt-3 mb-2 text-gray-500">Analyse de données pour l'agriculture intelligente et la santé publique.</p>
              <div class="pb-2">
                <button class="bg-gray-400 rounded-xs text-xs px-1 py-1 font-semibold">CDD / Projet</button>
                <button class="bg-gray-400 rounded-xs text-[10px] px-1 py-1 font-semibold">Gitega</button>
                <button class="bg-gray-400 rounded-xs text-[10px] px-1 py-1 font-semibold">Salaire : 900 000 BIF</button>
                <button class="bg-gray-400 rounded-xs text-[10px] px-1 py-1 font-semibold">SQL, Power BI, Python</button>
                <button class="bg-gray-400 rounded-xs text-[10px] px-1 py-1 font-semibold">Équipe de 6 personnes</button>
              </div>
            </div>
          </div>
          <div class="sm:w-[32%] w-[100%]">
            <img class="h-[40vh] w-full rounded-t-[8px] object-cover" src="./Pins/8.jpg" />
            <div class="px-3 flex flex-col rounded-b-[8px] bg-white">
              <h1 class="font-bold text-[19px]">Technicien Réseaux & Systèmes</h1>
              <p class="text-xs text-gray-500">Burundi Connect</p>
              <p class="text-xs mt-3 mb-2 text-gray-500">Maintenance et sécurisation des réseaux informatiques d'entreprises.</p>
              <div class="pb-2">
                <button class="bg-gray-400 rounded-xs text-xs px-1 py-1 font-semibold">CDI / Temps plein</button>
                <button class="bg-gray-400 rounded-xs text-[10px] px-1 py-1 font-semibold">Ngozi</button>
                <button class="bg-gray-400 rounded-xs text-[10px] px-1 py-1 font-semibold">Salaire : 800 000 BIF</button>
                <button class="bg-gray-400 rounded-xs text-[10px] px-1 py-1 font-semibold">Cisco, Linux, Sécurité</button>
                <button class="bg-gray-400 rounded-xs text-[10px] px-1 py-1 font-semibold">Équipe de 4 personnes</button>
              </div>
            </div>
          </div>
          <div class="sm:w-[32%] w-[100%]">
            <img class="h-[40vh] w-full rounded-t-[8px] object-cover" src="./Pins/2.jpg" />
            <div class="px-3 flex flex-col rounded-b-[8px] bg-white">
              <h1 class="font-bold text-[19px]">Chef de Projet Digital</h1>
              <p class="text-xs text-gray-500">Digital Impact Africa</p>
              <p class="text-xs mt-3 mb-2 text-gray-500">Gestion de projets numériques pour ONG et institutions locales.</p>
              <div class="pb-2">
                <button class="bg-gray-400 rounded-xs text-xs px-1 py-1 font-semibold">CDD / 12 mois</button>
                <button class="bg-gray-400 rounded-xs text-[10px] px-1 py-1 font-semibold">Bujumbura</button>
                <button class="bg-gray-400 rounded-xs text-[10px] px-1 py-1 font-semibold">Salaire : 1 500 000 BIF</button>
                <button class="bg-gray-400 rounded-xs text-[10px] px-1 py-1 font-semibold">Gestion, Scrum, Communication</button>
                <button class="bg-gray-400 rounded-xs text-[10px] px-1 py-1 font-semibold">Équipe de 8 personnes</button>
              </div>
            </div>
          </div>
          <div class="sm:w-[32%] w-[100%]">
            <img class="h-[40vh] w-full rounded-t-[8px] object-cover" src="./Pins/14.jpg" />
            <div class="px-3 flex flex-col rounded-b-[8px] bg-white">
              <h1 class="font-bold text-[19px]">Spécialiste Marketing Digital</h1>
              <p class="text-xs text-gray-500">AgriMarket Burundi</p>
              <p class="text-xs mt-3 mb-2 text-gray-500">Promotion de produits agricoles via les réseaux sociaux et campagnes web.</p>
              <div class="pb-2">
                <button class="bg-gray-400 rounded-xs text-xs px-1 py-1 font-semibold">Stage / 6 mois</button>
                <button class="bg-gray-400 rounded-xs text-[10px] px-1 py-1 font-semibold">Rumonge</button>
                <button class="bg-gray-400 rounded-xs text-[10px] px-1 py-1 font-semibold">Indemnité : 300 000 BIF</button>
                <button class="bg-gray-400 rounded-xs text-[10px] px-1 py-1 font-semibold">SEO, Facebook Ads, Canva</button>
                <button class="bg-gray-400 rounded-xs text-[10px] px-1 py-1 font-semibold">Équipe de 3 personnes</button>
              </div>
            </div>
          </div>
          <div class="sm:w-[32%] w-[100%]">
            <img class="h-[40vh] w-full rounded-t-[8px] object-cover" src="./Pins/6.jpg" />
            <div class="px-3 flex flex-col rounded-b-[8px] bg-white">
              <h1 class="font-bold text-[19px]">Développeur Mobile Android</h1>
              <p class="text-xs text-gray-500">Mobisoft Burundi</p>
              <p class="text-xs mt-3 mb-2 text-gray-500">Création d'applications mobiles pour le secteur bancaire et l'éducation.</p>
              <div class="pb-2">
                <button class="bg-gray-400 rounded-xs text-xs px-1 py-1 font-semibold">CDI / Temps plein</button>
                <button class="bg-gray-400 rounded-xs text-[10px] px-1 py-1 font-semibold">Bujumbura</button>
                <button class="bg-gray-400 rounded-xs text-[10px] px-1 py-1 font-semibold">Salaire : 1 100 000 BIF</button>
                <button class="bg-gray-400 rounded-xs text-[10px] px-1 py-1 font-semibold">Kotlin, Java, Firebase</button>
                <button class="bg-gray-400 rounded-xs text-[10px] px-1 py-1 font-semibold">Équipe de 5 personnes</button>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- opportunites -->
      <section
        class="sm:w-[96%] w-[100%] sm:h-[30vh] h-[26vh] px-5 bg-white pt-1 mt-8 sm:ml-5 rounded-xl shadow-lg"
      >
        <p class="sm:text-2xl text-center font-semibold mt-3">
          Ne soyez pas seulement la personne qui cherche
        </p>
        <p class="text-gray-600 text-[17px]">
          Soyez ausssi celle aue l'on trouve. Indiquez votre disponibilite et
          completez votre profil pour que les entreprises qui recrutent vous
          contactent directement
        </p>
        <button
          id="opportunitess"
          class="bg-cyan-900 py-1.5 rounded-xl px-3.5 sm:m-4 text-white font-semibold cursor-pointer"
        >
          Recevoir des opportunites
        </button>
      </section>
      <!-- section 2 -->
      <section class="w-full min-h-[40vh] bg-gray-300 mt-12 pb-4 flex flex-col items-center">
        <div class="w-[97%] sm:ml-6 flex gap-3.5 flex-wrap">
          <div class="sm:w-[32%] w-[100%]">
            <img
              class="h-[40vh] w-full rounded-t-[8px] object-cover"
              src="./Pins/4.jpg"
            />
            <div class="px-3 flex flex-col rounded-b-[8px] bg-white">
              <h1 class="font-bold text-[19px]">
                Employer <br />
                Magasin
              </h1>
              <p class="text-xs text-gray-500">
                Magasin Super U Bujumbura
              </p>
              <p class="text-xs mt-3 mb-2 text-gray-500">
                Accueil des clients, gestion des rayons, mise en rayon des produits et encaissement dans un supermarché moderne.
              </p>
              <div class="pb-2">
                <button class="bg-gray-400 rounded-xs text-xs px-1 py-1 font-semibold">CDI / Temps plein</button>
                <button class="bg-gray-400 rounded-xs text-[10px] px-1 py-1 font-semibold">Bujumbura</button>
                <button class="bg-gray-400 rounded-xs text-[10px] px-1 py-1 font-semibold">Salaire : 450 000 BIF</button>
                <button class="bg-gray-400 rounded-xs text-[10px] px-1 py-1 font-semibold">Service client, gestion de stock, caisse</button>
                <button class="bg-gray-400 rounded-xs text-[10px] px-1 py-1 font-semibold">Équipe de 20 personnes</button>
              </div>
            </div>
          </div>
          <div class="sm:w-[32%] w-[100%]">
            <img
              class="h-[40vh] w-full rounded-t-[8px] object-cover"
              src="./Pins/29.jpg"
            />
            <div class="px-3 flex flex-col rounded-b-[8px] bg-white">
              <h1 class="font-bold text-[19px]">
                Directeur Artistique Digital & Expérience Utilisateur
              </h1>
              <p class="text-xs text-gray-500">
                Agence Creativ' Burundi
              </p>
              <p class="text-xs mt-3 mb-2 text-gray-500">
                Pilotage de l'identité visuelle, création de concepts graphiques et supervision de l'expérience utilisateur pour des clients locaux et internationaux.
              </p>
              <div class="pb-2">
                <button class="bg-gray-400 rounded-xs text-xs px-1 py-1 font-semibold">CDI / Temps plein</button>
                <button class="bg-gray-400 rounded-xs text-[10px] px-1 py-1 font-semibold">Bujumbura</button>
                <button class="bg-gray-400 rounded-xs text-[10px] px-1 py-1 font-semibold">Salaire : 1 800 000 BIF</button>
                <button class="bg-gray-400 rounded-xs text-[10px] px-1 py-1 font-semibold">Design, UX/UI, gestion d'équipe</button>
                <button class="bg-gray-400 rounded-xs text-[10px] px-1 py-1 font-semibold">Équipe de 7 personnes</button>
              </div>
            </div>
          </div>
          <div class="sm:w-[32%] w-[100%]">
            <img
              class="h-[40vh] w-full rounded-t-[8px] object-cover"
              src="./Pins/30.jpg"
            />
            <div class="px-3 flex flex-col rounded-b-[8px] bg-white">
              <h1 class="font-bold text-[19px]">
                Rédacteur Technique Informatique & Blockchain
              </h1>
              <p class="text-xs text-gray-500">
                TechDocs Burundi
              </p>
              <p class="text-xs mt-3 mb-2 text-gray-500">
                Guides utilisateurs et articles spécialisés sur les technologies blockchain et solutions logicielles innovantes.
              </p>
              <div class="pb-2">
                <button class="bg-gray-400 rounded-xs text-xs px-1 py-1 font-semibold">CDD / Projet</button>
                <button class="bg-gray-400 rounded-xs text-[10px] px-1 py-1 font-semibold">Gitega</button>
                <button class="bg-gray-400 rounded-xs text-[10px] px-1 py-1 font-semibold">Salaire : 950 000 BIF</button>
                <button class="bg-gray-400 rounded-xs text-[10px] px-1 py-1 font-semibold">Rédaction, blockchain, anglais technique</button>
                <button class="bg-gray-400 rounded-xs text-[10px] px-1 py-1 font-semibold">Équipe de 4 personnes</button>
              </div>
            </div>
          </div>
          <div class="sm:w-[32%] w-[100%]">
            <img
              class="h-[40vh] w-full rounded-t-[8px] object-cover"
              src="./Pins/28.jpg"
            />
            <div class="px-3 flex flex-col rounded-b-[8px] bg-white">
              <h1 class="font-bold text-[19px]">
                Ingénieur Intelligence Artificielle & Machine Learning
              </h1>
              <p class="text-xs text-gray-500">
                AI Solutions Burundi
              </p>
              <p class="text-xs mt-3 mb-2 text-gray-500">
                Développement d'algorithmes d'apprentissage automatique pour l'agriculture intelligente, la santé et la finance locale.
              </p>
              <div class="pb-2 pt-4">
                <button class="bg-gray-400 rounded-xs text-xs px-1 py-1 font-semibold">CDI / Temps plein</button>
                <button class="bg-gray-400 rounded-xs text-[10px] px-1 py-1 font-semibold">Bujumbura</button>
                <button class="bg-gray-400 rounded-xs text-[10px] px-1 py-1 font-semibold">Salaire : 2 000 000 BIF</button>
                <button class="bg-gray-400 rounded-xs text-[10px] px-1 py-1 font-semibold">Python, TensorFlow, Data Science</button>
                <button class="bg-gray-400 rounded-xs text-[10px] px-1 py-1 font-semibold">Équipe de 6 personnes</button>
              </div>
            </div>
          </div>
          <div class="sm:w-[32%] w-[100%]">
            <img
              class="h-[40vh] w-full rounded-t-[8px] object-cover"
              src="./Pins/12.jpg"
            />
            <div class="px-3 flex flex-col rounded-b-[8px] bg-white">
              <h1 class="font-bold text-[19px]">
                Chargé de Mission Développement Durable & Économie Circulaire
              </h1>
              <p class="text-xs text-gray-500">
                ONG GreenFuture Burundi
              </p>
              <p class="text-xs mt-3 mb-2 text-gray-500">
                Mise en place de projets d'économie circulaire, gestion des déchets et sensibilisation à l'environnement auprès des entreprises et collectivités locales.
              </p>
              <div class="pb-2">
                <button class="bg-gray-400 rounded-xs text-xs px-1 py-1 font-semibold">CDD / 18 mois</button>
                <button class="bg-gray-400 rounded-xs text-[10px] px-1 py-1 font-semibold">Ngozi</button>
                <button class="bg-gray-400 rounded-xs text-[10px] px-1 py-1 font-semibold">Salaire : 800 000 BIF</button>
                <button class="bg-gray-400 rounded-xs text-[10px] px-1 py-1 font-semibold">Gestion de projet, environnement, communication</button>
                <button class="bg-gray-400 rounded-xs text-[10px] px-1 py-1 font-semibold">Équipe de 5 personnes</button>
              </div>
            </div>
          </div>
          <div class="sm:w-[32%] w-[100%]">
            <img
              class="h-[40vh] w-full rounded-t-[8px] object-cover"
              src="./Pins/26.jpg"
            />
            <div class="px-3 flex flex-col rounded-b-[8px] bg-white">
              <h1 class="font-bold text-[19px]">
                Responsable du Pole Innovation Pedagogique Numerique
              </h1>
              <p class="text-xs text-gray-500">
                Université du Burundi - Département d'Innovation Pédagogique
              </p>
              <p class="text-xs mt-3 mb-2 text-gray-500">
                Conception et déploiement de solutions numériques éducatives, formation des enseignants et pilotage de projets e-learning pour l'enseignement supérieur.
              </p>
              <div class="pb-2">
                <button class="bg-gray-400 rounded-xs text-xs px-1 py-1 font-semibold">CDD / 24 mois</button>
                <button class="bg-gray-400 rounded-xs text-[10px] px-1 py-1 font-semibold">Bujumbura</button>
                <button class="bg-gray-400 rounded-xs text-[10px] px-1 py-1 font-semibold">Salaire : 1 300 000 BIF</button>
                <button class="bg-gray-400 rounded-xs text-[10px] px-1 py-1 font-semibold">E-learning, pédagogie, gestion de projet</button>
                <button class="bg-gray-400 rounded-xs text-[10px] px-1 py-1 font-semibold">Équipe de 9 personnes</button>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- section Avis -->
      <section
        class="sm:w-[96%] w-[100%] sm:h-[30vh] h-[27vh] px-5 bg-white pt-1 mt-8 sm:ml-5 rounded-xl shadow-lg"
      >
        <p class="text-2xl font-semibold mt-3">
          Etes-vous satisfaits de votre experience de recherche ?
        </p>
        <p class="text-gray-600 text-[17px]">
          Vos feedbacks nous permettent d'ameliorer l'experience Welcome to the
          Akazilink
        </p>
        <button
          id="mon-avis"
          class="bg-cyan-900 py-1.5 rounded-xl px-3.5 mt-6 text-white font-semibold cursor-pointer"
        >
          Donner mon avis
        </button>
      </section>
      <!-- Footer -->
      <footer class="w-full bg-black mt-12">
        <div class="sm:flex sm:justify-between w-full bg-black text-white pt-12 grid grid-cols-2">
          <div class="sm:w-1/4 sm:flex hidden">
            <p class="ml-5 text-[25px] font-semibold">Akazilink</p>
          </div>
          <div class="sm:w-1/4 w-1/2">
            <h2 class="font-semibold">A PROPOS</h2>
            <ul class="mt-3 text-[14px] text-gray-300 font-semibold">
              <li class="mb-2">Concept</li>
              <li class="mb-2">Qui sommes nous</li>
              <li class="mb-2">Offres d'emplois</li>
              <li class="mb-2">Offres de stage</li>
              <li class="mb-2">Centre d'aide</li>
            </ul>
          </div>
          <div class="sm:w-1/4 w-1/2">
            <h2 class="font-semibold">NOUS RENCONTRER</h2>
            <ul class="mt-3 text-[14px] text-gray-300 font-semibold">
              <li class="mb-2">Human after all</li>
              <li class="mb-2">Presse</li>
              <li class="mb-2">Jobs</li>
              <li class="mb-2">Tarifs</li>
              <li class="mb-2">Besoin d'aide ?</li>
              <li class="mb-2">Assistance entreprise</li>
            </ul>
          </div>
          <div class="sm:w-1/4 w-[100%] pr-2 col-span-2">
            <h2 class="font-semibold text-[18px]">
              LA NAWSLETTER QUI FAIT LE TAF
            </h2>
            <p class="mb-3 text-[14px]">
              Une fois par semaine, des histoires, des jobs et des conseils dans
              votre boite email
            </p>
            <form action="" class="border rounded-[5px] bg-white">
              <input
                class="py-1 text-black pl-2 rounded-[5px] sm:w-[60%] w-[52%] outline-none"
                type="email"
                placeholder="Email"
                required
              />
              <button
                class="bg-amber-300 py-2 text-black rounded-[5px] px-2 text-[13px] sm:w-[38.43%] w-[46.53%]"
                type="submit"
              >
                Je m'abonne
              </button>
            </form>
            <p class="sm:text-[10px] text-gray-400">
              Vous pouvez vous desabonner a tout moment. On n'est passusceptibles, promis. Pour en savoir plus sur notre politique de protection des donnees.
              <a class="text-white hover:border-b" href="#">Cliquer ici</a>
            </p>
          </div>
          <div class="w-1/4 sm:hidden flex">
            <p class="ml-5 text-[25px] font-semibold">Akazilink</p>
          </div>
        </div>
        <hr class="bg-gray-600 text-gray-600 w-[96%] ml-5" />
        <div class="text-white flex justify-between px-6 mt-6 pb-6">
          <p class="font-bold text-[18px]">Solutions</p>
          <div>
            <button
              class="border font-semibold shadow-lg rounded-xs px-2 text-[13px] py-1.5"
            >
              Employeurs
            </button>
            <button
              class="bg-white text-black py-1.5 rounded-xs text-[13px] font-semibold px-2"
            >
              Mon espace employeur
            </button>
          </div>
        </div>
        <hr class="bg-gray-600 text-gray-600 w-[96%] ml-5" />
        <div class="py-3">
          <ul class="sm:flex justify-center gap-6 text-gray-600 hidden">
            <li>Mentions legales</li>
            <li>CGU</li>
            <li>Politique de confidentialite</li>
            <li>Charte Welcome to the Akazilink</li>
            <li>Politique Cookies</li>
            <li>Gestion des Cookies</li>
          </ul>
          <!-- Réseaux sociaux -->
            <div class="flex sm:hidden gap-4 mt-4 justify-center">
              <a href="https://facebook.com" target="_blank" aria-label="Facebook">
                <svg class="w-6 h-6 text-blue-600 hover:scale-110 transition-all" fill="currentColor" viewBox="0 0 24 24"><path d="M22.675 0h-21.35C.595 0 0 .592 0 1.326v21.348C0 23.408.595 24 1.325 24h11.495v-9.294H9.692v-3.622h3.128V8.413c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.463.099 2.797.143v3.24l-1.918.001c-1.504 0-1.797.715-1.797 1.763v2.313h3.587l-.467 3.622h-3.12V24h6.116C23.406 24 24 23.408 24 22.674V1.326C24 .592 23.406 0 22.675 0"/></svg>
              </a>
              <a href="https://wa.me/" target="_blank" aria-label="WhatsApp">
                <svg class="w-6 h-6 text-green-500 hover:scale-110 transition-all" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.031-.967-.273-.099-.472-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.149-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.447-.52.151-.174.2-.298.3-.497.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.372-.01-.571-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.1 3.2 5.077 4.363.709.306 1.262.489 1.694.626.712.227 1.36.195 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.288.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.617h-.001a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.999-3.648-.235-.374A9.86 9.86 0 012.1 12.045C2.073 6.504 6.659 1.908 12.199 1.908c2.637 0 5.112 1.027 6.988 2.896a9.825 9.825 0 012.916 6.945c-.003 5.541-4.589 10.136-10.132 10.136m8.413-18.413A11.815 11.815 0 0012.2 0C5.452 0 .077 5.373.002 12.07c-.037 2.13.552 4.21 1.722 6.084L0 24l6.115-1.635a11.888 11.888 0 005.868 1.5h.005c6.748 0 12.123-5.373 12.198-12.07a11.82 11.82 0 00-3.486-8.413"/></svg>
              </a>
              <a href="https://instagram.com" target="_blank" aria-label="Instagram">
                <svg class="w-6 h-6 text-pink-500 hover:scale-110 transition-all" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 1.366.062 2.633.334 3.608 1.308.974.974 1.246 2.241 1.308 3.608.058 1.266.069 1.646.069 4.85s-.012 3.584-.07 4.85c-.062 1.366-.334 2.633-1.308 3.608-.974.974-2.241 1.246-3.608 1.308-1.266.058-1.646.069-4.85.069s-3.584-.012-4.85-.07c-1.366-.062-2.633-.334-3.608-1.308-.974-.974-1.246-2.241-1.308-3.608C2.175 15.647 2.163 15.267 2.163 12s.012-3.584.07-4.85c.062-1.366.334-2.633 1.308-3.608C4.515 2.567 5.782 2.295 7.148 2.233 8.414 2.175 8.794 2.163 12 2.163zm0-2.163C8.741 0 8.332.013 7.052.072 5.775.13 4.602.388 3.635 1.355 2.668 2.322 2.41 3.495 2.352 4.772 2.293 6.052 2.281 6.461 2.281 12c0 5.539.012 5.948.071 7.228.058 1.277.316 2.45 1.283 3.417.967.967 2.14 1.225 3.417 1.283 1.28.059 1.689.071 7.228.071s5.948-.012 7.228-.071c1.277-.058 2.45-.316 3.417-1.283.967-.967 1.225-2.14 1.283-3.417.059-1.28.071-1.689.071-7.228s-.012-5.948-.071-7.228c-.058-1.277-.316-2.45-1.283-3.417C19.398.388 18.225.13 16.948.072 15.668.013 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zm0 10.162a3.999 3.999 0 110-7.998 3.999 3.999 0 010 7.998zm6.406-11.845a1.44 1.44 0 11-2.88 0 1.44 1.44 0 012.88 0z"/></svg>
              </a>
              <a href="https://twitter.com" target="_blank" aria-label="Twitter">
                <svg class="w-6 h-6 text-blue-400 hover:scale-110 transition-all" fill="currentColor" viewBox="0 0 24 24"><path d="M24 4.557a9.83 9.83 0 01-2.828.775 4.932 4.932 0 002.165-2.724c-.951.564-2.005.974-3.127 1.195a4.916 4.916 0 00-8.38 4.482C7.691 8.095 4.066 6.13 1.64 3.161c-.542.929-.856 2.01-.857 3.17 0 2.188 1.115 4.117 2.823 5.254a4.904 4.904 0 01-2.229-.616c-.054 2.281 1.581 4.415 3.949 4.89a4.936 4.936 0 01-2.224.084c.627 1.956 2.444 3.377 4.6 3.417A9.867 9.867 0 010 21.543a13.94 13.94 0 007.548 2.209c9.058 0 14.009-7.513 14.009-14.009 0-.213-.005-.425-.014-.636A10.012 10.012 0 0024 4.557z"/></svg>
              </a>
              <a href="https://github.com" target="_blank" aria-label="GitHub">
                <svg class="w-6 h-6 text-gray-800 hover:scale-110 transition-all" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0C5.37 0 0 5.37 0 12c0 5.3 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.085 1.84 1.236 1.84 1.236 1.07 1.834 2.809 1.304 3.495.997.108-.775.418-1.305.762-1.605-2.665-.305-5.466-1.332-5.466-5.931 0-1.31.469-2.381 1.236-3.221-.124-.303-.535-1.523.117-3.176 0 0 1.008-.322 3.301 1.23a11.52 11.52 0 013.003-.404c1.018.005 2.045.138 3.003.404 2.291-1.553 3.297-1.23 3.297-1.23.653 1.653.242 2.873.119 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.803 5.624-5.475 5.921.43.372.823 1.102.823 2.222v3.293c0 .322.218.694.825.576C20.565 21.796 24 17.297 24 12c0-6.63-5.37-12-12-12z"/></svg>
              </a>
              <a href="https://google.com" target="_blank" aria-label="Google">
                <svg class="w-6 h-6 text-red-500 hover:scale-110 transition-all" fill="currentColor" viewBox="0 0 24 24"><path d="M21.805 10.023h-9.765v3.955h5.627c-.243 1.243-1.482 3.646-5.627 3.646-3.386 0-6.146-2.801-6.146-6.25s2.76-6.25 6.146-6.25c1.927 0 3.222.822 3.963 1.527l2.713-2.638C17.09 2.527 14.927 1.5 12.04 1.5 6.477 1.5 2 5.977 2 11.5s4.477 10 10.04 10c5.77 0 9.56-4.045 9.56-9.75 0-.654-.07-1.15-.16-1.727z"/></svg>
              </a>
            </div>
        </div>

      </footer>
    </main>
  </body>
</html>

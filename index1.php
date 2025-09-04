<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/png" href="./pictures/icon (2).png" />
    <link rel="stylesheet" href="./src/output.css" />
    <script src="./all.js" defer></script>
    <title>Akazilink</title>
  </head>
  <body>
    <main class="bg-gray-200 min-h-screen w-full font-['Poppins'] overflow-x-hidden">
      <?php include 'navbar1.php'; ?>
      
      <section class="mt-[12vh] pt-1">
        <div class="pl-8 w-full">
          <h2 class="mt-6 md:mt-10 text-center font-semibold text-2xl">
            Recherche d'emplois par domaine
          </h2>
          <form
            action=""
            class="flex flex-col justify-center md:flex-row w-full md:w-[96%] mt-6 gap-2 md:gap-3"
          >
            <input
              class="sm:w-[90%] w-[90%] rounded-2xl border py-1.5 pl-3 outline-gray-400"
              type="text"
              placeholder="Recherche"
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
        class="sm:w-[96%] w-[100%] sm:h-[30vh] h-[28vh] px-5 bg-white pt-1 mt-8 sm:ml-5 rounded-xl shadow-lg"
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
      <?php include 'footer.php'; ?>
    </main>
  </body>
</html>

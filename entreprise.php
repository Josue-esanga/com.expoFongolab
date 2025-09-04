<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./src/output.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="./pictures/icon (2).png" />
    <script src="./all.js" defer></script>
    <title>Akazilink</title>
</head>
<body>
    <nav
        class="flex w-full justify-between h-[12vh] bg-white items-center rounded-xs shadow-lg font-semibold fixed top-0 z-10"
      >
         <button
          id="hamburgerBtn"
          class="sm:hidden ml-2 p-2 focus:outline-none"
          aria-label="Ouvrir le menu"
        >
          <svg
            class="w-7 h-7 text-cyan-900"
            fill="none"
            stroke="currentColor"
            stroke-width="2"
            viewBox="0 0 24 24"
            stroke-linecap="round"
            stroke-linejoin="round"
          >
            <line x1="4" y1="6" x2="20" y2="6" />
            <line x1="4" y1="12" x2="20" y2="12" />
            <line x1="4" y1="18" x2="20" y2="18" />
          </svg>
        </button>
        <div class="flex items-center ml-6 mt-2">
          <svg
            width="32"
            height="32"
            viewBox="0 0 60 60"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
            class="mr-2"
          >
            <rect x="10" y="20" width="40" height="30" rx="6" fill="#0E7490" />
            <rect x="18" y="28" width="8" height="14" rx="2" fill="#fff" />
            <rect x="34" y="28" width="8" height="14" rx="2" fill="#fff" />
            <rect x="26" y="36" width="8" height="8" rx="2" fill="#fff" />
            <circle
              cx="30"
              cy="18"
              r="8"
              fill="#0E7490"
              stroke="#fff"
              stroke-width="2"
            />
          </svg>
          <span
            class="text-xl md:text-2xl font-bold text-cyan-900 tracking-wide"
            style="font-family: 'Poppins', sans-serif"
            >Akazilink</span
          >
        </div>
        <ul
          id="menu"
          class="sm:flex sm:justify-center hidden items-start justify-start pl-2 rounded-[8px] sm:static sm:flex-row flex-col sm:gap-12 absolute sm:right-0 right-40 top-[10.5vh] sm:bg-white bg-white w-[200px] gap-2 sm:items-center sm:w-full mt-2"
        >
          <li
            id="entrJob"
            class="cursor-pointer sm:hover:border-b-[3px] py-2 md:py-5 px-2 md:px-0"
          >
            Trouver un job
          </li>
          <li
            id=""
            class="cursor-pointer sm:hover:border-b-[3px] py-2 md:py-5 px-2 md:px-0"
          >
            Trouver entreprise
          </li>
          <li
            id="EmplCandid"
            class="cursor-pointer sm:hover:border-b-[3px] py-2 md:py-5 px-2 md:px-0"
          >
            Candidatures
          </li>
          <li
            id=""
            class="cursor-pointer sm:hover:border-b-[3px] py-2 md:py-5 px-2 md:px-0"
          >
            Opportunités
          </li>
        </ul>
        <!-- petit profiles -->
        <div id="miniProfile" class="resultat h-[50px] pr-2 cursor-pointer">
          <img
            id="miniProfilePic"
            src="./pictures/47.jpg"
            class="rounded-[50%] w-[50px] h-[100%] flex items-center justify-center"
            alt="Profil"
          />
        </div>
      </nav>
      <!-- la partie pour la mini section du profil -->
      <section id="miniSection" class="w-[250px] border-gray-700 left-250 fixed p-3 font-[450] min-h-auto bg-gray-100 flex-col rounded-[6px] shadow-xl hidden">
            <p class="mb-2 cursor-pointer w-[120px]">Table de bord</p>
            <p class="mb-2 cursor-pointer w-[50px]">Profil</p>
            <p class="mb-2 cursor-pointer w-[60px]">Alertes</p>
            <p class="mb-2 cursor-pointer w-[170px]">Articles sauvegardés</p>
            <p class="mb-2 cursor-pointer w-[90px]">Paramètres</p><hr class="text-gray-500">
            <p id="deconnexion" class="mb-2 mt-2  cursor-pointer w-[95px]">Déconnexion</p>
    </section>

    <section class="mt-[12vh]">
      <div class="pl-8 w-full pt-4">
        <h2 class="mt-6 font-semibold text-2xl text-center">
          Trouver le job de vos reves
        </h2>
        <form action="" class="flex w-[96%] mt-6 gap-3">
          <input
            class="sm:w-[70%] w-[100%] rounded-2xl border py-1.5 pl-3 outline-gray-400"
            type="text"
            placeholder="Recherche"
          />
        </form>
      </div>
      </section>
      <!-- section first -->
       <section class="">
           <div class="w-full min-h-[40vh] bg-gray-300 mt-3 pb-4 pt-4">
            <div class="flex justify-between mt-3">
            <p class="font-bold sm:text-2xl text-[18px] pl-4">Nouvelles entreprise a explorer</p>
             <button class="border rounded-[5px] sm:px-1.5 sm:py-0.5 px-0.5 py-0 mr-4">Decouvrir</button>
         </div>
         <hr class="w-[97%] ml-4 mt-2 mb-4">
         <div class="sm:w-[97%] w-[100%] sm:ml-6 sm:flex sm:gap-3.5 gap-1 sm:flex-wrap">
          <div class="sm:w-[24%] w-[100%] border-[1px] border-gray-600 rounded-[8px]">
          <img class="h-[40vh] w-full rounded-t-[8px] object-cover" src="./Pins/4.jpg">
          <div class="px-3 flex flex-col rounded-b-[8px] bg-white">
          <h1 class="font-bold text-[19px]">Employer <br> Magasin</h1>
            <p class="text-[10px] text-gray-700 px-1 py-1 font-semibold">CDD / Temporaire</p>
            <p class="text-[10px] text-gray-700 px-1 py-1 font-semibold">Cibitoke</p>
            <p class="text-[10px] text-gray-700 px-1 py-1 font-semibold">54K a 93K $</p>
          <div class="flex justify-between items-center text-[12px]">
            <p class="font-semibold ">4 offres</p>
            <button class="border rounded-[5px] px-1.5 py-0.5 text-center my-3">Suivre</button>
          </div>      
          </div>
      </div>
      <div class="sm:w-[24%] w-[100%] border-[1px] border-gray-600 rounded-[8px]">
          <img class="h-[40vh] w-full rounded-t-[8px] object-cover" src="./Pins/4.jpg">
          <div class="px-3 flex flex-col rounded-b-[8px] bg-white">
          <h1 class="font-bold text-[19px]">Employer <br> Magasin</h1>
            <li class="text-[10px] text-gray-700 px-1 py-1 font-semibold">CDD / Temporaire</li>
            <li class="text-[10px] text-gray-700 px-1 py-1 font-semibold">Cibitoke</li>
            <li class="text-[10px] text-gray-700 px-1 py-1 font-semibold">54K a 93K $</li>
          </ul>
          <div class="flex justify-between items-center text-[12px]">
            <p class="font-semibold ">4 offres</p>
            <button class="border rounded-[5px] px-1.5 py-0.5 text-center my-3">Suivre</button>
          </div>      
          </div>
      </div>
      <div class="sm:w-[24%] w-[100%] border-[1px] border-gray-600 rounded-[8px]">
          <img class="h-[40vh] w-full rounded-t-[8px] object-cover" src="./Pins/4.jpg">
          <div class="px-3 flex flex-col rounded-b-[8px] bg-white">
          <h1 class="font-bold text-[19px]">Employer <br> Magasin</h1>
            <li class="text-[10px] text-gray-700 px-1 py-1 font-semibold">CDD / Temporaire</li>
            <li class="text-[10px] text-gray-700 px-1 py-1 font-semibold">Cibitoke</li>
            <li class="text-[10px] text-gray-700 px-1 py-1 font-semibold">54K a 93K $</li>
          </ul>
          <div class="flex justify-between items-center text-[12px]">
            <p class="font-semibold ">4 offres</p>
            <button class="border rounded-[5px] px-1.5 py-0.5 text-center my-3">Suivre</button>
          </div>      
          </div>
      </div>
      <div class="sm:w-[24%] w-[100%] border-[1px] border-gray-600 rounded-[8px]">
          <img class="h-[40vh] w-full rounded-t-[8px] object-cover" src="./Pins/4.jpg">
          <div class="px-3 flex flex-col rounded-b-[8px] bg-white">
          <h1 class="font-bold text-[19px]">Employer <br> Magasin</h1>
            <li class="text-[10px] text-gray-700 px-1 py-1 font-semibold">CDD / Temporaire</li>
            <li class="text-[10px] text-gray-700 px-1 py-1 font-semibold">Cibitoke</li>
            <li class="text-[10px] text-gray-700 px-1 py-1 font-semibold">54K a 93K $</li>
          </ul>
          <div class="flex justify-between items-center text-[12px]">
            <p class="font-semibold ">4 offres</p>
            <button class="border rounded-[5px] px-1.5 py-0.5 text-center my-3">Suivre</button>
          </div>      
          </div>
      </div>
      <div class="sm:w-[24%] w-[100%] border-[1px] border-gray-600 rounded-[8px]">
          <img class="h-[40vh] w-full rounded-t-[8px] object-cover" src="./Pins/4.jpg">
          <div class="px-3 flex flex-col rounded-b-[8px] bg-white">
          <h1 class="font-bold text-[19px]">Employer <br> Magasin</h1>
            <li class="text-[10px] text-gray-700 px-1 py-1 font-semibold">CDD / Temporaire</li>
            <li class="text-[10px] text-gray-700 px-1 py-1 font-semibold">Cibitoke</li>
            <li class="text-[10px] text-gray-700 px-1 py-1 font-semibold">54K a 93K $</li>
          </ul>
          <div class="flex justify-between items-center text-[12px]">
            <p class="font-semibold ">4 offres</p>
            <button class="border rounded-[5px] px-1.5 py-0.5 text-center my-3">Suivre</button>
          </div>      
          </div>
      </div>
      <div class="sm:w-[24%] w-[100%] border-[1px] border-gray-600 rounded-[8px]">
          <img class="h-[40vh] w-full rounded-t-[8px] object-cover" src="./Pins/4.jpg">
          <div class="px-3 flex flex-col rounded-b-[8px] bg-white">
          <h1 class="font-bold text-[19px]">Employer <br> Magasin</h1>
            <li class="text-[10px] text-gray-700 px-1 py-1 font-semibold">CDD / Temporaire</li>
            <li class="text-[10px] text-gray-700 px-1 py-1 font-semibold">Cibitoke</li>
            <li class="text-[10px] text-gray-700 px-1 py-1 font-semibold">54K a 93K $</li>
          </ul>
          <div class="flex justify-between items-center text-[12px]">
            <p class="font-semibold ">4 offres</p>
            <button class="border rounded-[5px] px-1.5 py-0.5 text-center my-3">Suivre</button>
          </div>      
          </div>
      </div>
      <div class="sm:w-[24%] w-[100%] border-[1px] border-gray-600 rounded-[8px]">
          <img class="h-[40vh] w-full rounded-t-[8px] object-cover" src="./Pins/4.jpg">
          <div class="px-3 flex flex-col rounded-b-[8px] bg-white">
          <h1 class="font-bold text-[19px]">Employer <br> Magasin</h1>
            <li class="text-[10px] text-gray-700 px-1 py-1 font-semibold">CDD / Temporaire</li>
            <li class="text-[10px] text-gray-700 px-1 py-1 font-semibold">Cibitoke</li>
            <li class="text-[10px] text-gray-700 px-1 py-1 font-semibold">54K a 93K $</li>
          </ul>
          <div class="flex justify-between items-center text-[12px]">
            <p class="font-semibold ">4 offres</p>
            <button class="border rounded-[5px] px-1.5 py-0.5 text-center my-3">Suivre</button>
          </div>      
          </div>
      </div>
      <div class="sm:w-[24%] w-[100%] border-[1px] border-gray-600 rounded-[8px]">
          <img class="h-[40vh] w-full rounded-t-[8px] object-cover" src="./Pins/4.jpg">
          <div class="px-3 flex flex-col rounded-b-[8px] bg-white">
          <h1 class="font-bold text-[19px]">Employer <br> Magasin</h1>
            <li class="text-[10px] text-gray-700 px-1 py-1 font-semibold">CDD / Temporaire</li>
            <li class="text-[10px] text-gray-700 px-1 py-1 font-semibold">Cibitoke</li>
            <li class="text-[10px] text-gray-700 px-1 py-1 font-semibold">54K a 93K $</li>
          </ul>
          <div class="flex justify-between items-center text-[12px]">
            <p class="font-semibold ">4 offres</p>
            <button class="border rounded-[5px] px-1.5 py-0.5 text-center my-3">Suivre</button>
          </div>      
          </div>
      </div>
       </div>
       </section>
       <!-- Section two -->
        <section class="">
           <div class="w-full min-h-[40vh] bg-gray-300 mt-3 pb-4 pt-4">
            <div class="flex justify-between mt-3">
            <p class="font-bold text-2xl pl-4">Entreprise du moment</p>
             <button class="border rounded-[5px] px-1.5 py-0.5 mr-4">Decouvrir</button>
         </div>
         <hr class="sm:w-[97%] w-[100%] sm:ml-4 mt-2 mb-4">
         <div class="w-[97%] sm:ml-6 flex gap-3.5 flex-wrap">
          <div class="sm:w-[24%] w-[100%] border-[1px] border-gray-600 rounded-[8px]">
          <img class="h-[40vh] w-full rounded-t-[8px] object-cover" src="./Pins/4.jpg">
          <div class="px-3 flex flex-col rounded-b-[8px] bg-white">
          <h1 class="font-bold text-[19px]">Employer <br> Magasin</h1>
            <li class="text-[10px] text-gray-700 px-1 py-1 font-semibold">CDD / Temporaire</li>
            <li class="text-[10px] text-gray-700 px-1 py-1 font-semibold">Cibitoke</li>
            <li class="text-[10px] text-gray-700 px-1 py-1 font-semibold">54K a 93K $</li>
          </ul>
          <div class="flex justify-between items-center text-[12px]">
            <p class="font-semibold ">4 offres</p>
            <button class="border rounded-[5px] px-1.5 py-0.5 text-center my-3">Suivre</button>
          </div>      
          </div>
      </div>
      <div class="sm:w-[24%] w-[100%] border-[1px] border-gray-600 rounded-[8px]">
          <img class="h-[40vh] w-full rounded-t-[8px] object-cover" src="./Pins/4.jpg">
          <div class="px-3 flex flex-col rounded-b-[8px] bg-white">
          <h1 class="font-bold text-[19px]">Employer <br> Magasin</h1>
            <li class="text-[10px] text-gray-700 px-1 py-1 font-semibold">CDD / Temporaire</li>
            <li class="text-[10px] text-gray-700 px-1 py-1 font-semibold">Cibitoke</li>
            <li class="text-[10px] text-gray-700 px-1 py-1 font-semibold">54K a 93K $</li>
          </ul>
          <div class="flex justify-between items-center text-[12px]">
            <p class="font-semibold ">4 offres</p>
            <button class="border rounded-[5px] px-1.5 py-0.5 text-center my-3">Suivre</button>
          </div>      
          </div>
      </div>
      <div class="sm:w-[24%] w-[100%] border-[1px] border-gray-600 rounded-[8px]">
          <img class="h-[40vh] w-full rounded-t-[8px] object-cover" src="./Pins/4.jpg">
          <div class="px-3 flex flex-col rounded-b-[8px] bg-white">
          <h1 class="font-bold text-[19px]">Employer <br> Magasin</h1>
            <li class="text-[10px] text-gray-700 px-1 py-1 font-semibold">CDD / Temporaire</li>
            <li class="text-[10px] text-gray-700 px-1 py-1 font-semibold">Cibitoke</li>
            <li class="text-[10px] text-gray-700 px-1 py-1 font-semibold">54K a 93K $</li>
          </ul>
          <div class="flex justify-between items-center text-[12px]">
            <p class="font-semibold ">4 offres</p>
            <button class="border rounded-[5px] px-1.5 py-0.5 text-center my-3">Suivre</button>
          </div>      
          </div>
      </div>
      <div class="sm:w-[24%] w-[100%] border-[1px] border-gray-600 rounded-[8px]">
          <img class="h-[40vh] w-full rounded-t-[8px] object-cover" src="./Pins/4.jpg">
          <div class="px-3 flex flex-col rounded-b-[8px] bg-white">
          <h1 class="font-bold text-[19px]">Employer <br> Magasin</h1>
            <li class="text-[10px] text-gray-700 px-1 py-1 font-semibold">CDD / Temporaire</li>
            <li class="text-[10px] text-gray-700 px-1 py-1 font-semibold">Cibitoke</li>
            <li class="text-[10px] text-gray-700 px-1 py-1 font-semibold">54K a 93K $</li>
          </ul>
          <div class="flex justify-between items-center text-[12px]">
            <p class="font-semibold ">4 offres</p>
            <button class="border rounded-[5px] px-1.5 py-0.5 text-center my-3">Suivre</button>
          </div>      
          </div>
      </div>
      <div class="sm:w-[24%] w-[100%] border-[1px] border-gray-600 rounded-[8px]">
          <img class="h-[40vh] w-full rounded-t-[8px] object-cover" src="./Pins/4.jpg">
          <div class="px-3 flex flex-col rounded-b-[8px] bg-white">
          <h1 class="font-bold text-[19px]">Employer <br> Magasin</h1>
            <li class="text-[10px] text-gray-700 px-1 py-1 font-semibold">CDD / Temporaire</li>
            <li class="text-[10px] text-gray-700 px-1 py-1 font-semibold">Cibitoke</li>
            <li class="text-[10px] text-gray-700 px-1 py-1 font-semibold">54K a 93K $</li>
          </ul>
          <div class="flex justify-between items-center text-[12px]">
            <p class="font-semibold ">4 offres</p>
            <button class="border rounded-[5px] px-1.5 py-0.5 text-center my-3">Suivre</button>
          </div>      
          </div>
      </div>
      <div class="sm:w-[24%] w-[100%] border-[1px] border-gray-600 rounded-[8px]">
          <img class="h-[40vh] w-full rounded-t-[8px] object-cover" src="./Pins/4.jpg">
          <div class="px-3 flex flex-col rounded-b-[8px] bg-white">
          <h1 class="font-bold text-[19px]">Employer <br> Magasin</h1>
            <li class="text-[10px] text-gray-700 px-1 py-1 font-semibold">CDD / Temporaire</li>
            <li class="text-[10px] text-gray-700 px-1 py-1 font-semibold">Cibitoke</li>
            <li class="text-[10px] text-gray-700 px-1 py-1 font-semibold">54K a 93K $</li>
          </ul>
          <div class="flex justify-between items-center text-[12px]">
            <p class="font-semibold ">4 offres</p>
            <button class="border rounded-[5px] px-1.5 py-0.5 text-center my-3">Suivre</button>
          </div>      
          </div>
      </div>
      <div class="sm:w-[24%] w-[100%] border-[1px] border-gray-600 rounded-[8px]">
          <img class="h-[40vh] w-full rounded-t-[8px] object-cover" src="./Pins/4.jpg">
          <div class="px-3 flex flex-col rounded-b-[8px] bg-white">
          <h1 class="font-bold text-[19px]">Employer <br> Magasin</h1>
            <li class="text-[10px] text-gray-700 px-1 py-1 font-semibold">CDD / Temporaire</li>
            <li class="text-[10px] text-gray-700 px-1 py-1 font-semibold">Cibitoke</li>
            <li class="text-[10px] text-gray-700 px-1 py-1 font-semibold">54K a 93K $</li>
          </ul>
          <div class="flex justify-between items-center text-[12px]">
            <p class="font-semibold ">4 offres</p>
            <button class="border rounded-[5px] px-1.5 py-0.5 text-center my-3">Suivre</button>
          </div>      
          </div>
      </div>
      <div class="sm:w-[24%] w-[100%] border-[1px] border-gray-600 rounded-[8px]">
          <img class="h-[40vh] w-full rounded-t-[8px] object-cover" src="./Pins/4.jpg">
          <div class="px-3 flex flex-col rounded-b-[8px] bg-white">
          <h1 class="font-bold text-[19px]">Employer <br> Magasin</h1>
            <li class="text-[10px] text-gray-700 px-1 py-1 font-semibold">CDD / Temporaire</li>
            <li class="text-[10px] text-gray-700 px-1 py-1 font-semibold">Cibitoke</li>
            <li class="text-[10px] text-gray-700 px-1 py-1 font-semibold">54K a 93K $</li>
          </ul>
          <div class="flex justify-between items-center text-[12px]">
            <p class="font-semibold ">4 offres</p>
            <button class="border rounded-[5px] px-1.5 py-0.5 text-center my-3">Suivre</button>
          </div>      
          </div>
      </div>
       </div>
       </section>
       <!-- Secteurs populaires -->
        <section class="w-full">
            <p class="font-bold text-2xl mt-3 px-4">Secteurs populaires</p>
            <hr class="my-3 px-4">
            <div class="w-full flex flex-wrap gap-[1rem] text-center px-4">
                <div class="sm:w-[32%] w-[100%] h-[25vh] border text-center py-3 rounded-[4px]">
                    <p>logo</p>
                    <p class="">Tech</p>
                    <p class="">ENTREPRISES</p>
                </div>
                <div class="sm:w-[32%] w-[100%] h-[25vh] border text-center py-3 rounded-[4px]">
                    <p>logo</p>
                    <p class="">Tech</p>
                    <p class="">ENTREPRISES</p>
                </div>
                <div class="sm:w-[32%] w-[100%] h-[25vh] border text-center py-3 rounded-[4px]">
                    <p>logo</p>
                    <p class="">Tech</p>
                    <p class="">ENTREPRISES</p>
                </div>
                <div class="sm:w-[32%] w-[100%] h-[25vh] border text-center py-3 rounded-[4px]">
                    <p>logo</p>
                    <p class="">Tech</p>
                    <p class="">ENTREPRISES</p>
                </div>
                <div class="sm:w-[32%] w-[100%] h-[25vh] border text-center py-3 rounded-[4px]">
                    <p>logo</p>
                    <p class="">Tech</p>
                    <p class="">ENTREPRISES</p>
                </div>
                <div class="sm:w-[32%] w-[100%] h-[25vh] border text-center py-3 rounded-[4px]">
                    <p>logo</p>
                    <p class="">Tech</p>
                    <p class="">ENTREPRISES</p>
                </div>
            </div>
             <!-- section entreprises recents -->
             <section class="bg-gray-300 mt-4 ">
                <p class="font-bold text-2xl mt-4">Secteurs populaires</p>
            <hr class="my-3">
            <div class="w-full flex flex-wrap gap-6 justify-center">
                <div class="sm:w-[20%] w-[100%] text-center rounded-[8px] shadow bg-white p-3.5">
                    <p>logo</p>
                    <p>Python</p>
                    <p>Langage de programmation interprete, multi-paradigme et multiplateformes</p>
                </div>
                <div class="sm:w-[20%] w-[100%] text-center rounded-[8px] shadow bg-white p-3.5">
                    <p>logo</p>
                    <p>Javascript</p>
                    <p>Langage de programmation interprete, multi-paradigme et multiplateformes</p>
                </div>
                <div class="sm:w-[20%] w-[100%] text-center rounded-[8px] shadow bg-white p-3.5">
                    <p>logo</p>
                    <p>Django</p>
                    <p>Langage de programmation interprete, multi-paradigme et multiplateformes</p>
                </div>
                <div class="sm:w-[20%] w-[100%] bg-black p-3.5 rounded-[8px]">
                    <p class="text-white font-semibold">Plus de 1600 stacks a decouvrir</p>
                    <button class="bg-amber-300 w-[97%] py-1 rounded-[6px] mt-15 font-semibold">Decouvrir</button>
                </div>
            </div>
            <section class="sm:w-[96%] w-[100%] sm:h-[30vh] h-[33vh] px-5 bg-white pt-1 mt-8 sm:ml-5 rounded-xl shadow-lg">
        <p class=" text-2xl font-semibold mt-3">Ne soyez pas seulement la personne qui cherche</p>
        <p class="text-gray-600 text-[17px]">Soyez ausssi celle aue l'on trouve. Indiquez votre disponibilite et completez votre profil pour que les entreprises qui recrutent vous contactent directement</p>
        <button class="bg-cyan-900 py-1.5 rounded-xl px-3.5 m-4 text-white font-semibold cursor-pointer">Recevoir des opportunites</button>
      </section>
             </section>
        </section>
        <section class="">
           <div class="md:w-full min-h-[40vh] bg-gray-300 mt-3 pb-4 pt-4">
            <div class="flex justify-between mt-3">
            <p class="font-bold text-2xl pl-4">Entreprise du moment</p>
             <button class="border rounded-[5px] px-1.5 py-0.5 mr-4">Decouvrir</button>
         </div>
         <hr class="w-[97%] ml-4 sm:mt-2 mb-4">
         <div class="w-[97%] sm:ml-6 flex gap-3.5 flex-wrap">
          <div class="sm:w-[24%] w-[100%] border-[1px] border-gray-600 rounded-[8px]">
          <img class="h-[40vh] w-full rounded-t-[8px] object-cover" src="./Pins/4.jpg">
          <div class="px-3 flex flex-col rounded-b-[8px] bg-white">
          <h1 class="font-bold text-[19px]">Employer <br> Magasin</h1>
            <li class="text-[10px] text-gray-700 px-1 py-1 font-semibold">CDD / Temporaire</li>
            <li class="text-[10px] text-gray-700 px-1 py-1 font-semibold">Cibitoke</li>
            <li class="text-[10px] text-gray-700 px-1 py-1 font-semibold">54K a 93K $</li>
          </ul>
          <div class="flex justify-between items-center text-[12px]">
            <p class="font-semibold ">4 offres</p>
            <button class="border rounded-[5px] px-1.5 py-0.5 text-center my-3">Suivre</button>
          </div>      
          </div>
      </div>
      <div class="sm:w-[24%] w-[100%] border-[1px] border-gray-600 rounded-[8px]">
          <img class="h-[40vh] w-full rounded-t-[8px] object-cover" src="./Pins/4.jpg">
          <div class="px-3 flex flex-col rounded-b-[8px] bg-white">
          <h1 class="font-bold text-[19px]">Employer <br> Magasin</h1>
            <li class="text-[10px] text-gray-700 px-1 py-1 font-semibold">CDD / Temporaire</li>
            <li class="text-[10px] text-gray-700 px-1 py-1 font-semibold">Cibitoke</li>
            <li class="text-[10px] text-gray-700 px-1 py-1 font-semibold">54K a 93K $</li>
          </ul>
          <div class="flex justify-between items-center text-[12px]">
            <p class="font-semibold ">4 offres</p>
            <button class="border rounded-[5px] px-1.5 py-0.5 text-center my-3">Suivre</button>
          </div>      
          </div>
      </div>
      <div class="sm:w-[24%] w-[100%] border-[1px] border-gray-600 rounded-[8px]">
          <img class="h-[40vh] w-full rounded-t-[8px] object-cover" src="./Pins/4.jpg">
          <div class="px-3 flex flex-col rounded-b-[8px] bg-white">
          <h1 class="font-bold text-[19px]">Employer <br> Magasin</h1>
            <li class="text-[10px] text-gray-700 px-1 py-1 font-semibold">CDD / Temporaire</li>
            <li class="text-[10px] text-gray-700 px-1 py-1 font-semibold">Cibitoke</li>
            <li class="text-[10px] text-gray-700 px-1 py-1 font-semibold">54K a 93K $</li>
          </ul>
          <div class="flex justify-between items-center text-[12px]">
            <p class="font-semibold ">4 offres</p>
            <button class="border rounded-[5px] px-1.5 py-0.5 text-center my-3">Suivre</button>
          </div>      
          </div>
      </div>
      <div class="sm:w-[24%] w-[100%] border-[1px] border-gray-600 rounded-[8px]">
          <img class="h-[40vh] w-full rounded-t-[8px] object-cover" src="./Pins/4.jpg">
          <div class="px-3 flex flex-col rounded-b-[8px] bg-white">
          <h1 class="font-bold text-[19px]">Employer <br> Magasin</h1>
            <li class="text-[10px] text-gray-700 px-1 py-1 font-semibold">CDD / Temporaire</li>
            <li class="text-[10px] text-gray-700 px-1 py-1 font-semibold">Cibitoke</li>
            <li class="text-[10px] text-gray-700 px-1 py-1 font-semibold">54K a 93K $</li>
          </ul>
          <div class="flex justify-between items-center text-[12px]">
            <p class="font-semibold ">4 offres</p>
            <button class="border rounded-[5px] px-1.5 py-0.5 text-center my-3">Suivre</button>
          </div>      
          </div>
      </div>
      <div class="sm:w-[24%] w-[100%] border-[1px] border-gray-600 rounded-[8px]">
          <img class="h-[40vh] w-full rounded-t-[8px] object-cover" src="./Pins/4.jpg">
          <div class="px-3 flex flex-col rounded-b-[8px] bg-white">
          <h1 class="font-bold text-[19px]">Employer <br> Magasin</h1>
            <li class="text-[10px] text-gray-700 px-1 py-1 font-semibold">CDD / Temporaire</li>
            <li class="text-[10px] text-gray-700 px-1 py-1 font-semibold">Cibitoke</li>
            <li class="text-[10px] text-gray-700 px-1 py-1 font-semibold">54K a 93K $</li>
          </ul>
          <div class="flex justify-between items-center text-[12px]">
            <p class="font-semibold ">4 offres</p>
            <button class="border rounded-[5px] px-1.5 py-0.5 text-center my-3">Suivre</button>
          </div>      
          </div>
      </div>
      <div class="sm:w-[24%] w-[100%] border-[1px] border-gray-600 rounded-[8px]">
          <img class="h-[40vh] w-full rounded-t-[8px] object-cover" src="./Pins/4.jpg">
          <div class="px-3 flex flex-col rounded-b-[8px] bg-white">
          <h1 class="font-bold text-[19px]">Employer <br> Magasin</h1>
            <li class="text-[10px] text-gray-700 px-1 py-1 font-semibold">CDD / Temporaire</li>
            <li class="text-[10px] text-gray-700 px-1 py-1 font-semibold">Cibitoke</li>
            <li class="text-[10px] text-gray-700 px-1 py-1 font-semibold">54K a 93K $</li>
          </ul>
          <div class="flex justify-between items-center text-[12px]">
            <p class="font-semibold ">4 offres</p>
            <button class="border rounded-[5px] px-1.5 py-0.5 text-center my-3">Suivre</button>
          </div>      
          </div>
      </div>
      <div class="sm:w-[24%] w-[100%] border-[1px] border-gray-600 rounded-[8px]">
          <img class="h-[40vh] w-full rounded-t-[8px] object-cover" src="./Pins/4.jpg">
          <div class="px-3 flex flex-col rounded-b-[8px] bg-white">
          <h1 class="font-bold text-[19px]">Employer <br> Magasin</h1>
            <li class="text-[10px] text-gray-700 px-1 py-1 font-semibold">CDD / Temporaire</li>
            <li class="text-[10px] text-gray-700 px-1 py-1 font-semibold">Cibitoke</li>
            <li class="text-[10px] text-gray-700 px-1 py-1 font-semibold">54K a 93K $</li>
          </ul>
          <div class="flex justify-between items-center text-[12px]">
            <p class="font-semibold ">4 offres</p>
            <button class="border rounded-[5px] px-1.5 py-0.5 text-center my-3">Suivre</button>
          </div>      
          </div>
      </div>
      <div class="sm:w-[24%] w-[100%] border-[1px] border-gray-600 rounded-[8px]">
          <img class="h-[40vh] w-full rounded-t-[8px] object-cover" src="./Pins/4.jpg">
          <div class="px-3 flex flex-col rounded-b-[8px] bg-white">
          <h1 class="font-bold text-[19px]">Employer <br> Magasin</h1>
            <li class="text-[10px] text-gray-700 px-1 py-1 font-semibold">CDD / Temporaire</li>
            <li class="text-[10px] text-gray-700 px-1 py-1 font-semibold">Cibitoke</li>
            <li class="text-[10px] text-gray-700 px-1 py-1 font-semibold">54K a 93K $</li>
          </ul>
          <div class="flex justify-between items-center text-[12px]">
            <p class="font-semibold ">4 offres</p>
            <button class="border rounded-[5px] px-1.5 py-0.5 text-center my-3">Suivre</button>
          </div>      
          </div>
      </div>
       </div>
       </section>
       <!-- section pre-finale -->
        <section class="w-full sm:flex hidden gap-6">
            <div class="w-[31%] pl-4">
                <h1 class="font-bold text-xl py-2">Secteurs d'activite</h1>
                <div>
                    <button class="bg-gray-300 px-1 py-0.5 font-semibold rounded-[4px] text-[12px]">Emploi Business</button>
                    <button class="bg-gray-300 px-1 py-0.5 font-semibold rounded-[4px] text-[12px]">Emploi Ressources humaines</button>
                    <button class="bg-gray-300 px-1 py-0.5 font-semibold rounded-[4px] text-[12px]">Emploi Informatique</button>
                    <button class="bg-gray-300 px-1 py-0.5 font-semibold rounded-[4px] text-[12px]">Emploi Marketing</button>
                    <button class="bg-gray-300 px-1 py-0.5 font-semibold rounded-[4px] text-[12px]">Emploi Graphisme</button>
                    <button class="bg-gray-300 px-1 py-0.5 font-semibold rounded-[4px] text-[12px]">Emploi Communication</button>
                    <button class="bg-gray-300 px-1 py-0.5 font-semibold rounded-[4px] text-[12px]">Emploi Education</button>
                    <button class="bg-gray-300 px-1 py-0.5 font-semibold rounded-[4px] text-[12px]">Emploi Industrie</button>
                    <button class="bg-gray-300 px-1 py-0.5 font-semibold rounded-[4px] text-[12px]">Emploi Tourisme</button>
                    <button class="bg-gray-300 px-1 py-0.5 font-semibold rounded-[4px] text-[12px]">Emploi Secrétariat</button>
                    <button class="bg-gray-300 px-1 py-0.5 font-semibold rounded-[4px] text-[12px]">Emploi Santé</button>
                    <button class="bg-gray-300 px-1 py-0.5 font-semibold rounded-[4px] text-[12px]">Emploi Juridique</button>
                    <button class="bg-gray-300 px-1 py-0.5 font-semibold rounded-[4px] text-[12px]">Emploi Médias</button>
                    <button class="bg-gray-300 px-1 py-0.5 font-semibold rounded-[4px] text-[12px]">Emploi Logistique</button>
                    <button class="bg-gray-300 px-1 py-0.5 font-semibold rounded-[4px] text-[12px]">Emploi Restauration</button>
                    <button class="bg-gray-300 px-1 py-0.5 font-semibold rounded-[4px] text-[12px]">Emploi Environnement et développement durable</button>
                    <button class="bg-gray-300 px-1 py-0.5 font-semibold rounded-[4px] text-[12px]">Emploi Economie collaborative</button>
                    <button class="bg-gray-300 px-1 py-0.5 font-semibold rounded-[4px] text-[12px]">Emploi Hotellerie</button>
                    <button class="bg-gray-300 px-1 py-0.5 font-semibold rounded-[4px] text-[12px]">Emploi Compabilité</button>
                    <button class="bg-gray-300 px-1 py-0.5 font-semibold rounded-[4px] text-[12px]">Emploi Audit</button>
                </div>
            </div>
             <div class="w-[31%]">
                <h1 class="font-bold text-xl py-2">Entreprises par régions</h1>
                <div>
                    <button class="bg-gray-300 px-1 py-0.5 font-semibold rounded-[4px] text-[12px]">Emploi Business</button>
                    <button class="bg-gray-300 px-1 py-0.5 font-semibold rounded-[4px] text-[12px]">Emploi Ressources humaines</button>
                    <button class="bg-gray-300 px-1 py-0.5 font-semibold rounded-[4px] text-[12px]">Emploi Informatique</button>
                    <button class="bg-gray-300 px-1 py-0.5 font-semibold rounded-[4px] text-[12px]">Emploi Marketing</button>
                    <button class="bg-gray-300 px-1 py-0.5 font-semibold rounded-[4px] text-[12px]">Emploi Graphisme</button>
                    <button class="bg-gray-300 px-1 py-0.5 font-semibold rounded-[4px] text-[12px]">Emploi Communication</button>
                    <button class="bg-gray-300 px-1 py-0.5 font-semibold rounded-[4px] text-[12px]">Emploi Education</button>
                    <button class="bg-gray-300 px-1 py-0.5 font-semibold rounded-[4px] text-[12px]">Emploi Industrie</button>
                    <button class="bg-gray-300 px-1 py-0.5 font-semibold rounded-[4px] text-[12px]">Emploi Tourisme</button>
                    <button class="bg-gray-300 px-1 py-0.5 font-semibold rounded-[4px] text-[12px]">Emploi Secrétariat</button>
                    <button class="bg-gray-300 px-1 py-0.5 font-semibold rounded-[4px] text-[12px]">Emploi Santé</button>
                    <button class="bg-gray-300 px-1 py-0.5 font-semibold rounded-[4px] text-[12px]">Emploi Juridique</button>
                    <button class="bg-gray-300 px-1 py-0.5 font-semibold rounded-[4px] text-[12px]">Emploi Médias</button>
                    <button class="bg-gray-300 px-1 py-0.5 font-semibold rounded-[4px] text-[12px]">Emploi Logistique</button>
                    <button class="bg-gray-300 px-1 py-0.5 font-semibold rounded-[4px] text-[12px]">Emploi Restauration</button>
                    <button class="bg-gray-300 px-1 py-0.5 font-semibold rounded-[4px] text-[12px]">Emploi Environnement et développement durable</button>
                    <button class="bg-gray-300 px-1 py-0.5 font-semibold rounded-[4px] text-[12px]">Emploi Economie collaborative</button>
                    <button class="bg-gray-300 px-1 py-0.5 font-semibold rounded-[4px] text-[12px]">Emploi Hotellerie</button>
                    <button class="bg-gray-300 px-1 py-0.5 font-semibold rounded-[4px] text-[12px]">Emploi Compabilité</button>
                    <button class="bg-gray-300 px-1 py-0.5 font-semibold rounded-[4px] text-[12px]">Emploi Audit</button>
                </div>
            </div>
             <div class="w-[31%]">
                <h1 class="font-bold text-xl py-2">Entreprises par secteur</h1>
                <div class="pb-2">
                    <button class="bg-gray-300 px-1 py-0.5 font-semibold rounded-[4px] text-[12px]">Associations</button>
                    <button class="bg-gray-300 px-1 py-0.5 font-semibold rounded-[4px] text-[12px]">EEntreprises Culture-Média-Divertissement</button>
                    <button class="bg-gray-300 px-1 py-0.5 font-semibold rounded-[4px] text-[12px]">Entreprises Distribution</button>
                    <button class="bg-gray-300 px-1 py-0.5 font-semibold rounded-[4px] text-[12px]">Entreprise Conseil-Audit</button>
                    <button class="bg-gray-300 px-1 py-0.5 font-semibold rounded-[4px] text-[12px]">Entreprises Education-Formation-Recrutement</button>
                    <button class="bg-gray-300 px-1 py-0.5 font-semibold rounded-[4px] text-[12px]">Entreprise Immobilier</button>
                    <button class="bg-gray-300 px-1 py-0.5 font-semibold rounded-[4px] text-[12px]">Entreprise Informatique</button>
                    <button class="bg-gray-300 px-1 py-0.5 font-semibold rounded-[4px] text-[12px]">Entreprises Restauration</button>
                    <button class="bg-gray-300 px-1 py-0.5 font-semibold rounded-[4px] text-[12px]">Entreprises Transport</button>
                    <button class="bg-gray-300 px-1 py-0.5 font-semibold rounded-[4px] text-[12px]">Entreprises Industrie</button>
                    <button class="bg-gray-300 px-1 py-0.5 font-semibold rounded-[4px] text-[12px]">Entreprises Logistique</button>
                    <button class="bg-gray-300 px-1 py-0.5 font-semibold rounded-[4px] text-[12px]">Entreprises B Corp</button>
                    <button class="bg-gray-300 px-1 py-0.5 font-semibold rounded-[4px] text-[12px]">Entreprises Architectures</button>
                </div>
            </div>
        </section>
        <hr class="mt-6">
         <section class="w-full sm:flex hidden gap-6">
            <div class="w-[48%] pl-4">
                <h1 class="font-bold text-xl py-2">Secteurs d'activite</h1>
                <div>
                    <button class="bg-gray-300 px-1 py-0.5 font-semibold rounded-[4px] text-[12px]">Emploi Développeur</button>
                    <button class="bg-gray-300 px-1 py-0.5 font-semibold rounded-[4px] text-[12px]">Emploi Développeur-front-end</button>
                    <button class="bg-gray-300 px-1 py-0.5 font-semibold rounded-[4px] text-[12px]">Emploi Community Manager</button>
                    <button class="bg-gray-300 px-1 py-0.5 font-semibold rounded-[4px] text-[12px]">Emploi Product manager</button>
                    <button class="bg-gray-300 px-1 py-0.5 font-semibold rounded-[4px] text-[12px]">Emploi Développeur mobile</button>
                    <button class="bg-gray-300 px-1 py-0.5 font-semibold rounded-[4px] text-[12px]">Emploi Vendeur</button>
                    <button class="bg-gray-300 px-1 py-0.5 font-semibold rounded-[4px] text-[12px]">Emploi Responsable Communication</button>
                    <button class="bg-gray-300 px-1 py-0.5 font-semibold rounded-[4px] text-[12px]">Emploi Secrétaire</button>
                    <button class="bg-gray-300 px-1 py-0.5 font-semibold rounded-[4px] text-[12px]">Emploi Graphiste</button>
                </div>
            </div>
             <div class="w-[48%]">
                <h1 class="font-bold text-xl py-2">Entreprises par régions</h1>
                <div>
                    <button class="bg-gray-300 px-1 py-0.5 font-semibold rounded-[4px] text-[12px]">Emploi Business</button>
                    <button class="bg-gray-300 px-1 py-0.5 font-semibold rounded-[4px] text-[12px]">Emploi Ressources humaines</button>
                    <button class="bg-gray-300 px-1 py-0.5 font-semibold rounded-[4px] text-[12px]">Emploi Informatique</button>
                    <button class="bg-gray-300 px-1 py-0.5 font-semibold rounded-[4px] text-[12px]">Emploi Marketing</button>
                    <button class="bg-gray-300 px-1 py-0.5 font-semibold rounded-[4px] text-[12px]">Emploi Graphisme</button>
                    <button class="bg-gray-300 px-1 py-0.5 font-semibold rounded-[4px] text-[12px]">Emploi Communication</button>
                </div>
            </div>
            </div>
        </section>
        <!-- footer -->
        <?php include 'footer.php'; ?>
</body>
</html>
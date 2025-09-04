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
            id="TrouverJob"
            class="cursor-pointer sm:hover:border-b-[3px] py-2 md:py-5 px-2 md:px-0"
          >
            Trouver un job
          </li>
          <li
            id="TrouverEntreprise"
            class="cursor-pointer sm:hover:border-b-[3px] py-2 md:py-5 px-2 md:px-0"
          >
            Trouver entreprise
          </li>
          <li
            id="Candidatures"
            class="cursor-pointer sm:hover:border-b-[3px] py-2 md:py-5 px-2 md:px-0"
          >
            Candidatures
          </li>
          <li
            id="opportunites"
            class="cursor-pointer sm:hover:border-b-[3px] py-2 md:py-5 px-2 md:px-0"
          >
            Opportunités
          </li>
        </ul>
        <button
          id="loginBtn"
          class="mr-6 py-2 bg-cyan-900 text-white font-semibold px-5 rounded-2xl cursor-pointer hover:scale-110 transition-all"
        >
          Login
        </button>
      </nav>
  const loading = document.getElementById("loading");
  if(loading) {
    setTimeout(() => {
      window.location.href = "./index1.html"
    },3000);
  }

  ////////////inscription//////////
  
  ////

const BtnSignUp = document.getElementById("BtnSignUp");
  if (BtnSignUp) {
    BtnSignUp.addEventListener("click", (e) => {
      e.preventDefault();
      const Fullname = document.getElementById("Fullname").value;
      const emailSignup = document.getElementById("emailSignup").value;
      const passwordSignup = document.getElementById("password").value;
      const confrmSignup = document.getElementById("Confrm").value;
      const stockage = JSON.parse(localStorage.getItem("user")) || [];
      // Correction : vérifier l'email dans le champ 'emailSignup' de chaque objet
      const existe = stockage.find(u => u.emailSignup === emailSignup);
      if (Fullname === "" || emailSignup === "" || passwordSignup === "" || confrmSignup === "") {
        alert("Veuillez compléter tous les champs");
      } else if (existe) {
        alert("L'utilisateur existe déjà");
      } else if (passwordSignup !== confrmSignup) {
        alert("Les mots de passe ne correspondent pas");
      } else {
        stockage.push({ Fullname, emailSignup, passwordSignup });
        localStorage.setItem("user", JSON.stringify(stockage));
        localStorage.removeItem("profilePic")
        window.location.href = "/accueil.html";
      }
    });
  }
   ////// connexion ///
  
  let loginButton = document.getElementById("loginButton");
  if (loginButton) {
    loginButton.addEventListener("click", (e) => {
      e.preventDefault();
      const emailSignin = document.getElementById("email").value;
      const passwordSignin = document.getElementById("passwordIn").value;
      const stockage = JSON.parse(localStorage.getItem("user")) || [];
      // Correction : vérifier l'email et le mot de passe
      const existe = stockage.find(u => u.emailSignup === emailSignin && u.passwordSignup === passwordSignin);
      if (existe) {
        window.location.href = "/accueil.html";
      } else {
        alert("Email ou mot de passe incorrect");
      }
    });
  }
  
document.addEventListener("DOMContentLoaded", () => {
  
  const resultat = document.querySelector(".resultat");
  if(resultat) {
    resultat.addEventListener("click", () => {
      const mini_section = document.getElementById("miniSection");
      mini_section.classList.toggle("hidden");
    })
  }


  

  const deconnection = document.getElementById("deconnexion");
  if(deconnection) {
    deconnection.addEventListener("click", () => {
      if(confirm("Voulez-vous vraiment vous déconnecter ?")) {
        window.location.href = "/index1.html";
      }
    })
  }

  

  const btn1 = document.getElementById("loginBtn1");
  if (btn1) {
    btn1.addEventListener("click", () => {
      window.location.href = "./loginPage.html";
    });
  }
  const mon_avis = document.getElementById("mon-avis");
  if(mon_avis) {
    mon_avis.addEventListener("click", () => {
      window.location.href = "./loginPage.html";
    })
  }

  

  const create_profile = document.getElementById("create-profile");
  if(create_profile) {
    create_profile.addEventListener("click", () => {
      window.location.href = "./loginPage.html"
    })
  }
  const btnopportunitess = document.getElementById("opportunitess");
  if(btnopportunitess) {
    btnopportunitess.addEventListener("click", () => {
      window.location.href = "./loginPage.html"
    })
  }

  // Pour les pages qui ont ces éléments :
  const login = document.getElementById("loginContain");
  const Choose = document.getElementById("ContainerChoose");
  const signin = document.getElementById("SignIn");
  const register = document.getElementById("Register");
  if (signin && login && Choose) {
    signin.addEventListener("click", () => {
      login.classList.remove("hidden");
      Choose.classList.add("hidden");
    });
  }
  if (register && login && Choose) {
    register.addEventListener("click", () => {
      Choose.classList.remove("hidden");
      login.classList.add("hidden");
    });
  }

   
    //// candidature2 ////
    const Pcours = document.getElementById("encours");
    if(Pcours) {
      Pcours.addEventListener("click", () => {
         window.location.href = "/candidature.html";
       });
    }

      //// candidature ////
    const passees = document.getElementById("passées");
    if(passees) {
      passees.addEventListener("click", () => {
        window.location.href = "/candidature2.html"
      })
    }

    /////// btn job ////
    const btnjob = document.getElementById("btnJob");
    if(btnjob) {
      btnjob.addEventListener("click", () => {
        window.location.href = "/nosoffres.html"
      });
    }
    const btnEntrep = document.getElementById("btnEntreprise");
    if(btnEntrep) {
      btnEntrep.addEventListener("click", () => {
        window.location.href = "/entreprise.html"
      });
    }
    //////

    
  

    //////////// la partie pour le fichier index //////////
  
     const trouverEntreprise = document.getElementById("TrouverEntreprise");
     if (trouverEntreprise) {
       trouverEntreprise.addEventListener("click", () => {
         window.location.href = "./index2.html";
       });
     }
     let candidature = document.getElementById("Candidatures");
     if(candidature){
      candidature.addEventListener("click", () => {
       window.location.href = "./loginPage.html";
     });
     }
     let opportunite = document.getElementById("opportunites");
     if(opportunite){
     opportunite.addEventListener("click", () => {
       window.location.href = "./loginPage.html";
     });
    }
     let btn = document.getElementById("loginBtn");
     if(btn){
     btn.addEventListener("click", () => {
       window.location.href = "./loginPage.html";
     });
    }

    ///////// La partie pour le fichier index1 //////////
     const job = document.getElementById("Job");
  if (job) {
    job.addEventListener("click", () => {
      window.location.href = "./index1.html";
    });
  }
  const candidatures1 = document.getElementById("Candidatures1");
  if (candidatures1) {
    candidatures1.addEventListener("click", () => {
      window.location.href = "./loginPage.html";
    });
  }

  const opportunites1 = document.getElementById("opportunites1");
  if (opportunites1) {
    opportunites1.addEventListener("click", () => {
      window.location.href = "./loginPage.html";
    });
  }

  ////////// La partie pour le fichier acueil //////////

  const emploJob = document.getElementById("Empljob");
  if(emploJob) {
    emploJob.addEventListener("click", ()=> {
      window.location.href = "/nosoffres.html"
    })
  }
   const empltrouverEntreprise = document.getElementById("EmplTrouvEntreprise");
  if(empltrouverEntreprise) {
    empltrouverEntreprise.addEventListener("click", () => {
      window.location.href = "/entreprise.html";
    });
  }
   const emplcandid = document.getElementById("EmplCandid");
    if(emplcandid) {
      emplcandid.addEventListener("click", () => {
        window.location.href = "./candidature.html"
      })
    }
    const miniProfilePic = document.getElementById("miniProfilePic");
  if (miniProfilePic) {
    const savedPic = localStorage.getItem("profilePic");
    if (savedPic) {
      miniProfilePic.src = savedPic;
    }
  }
  const hamburgerBtn = document.getElementById("hamburgerBtn");
  if(hamburgerBtn) {
    hamburgerBtn.addEventListener("click", () => {
      const menu = document.getElementById("menu");
      menu.classList.toggle("hidden");
    });
  }
   const userEmailElem = document.getElementById("userEmail");
  const userFullnameElem = document.getElementById("userFullname");
  if (userEmailElem || userFullnameElem) {
    // On récupère l'utilisateur connecté (le dernier inscrit ou connecté)
    const stockage = JSON.parse(localStorage.getItem("user")) || [];
    if (userFullnameElem && userEmailElem ) {
      stockage.forEach(e => {
        userFullnameElem.textContent=e.Fullname
        userEmailElem.textContent = e.emailSignup
        
      });
    }
  }
  const cvInput = document.getElementById("cvInput");
  const uploadCvBtn = document.getElementById("uploadCvBtn");
  const cvLink = document.getElementById("cvLink");
  if (cvInput && uploadCvBtn && cvLink) {
    // Afficher le lien du CV sauvegardé si présent
    const savedCv = localStorage.getItem("cvFile");
    if (savedCv) {
      cvLink.href = savedCv;
      cvLink.classList.remove("hidden");
    }
    uploadCvBtn.addEventListener("click", () => {
      cvInput.click();
    });
    cvInput.addEventListener("change", () => {
      const file = this.files[0];
      if (file && file.type === "application/pdf") {
        const reader = new FileReader();
        reader.onload = function (e) {
          localStorage.setItem("cvFile", e.target.result);
          cvLink.href = e.target.result;
          cvLink.classList.remove("hidden");
        };
        reader.readAsDataURL(file);
      } else {
        alert("Veuillez sélectionner un fichier PDF.");
      }
    });
  }
  // Effet changement photo de profil (employeur.html)
  const profileInput = document.getElementById("profileInput");
  const profilePic = document.getElementById("profilePic");
  const changePicBtn = document.getElementById("changePicBtn");
  if (profileInput && profilePic && changePicBtn) {
    // Afficher la photo sauvegardée si elle existe
    const savedPic = localStorage.getItem("profilePic");
    if (savedPic) {
      profilePic.src = savedPic;
    }
    changePicBtn.addEventListener("click", () => {
      profileInput.click();
    });
    profileInput.addEventListener("change", function () {
      const file = this.files[0];
      if (file) {
        const reader = new FileReader();
        reader.onload = function (e) {
          profilePic.src = e.target.result;
          localStorage.setItem("profilePic", e.target.result);
        };
        reader.readAsDataURL(file);
      }
    });
  }

  //////// La partie usr le fichier nosoffres //////////

  const offrEntreprise = document.getElementById("offrEntrep");
  if(offrEntreprise) {
    offrEntrep.addEventListener("click", () => {
      window.location.href = "/entreprise.html";
    });
  }

  ///////// La partie sur le fichier entreprise //////////

  const entrepJob = document.getElementById("entrJob")
  if(entrepJob) {
     entrepJob.addEventListener("click", () => {
      window.location.href = "/nosoffres.html";
    });
  }





    });
| URL | Méthodes (HTTP) | Controller | Méthode | Titre | Contenu | Commentaire |
|-----|-----------------|------------|---------|-------|---------|-------------|
| `/` | `GET` | `HomeController` | `home` | Cherche ton musicien | Page d'accueil, titre du site, phrase d'accroche, formulaire de recherche |
| `/?Query` | `GET` | `HomeController` | `homeSubmit` | Cherche ton musicien | Soumission du formulaire de recherche de la page d'accueil |
| `/subscribe` | `GET` | `RegistrationController` | `subscribe` | Inscription | Formulaire d'inscription |
| `/subscribe` | `POST` | `RegistrationController` | `newUser` | Inscription | Soumission du formulaire d'inscription |
| `/login` | `GET` | `SecurityController` | `login` | Se Connecter | Formulaire de connexion |
| `/login` | `POST` | `SecurityController` | `loginSubmit` | Se Connecter | Soumission du formulaire de connexion |
| `/logout` | `GET` | `SecurityController` | `logout` | Se Déconnecter | - |
| `/research` | `GET` | `HomeController` | `search` | Recherche avancée | Formulaire de recherche avancée de musiciens |
| `/research` | `POST` | `HomeController` | `submit` | Recherche avancée | Soumission du formulaire de recherche avancée de musiciens |
| `/contact` | `GET` | `MainController` | `contact` | Contact | Page du formulaire de prise de contact |
| `/contact` | `POST` | `MainController` | `submit` | Contact | Soumission du formulaire de prise de contact |
| `/conditions-generales` | `GET` | `MainController` | `conditions` | Conditions générales | Page des conditions générales |
| `/confidentialite` | `GET` | `MainController` | `confidentialite` | Politique de confidentialité | Page de la politique de confidentialité |


## User

| URL | Méthodes (HTTP) | Controller | Méthode | Titre | Contenu | Commentaire |
|-----|-----------------|------------|---------|-------|---------|-------------|
| `/{username}` | `GET` | `UserController` | `myAccount` | Mon Compte | Compte de l'utilisateur avec toutes ses informations personnelles |
| `/{username}` | `POST` | `UserController` | `edit` | Mon Compte | Modifications des données personnelles de l'utilisateur |
| `/user/list` | `GET` | `UserController` | `list` | Résultats de recherche | Page de présentation des musiciens trouvés, sous forme de cartes |
| `/user/{username}` | `GET` | `UserController` | `show` | Profil musicien | Page de profil du musicien sélectionné |


## Admin

| URL | Méthodes (HTTP) | Controller | Méthode | Titre | Contenu | Commentaire |
|-----|-----------------|------------|---------|-------|---------|-------------|
| `/admin` | `GET` | `AdminController` | `admin` | Username | Page de l'admin pour la gestion des utilisateurs/instruments/style de musique |
| `/admin/instrument/list` | `GET` | `AdminController` | `instrumentsList` | Instruments | Page admin qui liste tous les instruments |
| `/admin/instrument/add` | `GET` | `AdminController` | `addInstrument` | Ajouter un instrument | Page admin qui permet d'ajouter un instrument via un formulaire |
| `/admin/instrument/add` | `POST` | `AdminController` | `addInstrumentSubmit` | Ajouter un instrument | Soumission du formulaire d'ajout d'un instrument |
| `/admin/instrument/edit` | `GET` | `AdminController` | `editInstrument` | Modifier un instrument | Page admin qui permet de modifier un instrument via un formulaire |
| `/admin/instrument/edit` | `POST` | `AdminController` | `editInstrumentSubmit` | Modifier un instrument | Soumission du formulaire de modification d'un instrument |
| `/admin/instrument/delete` | `GET` | `AdminController` | `deleteInstrument` | Supprimer un instrument | Page admin qui permet de supprimer un instrument via un formulaire |
| `/admin/genre/list` | `GET` | `AdminController` | `genreList` | Styles de musique | Page admin qui liste tous les styles de musique |
| `/admin/genre/add` | `GET` | `AdminController` | `addGenre` | Ajouter un style de musique | Page admin qui permet d'ajouter un style de musique via un formulaire |
| `/admin/genre/add` | `POST` | `AdminController` | `addGenreSubmit` | Ajouter un style de musique | Soumission du formulaire d'ajout d'un style |
| `/admin/genre/edit` | `GET` | `AdminController` | `editGenre` | Modifier un style de musique | Page admin qui permet de modifier un style de musique via un formulaire |
| `/admin/genre/edit` | `POST` | `AdminController` | `editGenreSubmit` | Modifier un style de musique | Soumission du formulaire de modification d'un style de musique |
| `/admin/genre/delete` | `GET` | `AdminController` | `deleteGenre` | Supprimer un style de musique | Page admin qui permet de supprimer un style de musique via un formulaire |
| `/admin/user/list` | `GET` | `AdminController` | `userList` | Liste des utilisateurs | Page admin qui permet de lister tous les utilisateurs |
| `/admin/user/list` | `POST` | `AdminController` | `editUser` | Liste des utilisateur | Page admin qui permet de désactiver un utilisateur |
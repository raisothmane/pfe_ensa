

![quiz](https://github.com/raisothmane/pfe_ensa/assets/122203998/7e476dc7-1339-4fec-8ce6-83c452149835)



## 🎮 About QUIZ GAME 

Le projet *Quiz Game*, une application innovante pour les jeux de questions/réponses, se veut une réponse aux défis contemporains du divertissement. En intégrant les dernières technologies, Quiz Game vise à simplifier et optimiser les processus de gestion des jeux, offrant ainsi une expérience utilisateur fluide et intuitive.
### 🛠️ Installation
<h2>1-Cloner le dépôt : </h2>

--git clone <url-du-depot>
--cd <dossier-du-projet>

<h2>2-Installer les dépendances :</h2>

--composer install
--npm install

<h2>3-Configurer les variables d'environnement :</h2>

--cp .env.example .env

<h2>4-Générer une clé d'application :</h2>

--php artisan key:generate

<h2>5-Exécuter les migrations de base de données et Alimenter la base de données :</h2>

--php artisan migrate --seed

<h2>6-Lancer l'application : </h2>

--php artisan serve

<h2>7-Construire les ressources frontend :</h2>

--npm run dev


<h2>--NB:</h2>

Pour tester les données des utilisateurs "admin" et "users", elles se trouvent sur le chemin `database\seeders\UsersTableSeeder.php`.



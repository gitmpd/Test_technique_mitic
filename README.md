# GestTasks projet Laravel 8

## Prérequis

Avant de commencer, assurez-vous d'avoir installé les éléments suivants :

- [PHP](https://www.php.net/downloads) (version ^8.1)
- [Composer](https://getcomposer.org/download/)
- [MySQL](https://dev.mysql.com/downloads/)

La Base de donnée se trouve à la racine du projet.
## Installation

1. **Clonez le dépôt :**
   git clone https://github.com/gitmpd/Test_technique_mitic.git
   cd Test_technique_mitic
2. Installez les dépendances PHP avec la commande suivante:
   composer install
3. Configurez votre fichier .env :
   Nom de la base de données DB_DATABASE=todolist_db
4. Generer la clé d'application:
   php artisan key:generate
5. Créez la base de données et exécutez les migrations
   php artisan migrate
   ou simplement ouvrir xampp et acceder mysql pour créer la base de donnée avec le meme nom puis importé le fichier de la base de donnée à la racine du projet.
6. Installez les dépendances npm
   npm install
7. Démarrez le serveur de développement :
   php artisan serve

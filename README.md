# LAUNDRY

<p>Laundry est une application web de gestion d'un service de lavage</p>

## requirements

* Git
* Php >= 8.0
* composer
  
## installation

```
git clone https://github.com/jocelinkisenga/Laundry.git

```
après acceder au dossier du projet et faites :

```
composer install
```




Créer un fichier <strong>.env</strong> à la racine du projet et copier le texte du fichier <strong>.env.example</strong> qui se trouve déjà à la racine du projet. </br>

### Clé laravel
Générer une clé artisan avec la commande :

```
php artisan key:generate

```

### Base de données :

Renseignez le nom de la base de données comme suite dans votre fichier .env :

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laundry
DB_USERNAME=root
DB_PASSWORD=

```
### Migrer les tables

Migrez vos tables avec la commande

```
php artisan migrate

```
### Demarer serveur

Demarez le serveur avec la commande :
```
php artisan serve
```

### connexion 

Connectez-vous en tant qu'administrateur avec les donnees:

* email : kisenga@gmail.com </br>
* password : jocelin kisenga
 

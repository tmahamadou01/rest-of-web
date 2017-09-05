#REST OF WEB

## Les Technos qui seront utilisées:
- Slim Framework ( Micro Framework PHP)
- Semantic UI ( Framework Front-end)
- Twig ( Templating)
- Composer 
- Mysql

## Setup environnement de dev

### Installer les dépendances via composer

```sh
php composer.phar install

```

### Initialiser la structure de la base de donnée

Installer Mariadb et s'assurer que le service est démarré.  
Puis créer la structure de la base de donnée:

```sh
mysql -u MYSQL_USERNAME -p < schema.sql
```

### Charger des catégories dans la base

Éditer les [seeds](./seeds.sql) puis appliquer le script SQL:

```sh
mysql -u MYSQL_USERNAME -p < seeds.sql
```

### Lier l'application à la base

Faire une copie de [app/Config/Config.example](./app/Config/Config.example) vers `Config.php` en remplaçant les valeurs de nom d'utilisateur et mot de passe de la base de donnée.

### Démarrer le serveur de dev

Commande à exécuter pour voir le projet en local :

```sh
php -S localhost:8080 -t public/ -ddisplay_errors=1
```

Le site sera accessible via http://localhost:8080

## Setup environnement de prod

TODO

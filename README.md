# TP6 PHP, MySQL et PDO

## Présentation du projet

Ce projet a été réalisé dans le cadre du TP6 : **PHP, MySQL et PDO**.

L'objectif est de découvrir PHP, de manipuler les formulaires HTML, de récupérer des données avec GET et POST, et de connecter une application PHP à une base de données MySQL avec PDO.

## Technologies utilisées

- PHP
- HTML5
- MySQL
- PDO
- XAMPP
- Visual Studio Code
- Git et GitHub

## Structure du projet

```text
tp-php/
  01-hello.php
  02-php-html.php
  03-get.php
  04-post.php
  05-formulaire.php
  database/
      database.sql
      06-connexion.php
      07-select.php
```

## Activités réalisées

### Activité 1 — Introduction à PHP
- Affichage de messages avec `echo`.
- Affichage de la date et de l'heure avec `date()`.

### Activité 2 — PHP et HTML
- Déclaration et utilisation des variables PHP.
- Intégration de PHP dans une page HTML.

### Activité 3 — Méthode GET
- Récupération des paramètres avec `$_GET`.
- Utilisation de `isset()`.

### Activité 4 — Méthode POST
- Création d'un formulaire HTML.
- Récupération des données avec `$_POST`.

### Activité 5 — Traitement d'un formulaire
- Récupération des informations d'un produit.
- Calcul du prix total selon la quantité.

### Activité 6 — Base de données MySQL
- Importation du fichier `database.sql`.
- Création de la base de données `tp_php`.

### Activité 7 — Connexion avec PDO
- Connexion à MySQL avec PDO.
- Gestion des erreurs avec `try` et `catch`.

### Activité 8 — Requête SELECT
- Récupération des produits depuis MySQL.
- Affichage des produits dans un tableau HTML.
- Calcul du stock total.
- Filtrage des produits dont le prix est supérieur à 300 DH.

## Installation et exécution

1. Installer et ouvrir XAMPP.
2. Démarrer Apache et MySQL.
3. Placer le dossier `tp-php` dans `C:\xampp\htdocs\`.
4. Ouvrir phpMyAdmin : `http://localhost/phpmyadmin`.
5. Importer le fichier `database/database.sql`.
6. Vérifier les paramètres de connexion dans `database/06-connexion.php`.
7. Ouvrir le projet dans le navigateur :

```text
http://localhost/tp-php/
```

Pour afficher la liste des produits :

```text
http://localhost/tp-php/database/07-select.php
```

## ED-DAFALI FADOUA



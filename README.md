
# ZZTask

## Build status

Master - [![Build Status](https://travis-ci.org/vmizoules/zztasks.svg?branch=master)](https://travis-ci.org/vmizoules/zztasks)

Vince - [![Build Status](https://travis-ci.org/vmizoules/zztasks.svg?branch=vince)](https://travis-ci.org/vmizoules/zztasks)

Alex - [![Build Status](https://travis-ci.org/vmizoules/zztasks.svg?branch=alex)](https://travis-ci.org/vmizoules/zztasks)

## Installation

Install dependances

    docker run --rm -v $(pwd):/app composer/composer install

Launch webserver

    docker-compose up

## TODO

### Important :
  * Faire toute la partie **fonctionnelle**
  * Intégration continue avec Travis `.travis.yml`
  * Utiliser AJAX pour ne pas avoir à raffraichir la page
  * Faire un fichier `.htaccess` pour le renommage d'url
  * Soutenance

### Fonctionnelle :

CRUD pour task (et user en bonus)

Dans taskManager
  * creation d'une tache 
    * vérification des droits d'utilisateur 
    * verifier que les champs ne soient pas vide  
    * enregistrer la personne qui a cree la tache
    * verifier que l'utilisateur designé existe
    * ecriture de la tache dans un fichier 
    * designer la personne chargee de réaliser la tache avec varification que la personne existe
    * la date debut de réalisation et de fin 
    * verifier la date

  * modification d'une tache
    * modif de la personne designe a faire la tache 
    * date de debut et de fin de la tache
  * suppression d'une tache 

### Facultatif : 
  * Spécifier les fichiers qui ne seront pas commités `gitignore`.


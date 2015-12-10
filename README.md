
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
  * createTask -> doit afficher erreur si pas la permission de créer tache
  * proposer en login le dernier nom d'utilisateur
  * catégorie de task : TODO, in progress, done
  * afficher les tasks en 3 catégories, TODO, In progress, Done
  * Faire toute la partie **fonctionnelle**
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

## facultatif

  * ajouter le code coverage dans junit xml
  * pouvoir mettre du gras souligner dans les descriptions des tasks

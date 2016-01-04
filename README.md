
# ZZTask

## Build status

Master - [![Build Status](https://travis-ci.org/vmizoules/zztasks.svg?branch=master)](https://travis-ci.org/vmizoules/zztasks)

Dev - [![Build Status](https://travis-ci.org/vmizoules/zztasks.svg?branch=dev)](https://travis-ci.org/vmizoules/zztasks)

Vince - [![Build Status](https://travis-ci.org/vmizoules/zztasks.svg?branch=vince)](https://travis-ci.org/vmizoules/zztasks)

Alex - [![Build Status](https://travis-ci.org/vmizoules/zztasks.svg?branch=alex)](https://travis-ci.org/vmizoules/zztasks)

## Installation

Install dependances

    docker run --rm -v $(pwd):/app composer/composer install

Launch webserver

    docker-compose up

## Troubleshooting

Can't create or remove task ?

    chmod 777 data/database/*

## TODO

### Important :
  * createTask -> doit afficher erreur si pas la permission de créer tache
  * Faire un fichier `.htaccess` pour le renommage d'url
  * Soutenance

### facultatif

  * ajouter le code coverage dans junit xml
  * pouvoir mettre du gras souligner dans les descriptions des tasks
  * Dans taskManager
    * creation d'une tache 
      * la date debut de réalisation et de fin 
      * verifier la date

## Done

  * Affiche le nom du dernier utilisateur connecté
  * Afficher le bouton edition d'une tache si on a la permission de le faire (idem suppression)

Dans taskManager
  * creation d'une tache 
    * vérification des droits d'utilisateur 
    * verifier que les champs ne soient pas vide  
    * enregistrer la personne qui a cree la tache
    * verifier que l'utilisateur designé existe
    * ecriture de la tache dans un fichier 
  
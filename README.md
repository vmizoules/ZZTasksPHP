
# ZZTask

## Build status

Master - [![Build Status](https://travis-ci.org/vmizoules/zztasks.svg?branch=master)](https://travis-ci.org/vmizoules/zztasks)

Dev - [![Build Status](https://travis-ci.org/vmizoules/zztasks.svg?branch=dev)](https://travis-ci.org/vmizoules/zztasks)

## Users

Admin : (can read/write/delete)

    david2:david2

Normal user : (can read)

    david:david

## Troubleshooting

Can't create or remove task ?

    chmod 777 datas/database/*

## How use it with docker ?

Install dependances

    docker run --rm -v $(pwd):/app composer/composer install

Launch webserver

    docker-compose up

Enjoy!

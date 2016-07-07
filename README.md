sf2Skelleton
============

## Installation

Supprimer le dépot git existant et créer un nouveau dépot

```shell
cd /var/www/nomduprojet
rm -rf .git
git init
```

```shell
composer install
```

## Développement

Ci-après, quelques particularités du projet
### Grunt

```shell
grunt serve
```

Quelques particularités:
* Lance le `watch` avec livereload dans le navigateur
* Un `jshint` contrôle le code js pour voir les erreurs de style ou de syntaxe

```shell
grunt build
```

Builde le projet: concatenation, uglify et minification des sources js et css

## Ajout du favicon
remplacer les images dans le dossier favicon

### Installer une nouvelle lib JS ou CSS
Essayer tant que possible de le faire en utilisant bower via la commande:

```shell
bower install --save lib
```

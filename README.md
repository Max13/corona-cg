# Corona-cg
Site web (non-officiel) d'information sur la situation du Coronavirus (`Covid19`/`SARS-CoV-2`) en République du Congo.

Ce projet est né de l'initiative citoyenne d'un groupe de jeunes Congolais amoureux de la tech.


# Technologie
Rien de sorcier, pas de complications ni de caprices inutiles. Le projet est développé à l'aide de [Jigsaw](https://jigsaw.tighten.co), un merveilleux outil qui permet de générer un site statique (*en HTML, tu te rappelle la belle époque?*) à partir de fichiers de template en [blade](https://laravel.com/docs/5.6/blade) ou en markdown.

Les récalcitrants, tant pis pour vous.


# Contributions
C'est très simple aussi. Tu clone, tu fais une branche, tu envoie un *Pull-Request*.

## Procédure

 1. Cloner le projet
 2. `composer install`
 3. `npm install`

 - [Compiler le projet](https://jigsaw.tighten.co/docs/building-and-previewing/)
 - [Compiler les assets](https://jigsaw.tighten.co/docs/compiling-assets) (inclut l'étape précédente)
     - Problème connu: `npm run watch` plante. Si un PR peut être fait pour régler ça, ça nous arrangerait.

On code en *Anglais*, on commit en *Anglais*. La norme est [PSR-12](https://www.php-fig.org/psr/psr-12/)

## index
Pour le moment, nous voulons que cela reste une page unique, donc il n'y a pas beaucoup de fichiers à modifier. La base c'est `/source/index.blade.php`, dessus il est aisé de voir quel "layout" est étendu et que contient ce layout, etc...

## Assets
Seuls les fichiers et répertoires suivants sont autorisés à être modifiés:

 - Source SASS: `/source/_assets/sass/main.scss`
 - Source JS: `/source/_assets/js/main.js`
 - Fichiers à télécharger: `/source/_assets/files/`
 - Images/Logo/Icones: `/source/_assets/img/`

Pour le reste, il est possible de découper le layout, les en-tête et contenus en plusieurs fichiers blade si c'est pertinent.

Framework SASS responsive PluXml
=========

Le framework n'utilise pas de js, moins de 7ko pour le fichier style.css

Le dossier contient:

  - Un dossier SASS pour editer facilement le style.css
  - Utilisation d'une grille responsive et d'une navigation
  - Fichier full-width pour la page article et page statique
  - Utlisation de la police Web symbols 
  - Maquette HTML5 et CSS3 validation W3C
  - Mixins Animate

Version
----

1.2



Edition du fichier style.sass
--------------

```sh
/* Reset et importation des mixins CSS */
@import "compass/css3";
@import "reset";


/* @include animate(animation-name, animation-duration, animation-delay); */
/* voir le projet et instruction: https://github.com/simko-io/animated.sass/blob/master/README.md */
@import "animated";

@include animation(bounce-in-right);


/* Largeur, espace entre les blocs et nombre de blocs */
$wrap: 1160px;
$gutter: 20px;
$bloc: 12;
$max-width: 768px;
$police: "Helvetica Neue", sans-serif;
$size: 16px;

$primaire: #666;
$secondaire: #ccc;


/* importer les éléments du style */
@import "fonts";
@import "header";
@import "body";
@import "sidebar";
@import "form";
@import "footer";
@import "grid";
```

Démo du framwork: http://psdtohtml5.fr

N'hésitez pas à me contacter sur http://psd-html.fr

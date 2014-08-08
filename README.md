Framework responsive PluXml
=========

Le framework n'utilise pas de js, il est ultra light moins de 7ko pour le fichier style.css

Le dossier contient:

  - Un dossier SASS pour editer facilement le style.css
  - Utilisation d'une grille responsive et d'une navigation
  - Fichier full-width pour la page article et page statique
  - Maquette HTML5 et CSS3 validation W3C


Version
----

1.0



Edition du fichier style.sass
--------------

```sh
/* Reset et importation des mixins CSS */
@import "compass/css3";
@import "compass/reset";


/* Largeur, espace entre les blocs et nombre de blocs */
$wrap: 1160px;
$gutter: 20px;
$bloc: 12;
$max-width: 960px;
$police: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;

$primaire: #666;
$secondaire: lighten($primaire, 10%);


/* importer les éléments du style */
@import "fonts";
@import "header";
@import "body";
@import "sidebar";
@import "form";
@import "footer";
@import "grid";
```



N'hésitez pas à me contacter sur http://psd-html.fr

=== Use jQuery jsDelivr ===
Contributors: luciole135
Tags: jsDelivr, cdn, keyCDN, jquery, jquery-migrate, Masonry, js, optimisation, speed, WordPress Performance
Donate link: additifstabac@free.fr
Requires at least: 3.9
Tested up to: 4.4
Stable tag: 1.2

Loads the open source scripts jQuery, jQuery-migrate and Masonry from jsDelivr's CDN.

== Description ==
= French =
* Un plugin extremement léger pour charger les 3 scripts jquery, jquery-migrate et Masonry de WordPress depuis les CDN de jsDelivr.
* Il met les scripts jquery dans le pied de page et non dans l'en-tête comme WordPress le fait.
* Il utilise le protocole https au lieu de http.
* Depuis le 26 janvier 2015, KeyCDn sert le traffic de jsdelivr. https://www.keycdn.com/blog/tag/free-cdn/
* Il permet d\'optimiser et d\'accélerer WordPress.
* Il augmente d\'environ 5% le Page Speed Grade de GTmetrix.
* Il accélère le chargement d\'au moins 1 seconde.
* Il est écrit en 14 lignes de code et pèse environ 0,009 Mo.
* Il détecte automatiquement la version du script utilisée par votre thème et effectue une requête vers cette dernière sur le CDN de jsDelivr.


* Plus d\'information ici: http://additifstabac.free.fr/index.php/use-jquery-jsdelivr/

= English =
* An extremely lightweight plugin to load the 3 scripts jquery, jquery-migrate and Masonry of WordPress from jsDelivr's CDN.
* It puts the jquery scripts in footer and not in the header as WordPress does.
* It use https instead of http protocol.
* Since January 26, 2015 KeyCDN now delivering traffic for jsDelivr. https://www.keycdn.com/blog/tag/free-cdn/
* It helps optimize and accelerate WordPress.
* It increases by about 5% Page Speed ​​Grade GTmetrix.
* It speeds up the loading of at least 1 second.
* It is written in 14 lines of code and weighs about 0.009 MB
* It automatically detects the version of the script used by your theme and makes a request to this version of the CDN jsDelivr.

* More info (in french): http://additifstabac.free.fr/index.php/use-jquery-jsdelivr/

== About Masonry in 3.9 ==
= French =
* Depuis WordPress 3.9 'Masonry' est mis à jour en v3, qui ne nécessite plus jquery.
http://make.wordpress.org/core/2014/03/27/masonry-in-wordpress-3-9/
* Le nouvel handle WordPress est 'masonry'.
* L'ancien handle 'jquery-masonry' est maintenant devenu un complément v2/v3, qui permet (un peu) de rétrocompatibilité avec les options, classes et méthodes qui ont disparues de la v3.
http://masonry.desandro.com/appendix.html#upgrading-from-v2

= English =
* WordPress 3.9 update Masonry to v3, which no longer requires jQuery. 
http://make.wordpress.org/core/2014/03/27/masonry-in-wordpress-3-9/
* The new script handle is 'masonry'. 
* The older 'jquery-masonry' handle is now the official v2/v3 shim, which provides (some) backwards compatible options, methods and classes.  
http://masonry.desandro.com/appendix.html#upgrading-from-v2

== Installation ==
1. Dézippez l\'archive et placez là dans le dossier /wp-content/plugins
1. Activez le \'Plugin\' depuis le tableau de bord de WordPress
1. Il fonctionne dès l\'activation en arrière plan et ne nécessite aucun réglage.

== Changelog ==
= 1.2 =
* French : Utilisation du protocole https en lieu et place de http.
* English: Using https instead of http protocol.
= 1.1.2 =
* French : Affectation d'une priorité basse d'exécution du plugin afin de permettre à ce plugin d'agir en tout dernier lieu après les autres plugins.  Ceci permet d'assurer la compatibilité avec les autres plugins agissant eux aussi sur les scripts jQuery.
* English: Assigning a low priority for the implementation of the plugin to allow this plugin to act as a last place after the other plugins. This ensures compatibility with other plugins modifying the jQuery scripts.
= 1.1.1 =
* Do not show the version of jQuery, masonry and jquery-migrate as recommended by gtmetrix
"Most proxies, most notably Squid up through version 3.0, do not cache resources with a "?" in their URL even if a Cache-control: public header is present in the response. To enable proxy caching for these resources, remove query strings from references to static resources, and instead encode the parameters into the file names themselves."
http://gtmetrix.com/remove-query-strings-from-static-resources.html

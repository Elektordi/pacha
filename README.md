PACHA
=====

**Plateforme d'Accompagnement des CHAts**

Ce logiciel est développé par Guillaume "Elektordi" Genty pour l'association ECLVYS (*École du Chat Libre Vals d'Yerres et de Seine*).


Installation
============

* Exportez le dépot git: https://github.com/Elektordi/pacha/archive/master.zip
* Installez les fichiers dans un dossier accessible par apache
* Lancez ./init.sh à la racine
* Dans app/Config créez database.php et email.php à partir des modèles
* Injectez doc/pacha.sql dans votre base de données
* Connectez vous avec le compte "admin" (mot de passe "admin")

Sécurité
========

Conseils de sécurité:
* Changez immédiatement l'identifiant et le mot de passe administrateur
* Si vous disposez de votre propre vhost apache, il faut mieux faire pointer celui-ci vers app/webroot/

Bugs
====

Si vous trouvez des bugs, merci de les rapporter ici: https://github.com/Elektordi/pacha/issues/new

Éléments utilisés
=================

* CakePHP 2.4.1: http://cakephp.org/ - https://github.com/cakephp/cakephp
* Bootstrap 2.3.2: http://getbootstrap.com/2.3.2/ - https://github.com/twbs/bootstrap
* Cakestrap: https://github.com/Rhym/cakeStrap/
* Dessins de chats: http://iconka.com/
* Îcones des bouttons: http://glyphicons.com/

Liens
=====

* ECLVYS: http://www.chatlibre.org/
* Guillaume Genty: https://github.com/Elektordi


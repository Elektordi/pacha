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
* Modifiez immédiatement les clés de sécurité dans app/Config/core.php
	* Security.salt (au moins 50 caractères)
	* Security.cipherSeed (au moins 30 chiffres)
	* Cookie.SecurityKey (plus de 32 caractères)
* Si vous disposez de votre propre vhost apache, il faut mieux faire pointer celui-ci vers app/webroot/
* Pour une utilisation en production, mettez le niveau de débug à 0 (dans app/Config/core.php)

Note sur les mots de passe stockés:

Tous les mots de passe stockés en base sont en md5 avec salt ("md5 salé"). Si vous perdez votre mot de passe ou que vous changer les clés de sécurité, utilisez la commande suivante pour le réinitialiser:
* Console/cake admin passwd admin admin

Ou de façon plus générale:
* Console/cake admin passwd <identifiant> <nouveau mot de passe>

Bugs
====

Si vous trouvez des bugs, merci de les rapporter ici: https://github.com/Elektordi/pacha/issues/new

Liens
=====

* ECLVYS: http://www.chatlibre.org/
* Guillaume Genty: https://github.com/Elektordi (email: guillaume arobase elektordi point net)

Éléments utilisés
=================

* CakePHP 2.4.1: http://cakephp.org/ - https://github.com/cakephp/cakephp
* Bootstrap 2.3.2: http://getbootstrap.com/2.3.2/ - https://github.com/twbs/bootstrap
* Cakestrap: https://github.com/Rhym/cakeStrap/
* Dessins de chats: http://iconka.com/
* Icônes des bouttons: http://glyphicons.com/
* Quelques autres icônes: http://www.famfamfam.com/lab/icons/silk/
* Bootstrap datepicker: http://www.eyecon.ro/bootstrap-datepicker/
* Bootstrap-select: http://silviomoreto.github.io/bootstrap-select/

License
=======

*Logiciel sous license CeCILL-B: http://www.cecill.info/licences/Licence_CeCILL-B_V1-fr.html*

Merci de participer au développement de ce logiciel open-source en proposant vos modifications sous forme de "Pull Requests" !

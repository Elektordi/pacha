Procédure de mise à jour
========================

De base, la mise à jour de l'application se fait en remplacant tous les fichiers par les nouveaux fichiers.

Si vous avez un accès shell, un simple `git pull origin master` fera l'affaire.

Si vous êtes en FTP, vous pouvez uploader les nouveaux fichiers en remplaceant les anciens.

Une fois le code mit à jour, regardez ci-dessous si il n'y a pas de mise à jour de DB à faire. Si vous montez de plusieurs versions d'un coup, faites-les dans l'ordre croissant des numéros de versions.

## v1.0 => v1.1

Changement des états pour les chats.
Requête SQL: `UPDATE chats SET etat = 'ACCUEIL', commentaires = TRIM(CONCAT(commentaires, " Etat 'CHATON' remplacé par 'ACCUEIL' pour migration.")) WHERE etat = 'CHATON';`


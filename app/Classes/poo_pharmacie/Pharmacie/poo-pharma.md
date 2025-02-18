POO PHP pharma 


Objectif : Ecrire un programme orienté objets qui permet de gérer une pharmacie.

La pharmacie gère des clients et des médicaments. Un client est caractérisé par un nom et un crédit. Le crédit représente la somme que ce client doit à la pharmacie. Le crédit peut être négatif si le client a versé plus d'argent que le montant. Un médicament est caractérisé par un nom (chaîne de caractères), un prix (nombre) et un stock (entier). Les méthodes à compléter auront les caractéristiques suivantes:

affichage(...) permet d'afficher les clients et leurs crédits respectifs ainsi que les médicaments et leurs stocks respectifs.

approvisionnement(..) permet d'approvisionner le stock d'un médicament. Le nom du médicament à approvisionner ainsi que la quantité à ajouter au stock doivent être lus depuis le terminal. Lorsque le nom du médicament est introduit, il faut vérifier qu'il s'agit bien d'un nom connu dans la liste des médicaments de la pharmacie. Le programme doit boucler jusqu'à introduction d'un nom correct. Cette procédure de vérification sera prise en charge par la méthode lireMedicament(..) décrite plus bas.

achat(..) permet de traiter un achat fait par un client. l'achat porte sur un médicament donné dans une quantité donnée. Pour cette transaction le client paie un certain prix. Une opération d'achat aura pour effet de déduire la quantité achetée du stock du médicaments correspondant et d'augmenter le crédit du client (d'un montant équivalent au montant de l'achat moins la somme payée).
Les noms du client et du médicament doivent être lus depuis le terminal. Le programme doit boucler jusqu'à introduction de noms connus aussi bien pour les clients que les médicament. Ces procédures de vérification seront prises en charge par les méthodes lireClient et lireMedicament (voir plus bas). La quantité achetée et le montant payé sont aussi lus depuis le terminal. Ils seront supposés corrects.

quitter(..) affiche le message "programme terminé!".

Vous définirez une méthode auxiliaire lireClient(..) prenant comme paramètre un liste de clients. Elle permettra de lire le nom d'un client depuis le terminal et de vérifier si ce client existe dans la liste des clients. Dans ce cas le client sera retourné. Cette méthode doit boucler jusqu'à ce qu'un client soit trouvé. Elle sera utilisée par la méthode achat(..). Une méthode similaire, lireMedicament(..) sera fournie pour les médicaments. Elle sera utilisée par les méthodes achat(..) et approvisionnement(..).

Vous êtes libre de définir, en plus de ces méthodes, toutes celles que vous jugerez nécessaires.



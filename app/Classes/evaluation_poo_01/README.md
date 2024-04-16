# evaluation_poo_01



## Getting started

EVALUATION POO - PHP
Le dépôt est nommé : evaluation_poo_01
Créez un dossier projet nommé : evaluation_poo_01 
1. INTRODUCTION
Votre objectif est de créer une simulation de ZOO. 
Ce zoo ouvrira et lancera ses attractions après s’être assuré d’avoir assez de monde 
pour payer ses employés dans la journée. 
Chaque visiteur du zoo fera le parcours complet.
Le zoo reçoit sa livraison d’animaux et vend ses billets AVANT l’ouverture des portes. 
2. LES ANIMAUX
Certains animaux sont des herbivores et d’autres sont des carnivores. Tous les animaux 
du zoo implémentent la méthode « faireLeShow » qui va afficher un message sur la sortie 
standard.
Tous les animaux peuvent « donnerNaissance » à un autre animal. Attention, un lion 
n’engendre pas de zèbre (en tout cas pas en 2020). La méthode retourne donc l’animal 
qui vient d’être mis à bas. 
Un animal livré possède un nom donné par ses propriétaires, un animal né dans le zoo 
non. 
• Définissez l’héritage pour les animaux. 
• Implémentez les constructeurs nécessaires. 
• Implémentez au(x) bon(s) endroit(s) les méthodes donnerNaissance et 
faireLeShow 
La méthode « faireLeShow » va afficher le message suivant pour un lion nommé concon : 
« cet animal carnivore qui est un lion et qui s’appelle concon »
beWeb par Fondespierre – 291 chemin de Fondespierre, 34160 Castries
3. . LE ZOO
Le zoo possède des animaux et des visiteurs. 
Le zoo peut vendre des billets à une personne ou bien un groupe de visiteurs. 
Pour réduire les coûts, le zoo reçoit toujours plusieurs animaux lors des livraisons. Il arrive 
parfois qu’un animal du zoo mette bas.
• Initialisez correctement le Zoo 
• Implémentez la méthode « vendreBillet » 
• Implémentez la méthode « livraison » qui affichera en console le message suivant 
: une livraison de XX animaux a été effectuée. (XX -> nb d’animaux livrés) 
• Implémentez la méthode « naissance » qui affichera en console le message 
suivant : un nouvel animal est né dans le Zoo
La méthode « ouvrirLesPortes » va permettre à chaque visiteur de voir chaque animal 
faire son show… 
Le parcours étant prévu pour une personne, chaque visiteur attend la fin du parcours du 
précédent pour regarder les animaux.
4. RESULTATS
• Créez les visiteurs suivants : Loïc, Yannick, Yassine, Enzo et Pierre et faites-les 
visiter le zoo qui contient les animaux de votre choix. La naissance d’un nouvel 
animal intervient après la visite des visiteurs. (Le premier animal de la liste met bas) 
• Rajoutez une naissance après que la moitié des visiteurs soit passée. (Le 
deuxième animal de la liste met bas).
5. EXTRAS
• Documentez les méthodes pour expliquer vos choix d’implémentation
• Optimiser votre structure
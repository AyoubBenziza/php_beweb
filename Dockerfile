FROM mattrayner/lamp

#Mise à jour des paquets et installation de l'application(ici git)
# RUN apt update
# RUN apt install -y git

#Commande exécutée au démarrage du container
CMD ["/run.sh"]
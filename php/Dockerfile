FROM php:8.0-apache
# Définition du répertoire de travail
WORKDIR /var/www/html
# Copiez les fichiers de votre application dans le conteneur
COPY ../app  /var/www/html
# Exposez le port 80
EXPOSE 80
# Installation de l'extension mysqli
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli
# Mise à jour du système d'exploitation
RUN apt-get update && apt-get upgrade -y
# Démarrer Apache
CMD ["apache2-foreground"]



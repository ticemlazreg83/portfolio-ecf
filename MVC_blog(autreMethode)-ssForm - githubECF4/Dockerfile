# On utilise l'image officielle PHP avec Apache
FROM php:8.2-apache

# On active le module de réécriture d'Apache pour le MVC (le .htaccess)
RUN a2enmod rewrite

# On change le dossier racine d'Apache vers le dossier /public de l'application
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf

# On installe l'extension PDO MySQL pour la base de données
RUN docker-php-ext-install pdo pdo_mysql

# On copie le code du projet dans le conteneur
COPY . /var/www/html/
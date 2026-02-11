FROM mariadb:11

# Copiamos el schema para inicializar la DB
COPY schema.sql /docker-entrypoint-initdb.d/schema.sql

# Variables de entorno se pueden poner aquí o en docker-compose
# ENV MYSQL_ROOT_PASSWORD=rootpassword
# ENV MYSQL_DATABASE=bookmedik
# ENV MYSQL_USER=admin
# ENV MYSQL_PASSWORD=admin

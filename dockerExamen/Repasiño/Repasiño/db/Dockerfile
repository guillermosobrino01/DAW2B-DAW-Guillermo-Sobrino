# db/Dockerfile
FROM mysql:8.0

# Copiar script SQL para inicializar la base de datos
COPY pizzeria.sql /docker-entrypoint-initdb.d/

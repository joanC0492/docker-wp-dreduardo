```bash
docker compose --profile dev up
```
```bash
docker compose --profile dev down
```
---
```bash
docker compose --profile prod up
```

# Ejecutar un docker compose en especifico
---
docker-compose -f docker-compose.dev.yml up -d

docker-compose -f docker-compose.prod.yml up -d

<!-- Bajar compose -->
docker compose -f docker-compose.dev.yml down -v


--- 
# Terminando de iniciar con up y terminado de modificar hacemos
cp -r wordpress/wp-content/plugins/mi-plugin wp-content/plugins/
cp -r wordpress/wp-content/themes/mi-tema wp-content/themes/

# hacemos backup de la bd de datos
- Debemos tener ejecutando nuestro compose dev
- Luego vemos el nombre de nuestra imagen mysql
  docker compose -p dreduardoflorescirugiape ps
  "dreduardoflorescirugiape-database-1"
- Ejecutar:
docker exec -t tu-contenedor-mysql-local mysqldump -u root -p"${MYSQL_ROOT_PASSWORD}" "${MYSQL_DATABASE}" > backup-local.sql  
- En nuestro caso el codigo seria:  
docker exec -t dreduardoflorescirugiape-database-1 mysqldump -u root -p"rootpassword" "dreduardoflores_db" > backup-local.sql


<!-- # Desde la raíz de tu proyecto (donde está el Dockerfile)
docker build -t custom-wordpress:latest . -->

<!-- EN SERVER -->
git clone proyect
sudo git clone https://github.com/joanC0492/docker-wp-dreduardo.git dreduardoflorescirugia.pe

cd proyect

# 
sudo docker build -t custom-wordpress:latest .

sudo cp .env.example .env

---Configurar el .env

crear el archivo de configuracion
sudo touch wp-config.php && sudo touch .htaccess

sudo docker compose -f docker-compose.prod.yml up -d

# Para verlo en prod
sudo docker compose -f docker-compose.prod.yml ls
sudo docker compose -p dreduardoflorescirugiape ps

# Entrar al contenedor de mi custom wordpress
sudo docker exec -it docker-wp-dreduardo-wordpress-1 bash
docker-wp-dreduardo-wordpress-1: Es el name que nos da al ejecutar 
                                sudo docker compose -p docker-wp-dreduardo ps


dreduardoflorescirugiape-wordpress-1
sudo docker exec -it dreduardoflorescirugiape-wordpress-1 bash


---

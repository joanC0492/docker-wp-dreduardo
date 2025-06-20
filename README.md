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


<!-- # Desde la raíz de tu proyecto (donde está el Dockerfile)
docker build -t custom-wordpress:latest . -->

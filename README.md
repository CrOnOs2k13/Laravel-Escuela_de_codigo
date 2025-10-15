hay que correr los siguientes comandos 
docker compose up --build -d en un codespace
docker compose exec application php artisan install:api --passport
docker compose exec application php artisan migrate

y deberia estar listo

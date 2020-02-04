buildup:
	docker-compose up -d --build
up:
	docker-compose up -d
downv:
	docker-compose down -v
down:
	docker-compose down
laravel:
	docker-compose run composer global require laravel/installer
	docker-compose run composer create-project --prefer-dist "laravel/laravel=6.0" .
	docker-compose run composer require jenssegers/mongodb --ignore-platform-reqs
	docker-compose restart
laravel-clone:
	cp env.example .env
	cp src/env.example src/.env
php-ash:
	docker-compose exec php-fpm /bin/ash
mongo-bash:
	docker-compose exec mongo bash
composer:
	docker-compose run composer $(arg)
artisan:
	docker-compose exec php-fpm php artisan $(arg)
art-clear:
	docker-compose exec php-fpm php artisan config:clear
	docker-compose exec php-fpm php artisan cache:clear
php:
	docker-compose exec php-fpm php $(arg)
ps:
	docker-compose ps
restart:
	docker-compose restart
log-php:
	docker-compose logs php-fpm
log-nginx:
	docker-compose logs nginx
log-mongo:
	docker-compose logs mongo
logs-mongox:
	docker-compose logs mongo-express

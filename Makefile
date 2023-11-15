start:
	# prepare
	sudo service nginx stop || true
	sudo service apache2 stop || true
	sudo service mysql stop || true
	sudo service redis stop || true
	# start
	sudo docker-compose up --remove-orphans -d
	sudo docker-compose exec interview-app composer install
	sudo docker-compose exec interview-app php artisan migrate
stop:
	sudo docker-compose stop

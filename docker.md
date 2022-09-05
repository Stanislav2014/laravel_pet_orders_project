###команды

##собираем 
docker-compose build

##запускам
docker-compose up -d

##Остановка
docker-compose stop

##переходим в контейнер php
docker-compose exec php-fpm bash

- ``composer install`` - устанавливаем зависимости php
- ``php artisan migrate`` - запускаем миграции
- ``php artisan key:generate`` - генерируем ключ
- ``php artisan passport:install`` - Паспорт

##Логи
docker-compose logs echo - echo название контейнера

##Домены
Докер разворачивается на домене quant.test
Домен quant.test и test.quant.test необходимо прописать в hosts https://s.mail.ru/jnpW/BYZAyXirq
Если добавляете свой домен, то тоже прописать в hosts

##Реалтайм
Работает на доменах test.quant.test dzham.quant.test. Можно добавить свои в конфиг
Реалтайм по-умолчанию работает только на доменах, которые прописаны в докере https://s.mail.ru/efK3/wNSK7H2oD

##База
К базе подключение по ip 127.0.0.1:54320
Настройки как в .env

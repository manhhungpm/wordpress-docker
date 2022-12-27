FROM wordpress

#RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli
#
#COPY . /usr/src/wp-demo-new
#WORKDIR /usr/src/wp-demo-new

ENV DB_HOST=192.168.8.131:3306 \
    DB_USER=hungnm \
    DB_PASSWORD=hungnm72 \
    DB_NAME=wordpress

COPY . .

#CMD [ "php", "./index.php" ]


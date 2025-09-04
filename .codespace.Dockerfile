FROM ubuntu:noble
RUN apt-get update && \
    apt-get install -y php8.3 php8.3-bcmath php8.3-curl php8.3-mbstring php8.3-xml unzip curl && \
    curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer && \
    update-alternatives --set php /usr/bin/php8.3


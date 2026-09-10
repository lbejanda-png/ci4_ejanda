FROM php:8.3-cli

RUN apt-get update && apt-get install -y \
    libicu-dev \
    libonig-dev \
    && docker-php-ext-install intl mbstring \
    && rm -rf /var/lib/apt/lists/*

WORKDIR /var/www/html

COPY . .

RUN mkdir -p writable/cache writable/logs writable/session writable/uploads \
    && chmod -R 777 writable

ENV PORT=10000

CMD ["sh", "-c", "php spark serve --host 0.0.0.0 --port ${PORT}"]
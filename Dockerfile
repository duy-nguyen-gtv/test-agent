FROM php:8.4-cli

RUN apt-get update && apt-get install -y git unzip curl nodejs npm \
 && rm -rf /var/lib/apt/lists/*

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

RUN npm i -g opencode-ai

WORKDIR /workspace

FROM dunglas/frankenphp

# ajoutez des extensions supplémentaires ici :
RUN install-php-extensions \
  pdo_mysql \
  mysqli \
  xdebug


COPY --link app.dev.ini $PHP_INI_DIR/conf.d/
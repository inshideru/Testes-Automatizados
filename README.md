## Testes Automatizados com PHPUnit

### Servidor
* Executar o comando abaixo na raiz do projeto para iniciar o servidor buit-in do php já com redirecionamento para a pasta pública
```php
 php -S localhost:8000 -t public_html
```

### Testes no windows
```php
php vendor/phpunit/phpunit/phpunit -c tests/phpunit.xml
```
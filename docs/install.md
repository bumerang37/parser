# Установка

Для работы нужен установленный Yii2

### 1.Скачать модуль:
```php
composer require maksclub/parser "dev-master"
```

### 2. Подключение модуля:
```php
'modules' => [
    'parser' => [
        'class' => 'maksclub\parser\Module',
    ],
],
```

###  3. Миграции:
```php
php yii migrate/up --migrationPath=@vendor/maksclub/parser/src/migrations
```

Чтобы модуль отображался по умолчанию на главной:
```php
'defaultRoute' => 'parser/default/index',
```



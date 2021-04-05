# PHP component Flash

It uses `$_SESSION` array to store messages. Because of it you have to use `session_start()` at the begining of your script. See `index.php` for example.
### 0. Public methods:
- `exists()` - check existing a message by its type
- `setFlash()` - set a flash message
- `getFlash()` - return the added message
### 1. Init session.
```php
session_start();
```
### 2. Include the Flash class.
```php
include __DIR__ . '/Flash/Flash.php';
```
### 3. Add a flash message by method `setFlash()`. Type 'danger' is default.
```php
Flash::setFlash('Error message.');
Flash::setFlash('Some information.', 'info');
Flash::setFlash('Jos is done!', 'success');
Flash::setFlash('Additional error message.', 'danger', false);
```
### 4.To print the added message use `getFlash()` method.
```php
Flash::getFlash('info');
Flash::getFlash('danger');
Flash::getFlash('success');
```

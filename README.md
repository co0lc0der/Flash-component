# PHP component Flash

It uses `$_SESSION` array to store messages. Because of it you have to use `session_start()` at the begining of your script. See `index.php` for example.
### Public methods:
- `exists()` - check existing a message by its type
- `setFlash()` - set a flash message
- `getFlash()` - return the added message
## How to use
### 1.Include the Flash class.
```php
include __DIR__ . '/Flash/Flash.php';
```
### 2. Add a flash message by method `setFlash()`. Type 'danger' is by default.
```php
Flash::setFlash('Error message.');
Flash::setFlash('Some information.', 'info');
Flash::setFlash('Job is done!', 'success');
Flash::setFlash('Additional error message.', 'danger', false);
```
### 3. To print the added message use `getFlash()` method.
```php
echo Flash::getFlash('info');
echo Flash::getFlash('danger');
echo Flash::getFlash('success');
```

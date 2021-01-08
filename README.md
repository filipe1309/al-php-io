
# Notes

## Class 3
The files functions of php work not only with files, but with diferents formats (protocols / Wrappers) too, like http, zip, ogg, ftp, ssh, etc.
```
> php -a
> php > echo file_get_contents('http://swapi.dev/api/films/4/');
```

### Filters (filtros.php)
Its possible to use filters to manipulate streams.
Useful to manipulate big files, while its send to the memory

Get all stream filter to use with `stream_filter_append()`:
```
> php -a
> php > var_dump(stream_get_filters());
array(9) {
  [0]=>
  string(6) "zlib.*"
  [1]=>
  string(15) "convert.iconv.*"
  [2]=>
  string(12) "string.rot13"
  [3]=>
  string(14) "string.toupper"
  [4]=>
  string(14) "string.tolower"
  [5]=>
  string(17) "string.strip_tags"
  [6]=>
  string(9) "convert.*"
  [7]=>
  string(8) "consumed"
  [8]=>
  string(7) "dechunk"
}
```

#### Custom filters
Extend the class `php_user_filter`.

### Links
PHP Streams - Alexandre Gaigalas
https://www.youtube.com/watch?v=ZRYMzS97HVQ

Lib to facilitate stream manipulation
https://github.com/clue/php-stream-filter

Filters with `file()`, `file_get_contents()`, `readfile()`:
php://filter
https://www.php.net/manual/en/wrappers.php.php

## Class 4
### STDIN
Read STDIN from keyboard
```php
fopen('php://stdin', 'r'); // Or const STDIN
```
Resources from `php://` Wrapper doesn't need to close

### STDOUT
Write on STDOUT
```php
fopen('php://stdout', 'r'); // Or const STDOUT
```
Dont use buffer

### STDERR
Write on STDERR
```php
fopen('php://stderr', 'r'); // Or const STDERR
```

https://stackoverflow.com/questions/7027902/does-echo-equal-fputs-stdout

## Class 5 - Context in streams

Context is used to add extra infos to streams

### Create context to streams
`stream_context_create`
https://www.php.net/manual/en/context.php

Create zip with password
```
$ zip --encrypt arquivos_com_senha.zip cursos-php.txt lista-cursos.txt
```

Files: leitor-zip-senha.php, arquivos_com_senha.zip

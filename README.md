# Hastag
Easy to use hashtag system

## Usage

Extract hashtag(s) from the string

`extract.php`

```php
$string = "I like to code in #css, #html, and #php. It makes me #happy.";
$string = getHashTags($string);
echo $string;
```

Modify `hashtag.php` to match your own mysql connection, table and column

```php
$conn = new mysqli('localhost', 'user', 'pass', 'database');
```

```php
$sqlQuery = "SELECT * FROM table where column LIKE '%".$tag."%'";
```

# Redbean-Codeigniter
redbean for Codeigniter library

### How to
---------

- Copy redbean folder to **'Application/libraries/'**

```php
$this->load->library('redbean');
```

Now you can normaly use Redbean

```php
$bean = R::dispense($this->table);
$bean->name = $name;
$bean->value = $val;
R::store($bean);
```
--------

* It is not my code, All credit are to redbean creator!

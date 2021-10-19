# bitcoinfees-php
A PHP package to fetch Bitcoin fee predictions from bitcoinfees.earn.com


## Requirements

* PHP >= 7.2
* ext-json


## Installation


```bash
composer require franjsco/bitcoinfees
```

## Example

```php
use Franjsco\Bitcoinfees\Client;

$client = new Client();

$data = $client->getData();
```


Data example: 
```php
[
  "fastestFee" => "102",
  "halfHourFee" => "102",
  "hourFee" => "88"
]
```
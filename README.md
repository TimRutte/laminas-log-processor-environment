# laminas-log-processor-environment

## Installation

Run the following to install this library:

```bash
$ composer require timrutte/laminas-log-processor-environment
```

## Usage

```php
$logger = new \Laminas\Log\Logger();
$logger->addProcessor(new \TimRutte\Laminas\Log\Processor\Environment());
$writer = new \Laminas\Log\Writer\Stream();
$formatter = new \Laminas\Log\Formatter\Json();
$writer->setFormatter($formatter);
$logger->addWriter($writer);
```

## Support

- [Issues](https://github.com/timrutte/laminas-log-processor-environment/issues/)


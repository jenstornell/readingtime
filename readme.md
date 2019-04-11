# ReadingTime

*Version 1.0*

There are many classes out there that calculates the reading time but no one that I really liked so I made my own thing.

## In short

- Just a single file
- Very small file
- Really simple syntax

## Usage

First include `readingtime.php` to your project.

### Simple

The below will print out the reading time of the input value. By default `200` words per minute is used.

```php
$readingtime = new ReadingTime();
echo $readingtime->set('My text');
```

### Advanced

```php
$readingtime = new ReadingTime(230); // Change words per minute
$readingtime->set('My text');

$time = $readingtime->get();
$time = strtr($time, [ // Change translations
  'seconds' => 'sec',
  'second' => 'sec',
  'minutes' => 'min',
  'minute' => 'min'
]);

echo $time;
echo $readingtime->seconds(); // Print out seconds
echo $readingtime->minutes(); // Print out minutes
```

As seen above, `get()` is used in this case to get the reading time, instead of getting it directly from `set()`. It's up to you which way you choose.

## Donate

Donate to [DevoneraAB](https://www.paypal.me/DevoneraAB) if you want.

## License

MIT
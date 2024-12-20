<?php

require 'vendor/autoload.php';
use Hackzilla\PasswordGenerator\Generator\ComputerPasswordGenerator;
use Cocur\Slugify\Slugify;
use Thoma\MyPassword\MyUrl;



$generator = new ComputerPasswordGenerator();

$generator
  ->setOptionValue(ComputerPasswordGenerator::OPTION_UPPER_CASE, true)
  ->setOptionValue(ComputerPasswordGenerator::OPTION_LOWER_CASE, true)
  ->setOptionValue(ComputerPasswordGenerator::OPTION_NUMBERS, true)
  ->setOptionValue(ComputerPasswordGenerator::OPTION_SYMBOLS, false)
;

$password = $generator->generatePassword();
?>

<h1>
    Password generator
</h1>
<?php
echo $password;
echo '<br />';
?>

<h1>
    Slugify
</h1>

<?php

$slugify = new Slugify();

$url = new MyUrl();
echo $url->slugify("https://www.example.org", "Das ist ein langer Text");

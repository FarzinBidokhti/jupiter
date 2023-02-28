![Jupiter package](/image/jupiter.png)

# Jupiter

Jupiter is Laravel package for generate fake data for you.

# Table of Contents

- [Get started with Jupiter]
  - [Requires](#requires)
  - [Installation](#installation)
- [Usage]
  - [Create object](#object)
  - [sample usage](#sample)

## requires

```sh
PHP: ^8.0
```

## installation

```sh
composer require synon/jupiter
```

## object

For create a object from Jupiter class you should pass 'Fa' for persian data or 'En' for english data.

```php
use Synon\Jupiter\Jupiter;
.
.
.
$persianJupiter = new Jupiter('Fa');
$englishJupiter = new Jupiter('En');
```

## sample

```php
echo $persianJupiter->firstNameMale();             // return 'فرزین';
echo $englishJupiter->firstNameMale();             // return 'farzin';

echo $persianJupiter->firstNameFemale();           // return 'شیرین';
echo $englishJupiter->firstNameFemale();           // return 'shirin';

echo $persianJupiter->firstNameMix();              // return 'شیرین یا فرزین';
echo $englishJupiter->firstNameMix();              // return 'shirin or farzin';

echo $persianJupiter->lastName();                  // return 'محسنیان';
echo $englishJupiter->lastName();                  // return 'mohsenian';

echo $persianJupiter->fullNameMale();              // return 'فرزین بیدختی';
echo $englishJupiter->fullNameMale();              // return 'farzin bidokhti';

echo $persianJupiter->fullNameFemale();            // return 'شیرین محسنیان';
echo $englishJupiter->fullNameFemale();            // return 'shirin mohsenian';

echo $persianJupiter->fullNameMix();               // return 'فرزین بیدختی یا شیرین محسنیان';
echo $englishJupiter->fullNameMix();               // return 'farzin bidokhti or shrin mohsenian';

echo $persianJupiter->company();                   // return 'پارس پک';
echo $englishJupiter->company();                   // return 'microsoft';

echo $englishJupiter->domain();                    // return 'ir';

echo $englishJupiter->email();                     // return 'john_Haag@gmail.com';
echo $englishJupiter->email('sample', 'test');     // return 'john_Haag@sample.test';
```

Good luck.

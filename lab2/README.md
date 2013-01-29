Lab2 solution
====
The solution is provided for demonstration purpose, and is set up to be more like a real-world project so you can gain
a deeper understanding of how to set up PHP project. Please be aware that this structure is not meant to be perfect
and it is only provided for educational purpsoe. You may apply the same principle to your project, but you should
make proper changes to fit your personal or organizational need.

Project Structure
===
```
- README.md                                  // Project readme
- Src/                                       // Where src code resides, namespace is set up to match the same folder structure
- └── Util
-     └── StringUtil.php
- Tests/                                     // Where test code resides, it follows the same folder structure as src
- ├── Bootstrap.php                          // unit test bootstrap, so we can avoid declaring manual file inclusion
- ├── Conf
- │   └── phpunit.xml                        // Unit test config
- └── Src
-     └── Util
-             └── StringUtilTest.php         // Unit test for StringUtil
- Vendors                                    // Where composer installs all dependencies to, this folder will created after running composer update. See "How to install code" section below.
- bootstrap.php                              // Sets up auto loading by loading composer auto-generated files
- composer.json                              // composer config file, I chose class-map as my auto-loading mechanism (you may also configure it to be PSR-0)
```

Autoloading:
===
I mentioned there are a number of different ways to auto-load files in PHP, PSR-0 and class-map are the most popular implemenations.
- PSR-0 specification: https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-0.md
- Class-map (basically a hash-table uses object name as key and absolute file path as value).

Ralph Schindler (a core developer for the Zend Framework) has an interesting article compares these two approaches:
http://ralphschindler.com/2011/09/19/autoloading-revisited

How to install code?
===
- Make sure you have composer installed.
- Install dependencies with:

```bash
composer update -v -o
```

Once you run the command, you will notice it genertes a composer.lock file, which saves some meta data for caching purpose,
as well as installing dependencies into the Vendors folder (per the way I configured).

One interesting thing to note: cmoposer update establishes real network connections every time, regardless whether the dependencies
are installed. With that said, after you have downloaded the dependencies the first time, you can and should use composer install, install
doesn't re-fetch dependencies update and only re-generate local class map, which will be much faster.

```bash
composer install -v -o
```

How to run unit test:
====
I specifically load up my configuration file to load my project level configuration, which loads up
bootstrap and sets proper error level for running unit tests.

```bash
./Vendors/phpunit/phpunit/composer/bin/phpunit -c Tests/Conf/phpunit.xml
```

Output (on my machine):
```
[jayzeng] ~/Projects/UW-PHP-course/lecture/lecture2/lab2_solution] (master)>  ./Vendors/phpunit/phpunit/composer/bin/phpunit -c Tests/Conf/phpunit.xml
PHPUnit 3.7.13-1-gc80d9a4 by Sebastian Bergmann.

Configuration read from /Users/jayzeng/Projects/UW-PHP-course/lecture/lecture2/lab2_solution/Tests/Conf/phpunit.xml

..........

Time: 0 seconds, Memory: 2.50Mb

OK (10 tests, 10 assertions)
```

How to generate code coverage:
====
```bash
./Vendors/phpunit/phpunit/composer/bin/phpunit -c Tests/Conf/phpunit.xml --coverage-html=code_coverage
```

Questions?
====
Create an issue on the course repository!

Find bugs/typos?
====
Really? That's awesome, send in a pull request and you will get bonus points!

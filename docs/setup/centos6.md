# Installing on CentOS 6

The main issue with installing Cachet on CentOS 6 is the old PHP version. Laravel and Composer expect a version of PHP of greater than or equal to 5.4, which is the default that ships with CentOS. You also need the same version of the required extensions.

## Remi Repo

To solve this problem, the 3rd party [http://rpms.famillecollet.com/](Remi Repo) can be used, which provides newer versions of PHP.

NOTE: This will upgrade existing versions of PHP on your system, so if you already have a PHP 5.3 requirement, you'll need to consider using [RedHat's Software Collections](https://access.redhat.com/documentation/en-US/Red_Hat_Developer_Toolset/1/html-single/Software_Collections_Guide/) which allows you to install PHP 5.4 alongside the systems PHP 5.3. You'll need to compile some of the extensions yourself though




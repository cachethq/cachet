# Upgrading cachet 2.3 to 2.4

# PHP 7
Cachet 2.4 is build using the Laravel 5.6 which requires at least PHP 7.1.3 or higher.

# Backups
In previous versions Cachet would ship with `backup-manager/laravel` to create database backups at certain points when 
running the software. This is no longer provided by default in 2.4. You are free to implement your custom backup 
solution when running cachet on your environments. If you do prefer a backup solution close to the pre 2.4 Cachet version: 
Spatie has created [a backup manager](https://github.com/spatie/laravel-backup) that comes close to the original implementation.   

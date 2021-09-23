Problem 1
    - yajra/laravel-oci8[v7.1.0, ..., 7.x-dev] require ext-oci8 >=2.0.0 -> it is missing from your system. Install or enable PHP's oci8 extension.
    - Root composer.json requires yajra/laravel-oci8 ^7.1 -> satisfiable by yajra/laravel-oci8[v7.1.0, v7.1.1, 7.x-dev].

To enable extensions, verify that they are enabled in your .ini files:
    - C:\xampp\php\php.ini
You can also run `php --ini` inside terminal to see which files are used by PHP in CLI mode.

Installation failed, reverting ./composer.json and ./composer.lock to their original content.

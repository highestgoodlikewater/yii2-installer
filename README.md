# A Custom Theme and Module Installer for Yii2
This is for Yii2 package authors to require in their composer.json. It will install the themes and modules
on the application root path under themes and modules folders.

## Example composer.json File for module

```json
{
    "name": "vendor/yii2-your-package-name",
    "type": "fbarrento-yii2",
    "require" : {
        "fbarrento/yii2-installer" : "*"
    }
}
```

This would install you package to the modules folder on the application root when user runs
`php composer.phar install`.

So submit your packages to [packagist.org](http://packagist.org)!

## Example composer.json File for theme

```json
{
    "name": "vendor/yii2-theme-your-theme-name",
    "type": "fbarrento-yii2",
    "require" : {
        "fbarrento/yii2-installer" : "*"
    }
}
```

This would install you package to the themes folder on the application root when user runs
`php composer.phar install`.

So submit your packages to [packagist.org](http://packagist.org)!


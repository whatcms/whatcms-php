# WhatCMS PHP API
A simple PHP wrapper for WhatCMS API calls
[WhatCMS.org](https://whatcms.org).


## Installing WhatCMS

The recommended way to install WhatCMS is through
[Composer](http://getcomposer.org).

```bash
# Install Composer
curl -sS https://getcomposer.org/installer | php
```

Next, run the Composer command to install the latest stable version of WhatCMS:

```bash
php composer.phar require whatcms/whatcms-php
```

After installing, you need to require Composer's autoloader:

```php
require 'vendor/autoload.php';
```
# WhatCMS PHP API
A simple PHP wrapper for WhatCMS API calls

- [API Documentation](https://whatcms.org/API)
- [Get API Key](https://whatcms.org/Subscriptions)
- [WhatCMS.org](https://whatcms.org)


## Installation

We recommended installing whatcms-php through [Composer](http://getcomposer.org).

```bash
# Install Composer
curl -sS https://getcomposer.org/installer | php
```

Next, run the Composer command to install the latest stable version of WhatCMS:

```bash
php composer.phar require whatcms/whatcms-php
```

Once installed, you can use the WhatCMS class to fetch results:

```php
require 'vendor/autoload.php';

$key = 'Your API Key';
$detector = new \WhatCMS\WhatCMS($key);
$check_url = 'en.wikipedia.org';

$result	 = $detector->CheckUrl($check_url);
print_r($result)
```


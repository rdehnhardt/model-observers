# model-observer
Set observer for model

## Installation

Run the following command to get the latest version package

```
composer require rdehnhardt/model-observer
```

```php
// app/Customer.php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Rdehnhardt\ModelObserver\ModelObserver;

class Customer extends Model
{
    use ModelObserver;

    /**
     * Models Observer
     *
     * @var string
     */
    protected static $observer = UserObserver::class;
}
```

<a name="contributing"></a>
## Contributing

Contributions are welcomed; to keep things organized, all bugs and requests should be opened on github issues tab for the main project in the [rdehnhardt/model-observer/issues](https://github.com/rdehnhardt/model-observer/issues).

All pull requests should be made to the branch Develop, so they can be tested before being merged into the master branch.

<a name="faq"></a>
## Having problems?

If you are having problems with the use of this package, there is likely someone has faced the same problem. You can find common answers to their problems:

* [Github Issues](https://github.com/rdehnhardt/model-observer/issues?page=1&state=closed)

<a name="license"></a>
### License

The model-observer package is open source software licensed under the [license MIT](http://opensource.org/licenses/MIT)

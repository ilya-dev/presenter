# Presenter

Assuming that you have a `users` table with a column called `name`.

`app/presenters/UserPresenter.php`:

```php

class UserPresenter extends Presenter {

    public function name()
    {
        return ucfirst($this->name);
    }

}

```

`app/controllers/UserController.php`:

```php

class UserController extends BaseController {

    // .....

    public function show($id)
    {
        $user = User::findOrFail($id);

        return View::make('users.show', [
            'user' => wrap($user)
        ]);
    }

}

```

`app/views/users/show.blade.php`:

```html+php

<p>Your name is {{ $user->name }}</p>

```

# Important things to know about

+ your Eloquent models remain untouched
+ you should tweak your `composer.json` file just a bit:

```json

"autoload": {
    "classmap": [
        "app/controllers",
        // stuff here
        "app/presenters"
    ]
}

```

Now create the `app/presenters` directory and run `composer dump-autoload`.


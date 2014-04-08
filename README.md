# Presenter

What it will look like:

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


<?php require base_path("Views/partials/header.php") ?>
<?php require base_path("Views/partials/nav.php") ?>
<main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
            <div class="sm:mx-auto sm:w-full sm:max-w-sm">
                <img class="mx-auto h-10 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company">
                <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Login to get more acess.</h2>
            </div>

            <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">

                <?php $formInput = "block w-full rounded-md border-0 py-1.5 px-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" ?>

                <form class="space-y-6" action="/session" method="POST">
                    <div>
                        <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email address</label>
                        <div class="mt-2">
                            <input id="email" name="email" type="email" autocomplete="email" class="<?= $formInput ?>" value="<?= old('email') ?>">
                        </div>

                        <?php if (isset($errors['email'])) : ?>
                            <span class="text-red-500 mt-2 inline-block text-xs font-semibold"><?= $errors['email'] ?></span>
                        <?php endif ?>

                    </div>

                    <div>
                        <div class="flex items-center justify-between">
                            <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
                            <div class="text-sm">
                                <a href="#" class="font-semibold text-indigo-600 hover:text-indigo-500">Forgot password?</a>
                            </div>
                        </div>
                        <div class="mt-2">
                            <input id="password" name="password" type="password" class="<?= $formInput ?>">
                        </div>

                        <?php if (isset($errors['password'])) : ?>
                            <span class="text-red-500 mt-2 inline-block text-xs font-semibold"><?= $errors['password'] ?></span>
                        <?php endif ?>

                    </div>

                    <div>
                        <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Sign in</button>
                    </div>

                </form>

                <p class="mt-10 text-center text-sm text-gray-500">
                    Does not have account?
                    <a href="/register" class="font-semibold leading-6 text-indigo-600 hover:text-indigo-500">Sign up</a>
                </p>
            </div>
        </div>

    </div>
</main>
<?php require base_path("Views/partials/footer.php") ?>
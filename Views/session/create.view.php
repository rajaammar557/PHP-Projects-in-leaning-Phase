<?php require base_path("Views/partials/header.php") ?>

<?php require base_path("Views/partials/nav.php") ?>

<?php require base_path("Views/partials/formHeader.php") ?>

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

<?php require base_path("Views/partials/formFooter.php") ?>

<?php require base_path("Views/partials/footer.php") ?>
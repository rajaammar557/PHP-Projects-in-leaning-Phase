<?php require base_path("views/partials/header.php") ?>

<?php require base_path("views/partials/nav.php") ?>

<?php require base_path("views/partials/banner.php") ?>

<main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <form method="post" action="/shortner" class="max-w-xl mx-auto mt-10 py-5 px-9 rounded-xl bg-white shadow-xl">

            <?php $classes = 'block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm sm:leading-6 p-2' ?>
            <div>
                <div class="border-b border-gray-900/10 pb-12">
                    <div class="mt-2 grid grid-cols-1 gap-x-6 gap-y-5 sm:grid-cols-6">

                        <div class="col-span-full">
                            <label for="shortUrl" class="block text-sm font-medium leading-6 text-gray-900">Short Link</label>
                            <div class="mt-2">

                                <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">

                                    <span class="flex select-none items-center pl-3 text-gray-500 sm:text-sm">
                                        <?= $_SERVER['SERVER_NAME'] . ($_SERVER["SERVER_PORT"] !== '80' ? ':' . $_SERVER["SERVER_PORT"] : '') . '/'; ?>
                                    </span>

                                    <input type="text" name="shortUrl" id="shortUrl" autocomplete="shortUrl" class="block border-0 w-full bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6 " value="<?= old('shortUrl') ?>" placeholder="shortlink">

                                </div>

                            </div>

                            <?php if (isset($errors['shortUrl'])) : ?>
                                <span class="text-red-500 mt-2 inline-block text-xs font-semibold"><?= $errors['shortUrl'] ?></span>
                            <?php endif ?>
                        </div>

                        <div class="col-span-full">
                            <label for="fullUrl" class="block text-sm font-medium leading-6 text-gray-900">Full Url</label>
                            <div class="mt-2">
                                <input id="fullUrl" name="fullUrl" placeholder="https://examplesite.com" class="<?= $classes ?>" value="<?= old('fullUrl') ?>">
                            </div>
                            <?php if (isset($errors['fullUrl'])) : ?>
                                <span class="text-red-500 mt-2 inline-block text-xs font-semibold"><?= $errors['fullUrl'] ?></span>
                            <?php endif ?>
                        </div>

                        <div class="col-span-full">
                            <label for="description" class="block text-sm font-medium leading-6 text-gray-900">Description</label>
                            <div class="mt-2">
                                <input id="description" name="description" class="<?= $classes ?>" placeholder="Write Description" value="<?= old('description') ?>">
                            </div>
                            <?php if (isset($errors['description'])) : ?>
                                <span class="text-red-500 mt-2 inline-block text-xs font-semibold"><?= $errors['description'] ?></span>
                            <?php endif ?>
                        </div>

                    </div>
                </div>

            </div>

            <div class="mt-6 flex items-center justify-end gap-x-6">
                <a href="/notes">
                    <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
                </a>
                <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"><?= $button ?></button>
            </div>
        </form>
    </div>
</main>
<?php require base_path("views/partials/footer.php") ?>
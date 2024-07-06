<?php require base_path("views/partials/header.php") ?>

<?php require base_path("views/partials/nav.php") ?>

<?php require base_path("views/partials/banner.php") ?>

<main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <form method="post" action="/note" class="max-w-xl mx-auto mt-10 py-5 px-9 rounded-xl bg-white shadow-xl">
            <div>
                <div class="border-b border-gray-900/10 pb-12">
                    <div class="mt-2 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <input type="hidden" name="_method" value="PATCH">
                        <input type="hidden" name="id" value="<?= $note['id'] ?>">
                        <div class="col-span-full">
                            <label for="body" class="block text-sm font-medium leading-6 text-gray-900">Note Body</label>
                            <div class="mt-2">
                                <textarea id="body" name="body" rows="5" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm sm:leading-6 p-2" placeholder="Write your awasome ideas here...."><?= $_POST['body'] ?? $note['body'] ?></textarea>
                            </div>
                            <?php if (isset($errors['body'])) : ?>
                                <span class="text-red-500 mt-2 inline-block text-xs font-semibold"><?= $errors['body'] ?></span>
                            <?php endif ?>
                        </div>

                    </div>
                </div>

            </div>

            <div class="mt-6 flex items-center justify-end gap-x-6">
                <a href="/notes">
                    <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
                </a>
                <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Update</button>
            </div>
        </form>
    </div>
</main>
<?php dd($_SESSION) ?>
<?php require base_path("views/partials/footer.php") ?>
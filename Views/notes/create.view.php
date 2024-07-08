<?php require base_path("views/notes/_formHeader.php") ?>

<form method="post" action="/note" class="max-w-xl mx-auto mt-10 py-5 px-9 rounded-xl bg-white shadow-xl">
    <div>
        <div class="border-b border-gray-900/10 pb-12">
            <div class="mt-2 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

                <div class="col-span-full">
                    <label for="title" class="block text-sm font-medium leading-6 text-gray-900">Note Title</label>
                    <div class="mt-2">
                        <input id="title" name="title" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm sm:leading-6 p-2" placeholder="Write Title" value="<?= old('title') ?>">
                    </div>
                    <?php if (isset($errors['title'])) : ?>
                        <span class="text-red-500 mt-2 inline-block text-xs font-semibold"><?= $errors['title'] ?></span>
                    <?php endif ?>
                </div>

                <div class="col-span-full">
                    <label for="body" class="block text-sm font-medium leading-6 text-gray-900">Note Body</label>
                    <div class="mt-2">
                        <textarea id="body" name="body" rows="5" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm sm:leading-6 p-2" placeholder="Write your awasome ideas here...."><?= old('body') ?></textarea>
                    </div>
                    <?php if (isset($errors['body'])) : ?>
                        <span class="text-red-500 mt-2 inline-block text-xs font-semibold"><?= $errors['body'] ?></span>
                    <?php endif ?>
                </div>

                <?php require base_path("views/notes/_formFooter.php") ?>
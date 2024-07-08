<?php require base_path("Views/partials/header.php") ?>

<?php require base_path("Views/partials/nav.php") ?>

<?php require base_path("Views/partials/banner.php") ?>
<main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <!-- component -->
        <div class="flex justify-center mt-5">
            <div class="overflow-x-auto">
                <table class="min-w-full bg-white shadow-md rounded-xl">
                    <thead>
                        <tr class="bg-blue-gray-100 text-gray-700">
                            <th class="py-3 px-4 text-left">#no.</th>
                            <th class="py-3 px-4 text-left">Title</th>
                            <th class="py-3 px-4 text-left">Note</th>
                            <th class="py-3 px-4 text-left">Action</th>
                        </tr>
                    </thead>
                    <tbody class="text-blue-gray-900">
                        <?php $i = 0; ?>
                        <?php foreach ($notes as $note) : ?>
                            <?php $i++ ?>
                            <tr class="border-b border-blue-gray-200">
                                <td class="py-3 px-4"><?= $i ?></td>
                                <td class="py-3 px-4"><?= htmlspecialchars($note['title']) ?></td>
                                <td class="py-3 px-4">
                                    <?= substr(htmlspecialchars($note['body']), 0, 25) ?>
                                </td>

                                <td class="py-3 px-4">
                                    <a href="/note?id=<?= $note['id'] ?>" class="font-medium text-blue-600 hover:text-blue-800">Show Note</a>
                                </td>
                            </tr>
                        <?php endforeach ?>

                    </tbody>
                </table>
                <a href="/note/create" class="text-sm text-green-500 border border-current px-3 py-1 rounded mt-5 inline-block">Create a new note</a>

            </div>
        </div>
    </div>
</main>

<?php require base_path("Views/partials/footer.php") ?>
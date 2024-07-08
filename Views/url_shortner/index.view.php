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
                            <th class="py-3 px-4 text-left">#Sno.</th>
                            <th class="py-3 px-4 text-left">Short Links</th>
                            <th class="py-3 px-4 text-left">Full Url</th>
                            <th class="py-3 px-4 text-left">Description</th>
                            <th class="py-3 px-4 text-left">Action</th>
                        </tr>
                    </thead>
                    <tbody class="text-blue-gray-900">
                        <?php $i = 0; ?>

                        <?php foreach ($links as $link) : ?>

                            <?php
                            $i++;
                            $shortLink = $_SERVER['SERVER_NAME']
                                . ($_SERVER["SERVER_PORT"] !== '80' ? ':' . $_SERVER["SERVER_PORT"] : '') .
                                '/' . htmlspecialchars($link['shortUrl']);

                            $url = htmlspecialchars($link['fullUrl']);

                            $fullUrl = strlen($url) > 25 ? substr(htmlspecialchars($link['fullUrl']), 0, 25) . '...' : ''
                            ?>

                            <tr class="border-b border-blue-gray-200">
                                <td class="py-3 px-4"><?= $i ?></td>
                                <td class="py-3 px-4">
                                    <a class="hover:text-blue-500" target="_blank" href="http://<?= $shortLink ?>">
                                        <?= $shortLink ?>
                                    </a>
                                </td>
                                <td class="py-3 px-4">
                                    <a class="hover:text-blue-500" target="_blank" href="<?= $url ?>">
                                        <?= $fullUrl ?>
                                    </a>
                                </td>
                                <td class="py-3 px-4"><?= htmlspecialchars($link['description']) ?></td>

                                <td class="py-3 px-4">
                                        <form action="/shortner" method="post">
                                            <input type="hidden" name="_method" value="DELETE">
                                            <input type="hidden" name="id" value="<?= $link['id'] ?>">
                                            <button class="text-sm text-red-500 border border-current px-3 py-1 rounded">Delete</button>
                                        </form>
                                </td>
                            </tr>
                        <?php endforeach ?>

                    </tbody>
                </table>
                <a href="/shortner/create" class="text-sm text-green-500 border border-current px-3 py-1 rounded mt-5 inline-block">Create a
                    new short link</a>

            </div>
        </div>
    </div>
</main>
<?php require base_path("Views/partials/footer.php") ?>
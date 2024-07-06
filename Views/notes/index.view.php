<?php require base_path("Views/partials/header.php") ?>

<?php require base_path("Views/partials/nav.php") ?>

<?php require base_path("Views/partials/banner.php") ?>
<main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <ul>
            <?php foreach ($notes as $note) : ?>
                <li>
                    <a href="/note?id=<?= $note['id'] ?>" class="text-blue-500 underline">
                        <?= htmlspecialchars($note['body']) ?>
                    </a>
                </li>
            <?php endforeach ?>
        </ul>
        <a href="/note/create" class="mt-5 text-blue-500 hover:underline inline-block btn btn-primary">Create a new note</a>
    </div>
</main>

<?php require base_path("Views/partials/footer.php") ?>
<?php require base_path("views/partials/header.php") ?>

<?php require base_path("views/partials/nav.php") ?>

<?php require base_path("views/partials/banner.php") ?>

<main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">

        
        <h1 class="text-2xl font-semibold"><?= ucfirst(htmlspecialchars($note['title'])) ?></h1>

        <pre><p class="text-lg font-semibold mt-4"><?= htmlspecialchars($note['body']) ?></p></pre>
        <div class="mt-6 flex space-x-4 mb-5">

            <a class="text-sm text-green-500 border border-current px-3 py-1 rounded" href="/note/edit?id=<?= $note['id'] ?>">Edit</a>

            <form action="/note" method="post">
                <input type="hidden" name="_method" value="DELETE">
                <input type="hidden" name="id" value="<?= $note['id'] ?>">
                <button class="text-sm text-red-500 border border-current px-3 py-1 rounded">Delete</button>
            </form>
        </div>
        <a href="/notes" class="text-blue-500 hover:underline">Go back to the notes</a>

    </div>
</main>

<?php require base_path("views/partials/footer.php") ?>
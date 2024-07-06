<?php require base_path("views/partials/header.php") ?>
<main class="bg-slate-300">
    <div class="mx-auto max-w-7xl h-screen px-4 sm:px-6 lg:px-8 grid">
        <h1 class="text-5xl block font-semibold my-auto text-center text-gray-900 uppercase">
            <span class="text-red-600"><?= $code ?></span>
            <?= $errorMessage ?>
        </h1>
    </div>
</main>
<?php require base_path("views/partials/footer.php") ?>
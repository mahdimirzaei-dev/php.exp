<?php require_once basePath("views/partials/head.php") ?>
<?php require_once basePath("views/partials/nav.php") ?>
<?php require_once basePath("views/partials/banner.php") ?>

<main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <p class="text-white font-medium"><?= htmlspecialchars($note['body']) ?></p>
        <p class="mt-4">
            <a href="/note/edit?id=<?= $note['id'] ?>" class="border px-1 border-yellow-500 text-yellow-500 rounded text-sm cursor-pointer hover:text-black hover:bg-yellow-500 transition-colors duration-100">Edit</a>
        </p>
        <p class="mt-4">
            <a href="/notes" class="text-sky-500 hover:underline">Go back ...</a>
        </p>
    </div>
</main>

<?php require_once basePath("views/partials/footer.php") ?>
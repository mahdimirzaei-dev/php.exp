<?php require_once basePath("views/partials/head.php") ?>
<?php require_once basePath("views/partials/nav.php") ?>
<?php require_once basePath("views/partials/banner.php") ?>

<main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <p class="text-white font-medium"><?= htmlspecialchars($note['body']) ?></p>
        <form method="POST" class="mt-4">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="id" class="" value="<?= $note['id'] ?>">
            <button type="submit" class="border px-1 border-rose-500 text-rose-500 rounded text-sm cursor-pointer hover:text-white hover:bg-rose-500 transition-colors duration-100">Delete</button>
        </form>
        <p class="mt-4">
            <a href="/notes" class="text-sky-500 hover:underline">Go back ...</a>
        </p>
    </div>
</main>

<?php require_once basePath("views/partials/footer.php") ?>
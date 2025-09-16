<?php require_once "partials/head.php" ?>
<?php require_once "partials/nav.php" ?>
<?php require_once "partials/banner.php" ?>

<main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <p class="mb-8">
            <a href="/notes" class="text-sky-500 hover:underline">Go back ...</a>
        </p>
        <p class="text-white font-medium"><?= $note['title'] ?></p>
    </div>
</main>

<?php require_once "partials/footer.php" ?>
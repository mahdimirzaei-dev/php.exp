<?php require_once "views/partials/head.php" ?>
<?php require_once "views/partials/nav.php" ?>
<?php require_once "views/partials/banner.php" ?>

<main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <p class="text-white font-medium"><?= $note['title'] ?></p>
        <p class="mt-4">
            <a href="/notes" class="text-sky-500 hover:underline">Go back ...</a>
        </p>
    </div>
</main>

<?php require_once "views/partials/footer.php" ?>
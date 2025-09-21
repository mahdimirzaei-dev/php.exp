<?php require_once basePath("views/partials/head.php") ?>
<?php require_once basePath("views/partials/nav.php") ?>
<?php require_once basePath("views/partials/banner.php") ?>

<main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <p class="text-white">Hello, <?= $_SESSION["user"]["email"] ?? "Guest" ?>. Welcome to the home page.</p>
    </div>
</main>

<?php require_once basePath("views/partials/footer.php") ?>
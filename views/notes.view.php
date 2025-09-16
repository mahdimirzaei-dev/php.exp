<?php require_once "partials/head.php" ?>
<?php require_once "partials/nav.php" ?>
<?php require_once "partials/banner.php" ?>

<main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <ul class="">
            <?php foreach ($notes as $note): ?>
                <li class="">
                    <a href="/note?id=<?= $note['id'] ?>" class="text-sky-500 hover:underline">
                        <?= $note['title'] ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</main>

<?php require_once "partials/footer.php" ?>
<?php require_once "views/partials/head.php" ?>
<?php require_once "views/partials/nav.php" ?>
<?php require_once "views/partials/banner.php" ?>

<main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <ul class="">
            <?php foreach ($notes as $note): ?>
                <li class="">
                    <a href="/note?id=<?= $note['id'] ?>" class="text-sky-500 hover:underline">
                        <?= htmlspecialchars($note['body']) ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
        <p class="mt-8">
            <a href="notes/create" class="text-blue-500 hover:underline">Create Note</a>
        </p>
    </div>
</main>

<?php require_once "views/partials/footer.php" ?>
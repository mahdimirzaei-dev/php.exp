<?php require_once basePath("views/partials/head.php") ?>
<?php require_once basePath("views/partials/nav.php") ?>
<?php require_once basePath("views/partials/banner.php") ?>

<main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <form method="POST">
            <div class="mb-4">
                <label for="title" class="block text-sm text-gray-300 font-medium mb-1">Title</label>
                <input type="text" name="title" id="title" class="w-full border-2 border-sky-200 rounded px-2 py-1 text-white focus:outline-0 focus:border-sky-500" value="<?= $_POST['title'] ?? '' ?>">
                <?php if (isset($errors['title'])): ?>
                    <span class="text-rose-500 text-sm ms-1">
                        <?= $errors['title'] ?>
                    </span>
                <?php endif; ?>
            </div>
            <div class="mb-4">
                <label for="body" class="block text-sm text-gray-300 font-medium mb-1">Body</label>
                <textarea name="body" id="body" class="w-full border-2 border-sky-200 rounded px-2 py-1 text-white focus:outline-0 focus:border-sky-500"><?= $_POST['body'] ?? '' ?></textarea>
                <?php if (isset($errors['body'])): ?>
                    <span class="text-rose-500 text-sm ms-1">
                        <?= $errors['body'] ?>
                    </span>
                <?php endif; ?>
            </div>
            <div class="">
                <button type="submit" class="px-2 py-1 bg-sky-500 rounded text-white cursor-pointer">Create</button>
            </div>
        </form>
    </div>
</main>

<?php require_once basePath("views/partials/footer.php") ?>
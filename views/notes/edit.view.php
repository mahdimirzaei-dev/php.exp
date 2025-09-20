<?php require_once basePath("views/partials/head.php") ?>
<?php require_once basePath("views/partials/nav.php") ?>
<?php require_once basePath("views/partials/banner.php") ?>

<main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <form action="/note" method="POST">
            <input type="hidden" name="_method" value="PATCH">
            <input type="hidden" name="id" class="" value="<?= $note['id'] ?>">
            <div class="mb-4">
                <label for="title" class="block text-sm text-gray-300 font-medium mb-1">Title</label>
                <input type="text" name="title" id="title" class="w-full border-2 border-sky-200 rounded px-2 py-1 text-white focus:outline-0 focus:border-sky-500" value="<?= $note['title'] ?>">
                <?php if (isset($errors['title'])): ?>
                    <span class="text-rose-500 text-sm ms-1">
                        <?= $errors['title'] ?>
                    </span>
                <?php endif; ?>
            </div>
            <div class="mb-4">
                <label for="body" class="block text-sm text-gray-300 font-medium mb-1">Body</label>
                <textarea name="body" id="body" class="w-full border-2 border-sky-200 rounded px-2 py-1 text-white focus:outline-0 focus:border-sky-500"><?= $note['body'] ?></textarea>
                <?php if (isset($errors['body'])): ?>
                    <span class="text-rose-500 text-sm ms-1">
                        <?= $errors['body'] ?>
                    </span>
                <?php endif; ?>
            </div>
            <div class="flex justify-between">
                <div class="flex gap-x-4">
                    <button type="submit" class="px-2 py-1 bg-sky-500 rounded text-white cursor-pointer">Update</button>
                    <a href="/notes" class="px-2 py-1 bg-slate-500 rounded text-white cursor-pointer">Cancel</a>
                </div>
                <!-- <form method="POST">
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" name="id" class="" value="<?= $note['id'] ?>">
                    <button type="submit" class="border px-2 py-1 border-rose-500 text-rose-500 rounded text-sm cursor-pointer hover:text-white hover:bg-rose-500 transition-colors duration-100">Delete</button>
                </form> -->
            </div>
        </form>
    </div>
</main>

<?php require_once basePath("views/partials/footer.php") ?>
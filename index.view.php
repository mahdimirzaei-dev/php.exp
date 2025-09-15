<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP.EXP</title>
    <link rel="stylesheet" href="/public/assets/css/index.css">
</head>

<body class="flex flex-col min-h-dvh items-center justify-center">
    <h1 class="text-3xl font-bold text-gray-700">
        <?= $message ?>
    </h1>
    <ul class="">
        <?php foreach (
            array_filter($books, function ($book) {
                return $book['releaseYear'] > 2000;
            }) as $book
        ): ?>
            <li class="">
                <a href="<?= $book['purchaseUrl'] ?>" class="text-sky-500 font-medium hover:text-sky-700">
                    <?= $book['name'] ?> (<?= $book['releaseYear'] ?>)
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>
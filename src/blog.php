<?php require_once "./functions.php"; ?>
<?php include_once './partials/header.php'; ?>

<body>
    <?php include_once './partials/navbar.php'; ?>

    <section class="post pb-52">
        <div class="w-[80%] mx-auto">
            <?php foreach (getSinglePost() as $post) : ?>

                <h1 class="text-2xl"><?php echo $post['title']; ?></h1>
                <p class="mt-4">author: <?php echo $post['author'] ?></p>
                <div class="tag-div flex gap-4">
                    <p>Tags:</p>
                    <?php foreach ($post['tag'] as $tag) : ?>
                        <a href="#" class="underline"><?php echo $tag; ?></a>
                    <?php endforeach; ?>
                </div>

                <p class="text-gray-700 mt-4"><?php echo $post['body']; ?></p>
                <div class="social-share mt-6">
                    <h2>Share this post!</h2>
                    <div class="flex gap-3">
                        <a class="text-2xl text-secondary" href="#"><i class="fa-brands fa-square-facebook"></i></a>
                        <a class="text-2xl text-secondary" href="#"><i class="fa-brands fa-square-twitter"></i></a>
                        <a class="text-2xl text-secondary" href="#"><i class="fa-brands fa-instagram"></i></a>
                    </div>

                </div>
            <?php endforeach; ?>
        </div>
    </section>

</body>
<?php include_once './partials/footer.php' ?>

</html>
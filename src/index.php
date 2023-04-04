<?php require_once "./functions.php"; ?>
<?php include_once './partials/header.php'; ?>


<body>
    <?php include_once './partials/navbar.php'; ?>
    <section class="featured-posts w-[80%] mx-auto py-4 mb-20">
        <h2 class="text-primary text-2xl">Featured Posts</h2>
        <div class="posts grid grid-cols-[repeat(auto-fill,_minmax(300px,_1fr))] gap-4 md:gap-x-4	 mt-5">

            <?php foreach (featuredPosts() as $post) : ?>



                <div class="post  bg-[#edecfb] rounded-md overflow-hidden">
                    <a href="./blog.php?slug=<?php echo $post['slug'] ?>">
                        <img class="w-full h-[200px] object-cover" src="<?php echo $post['imgUri'] ?>" alt="">
                        <div class="post-content mt-2 p-5">
                            <h1 class=" text-xl"><?php echo $post['title'] ?></h1>
                            <p class="mt-4 text-gray-600"><?php echo $post['excerpt']; ?></p>
                            <a href="./blog.php?slug=<?php echo $post['slug'] ?>" class="mt-4 underline hover:text-secondary">Read More</a>
                        </div>
                    </a>

                </div>


            <?php endforeach; ?>
        </div>

    </section>

</body>
<?php include_once './partials/footer.php' ?>

</html>
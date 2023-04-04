<?php require_once "./functions.php"; ?>
<?php include_once './partials/header.php'; ?>

<body>
    <?php include_once './partials/navbar.php'; ?>

    <section class="all-blogs py-5">
        <div class="posts-sidebar w-[80%] mx-auto flex flex-col md:flex-row gap-4">
            <aside class=" basis-[30%] flex-grow">
                <form action="" method="get" class="w-full">
                    <div class="formgroup flex items-center">
                        <input class="w-full py-[.4rem] px-2  outline-none focus:outline-none  rounded-l-md  border-gray-500 border-[1px] border-solid" type="text" name="search" id="search" placeholder="search by tag">
                        <button type="submit" class="icon bg-secondary px-4 py-2 rounded-r-md "><i class="fa-solid fa-magnifying-glass"></i></button>
                    </div>
                </form>

                <!-- tags -->

                <div class="tags flex flex-wrap gap-4 mt-5">
                    <?php foreach (getTags() as $tags) :
                        foreach ($tags as $tag) :
                    ?>

                            <a class="underline " href="./blogs.php?tag=<?php echo $tag; ?>"> <?php echo $tag; ?></a>

                    <?php
                        endforeach;
                    endforeach;
                    ?>
                </div>

            </aside>
            <div class="basis-[70%] flex-grow  grid grid-cols-[repeat(auto-fill,_minmax(250px,_1fr))] gap-4 md:gap-x-4">
                <?php foreach (filterPosts() as $post) : ?>



                    <div class="post flex-grow flex-shrink basis-[300px] bord bg-[#edecfb] rounded-md overflow-hidden">
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
                <?php if (count(filterPosts()) == 0) : ?>
                    <h3>No post found!</h3>
                <?php endif; ?>
            </div>
        </div>
    </section>

</body>
<?php include_once './partials/footer.php' ?>

</html>
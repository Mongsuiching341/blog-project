<?php include "./functions.php"; ?>

<?php

$msg = '';
$error = '';

if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    if ($name !== '' && $email !== '' && $subject !== '' && $message !== '') {

        $userData =  array('name' => $name, 'email' => $email, 'subject' => $subject, 'message' => $message);

        $path = getcwd() . "\\db\\messages.json";

        $data  =  json_decode(file_get_contents($path), true);

        array_push($data['users'], $userData);

        $encodeData = json_encode($data);
        file_put_contents($path, $encodeData);
        $msg = "We have received your message!";
    } else {
        $error = "Input is empty!";
    }
}
?>

<?php include_once './partials/header.php'; ?>

<body>
    <?php include_once './partials/navbar.php'; ?>
    <section class="contact-title text-center py-[2rem]">
        <h1 class="text-[2.5rem] font-bold">Get in touch!</h1>
        <p class="text-gray-500 mt-3">Contact us for the quote, help to join the team</p>
    </section>
    <section class="details">
        <div class="md:w-[80%] flex-wrap  md:px-[0rem] px-6 mx-auto  flex gap-4 items-center justify-center">
            <div class="street flex items-center justify-center py-[1.5rem] px-[2rem] bg-secondary rounded-md flex-col gap-3">
                <i class="fa-solid fa-location-dot text-extra text-[1.5rem]"></i>
                <p class="text-extra">102 street, 2714 Don</p>
            </div>
            <div class="street flex items-center justify-center py-[1.5rem] px-[2rem] bg-secondary rounded-md flex-col gap-3">
                <i class="fa-solid fa-square-phone text-[1.5rem] text-extra"></i>
                <p class="text-extra">+02 139202 2021</p>
            </div>
            <div class="street flex items-center justify-center py-[1.5rem] px-[2rem] bg-secondary rounded-md flex-col gap-3">
                <i class="fa-solid fa-envelope text-[1.5rem] text-extra"></i>
                <a class="text-extra" href="#">hello@php.com</a>
            </div>
        </div>
    </section>
    <section class="mt-12 pb-32 relative">

        <div class="form w-[60%] mx-auto">
            <p class=" text-green-500"><?php echo $msg ?></p>
            <p class=" text-red-500"><?php echo $error ?></p>
            <form class="contact-form" action="" method="post" class="bg-extra md:p-8 rounded-md">
                <div class="flex gap-4 md:flex-row flex-col">
                    <div class="form-part-one flex gap-4 flex-col flex-grow">
                        <div class="form-input">
                            <label class="mb-[.7rem] block" for="name">Your name</label>
                            <div class="input-div relative">
                                <i class="fa-solid fa-user-large absolute left-[10px] top-[50%] -translate-y-[50%]"></i>
                                <input type="text" name="name" id="name" class="w-full py-[1rem] ps-[2rem] outline-none focus:outline-none border-2 border-gray-400 focus:border-secondary rounded-md">
                            </div>
                        </div>
                        <div class="form-input">
                            <label class="mb-[.7rem] block" for="email">Email</label>
                            <div class="input-div relative">
                                <i class="fa-solid fa-envelope absolute left-[10px] top-[50%] -translate-y-[50%]"></i>
                                <input type="email" name="email" id="email" class="w-full py-[1rem] ps-[2rem] outline-none focus:outline-none border-2 border-gray-400 focus:border-secondary rounded-md">
                            </div>
                        </div>
                        <div class="form-input">
                            <label class="mb-[.7rem] block" for="subject">Subject</label>
                            <div class="input-div relative">
                                <i class="fa-regular fa-pen-to-square absolute left-[10px] top-[50%] -translate-y-[50%]"></i>
                                <input type="text" name="subject" id="subject" class="w-full py-[1rem] ps-[2rem] outline-none focus:outline-none border-2 border-gray-400 focus:border-secondary rounded-md">
                            </div>
                        </div>
                    </div>
                    <div class="form-part-two flex-grow ">
                        <label class="mb-[.7rem] block" for="name">Message</label>
                        <div class="form-input flex h-full items-ste items-stretch">

                            <textarea placeholder="your message" class="resize-none w-full h-[282px] py-[1rem] ps-[2rem] outline-none focus:outline-none border-2 border-gray-400 focus:border-secondary rounded-md" name="message" id="message"></textarea>

                        </div>
                    </div>
                </div>
                <button type="submit" name="submit" class="bg-secondary py-[.5rem] px-[2rem] rounded-md mx-auto mt-8 block">Send Message</button>
            </form>
        </div>
    </section>


</body>
<?php include_once './partials/footer.php' ?>

</html>
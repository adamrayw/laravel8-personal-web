

<?php $__env->startSection('title', 'Home | Adam Ray'); ?>

<?php $__env->startSection('content'); ?>
<main class="max-w-7xl mx-auto p-6">
    <div class="container">
        <div class="h-screen flex justify-center items-center flex-col">
            <h1 class="text-4xl md:text-6xl text-center text-gray-800 font-semibold animate__animated animate__fadeInUpBig">Hi, My name's Adam Ray, I want to be a Web Developer.</h1>
            <p class="text-center mt-14 h-40 italic font-light" id="element"></p>
            <div class="sosmed grid grid-rows-1 grid-cols-1 md:grid-cols-3 gap-5 text-center">
                <div class="border border-gray-800 px-6 py-2 text-xl hover:bg-blue-600 hover:border-blue-800 hover:text-white text-gray-800 transition duration-200 ease-in cursor-pointer">
                    <a href="" class="">
                        <i class="fab fa-instagram"></i>
                        Instagram
                    </a>
                </div>
                <div class="border border-gray-800 px-6 py-2 text-xl hover:bg-blue-600 hover:border-blue-800 hover:text-white text-gray-800 transition duration-200 ease-in cursor-pointer">
                    <a href="" class="">
                        <i class="fab fa-twitter"></i>
                        Twitter
                    </a>
                </div>
                <div class="border border-gray-800 px-6 py-2 text-xl hover:bg-blue-600 hover:border-blue-800 hover:text-white text-gray-800 transition duration-200 ease-in cursor-pointer">
                    <a href="" class="">
                        <i class="fab fa-github"></i>
                        Github
                    </a>
                </div>

            </div>
        </div>
    </div>


</main>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel-8-belajar\resources\views/home/index.blade.php ENDPATH**/ ?>
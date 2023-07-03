<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!--Style/Font-->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="./output.css" rel="stylesheet">
        <!--end-->

        <!--Page title-->
        <title>Home</title>
        <!--End Page title-->
    </head>
    <body alass="antialiased">
        <!--Navbar-->
        <nav class="relative container mx-auto pt-2">
            <!-- flex container -->
            <div class="flex items-center justify-between">
                <!-- Logo -->
                <div class="pt-1 px-1">
                    <img src="{{ asset('images/logo/tidetech.png') }}" class=" h-12 w-auto" alt="">
                </div>
                <!--nav items -->
                <div class="hiddden md:flex space-x-12">
                    <a href="" class=" hover:underline">Home</a>
                    <a href="" class=" hover:underline">About</a>
                    <a href="" class=" hover:underline">Resume</a>
                    <a href="" class=" hover:underline">Repositories</a>
                    <a href="" class=" hover:underline">Contact</a>
                </div>
                <a href="#" class="hidden md:block p-3 px-6 pt-2 text-white bg-lightBlue rounded-full baseline hover:bg-white hover:border-4 hover:text-black">
                    Download CV
                </a>
        </nav>
        <!--hero-->
        <section class="hero bg-[url('/images/bg/softwaredev-2.jpeg')] bg-cover bg-center shadow-lg">
            <!-- Flex Container -->
            <div class="container flex flex-col-reverse md:flex-row items-center px-12 py-14 mx-auto mt-2 space-y-0 md:space-y-0">
              <!-- Left item -->
              <div class="flex flex-col mb-32 mt-32 space-y-2 md:w-1/2">
                <h2 class="max-w-md font-light text-4xl text-center text-shadow text-gray-100 tracking-wider md:text-left slide-in-left">
                  HI, I AM
                </h2>
                <p class="max-w-md text-4xl font-bold text-center text-white text-shadow md:text-5xl md:text-left slide-in-left-delay">
                  CLIFFORD KWAKU KYEREME MANU
                </p>
                <h2 class="max-w-md text-2xl text-center text-shadow text-gray-100 space-x-12 tracking-wider md:text-left slide-in-left-delay">
                  SOFTWARE DEVELOPER
                </h2>
              </div>
            </div>
          </section>

          <section id="body" class="flex justify-center items-center">
            <!-- Flex Container -->
            <div class="container flex flex-col-reverse md:flex-row items-center px-12 mx-auto mt-10 space-y-0 md:space-y-0 fade-up">
              <!-- Left Item -->
              <div class="flex flex-col mb-32 space-y-12 md:w-1/2">
                <h1 class="max-w-4xl font-bold text-center md:text-5xl md:text-left">
                  About Me
                </h1>
                <p class="max-w-sm text-center text-darkGrayishBlueLight md:text-left">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit quo soluta illo aut adipisci, a modi eos, ipsa quidem voluptatum consequuntur? Eligendi quas veritatis unde temporibus cupiditate dolores ducimus facere?
                </p>
                <div class="flex justify-center md:justify-start">
                  <a href="#" class="p-3 px-6 pt-2 text-white bg-lightBlue rounded-full baseline hover:bg-white hover:border-4 hover:text-black">
                    Download CV
                  </a>
                </div>
              </div>
              <!-- Image -->
              <div class="md:w-1/2">
                <img src="{{ asset('images/sbg/coding102.png') }}" alt="">
              </div>
            </div>
          </section>
        <section id="body" class=" pt-16 pb-16">
            <div class="flex justify-center">
                <h1 class="text-3xl font-bold pb-11 fade-up">WHAT I DO</h1>
              </div>
            <div class="flex justify-center">
                <div></div>
              <div class="flex">
                <div class="max-w-xs mx-4 bg-stone-200 rounded-lg overflow-hidden transform transition-transform duration-300 hover:scale-105 fade-up">
                  <div class="px-6 py-4">
                    <!-- Card content -->
                    <h2 class="text-center font-bold">Web development</h2>
                    <p class=" text-center">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint dignissimos harum adipisci iste labore sunt suscipit expedita quidem similique ipsam minus hic ex, voluptates earum excepturi error veritatis dolorem natus.</p>
                  </div>
                </div>
                <div class="max-w-xs mx-4 bg-stone-200 rounded-lg overflow-hidden transform transition-transform duration-300 hover:scale-105 fade-up">
                  <div class="px-6 py-4">
                    <!-- Card content -->
                    <h2 class="text-center font-bold">UX/UI design</h2>
                    <p class=" text-center">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint dignissimos harum adipisci iste labore sunt suscipit expedita quidem similique ipsam minus hic ex, voluptates earum excepturi error veritatis dolorem natus.</p>
                  </div>
                </div>
                <div class="max-w-xs mx-4 bg-stone-200 rounded-lg overflow-hidden transform transition-transform duration-300 hover:scale-105 fade-up">
                  <div class="px-6 py-4">
                    <!-- Card content -->
                    <h2 class="text-center font-bold">Graphic design</h2>
                    <p class=" text-center">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint dignissimos harum adipisci iste labore sunt suscipit expedita quidem similique ipsam minus hic ex, voluptates earum excepturi error veritatis dolorem natus.</p>
                  </div>
                </div>
                <div class="max-w-xs mx-4 bg-stone-200 rounded-lg overflow-hidden transform transition-transform duration-300 hover:scale-105 fade-up">
                  <div class="px-6 py-4">
                    <!-- Card content -->
                    <h2 class="text-center font-bold">Database management</h2>
                    <p class=" text-center">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint dignissimos harum adipisci iste labore sunt suscipit expedita quidem similique ipsam minus hic ex, voluptates earum excepturi error veritatis dolorem natus.</p>
                  </div>
                </div>
              </div>
            </div>
        </section>

          <style>
            @keyframes slideLeft {
              from {
                transform: translateX(-100%);
              }
              to {
                transform: translateX(0);
              }
            }

            .slide-in-left {
              animation: slideLeft 1s ease-in-out;
            }

            .slide-in-left-delay {
              animation: slideLeft 1s ease-in-out 0.5s;
            }
            @keyframes fadeUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
            }

            .fade-up {
            opacity: 0;
            animation: fadeUp 1s ease-in-out forwards;
            }

            .fade-up.delay-500 {
            animation-delay: 500ms;
            }

            .fade-up.delay-1000 {
            animation-delay: 1000ms;
            }
            </style>
            <script>
                window.addEventListener('scroll', function() {
                  const elements = document.querySelectorAll('.fade-up');
                  for (let i = 0; i < elements.length; i++) {
                    const element = elements[i];
                    const position = element.getBoundingClientRect().top;
                    const screenHeight = window.innerHeight;
                    if (position < screenHeight * 0.8) {
                      element.classList.add('fade-up-visible');
                    }
                  }
                });
                </script>
    </body>

</html>

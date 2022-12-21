<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Laravel</title>
        <!--Vite Necessary-->
        @vite('resources/css/app.css') 
    </head>
    <body >
        <header class="text-blue-500 body-font">
            <!--Header color-->
            <div class="container mx-auto flex flex-wrap p-5 w-full flex-col md:flex-row items-center h-17 bg-gradient-to-r from-blue-500 to-yellow-500"">
                <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
                    <!--Logo where to put-->
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-blue-500 rounded-full" viewBox="0 0 24 24">
                        <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
                    </svg>
                    <span class="ml-3 text-xl">TAPM</span>
                    </a>

                    <!--Links for log-in/sign-up-->
                    <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
                    <a class="mr-5 text-gray-900 hover:text-blue-500">Log-in</a>
                    <a class="mr-5 text-gray-900 hover:text-blue-500">Sign-up</a>
                    </nav>
                    <button class="inline-flex items-center bg-blue-900 border-0 py-1 px-3 focus:outline-none hover:bg-yellow-500 rounded text-base mt-4 md:mt-0">Button
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
                        <path d="M5 12h14M12 5l7 7-7 7"></path>
                    </svg>
                </button>
            </div>
        </header>

        <!--Projects Displayed-->     
        <section class="text-gray-600 body-font">
            <div class="container px-5 py-24 mx-auto">
                <div class="flex flex-col text-center w-full mb-20">
                <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">TAPM LOGO HERE</h1>
                <p class="lg:w-2/3 mx-auto leading-relaxed text-base">About TAPM and Description Here.</p>
                </div>
                <div class="flex flex-wrap -m-4">
                <div class="lg:w-1/3 sm:w-1/2 p-4">
                    <div class="flex relative">
                    <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center" src="https://dummyimage.com/600x360">
                    <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
                        <h2 class="tracking-widest text-sm title-font font-medium text-blue-500 mb-1">Date/year</h2>
                        <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Title of Project</h1>
                        <p class="leading-relaxed">About the Project</p>
                    </div>
                    </div>
                </div>
                <div class="lg:w-1/3 sm:w-1/2 p-4">
                    <div class="flex relative">
                    <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center" src="https://dummyimage.com/601x361">
                    <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
                        <h2 class="tracking-widest text-sm title-font font-medium text-blue-500 mb-1">Date/year</h2>
                        <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Title of Project</h1>
                        <p class="leading-relaxed">About the Project</p>
                    </div>
                    </div>
                </div>
                <div class="lg:w-1/3 sm:w-1/2 p-4">
                    <div class="flex relative">
                    <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center" src="https://dummyimage.com/603x363">
                    <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
                        <h2 class="tracking-widest text-sm title-font font-medium text-blue-500 mb-1">Date/year</h2>
                        <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Title of Project</h1>
                        <p class="leading-relaxed">About the Project</p>
                    </div>
                    </div>
                </div>
                <div class="lg:w-1/3 sm:w-1/2 p-4">
                    <div class="flex relative">
                    <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center" src="https://dummyimage.com/602x362">
                    <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
                        <h2 class="tracking-widest text-sm title-font font-medium text-blue-500 mb-1">Date/year</h2>
                        <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Title of Project</h1>
                        <p class="leading-relaxed">About the Project</p>
                    </div>
                    </div>
                </div>
                <div class="lg:w-1/3 sm:w-1/2 p-4">
                    <div class="flex relative">
                    <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center" src="https://dummyimage.com/605x365">
                    <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
                        <h2 class="tracking-widest text-sm title-font font-medium text-blue-500 mb-1">Date/year</h2>
                        <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Title of Project</h1>
                        <p class="leading-relaxed">About the Project</p>
                    </div>
                    </div>
                </div>
                <div class="lg:w-1/3 sm:w-1/2 p-4">
                    <div class="flex relative">
                    <img alt="gallery" class="absolute inset-0 w-full h-full object-cover object-center" src="https://dummyimage.com/606x366">
                    <div class="px-8 py-10 relative z-10 w-full border-4 border-gray-200 bg-white opacity-0 hover:opacity-100">
                        <h2 class="tracking-widest text-sm title-font font-medium text-blue-500 mb-1">Date/year</h2>
                        <h1 class="title-font text-lg font-medium text-gray-900 mb-3">Title of Project</h1>
                        <p class="leading-relaxed">About the Project</p>
                    </div>
                    </div>
                </div>
                </div>
            </div>
        </section>     
    </body>
</html>

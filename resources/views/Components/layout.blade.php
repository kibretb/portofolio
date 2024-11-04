<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <!-- <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" /> -->

        @vite(['resources/css/app.css', 'resources/js/app.js'])

    </head>
    <body>
        <div id="app" class="flex flex-col min-h-screen">
            <header class="border-b">
                    <nav class="p-5 flex justify-end space-x-5">
                        <div><a href="#summary">Summary</a></div>
                        <div><a href="#experience">Experience</a></div>
                        <div><a href="#qualifications">Core Qualifications</a></div>
                        <div><a href="#education">Education</a></div>
                        <div><a href="#technical-skills">Technical Skills</a></div>
                        <div><a href="#key-projects">Key Projects</a></div>
                    </nav>
                    <div class="contact-details container mx-auto p-5 flex flex-col items-center justify-center">
                        <div class="">Kibret Bereket Yohannes</div>
                        <div>kibretberekets@gmail.com</div>
                        <div>07830434510</div>
                    </div>
            </header>
            {{ $slot }}  
            <footer class="border-t mt-5 pt-5">
                <div class="container mx-auto bg-white flex flex-col md:flex-row items-start md:items-center space-y-0 md:space-y-0 md:space-x-5"> 
                    <div class="px-4 md:px-4 py-1 md:p-4 w-full md:w-1/5 text-lg">Contact me</div>
                    <form class="p-4 w-full md:w-4/5 md:mr-5">
                        <div class="mb-5">
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
                            <input type="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@company.com" required />
                        </div>
                        <div>
                            <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your message</label>
                            <textarea id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write your thoughts here..."></textarea>
                        </div>
                        <div class="mt-3 mb-3 items-center">
                            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                        </div>      
                    </form>
                </div>
                <div class="h-14"></div>
            </footer>
        </div>
    </body>
</html>
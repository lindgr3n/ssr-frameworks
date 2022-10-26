<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        @vite('resources/css/app.css')
        <!-- Styles -->
       
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="">        
            <header class="relative bg-white">
                <nav aria-label="Top" class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                    <div class="border-b border-gray-200">
                        <div class="flex h-16 items-center justify-between">
                            <div class="flex flex-1 items-center lg:hidden">
                                <!-- Mobile menu toggle, controls the 'mobileMenuOpen' state. -->
                                <button type="button" class="-ml-2 rounded-md bg-white p-2 text-gray-400">
                                    <span class="sr-only">Open menu</span>
                                    <!-- Heroicon name: outline/bars-3 -->
                                    <svg
                                        class="h-6 w-6"
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="1.5"
                                        stroke="currentColor"
                                        aria-hidden="true"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"
                                        />
                                    </svg>
                                </button>
        
                                <a href="#" class="ml-2 p-2 text-gray-400 hover:text-gray-500">
                                    <span class="sr-only">Search</span>
                                    <!-- Heroicon name: outline/magnifying-glass -->
                                    <svg
                                        class="h-6 w-6"
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="1.5"
                                        stroke="currentColor"
                                        aria-hidden="true"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z"
                                        />
                                    </svg>
                                </a>
                            </div>
        
                            <!-- Logo -->
                            <a href="#" class="flex">
                                <span class="sr-only">Your Company</span>
                                <img
                                    class="h-8 w-auto"
                                    src="https://tailwindui.com/img/logos/mark.svg?color=indigo&amp;shade=600"
                                    alt
                                />
                            </a>
        
                            <div class="flex flex-1 items-center justify-end">
                                <a href="#" class="hidden text-gray-700 hover:text-gray-800 lg:flex lg:items-center">
                                    <img
                                        src="https://tailwindui.com/img/flags/flag-canada.svg"
                                        alt
                                        class="block h-auto w-5 flex-shrink-0"
                                    />
                                    <span class="ml-3 block text-sm font-medium">CAD</span>
                                    <span class="sr-only">, change currency</span>
                                </a>
        
                                <!-- Search -->
                                <a href="#" class="ml-6 hidden p-2 text-gray-400 hover:text-gray-500 lg:block">
                                    <span class="sr-only">Search</span>
                                    <!-- Heroicon name: outline/magnifying-glass -->
                                    <svg
                                        class="h-6 w-6"
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="1.5"
                                        stroke="currentColor"
                                        aria-hidden="true"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z"
                                        />
                                    </svg>
                                </a>
        
                                <!-- Account -->
                                <a href="#" class="p-2 text-gray-400 hover:text-gray-500 lg:ml-4">
                                    <span class="sr-only">Account</span>
                                    <!-- Heroicon name: outline/user -->
                                    <svg
                                        class="h-6 w-6"
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke-width="1.5"
                                        stroke="currentColor"
                                        aria-hidden="true"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z"
                                        />
                                    </svg>
                                </a>
        
                                <!-- Cart -->
                                <div class="ml-4 flow-root lg:ml-6">
                                    <a href="#" class="group -m-2 flex items-center p-2">
                                        <!-- Heroicon name: outline/shopping-bag -->
                                        <svg
                                            class="h-6 w-6 flex-shrink-0 text-gray-400 group-hover:text-gray-500"
                                            xmlns="http://www.w3.org/2000/svg"
                                            fill="none"
                                            viewBox="0 0 24 24"
                                            stroke-width="1.5"
                                            stroke="currentColor"
                                            aria-hidden="true"
                                        >
                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z"
                                            />
                                        </svg>
                                        <span class="ml-2 text-sm font-medium text-gray-700 group-hover:text-gray-800"
                                            >0</span
                                        >
                                        <span class="sr-only">items in cart, view bag</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </header>
            <main class="w-full h-full">
                <div class="">
                  <div class="mx-auto max-w-2xl py-16 px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">
                    <h2 class="sr-only">Products</h2>
                    <div class="grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
                      @foreach($products as $product)
                        <a href={{$product->href}} class="group">
                            <div class="aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-w-7 xl:aspect-h-8">
                            <img src={{$product->imageSrc}} alt={{$product->imageAlt}} class="h-full w-full object-cover object-center group-hover:opacity-75" />
                            </div>
                            <h3 class="mt-4 text-sm text-gray-700">{{ $product->name }}</h3>
                            <p class="mt-1 text-lg font-medium text-gray-900">{{ $product->price }}</p>
                        </a>
                      @endforeach
                    </div>
                  </div>
                </div>
              </main>
        </div>
        
    </body>
</html>

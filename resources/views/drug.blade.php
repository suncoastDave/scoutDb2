<!-- head -->
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible"
          content="ie=edge">
    <title>Document</title></head>
<script src="https://cdn.tailwindcss.com"></script>
<body>
<main class="container mx-auto px-4">
    <!-- header -->
    <nav class="bg-white shadow">
        <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
            <div class="relative flex h-16 justify-between">
                <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
                    <div class="flex flex-shrink-0 items-center">
                        <img class="block h-8 w-auto lg:hidden"
                             src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600"
                             alt="Your Company">
                        <img class="hidden h-8 w-auto lg:block"
                             src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600"
                             alt="Your Company">
                    </div>
                    <div class="hidden sm:ml-6 sm:flex sm:space-x-8">
                        <!-- Current: "border-indigo-500 text-gray-900", Default: "border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700" -->
                        <a href="#"
                           class="inline-flex items-center border-b-2 border-indigo-500 px-1 pt-1 text-sm font-medium text-gray-900">Dashboard</a>
                        <a href="#"
                           class="inline-flex items-center border-b-2 border-transparent px-1 pt-1 text-sm font-medium text-gray-500 hover:border-gray-300 hover:text-gray-700">Team</a>
                        <a href="#"
                           class="inline-flex items-center border-b-2 border-transparent px-1 pt-1 text-sm font-medium text-gray-500 hover:border-gray-300 hover:text-gray-700">Projects</a>
                        <a href="#"
                           class="inline-flex items-center border-b-2 border-transparent px-1 pt-1 text-sm font-medium text-gray-500 hover:border-gray-300 hover:text-gray-700">Calendar</a>
                    </div>
                </div>


    </nav>

    <!-- body start -->
    <!-- breadcrumbs start -->
    <nav class="flex pt-12 pb-5 pl-12"
         aria-label="Breadcrumb">
        <ol role="list"
            class="flex items-center space-x-4">
            <li>
                <div>
                    <a href="#"
                       class="text-gray-400 hover:text-gray-500">
                        <svg class="h-5 w-5 flex-shrink-0"
                             viewBox="0 0 20 20"
                             fill="currentColor"
                             aria-hidden="true">
                            <path fill-rule="evenodd"
                                  d="M9.293 2.293a1 1 0 011.414 0l7 7A1 1 0 0117 11h-1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-3a1 1 0 00-1-1H9a1 1 0 00-1 1v3a1 1 0 01-1 1H5a1 1 0 01-1-1v-6H3a1 1 0 01-.707-1.707l7-7z"
                                  clip-rule="evenodd"/>
                        </svg>
                        <span class="sr-only">Home</span>
                    </a>
                </div>
            </li>

            <li>
                <div class="flex items-center">
                    <svg class="h-5 w-5 flex-shrink-0 text-gray-300"
                         fill="currentColor"
                         viewBox="0 0 20 20"
                         aria-hidden="true">
                        <path d="M5.555 17.776l8-16 .894.448-8 16-.894-.448z"/>
                    </svg>
                    <a href="#"
                       class="ml-4 text-sm font-medium text-gray-500 hover:text-gray-700">Prices</a>
                </div>
            </li>

            <li>
                <div class="flex items-center">
                    <svg class="h-5 w-5 flex-shrink-0 text-gray-300"
                         fill="currentColor"
                         viewBox="0 0 20 20"
                         aria-hidden="true">
                        <path d="M5.555 17.776l8-16 .894.448-8 16-.894-.448z"/>
                    </svg>
                    <a href="#"
                       class="ml-4 text-sm font-medium text-gray-500 hover:text-gray-700"
                       aria-current="page">Phentermine</a>
                </div>
            </li>
        </ol>
    </nav>
    <!-- Results section header -->
    <!--
  This example requires some changes to your config:

  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/forms'),
    ],
  }
  ```
-->
    <div class="container py-4 px-12">
        <div class="md:grid md:grid-cols-3 md:gap-6">
            <div class="md:col-span-1">
                <div class="px-4 sm:px-0">
                    <h2 class="text-base font-semibold leading-6 text-gray-900">Phentermine</h2>
                    <p class="mt-1 text-sm text-gray-600">Change the information to the right and click the update
                        button</p>
                </div>
            </div>
            <div class="mt-5 md:col-span-2 md:mt-0 max-w-md">
                <form action="#"
                      method="POST">
                    <div class="shadow sm:overflow-hidden sm:rounded-md">
                        <div class="space-y-6 bg-white px-4 py-5 sm:p-6">
                            <div>
                                <div class="mt-2">

                                    <!--
  This example requires some changes to your config:

  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/forms'),
    ],
  }
  ```
-->
                                    <div class="max-w-md">
                                        <label for="location"
                                               class="block text-sm font-medium leading-6 text-gray-900">Change your
                                            drug</label>
                                        <select id="location"
                                                name="location"
                                                class="mt-2 block w-full rounded-md border-0 py-1.5 pl-3 pr-10 text-gray-900 ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                            <option>United States</option>
                                            <option selected>Canada</option>
                                            <option>Mexico</option>
                                        </select>
                                    </div>
                                    <div class="accordion my-4 max-w-md">
                                        <div class="accordion-item">
                                            <details class="">
                                                <summary>Update other details...</summary>
                                                <div class="border-l-2 border-gray-300 pl-4 pr-6 py-2 ">

                                                    <div class="relative my-8">
                                                        <label for="quantity"
                                                               class="absolute -top-2 left-2 inline-block bg-white px-1 text-xs font-medium text-gray-900">Quantity</label>
                                                        <input type="text"
                                                               name="quantity"
                                                               id="quantity"
                                                               class="block w-full rounded-md border-0 py-3 px-2  text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                                               placeholder="30">
                                                    </div>

                                                    <div class="relative my-8">
                                                        <label for="zip"
                                                               class="absolute -top-2 left-2 inline-block bg-white px-1 text-xs font-medium text-gray-900">Zip
                                                            Code</label>
                                                        <input type="text"
                                                               name="zip"
                                                               id="zip"
                                                               class="block w-full rounded-md border-0 py-3 px-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                                               placeholder="12084">
                                                    </div>

                                                    <div class="relative my-8">
                                                        <label for="radius"
                                                               class="absolute -top-2 left-2 inline-block bg-white px-1 text-xs font-medium text-gray-900">Search
                                                            Area (in miles)</label>
                                                        <input type="text"
                                                               name="radius"
                                                               id="radius"
                                                               class="block w-full rounded-md border-0 py-3 px-2  text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                                               placeholder="5">
                                                    </div>
                                                </div>
                                                <div class="bg-gray-50 px-4 py-3 text-right sm:px-6 max-w-md">
                                                    <button type="submit"
                                                            class="inline-flex justify-center rounded-md bg-indigo-600 py-2 px-3 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">
                                                        Update
                                                    </button>
                                                </div>
                                            </details>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                </form>
            </div>
        </div>
    </div>


    <!-- Results section  -->
    <ul role="list"
        class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
        <li class="col-span-1 divide-y divide-gray-200 rounded-lg bg-white shadow">
            <div class="flex w-full items-center justify-between space-x-6 p-6">
                <div class="flex-1 truncate">
                    <div class="flex items-center space-x-3">
                        <h3 class="truncate text-sm font-medium text-gray-900">Phentermine</h3>
                        <span class="inline-block flex-shrink-0 rounded-full bg-green-100 px-2 py-0.5 text-xs font-medium text-green-800">Generic</span>
                    </div>
                    <p class="mt-1 truncate text-sm text-gray-500">Count: 30</p>
                </div>
                <img class="h-10 w-10 flex-shrink-0 rounded-full bg-gray-300"
                     src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=256&h=256&q=60"
                     alt="">
            </div>
            <div>
                <div class="-mt-px flex divide-x divide-gray-200">
                    <div class="flex w-0 flex-1">
                        <a href="mailto:janecooper@example.com"
                           class="relative -mr-px inline-flex w-0 flex-1 items-center justify-center gap-x-3 rounded-bl-lg border border-transparent py-4 text-sm font-semibold text-gray-900">
                            <svg class="h-5 w-5 text-gray-400"
                                 viewBox="0 0 20 20"
                                 fill="currentColor"
                                 aria-hidden="true">
                                <path d="M3 4a2 2 0 00-2 2v1.161l8.441 4.221a1.25 1.25 0 001.118 0L19 7.162V6a2 2 0 00-2-2H3z"/>
                                <path d="M19 8.839l-7.77 3.885a2.75 2.75 0 01-2.46 0L1 8.839V14a2 2 0 002 2h14a2 2 0 002-2V8.839z"/>
                            </svg>
                            Email
                        </a>
                    </div>
                    <div class="-ml-px flex w-0 flex-1">
                        <a href="tel:+1-202-555-0170"
                           class="relative inline-flex w-0 flex-1 items-center justify-center gap-x-3 rounded-br-lg border border-transparent py-4 text-sm font-semibold text-gray-900">
                            <svg class="h-5 w-5 text-gray-400"
                                 viewBox="0 0 20 20"
                                 fill="currentColor"
                                 aria-hidden="true">
                                <path fill-rule="evenodd"
                                      d="M2 3.5A1.5 1.5 0 013.5 2h1.148a1.5 1.5 0 011.465 1.175l.716 3.223a1.5 1.5 0 01-1.052 1.767l-.933.267c-.41.117-.643.555-.48.95a11.542 11.542 0 006.254 6.254c.395.163.833-.07.95-.48l.267-.933a1.5 1.5 0 011.767-1.052l3.223.716A1.5 1.5 0 0118 15.352V16.5a1.5 1.5 0 01-1.5 1.5H15c-1.149 0-2.263-.15-3.326-.43A13.022 13.022 0 012.43 8.326 13.019 13.019 0 012 5V3.5z"
                                      clip-rule="evenodd"/>
                            </svg>
                            Call
                        </a>
                    </div>
                </div>
            </div>
        </li>

        <!-- More people... -->
    </ul>

    <!-- footer -->
    <footer class="bg-white"
            aria-labelledby="footer-heading">
        <h2 id="footer-heading"
            class="sr-only">Footer</h2>
        <div class="mx-auto max-w-7xl px-6 pb-8 pt-16 sm:pt-24 lg:px-8 lg:pt-32">
            <div class="xl:grid xl:grid-cols-3 xl:gap-8">
                <div class="space-y-8">
                    <img class="h-7"
                         src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600"
                         alt="Company name">
                    <p class="text-sm leading-6 text-gray-600">Making the world a better place through constructing
                        elegant hierarchies.</p>
                    <div class="flex space-x-6">
                        <a href="#"
                           class="text-gray-400 hover:text-gray-500">
                            <span class="sr-only">Facebook</span>
                            <svg class="h-6 w-6"
                                 fill="currentColor"
                                 viewBox="0 0 24 24"
                                 aria-hidden="true">
                                <path fill-rule="evenodd"
                                      d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                                      clip-rule="evenodd"/>
                            </svg>
                        </a>

                        <a href="#"
                           class="text-gray-400 hover:text-gray-500">
                            <span class="sr-only">Instagram</span>
                            <svg class="h-6 w-6"
                                 fill="currentColor"
                                 viewBox="0 0 24 24"
                                 aria-hidden="true">
                                <path fill-rule="evenodd"
                                      d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                                      clip-rule="evenodd"/>
                            </svg>
                        </a>

                        <a href="#"
                           class="text-gray-400 hover:text-gray-500">
                            <span class="sr-only">Twitter</span>
                            <svg class="h-6 w-6"
                                 fill="currentColor"
                                 viewBox="0 0 24 24"
                                 aria-hidden="true">
                                <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"/>
                            </svg>
                        </a>

                        <a href="#"
                           class="text-gray-400 hover:text-gray-500">
                            <span class="sr-only">GitHub</span>
                            <svg class="h-6 w-6"
                                 fill="currentColor"
                                 viewBox="0 0 24 24"
                                 aria-hidden="true">
                                <path fill-rule="evenodd"
                                      d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                                      clip-rule="evenodd"/>
                            </svg>
                        </a>

                        <a href="#"
                           class="text-gray-400 hover:text-gray-500">
                            <span class="sr-only">YouTube</span>
                            <svg class="h-6 w-6"
                                 fill="currentColor"
                                 viewBox="0 0 24 24"
                                 aria-hidden="true">
                                <path fill-rule="evenodd"
                                      d="M19.812 5.418c.861.23 1.538.907 1.768 1.768C21.998 8.746 22 12 22 12s0 3.255-.418 4.814a2.504 2.504 0 0 1-1.768 1.768c-1.56.419-7.814.419-7.814.419s-6.255 0-7.814-.419a2.505 2.505 0 0 1-1.768-1.768C2 15.255 2 12 2 12s0-3.255.417-4.814a2.507 2.507 0 0 1 1.768-1.768C5.744 5 11.998 5 11.998 5s6.255 0 7.814.418ZM15.194 12 10 15V9l5.194 3Z"
                                      clip-rule="evenodd"/>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="mt-16 grid grid-cols-2 gap-8 xl:col-span-2 xl:mt-0">
                    <div class="md:grid md:grid-cols-2 md:gap-8">
                        <div>
                            <h3 class="text-sm font-semibold leading-6 text-gray-900">Solutions</h3>
                            <ul role="list"
                                class="mt-6 space-y-4">
                                <li>
                                    <a href="#"
                                       class="text-sm leading-6 text-gray-600 hover:text-gray-900">Marketing</a>
                                </li>

                                <li>
                                    <a href="#"
                                       class="text-sm leading-6 text-gray-600 hover:text-gray-900">Analytics</a>
                                </li>

                                <li>
                                    <a href="#"
                                       class="text-sm leading-6 text-gray-600 hover:text-gray-900">Commerce</a>
                                </li>

                                <li>
                                    <a href="#"
                                       class="text-sm leading-6 text-gray-600 hover:text-gray-900">Insights</a>
                                </li>
                            </ul>
                        </div>
                        <div class="mt-10 md:mt-0">
                            <h3 class="text-sm font-semibold leading-6 text-gray-900">Support</h3>
                            <ul role="list"
                                class="mt-6 space-y-4">
                                <li>
                                    <a href="#"
                                       class="text-sm leading-6 text-gray-600 hover:text-gray-900">Pricing</a>
                                </li>

                                <li>
                                    <a href="#"
                                       class="text-sm leading-6 text-gray-600 hover:text-gray-900">Documentation</a>
                                </li>

                                <li>
                                    <a href="#"
                                       class="text-sm leading-6 text-gray-600 hover:text-gray-900">Guides</a>
                                </li>

                                <li>
                                    <a href="#"
                                       class="text-sm leading-6 text-gray-600 hover:text-gray-900">API Status</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="md:grid md:grid-cols-2 md:gap-8">
                        <div>
                            <h3 class="text-sm font-semibold leading-6 text-gray-900">Company</h3>
                            <ul role="list"
                                class="mt-6 space-y-4">
                                <li>
                                    <a href="#"
                                       class="text-sm leading-6 text-gray-600 hover:text-gray-900">About</a>
                                </li>

                                <li>
                                    <a href="#"
                                       class="text-sm leading-6 text-gray-600 hover:text-gray-900">Blog</a>
                                </li>

                                <li>
                                    <a href="#"
                                       class="text-sm leading-6 text-gray-600 hover:text-gray-900">Jobs</a>
                                </li>

                                <li>
                                    <a href="#"
                                       class="text-sm leading-6 text-gray-600 hover:text-gray-900">Press</a>
                                </li>

                                <li>
                                    <a href="#"
                                       class="text-sm leading-6 text-gray-600 hover:text-gray-900">Partners</a>
                                </li>
                            </ul>
                        </div>
                        <div class="mt-10 md:mt-0">
                            <h3 class="text-sm font-semibold leading-6 text-gray-900">Legal</h3>
                            <ul role="list"
                                class="mt-6 space-y-4">
                                <li>
                                    <a href="#"
                                       class="text-sm leading-6 text-gray-600 hover:text-gray-900">Claim</a>
                                </li>

                                <li>
                                    <a href="#"
                                       class="text-sm leading-6 text-gray-600 hover:text-gray-900">Privacy</a>
                                </li>

                                <li>
                                    <a href="#"
                                       class="text-sm leading-6 text-gray-600 hover:text-gray-900">Terms</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-16 border-t border-gray-900/10 pt-8 sm:mt-20 lg:mt-24">
                <p class="text-xs leading-5 text-gray-500">&copy; 2020 Your Company, Inc. All rights reserved.</p>
            </div>
        </div>
    </footer>

</main>
</body>
</html>

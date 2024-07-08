<nav class="bg-gray-800">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    <!-- <img class="h-8 w-8" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company"> -->
                    <img class="h-8 w-8" src="/assets/images/logo.png" alt="Your Company">
                     <h1></h1>
                </div>
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-4">
                        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                        <a href="/" class="rounded-md px-3 py-2 text-sm font-medium <?= urlIs('/') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' ?>" <?= urlIs('/') ? 'aria-current="page"' : null ?>>Home</a>
                        <a href="/about" class="rounded-md px-3 py-2 text-sm font-medium <?= urlIs('/about') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' ?>" <?= urlIs('/about') ? 'aria-current="page"' : null ?>>About</a>
                        <?php if ($_SESSION['user'] ?? false) : ?>
                            <a href="/notes" class="rounded-md px-3 py-2 text-sm font-medium <?= urlIs('/notes') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' ?>" <?= urlIs('/notes') ? 'aria-current="page"' : null ?>>Notes</a>
                            <a href="/shortner" class="rounded-md px-3 py-2 text-sm font-medium <?= urlIs('/shortner') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' ?>" <?= urlIs('/shortner') ? 'aria-current="page"' : null ?>>Url Shortner</a>
                        <?php endif ?>
                        <a href="/contact" class="rounded-md px-3 py-2 text-sm font-medium <?= urlIs('/contact') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' ?>" <?= urlIs('/contact') ? 'aria-current="page"' : null ?>>Contact</a>
                    </div>
                </div>
            </div>
            <div class="hidden md:block">
                <div class="ml-4 flex items-center md:ml-6">

                    <!-- Profile dropdown -->
                    <div class="relative ml-3">

                        <div>

                            <?php if ($_SESSION['user'] ?? false) : ?>
                                <div class="flex">
                                    <p class="text-gray-100 font-semibold"><?= $_SESSION['user']['name'] ?></p>
                                    <form action="/session" method="post">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button class="ps-3 pt-1/2 text-sm font-medium text-gray-300 hover:text-white">Sign Out</button>
                                    </form>
                                </div>
                            <?php else : ?>
                                <div>
                                    <a href="/register" class="rounded-md px-3 py-2 text-sm font-medium <?= urlIs('/register') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' ?>" <?= urlIs('/register') ? 'aria-current="page"' : null ?>>Register</a>
                                    <a href="/login" class="rounded-md px-3 py-2 text-sm font-medium <?= urlIs('/login') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' ?>" <?= urlIs('/login') ? 'aria-current="page"' : null ?>>Sign In</a>

                                </div>
                            <?php endif ?>

                        </div>
                    </div>
                </div>
            </div>
            <div class="-mr-2 flex md:hidden">
                <!-- Mobile menu button -->
                <button type="button" id="toggle-menu" class="relative inline-flex items-center justify-center rounded-md bg-gray-800 p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" aria-controls="mobile-menu" aria-expanded="false">
                    <span class="absolute -inset-0.5"></span>
                    <span class="sr-only">Open main menu</span>
                    <!-- Menu open: "hidden", Menu closed: "block" -->
                    <svg id="menu-open" class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                    <!-- Menu open: "block", Menu closed: "hidden" -->
                    <svg id="menu-close" class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div class="md:hidden hidden" id="mobile-menu">
        <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">
            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
            <a href="/" class="block rounded-md px-3 py-2 text-base font-medium <?= urlIs('/') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' ?>" <?= urlIs('/') ? 'aria-current="page"' : null ?>>Home</a>
            <a href="/about" class="block rounded-md px-3 py-2 text-base <?= urlIs('/about') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' ?>" <?= urlIs('/about') ? 'aria-current="page"' : null ?>>About us</a>

            <?php if ($_SESSION['user'] ?? false) : ?>
                <a href="/notes" class="block rounded-md px-3 py-2 text-base <?= urlIs('/notes') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' ?>" <?= urlIs('/notes') ? 'aria-current="page"' : null ?>>Notes</a>
                <a href="/shortner" class="block rounded-md px-3 py-2 text-base <?= urlIs('/shortner') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' ?>" <?= urlIs('/shortner') ? 'aria-current="page"' : null ?>>Url Shortner</a>
                <?php endif ?>

            <a href="/contact" class="block rounded-md px-3 py-2 text-base <?= urlIs('/contact') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' ?>" <?= urlIs('/contact') ? 'aria-current="page"' : null ?>>Contact</a>
        </div>
        <div class="border-t border-gray-700 pb-3 pt-4">
            <div class="mt-3 space-y-1 px-2">
                <?php if ($_SESSION['user'] ?? false) : ?>
                    <p class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white"><?= ucfirst($_SESSION['user']['name']) ?></p>
                    <form action="/session" method="POST">
                        <input type="hidden" name="_method" value="DELETE">
                        <button class="w-full text-left block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white">Sign out</button>
                    </form>
                <?php else : ?>
                    <a href="/register" class="block rounded-md px-3 py-2 <?= urlIs('/register') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' ?>" <?= urlIs('/register') ? 'aria-current="page"' : null ?>">Register</a>
                    <a href="/login" class="block rounded-md px-3 py-2 <?= urlIs('/login') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' ?>" <?= urlIs('/login') ? 'aria-current="page"' : null ?>">Sign In</a>

                <?php endif ?>
            </div>
        </div>
    </div>
</nav>

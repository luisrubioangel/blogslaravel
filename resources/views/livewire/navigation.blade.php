<div class="" x-data="{open:false}">
    <nav class="bg-gray-800">
        <div class="px-4 mx-auto sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">

                <div class="flex items-center">
                    <a href="/">
                        <div class="flex-shrink-0">
                            <img class="w-8 h-8" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=500"
                                alt="Your Company">
                        </div>
                    </a>
                    <div class="hidden md:block">
                        <div class="flex items-baseline ml-10 space-x-4">
                            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                            {{-- <a href="#" class="px-3 py-2 text-sm font-medium text-white bg-gray-900 rounded-md"
                                aria-current="page">Dashbzzzoard</a> --}}
                            @foreach ($categories as $category)
                            <a href="{{route('posts.category',$category) }}"
                                class="px-3 py-2 text-sm font-medium text-gray-300 rounded-md hover:bg-gray-700 hover:text-white">{{$category->name}}</a>
                            @endforeach
                        </div>
                    </div>
                </div>

                @auth
                <div class="hidden md:block">
                    <div class="flex items-center ml-4 md:ml-6">

                        <button type="button"
                            class="relative p-1 text-gray-400 bg-gray-800 rounded-full hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
                            <span class="absolute -inset-1.5"></span>
                            <span class="sr-only">View notifications</span>
                            <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                            </svg>
                        </button>
                        <!-- Profile dropdown -->
                        <div class="relative ml-3">
                            <div>
                                <button x-on:click="open=true" type="button"
                                    class="relative flex items-center max-w-xs text-sm bg-gray-800 rounded-full focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800"
                                    id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                                    <span class="absolute -inset-1.5"></span>
                                    <span class="sr-only">Open user menu</span>
                                    <img class="w-8 h-8 rounded-full" src="{{auth()->user()->profile_photo_url}}"
                                        alt="">
                                </button>
                            </div>




                            <div x-show="open" x-on:click.away="open=false"
                                class="absolute right-0 z-10 w-48 py-1 mt-2 origin-top-right bg-white rounded-md shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
                                role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button"
                                tabindex="-1">

                                <!-- Active: "bg-gray-100", Not Active: "" -->
                                <a href="{{route('profile.show')}}" class="block px-4 py-2 text-sm text-gray-700"
                                    role="menuitem" tabindex="-1" id="user-menu-item-0">Your Profile</a>

                                @can('admin.home')
                                <a href="{{route('admin.index')}}" class="block px-4 py-2 text-sm text-gray-700"
                                    role="menuitem" tabindex="-1" id="user-menu-item-1">Dashbord</a>
                                @endcan

                                {{-- <a href="{{route('admin.index')}}" class="block px-4 py-2 text-sm text-gray-700"
                                    role="menuitem" tabindex="-1" id="user-menu-item-1">Dashbord</a> --}}

                                <!-- Authentication -->
                                <form method="POST" action="{{ route('logout') }}" x-data>
                                    @csrf
                                    <a href="{{ route('logout') }}" class="block px-4 py-2 text-sm text-gray-700"
                                        role="menuitem" tabindex="-1" id="user-menu-item-2"
                                        @click.prevent="$root.submit();">Sign out</a>
                                </form>
                            </div>
                        </div>

                    </div>

                </div>
                @else

                <div class="pt-4 pb-3 border-t border-gray-700">
                    <div class="flex px-2 mt-3 space-y-1" x-on:click.away="open=false">
                        <a href="{{route('login')}}"
                            class="flex-1 px-3 py-2 text-base font-medium text-gray-400 rounded-md hover:bg-gray-700 hover:text-white">Login</a>
                        <a href="{{route('register')}}"
                            class="flex-1 px-3 py-2 text-base font-medium text-gray-400 rounded-md hover:bg-gray-700 hover:text-white"">Register</a>

                </div>
                  </div>


                @endauth
                <div x-data=" {open:false}">


                            <!-- menu m-->
                            {{-- <div class="flex -mr-2 md:hidden">
                                <!-- Mobile menu button -->
                                <button type="button" x-on:click="open=true"
                                    class="relative inline-flex items-center justify-center p-2 text-gray-400 bg-gray-800 rounded-md hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800"
                                    aria-controls="mobile-menu" aria-expanded="false">
                                    <span class="absolute -inset-0.5">{{'open'}}</span>
                                    <span class="sr-only">Open main menu</span>
                                    <!-- Menu open: "hidden", Menu closed: "block" -->
                                    <svg class="block w-6 h-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                        stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                                    </svg>
                                    <!-- Menu open: "block", Menu closed: "hidden" -->
                                    <svg class="hidden w-6 h-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                        stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </button>
                            </div> --}}




                            <!-- Mobile menu, show/hide based on menu state. -->
                            <div class="px-4 md:hidden bg-slate-700 po" id="mobile-menu" x-show="open"
                                x-on:click.away="open=false">
                                <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
                                    <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                                    <a href="#"
                                        class="block px-3 py-2 text-base font-medium text-white bg-gray-900 rounded-md"
                                        aria-current="page">Dashbrrrroard</a>
                                    <a href="#"
                                        class="block px-3 py-2 text-base font-medium text-gray-300 rounded-md hover:bg-gray-700 hover:text-white">Team</a>
                                    <a href="#"
                                        class="block px-3 py-2 text-base font-medium text-gray-300 rounded-md hover:bg-gray-700 hover:text-white">Projects</a>
                                    <a href="#"
                                        class="block px-3 py-2 text-base font-medium text-gray-300 rounded-md hover:bg-gray-700 hover:text-white">Calendar</a>
                                    <a href="#"
                                        class="block px-3 py-2 text-base font-medium text-gray-300 rounded-md hover:bg-gray-700 hover:text-white">Reports</a>
                                </div>
                                {{-- <div class="pt-4 pb-3 border-t border-gray-700">
                                    <div class="flex items-center px-5">
                                        <div class="flex-shrink-0">
                                            <img class="w-10 h-10 rounded-full"
                                                src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                                alt="">
                                        </div>
                                        <div class="ml-3">
                                            <div class="text-base font-medium leading-none text-white">Tom Cook</div>
                                            <div class="text-sm font-medium leading-none text-gray-400">tom@example.com
                                            </div>
                                        </div>
                                        <button type="button"
                                            class="relative flex-shrink-0 p-1 ml-auto text-gray-400 bg-gray-800 rounded-full hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
                                            <span class="absolute -inset-1.5"></span>
                                            <span class="sr-only">View notifications</span>
                                            <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                                stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="px-2 mt-3 space-y-1" x-on:click.away="open=false">
                                        <a href="#"
                                            class="block px-3 py-2 text-base font-medium text-gray-400 rounded-md hover:bg-gray-700 hover:text-white">Your
                                            Profile</a>
                                        <a href="#"
                                            class="block px-3 py-2 text-base font-medium text-gray-400 rounded-md hover:bg-gray-700 hover:text-white">Seaattings</a>
                                        <a href="#"
                                            class="block px-3 py-2 text-base font-medium text-gray-400 rounded-md hover:bg-gray-700 hover:text-white">Sign
                                            out</a>
                                    </div>
                                </div>
                            </div>

                    </div>

                </div>
            </div>
    </nav>


</div>
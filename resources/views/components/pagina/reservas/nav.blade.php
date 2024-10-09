@props([
    'nota' => $nota,
    'notaContent' => $notaContent,
])
<nav class=" lg:fixed transition-all top-0 left-0 z-50 duration-500 w-full bg-white border-b border-gray-300">
    @if($nota)
        <x-pagina.nota-header :notaContent='$notaContent' />
    @endif
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="w-full flex flex-col lg:flex-row py-5">
            <div class="flex justify-between lg:flex-row">
                <a href="/" class="flex items-center">
                    <!-- LOGO ----->
                    <img src="{{ asset('images/somosdevslogo.png')}}">
                </a>
                <button data-collapse-toggle="navbar" type="button" class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200" aria-controls="navbar-default" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
            <div class="hidden w-full lg:flex lg:pl-11 max-lg:mt-1 max-lg:h-screen max-lg:overflow-y-auto" id="navbar">
                <ul class="flex lg:items-center lg:justify-center flex-col gap-4 max-lg:pt-4 max-lg:mb-4 lg:mt-0 lg:flex-row lg:mr-auto ">
                    <li>
                        <a href="javascript:;" class="nav-link mb-2 block lg:mr-6 md:mb-0 lg:text-left text-base text-gray-500 font-medium transition-all duration-500 hover:text-gray-900">{{ __('Home') }}</a>
                    </li>
                    <li>
                        <a href="javascript:;" class="nav-link mb-2 block lg:mr-6 md:mb-0 lg:text-left text-gray-500 font-medium transition-all duration-500 hover:text-gray-900">{{ __('About us') }}</a>
                    </li>
                </ul>
                <div class="flex lg:items-center w-full justify-start flex-col lg:flex-row gap-4 lg:w-max max-lg:gap-4 lg:ml-14 lg:justify-end">
                    <div class="relative">
                        <input type="search" class="w-10 h-10 rounded-lg px-2 py-3 outline-0 border border-gray-300 focus-within:pl-10 transition-all duration-500 focus-within:rounded-lg max-lg:focus-within:w-full focus-within:border-gray-300 focus-within:w-44">
                        <svg class="absolute top-2.5 left-2.5 w-5 h-5 pointer-events-none" xmlns="http://www.w3.org/2000/svg" width="19" height="18" viewBox="0 0 19 18" fill="none">
                            <path d="M16.25 15.75L12.98 12.5052M12.98 12.5052C14.0732 11.4184 14.75 9.91325 14.75 8.25C14.75 4.93629 12.0637 2.25 8.75 2.25C5.43629 2.25 2.75 4.93629 2.75 8.25C2.75 11.5637 5.43629 14.25 8.75 14.25C10.4005 14.25 11.8953 13.5836 12.98 12.5052Z" stroke="black" stroke-width="1.6" stroke-linecap="round" />
                        </svg>
                    </div>
                    <button class="py-2.5 px-5 rounded-lg border border-gray-300 bg-white text-sm font-medium text-gray-900 shadow-sm shadow-transparent transition-all duration-500 hover:bg-gray-200 hover:shadow-gray-300 hover:border-gray-200">Login</button>
                    <button class="bg-gray-900 text-white rounded-lg cursor-pointer font-medium text-center shadow-xs transition-all duration-500 py-2.5 px-5 text-sm hover:bg-gray-800">
                        {{ __('Sign Up') }}
                    </button>
                </div>
            </div>
        </div>
    </div>
</nav>

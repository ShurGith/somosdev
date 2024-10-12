<x-pagina._partials.nav-link href="{{ route('pagina.home') }}"  :active="request()->is('/')">{{ __('Home') }}</x-nav-link>
<x-pagina._partials.nav-link href="{{ route('pagina.categs') }}"  :active="request()->is('categs')">{{ __('Categs') }}</x-nav-link>
<x-pagina._partials.nav-link href="{{ route('pagina.team') }}"  :active="request()->is('team')">{{ __('Team') }}</x-nav-link>
<x-pagina._partials.nav-link href="{{ route('pagina.aboutus') }}"  :active="request()->is('aboutus')">{{ __('About us') }}</x-nav-link>
<a href="#" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">{{ __('Calendar') }}</a>
<a href="#" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700 hover:text-white">{{ __('Reports') }}</a>

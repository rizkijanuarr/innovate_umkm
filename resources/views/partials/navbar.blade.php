<!-- NAVIGATION -->
<header class="w-full fixed top-0 bg-white z-50">
    <nav class="container flex justify-between py-5 items-center">
        <div>
        <a href="/">
            <img
            src="{{ asset('assets/images/logo-innovate-umkm.png') }}"
            height="60"
            class="max-h-[60px]"
            alt="Logo Innovate UMKM"
            />
        </a>
        </div>
        <ul class="md:flex items-center gap-9 list-none font-montserrat hidden">
        
        <li><a href="{{ route('sejarah') }}" class="font-semibold">Histories</a></li>
        <li><a href="{{ route('visimisi') }}" class="font-semibold">Visi & Misi</a></li>
        <li><a href="{{ route('sambutan') }}" class="font-semibold">Sambutan CEO</a></li>
        </ul>
        <div class="hidden md:flex">
        <a
            href="https://wa.me/6285749463854?text=Hai%20admin%20INNOVATEUMKM"
            class="px-6 py-[14px] font-montserrat font-semibold text-xneutral-0 bg-primary-200 rounded-full"
            >Gabung</a
        >
        </div>

        <!-- Mobile menu toggle -->
        <button
        type="button"
        class="relative inline-flex md:hidden items-center justify-center rounded-md p-2 text-xneutral-300 hover:bg-xneutral-100 hover:text-xneutral-400 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white"
        aria-controls="mobile-menu"
        aria-expanded="false"
        >
        <span class="absolute -inset-0.5"></span>
        <span class="sr-only">Open main menu</span>
        <svg
            class="block h-6 w-6"
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
        <svg
            class="hidden h-6 w-6"
            fill="none"
            viewBox="0 0 24 24"
            stroke-width="1.5"
            stroke="currentColor"
            aria-hidden="true"
        >
            <path
            stroke-linecap="round"
            stroke-linejoin="round"
            d="M6 18L18 6M6 6l12 12"
            />
        </svg>
        </button>
    </nav>

    <!-- Mobile Menu -->
    <div class="hidden shadow-xl" id="mobile-menu">
        <ul class="space-y-2 px-4 pb-3 pt-2">
        <li class="h-full w-full">
            <div
            class="flex items-center w-full justify-between gap-1.5 x-dropdown-button cursor-pointer"
            data-target="menu1"
            >
            <span class="font-semibold">Tentang Kami</span>
            <i class="bi bi-chevron-down transition-all"></i>
            </div>
            <div class="hidden x-dropdown-menu" id="menu1">
            <div>
                <ul class="bg-white text-nowrap px-3 rounded-xl">
                    <li><a href="{{ route('sejarah') }}" class="w-full block pl-2 pr-8 py-1">Sejarah</a></li>
                    <li><a href="{{ route('visimisi') }}" class="w-full block pl-2 pr-8 py-1">Visi & Misi</a></li>
                    <li><a href="{{ route('sambutan') }}" class="w-full block pl-2 pr-8 py-1">Sambutan CEO</a></li>
                </ul>
            </div>
            </div>
        </li>
        
        </ul>
    </div>
    </header>
    <!-- END OF NAVIGATION -->

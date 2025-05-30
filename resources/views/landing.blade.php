@extends('layouts.app')
@section('content')
    <!-- HERO SECTION -->
    <section class="container min-h-[90vh] relative mt-28">
      <!-- Hero 1 -->
      <div
        id="hero-1"
        class="absolute animate-fade top-0 left-0 w-full h-full flex flex-col items-center justify-center rounded-[30px]"
      >
        <div class="px-4 w-full max-w-xl text-center">
          <h1
            class="text-4xl font-semibold font-montserrat md:text-5xl/[60px] text-white mb-7"
          >
            Inovasi Digital untuk UMKM Naik Kelas
          </h1>
          <span
            class="text-lg md:text-xl text-white font-montserrat font-medium"
            >Kami membantu pelaku UMKM mengadopsi teknologi agar bisnis tumbuh lebih cepat dan berdaya saing tinggi.</span
          >
        </div>
      </div>

      <!-- Hero 2 -->
      <div
        id="hero-2"
        class="absolute top-0 animate-fade left-0 w-full h-full flex flex-col items-center justify-center rounded-[30px]"
      >
        <div class="px-4 w-full max-w-xl text-center">
          <h1
            class="text-4xl font-semibold font-montserrat md:text-5xl/[60px] text-white mb-7"
          >
            Solusi Nyata untuk UMKM Berkembang
          </h1>
          <span
            class="text-lg md:text-xl text-white font-montserrat font-medium"
            >Mulai dari digital marketing hingga manajemen keuangan, kami hadir sebagai mitra transformasi usaha Anda.</span
          >
        </div>
      </div>

      <!-- Hero 3 -->
      <div
        id="hero-3"
        class="absolute animate-fade top-0 left-0 w-full h-full flex flex-col items-center justify-center rounded-[30px]"
      >
        <div class="px-4 w-full max-w-xl text-center">
          <h1
            class="text-4xl font-semibold font-montserrat md:text-5xl/[60px] text-white mb-7"
          >
            Bersama Mendorong Ekonomi Lokal Lebih Maju
          </h1>
          <span
            class="text-lg md:text-xl text-white font-montserrat font-medium"
            >InnovateUMKM mendukung pelaku usaha kecil agar mampu bersaing di era digital dengan pendekatan yang mudah dan tepat sasaran.</span
          >
        </div>
      </div>
    </section>


    <div
      class="container overflow-hidden w-fit md:px-16 py-5 rounded-3xl mx-4 sm:mx-auto -mt-32 bg-white z-10 relative shadow-2xl"
    >
      <h3
        class="text-lg sm:text-xl text-center w-full font-semibold font-montserrat mb-4"
      >
        Bekerjasama Dengan
      </h3>

      <div class="flex overflow-x-auto gap-8 items-center py-4">
          @if($cooperationImg->isEmpty())
              <p class="text-center text-neutral-200 font-montserrat text-lg w-full">
                  No data available
              </p>
          @else
              @foreach ($cooperationImg as $image)
                  <img
                      style="width: 70px; height: 70px; object-fit: contain;"
                      src="{{ asset('storage/' . $image->image) }}"
                      alt="Cooperation"
                  />

              @endforeach
          @endif
      </div>


    </div>

    <!-- END OF HERO SECTION -->

    <!-- ABOUT SECTION -->
    <section class="w-full overflow-hidden py-28">
      <div
        class="container grid grid-cols-1 md:grid-cols-2 items-center gap-12"
      >
        <div class="space-y-4 lg:ml-20">
          <h3
            class="text-primary-200 font-bold text-xl sm:text-2xl font-montserrat"
          >
            TENTANG KAMI
          </h3>
          @if (empty($abouts->content) && empty($abouts->image)) <!-- Check if both content and images are empty -->
            <p class="font-montserrat text-lg sm:text-xl font-semibold text-xneutral-200">
                No data available
            </p>
          @else
            <p class="font-montserrat text-2xl sm:text-4xl font-semibold">
                Membangun generasi
                <span class="text-secondary-purple">unggul</span> dan
                <span class="text-secondary-pink">berakhlak</span>
            </p>
            <p
                class="text-base sm:text-lg font-semibold text-xneutral-200 font-montserrat"
            >
                {{ $abouts->content }}
            </p>
            <a
                href="{{ route('sejarah') }}"
                class="px-6 py-[14px] font-montserrat text-neutral-0 bg-white border w-fit text-lg font-semibold border-primary-200 text-primary-200 rounded-full flex gap-[10px]"
                ><span>Tentang kami</span>
                <i class="bi bi-arrow-right"></i>
            </a>
          @endif
        </div>
        <div class="relative">
          <div class="grid grid-cols-2 gap-6 w-fit">
            @if (isset($abouts->image[0]))
                <img src="{{ asset('storage/'. $abouts->image[0]) }}" alt="Illustration 1" />
            @endif
            @if (isset($abouts->image[1]))
                <img src="{{ asset('storage/'. $abouts->image[1]) }}" alt="Illustration 2" />
            @endif
            @if (isset($abouts->image[2]))
            <img
              class="col-span-2"
              src="{{ asset('storage/'. $abouts->image[2]) }}"
              alt="Illustration 3"
            />
            @endif
          </div>
          <img
            class="absolute -bottom-32 -left-36 -z-10"
            src="/assets/images/elipse-1.svg"
            alt=""
          />
          <img
            class="absolute -top-24 -right-16 -z-10"
            src="/assets/images/elipse-2.svg"
            alt=""
          />
        </div>
      </div>
    </section>
    <!-- END OF ABOUT SECTION -->

    <!-- NEWS SECTION -->
    <section class="container relative">
      <div class="mb-10 flex justify-between items-center">
        <div>
          <h3
            class="font-semibold text-xl sm:text-2xl font-montserrat text-xneutral-400"
          >
            Berita terkini untuk Anda
          </h3>
          <p
            class="text-sm sm:text-base font-montserrat text-xneutral-200 font-semibold"
          >
            Temukan berita terbaru hari ini
          </p>
        </div>
        <div>
          <button
            class="text-xneutral-400 hover:text-xneutral-0 bg-xneutral-0 transition-all hover:bg-xneutral-400 w-10 h-10 rounded-full"
          >
            <i class="bi bi-arrow-left-short text-4xl"></i>
          </button>
          <button
            class="text-xneutral-400 hover:text-xneutral-0 bg-xneutral-0 transition-all hover:bg-xneutral-400 w-10 h-10 rounded-full"
          >
            <i class="bi bi-arrow-right-short text-4xl"></i>
          </button>
        </div>
      </div>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        @if($news->isEmpty())
            <div>
                No data available
            </div>
        @else
            @foreach ($news as $newslist)
                <div
                    class="p-[14px] rounded-[20px] border border-xneutral-100 bg-xneutral-0"
                >
                    <div class="max-h-[214px] rounded-2xl overflow-hidden mb-5">
                    <img src="{{ asset('storage/' . $newslist->image) }}" alt="{{ $newslist->title }}" alt="Berita 1" />
                    </div>
                    <a
                    href="{{ route('berita.show', $newslist->slug) }}"
                    class="text-base sm:text-lg font-montserrat font-semibold text-xneutral-400 line-clamp-2"
                    >
                    {{ $newslist->title }}
                    </a>
                    <p
                    class="font-montserrat text-xs sm:text-sm font-semibold text-xneutral-200"
                    >
                        {{ \Carbon\Carbon::parse($newslist->created_at)->format('d/m/y') }}
                    </p>
                </div>
            @endforeach
        @endif
      </div>
      <div class="absolute top-12 -left-24 -z-10">
        <img src="/assets/images/elipse-1.svg" alt="" />
      </div>
    </section>
    <!-- END OF NEWS SECTION -->

    <!-- ANNOUNCEMENT SECTION -->
    <section class="mt-28 x-announcement w-full">
      <div class="container pt-9 pb-16">
        <div class="mb-10 flex justify-between items-center">
          <div>
            <h3
              class="font-semibold text-xl sm:text-2xl font-montserrat text-xneutral-0"
            >
              Berita
            </h3>
            <p
              class="font-montserrat text-sm sm:text-base text-xneutral-0 font-semibold"
            >
              Dapatkan berita terbaru
            </p>
          </div>
          <div>
            <button
              class="text-xneutral-400 hover:text-xneutral-0 bg-xneutral-0 transition-all hover:bg-xneutral-400 w-10 h-10 rounded-full"
            >
              <i class="bi bi-arrow-left-short text-4xl"></i>
            </button>
            <button
              class="text-xneutral-400 hover:text-xneutral-0 bg-xneutral-0 transition-all hover:bg-xneutral-400 w-10 h-10 rounded-full"
            >
              <i class="bi bi-arrow-right-short text-4xl"></i>
            </button>
          </div>
        </div>
        
        </div>
      </div>
    </section>
    <!-- END OF ANNOUNCEMENT SECTION -->
@endsection

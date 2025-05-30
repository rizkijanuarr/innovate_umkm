@extends('layouts.app')

@section('content')
    <!-- MAIN SECTION -->
    <article class="container mt-28">
      <h1
        class="text-xneutral-400 font-montserrat text-xl sm:text-2xl font-semibold"
      >
        Sejarah InnovateUMKM
      </h1>
      <p
        class="text-xneutral-200 text-sm sm:text-base font-montserrat font-semibold"
      >
        Bersama mengembangkan UMKM
      </p>

      <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-8">
        <div class="space-y-3">
          <h3
            class="font-montserrat text-base sm:text-lg font-semibold text-primary-200 text-center"
          >
            VISI
          </h3>
           <ol
            class="list-decimal pl-4 font-montserrat font-semibold text-xneutral-200 text-sm sm:text-base text-justify"
          >
            {!! $visi ?? '"No Data Available"' !!}
          </ol>
        </div>
        <div class="space-y-3">
          <h2
            class="font-montserrat text-base sm:text-lg font-semibold text-primary-200 text-center"
          >
            MISI
          </h2>
          <ol
            class="list-decimal pl-4 font-montserrat font-semibold text-xneutral-200 text-sm sm:text-base text-justify"
          >
            {!! $misi ?? '"No Data Available"' !!}
          </ol>
        </div>
      </div>

      <div
        class="grid grid-cols-1 sm:grid-cols-3 mt-10 border border-xneutral-100 rounded-2xl overflow-hidden"
      >
        <div class="p-[30px]">
          <h2 class="text-base sm:text-lg font-semibold text-xneutral-400 font-montserrat">
            Inovatif
          </h2>
          <p class="font-montserrat font-medium mt-4 text-xneutral-200 text-xs sm:text-sm">
            Kami percaya bahwa inovasi adalah kunci kemajuan UMKM. InnovateUMKM hadir dengan ide-ide segar dan solusi digital yang adaptif untuk membantu pelaku usaha berkembang di tengah tantangan zaman.
          </p>
        </div>
        <div>
          @if(isset($visimisiImg[0]))
            <img src="{{ asset('storage/'. $visimisiImg[0]) }}" alt="Inovatif" />
          @else
            <p>No Image Available</p>
          @endif
        </div>

        <div class="p-[30px]">
          <h2 class="text-base sm:text-lg font-semibold text-xneutral-400 font-montserrat">
            Profesional
          </h2>
          <p class="font-montserrat font-medium mt-4 text-xneutral-200 text-xs sm:text-sm">
            Kami membangun layanan berbasis keahlian dan etika. Setiap langkah dalam mendampingi UMKM dilakukan dengan komitmen tinggi terhadap kualitas, ketepatan, dan hasil nyata.
          </p>
        </div>
        <div>
          @if(isset($visimisiImg[1]))
            <img src="{{ asset('storage/'. $visimisiImg[1]) }}" alt="Profesional" />
          @else
            <p>No Image Available</p>
          @endif
        </div>

        <div class="p-[30px]">
          <h2 class="text-base sm:text-lg font-semibold text-xneutral-400 font-montserrat">
            Islami
          </h2>
          <p class="font-montserrat font-medium mt-4 text-xneutral-200 text-xs sm:text-sm">
            Kami menjunjung tinggi nilai-nilai keislaman dalam menjalankan usaha. Integritas, kejujuran, dan kebermanfaatan menjadi landasan kami dalam mendampingi UMKM menuju keberkahan dan kesuksesan.
          </p>
        </div>
        <div>
          @if(isset($visimisiImg[2]))
            <img src="{{ asset('storage/'. $visimisiImg[2]) }}" alt="Islami" />
          @else
            <p>No Image Available</p>
          @endif
        </div>
      </div>

    </article>
@endsection

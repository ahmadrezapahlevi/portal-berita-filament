@extends('layouts.app')

@section('title', 'PiiNews | Baca berita online')

@section('content')
    <!-- swiper -->
    <div class="swiper mySwiper mt-9">
      <div class="swiper-wrapper">
        @foreach($banners as $banner)
                <div class="swiper-slide">
          <a href="detail-MotoGp.html" class="block">
            <div
              class="relative flex flex-col gap-1 justify-end p-3 h-72 rounded-xl bg-cover bg-center overflow-hidden"
              style="background-image: url('{{ asset('storage/' . $banner->news->thumbnail) }}')">
              <div
                class="absolute inset-x-0 bottom-0 h-full bg-gradient-to-t from-[rgba(0,0,0,0.4)] to-[rgba(0,0,0,0)] rounded-b-xl">
              </div>
              <div class="relative z-10 mb-3" style="padding-left: 10px;">
                <div class="bg-primary text-white text-xs rounded-lg w-fit px-3 py-1 font-normal mt-3">{{ $banner->news->newsCategory->title }}</div>
                <p class="text-3xl font-semibold text-white mt-1">{{ $banner->news->title }}</p>
                <div class="flex items-center gap-1 mt-1">
                  <img src="{{ asset('storage/' . $banner->news->author->avatar )}}" alt="" class="w-5 h-5 rounded-full">
                  <p class="text-white text-xs">{{ $banner->news->author->name }}</p>
                </div>
              </div>
            </div>
          </a>
        </div>
        @endforeach
      </div>
    </div>

    <!-- Berita Unggulan -->
    <div class="flex flex-col px-14 mt-10 ">
      <div class="flex flex-col md:flex-row justify-between items-center w-full mb-6">
        <div class="font-bold text-2xl text-center md:text-left">
          <p>Berita Unggulan</p>
          <p>Untuk Kamu</p>
        </div>
        <a href="semuaberita.html"
          class="bg-primary px-5 py-2 rounded-full text-white font-semibold mt-4 md:mt-0 h-fit">
          Lihat Semua
        </a>
      </div>
      <div class="grid sm:grid-cols-1 gap-5 lg:grid-cols-4">
        @foreach ($featureds as $featured)
                <a href="detail-MotoGp.html">
          <div
            class="border border-slate-200 p-3 rounded-xl hover:border-primary hover:cursor-pointer transition duration-300 ease-in-out">
            <div class="bg-primary text-white rounded-full w-fit px-5 py-1 font-normal ml-2 mt-2 text-sm absolute">
              {{ $featured->newsCategory->title }}</div>
            <img src="{{ asset('storage/' . $featured->thumbnail )}}" alt="" class="w-full rounded-xl mb-3" style="height: 150px; object-fit: cover;">
            <p class="font-bold text-base mb-1">{{ $featured->title }}</p>
            <p class="text-slate-400">{{ \Carbon\Carbon::parse($featured->created_at)->format('d F Y') }}</p>
          </div>
        </a>
        @endforeach

      </div>
    </div>

    <!-- Berita Terbaru -->
    <div class="flex flex-col px-4 md:px-10 lg:px-14 mt-10">
      <div class="flex flex-col md:flex-row w-full mb-6">
        <div class="font-bold text-2xl text-center md:text-left">
          <p>Berita Terbaru</p>
        </div>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-1 lg:grid-cols-12 gap-5">
        <!-- Berita Utama -->
        <div
          class="relative col-span-7 lg:row-span-3 border border-slate-200 p-3 rounded-xl hover:border-primary hover:cursor-pointer">
          <a href="detail-MotoGp.html">
            <div class="bg-primary text-white rounded-full w-fit px-4 py-1 font-normal ml-5 mt-5 absolute">Pariwisata
            </div>
            <img src="img/Berita-Liburan.png" alt="berita1" class="rounded-2xl">
            <p class="font-bold text-xl mt-3">Lorem Ipsum Dolor Siamet, Dolor Mamet Lor Ser Met Nass Met Lorem Ipsum
              Dolor
              Siamet, Dolor Mamet Lor Ser Met Nass Met </p>
            <p class="text-slate-400 text-base mt-1">Sekitar 59 persen pencarian kerja mengaku pernah di-ghosting oleh
              perekrut dan tidak mendapat respons apapun setelah mengirim lamaran...</p>
            <p class="text-slate-400 text-base mt-1">23 Januari 2024</p>
          </a>
        </div>

        <!-- Berita 1 -->
        <a href="detail-MotoGp.html"
          class="relative col-span-5 flex flex-col h-fit md:flex-row gap-3 border border-slate-200 p-3 rounded-xl hover:border-primary hover:cursor-pointer">
          <div class="bg-primary text-white rounded-full w-fit px-4 py-1 font-normal ml-2 mt-2 absolute text-sm">
            Olahraga</div>
          <img src="img/Berita-Motor.png" alt="berita2" class="rounded-xl w-full md:max-h-48">
          <div class="mt-2 md:mt-0">
            <p class="font-semibold text-lg">MotoGp 2025 Akan Diadakan Di Sirkuit Mandalika</p>
            <p class="text-slate-400 mt-3 text-sm font-normal">Sekitar 59 persen pencari kerja mengaku pernah
              di-ghosting oleh
              perekrut dan tidak mendapat respons apapun setelah mengirim lamaran...</p>
          </div>
        </a>

        <!-- Berita 2 -->
        <a href="detail-MotoGp.html"
          class="relative col-span-5 flex flex-col h-fit md:flex-row gap-3 border border-slate-200 p-3 rounded-xl hover:border-primary hover:cursor-pointer">
          <div class="bg-primary text-white rounded-full w-fit px-4 py-1 font-normal ml-2 mt-2 absolute text-sm">Gaya
            Hidup</div>
          <img src="img/Berita-Golf.png" alt="berita2" class="rounded-xl w-full md:max-h-48">
          <div class="mt-2 md:mt-0">
            <p class="font-semibold text-lg">Manfaat Bermain Golf Untuk Menumbuhkan Koneksi</p>
            <p class="text-slate-400 mt-3 text-sm font-normal">Sekitar 59 persen pencari kerja mengaku pernah
              di-ghosting oleh
              perekrut dan tidak mendapat respons apapun setelah mengirim lamaran...</p>
          </div>
        </a>

        <!-- Berita 3 -->
        <a href="detail-MotoGp.html"
          class="relative col-span-5 flex flex-col h-fit md:flex-row gap-3 border border-slate-200 p-3 rounded-xl hover:border-primary hover:cursor-pointer">
          <div class="bg-primary text-white rounded-full w-fit px-4 py-1 font-normal ml-2 mt-2 absolute text-sm">
            Olahraga</div>
          <img src="img/Berita-Demo.png" alt="berita2" class="rounded-xl w-full md:max-h-48">
          <div class="mt-2 md:mt-0">
            <p class="font-semibold text-lg">Demo Terjadi Di Banyumas Dikarenakan Kenaikan BBM</p>
            <p class="text-slate-400 mt-3 text-sm font-normal">Sekitar 59 persen pencari kerja mengaku pernah
              di-ghosting oleh
              perekrut dan tidak mendapat respons apapun setelah mengirim lamaran...</p>
          </div>
        </a>
      </div>

    </div>

    <!-- Author -->
    <div class="flex flex-col px-4 md:px-10 lg:px-14 mt-10">
      <div class="flex flex-col md:flex-row justify-between items-center w-full mb-6">
        <div class="font-bold text-2xl text-center md:text-left">
          <p>Kenali Author</p>
          <p>Terbaik Dari Kami</p>
        </div>
        <a href="register.html" class="bg-primary px-5 py-2 rounded-full text-white font-semibold mt-4 md:mt-0 h-fit">
          Gabung Menjadi Author
        </a>
      </div>
      <div class="grid grid-cols-1  sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6">
        <!-- Author 1 -->
        <a href="author.html">
          <div
            class="flex flex-col items-center border border-slate-200 px-4 py-8 rounded-2xl hover:border-primary hover:cursor-pointer">
            <img src="img/profile.png" alt="" class="rounded-full w-24 h-24">
            <p class="font-bold text-xl mt-4">Queen Fayola S</p>
            <p class="text-slate-400">5 Berita</p>
          </div>
        </a>
        <!-- Author 2 -->
        <a href="author.html">
          <div
            class="flex flex-col items-center border border-slate-200 px-4 py-8 rounded-2xl hover:border-primary hover:cursor-pointer">
            <img src="img/profile.png" alt="" class="rounded-full w-24 h-24">
            <p class="font-bold text-xl mt-4">Queen Fayola S</p>
            <p class="text-slate-400">5 Berita</p>
          </div>
        </a>

        <!-- Author 3 -->
        <a href="author.html">
          <div
            class="flex flex-col items-center border border-slate-200 px-4 py-8 rounded-2xl hover:border-primary hover:cursor-pointer">
            <img src="img/profile.png" alt="" class="rounded-full w-24 h-24">
            <p class="font-bold text-xl mt-4">Queen Fayola S</p>
            <p class="text-slate-400">5 Berita</p>
          </div>
        </a>

        <!-- Author 4 -->
        <a href="author.html">
          <div
            class="flex flex-col items-center border border-slate-200 px-4 py-8 rounded-2xl hover:border-primary hover:cursor-pointer">
            <img src="img/profile.png" alt="" class="rounded-full w-24 h-24">
            <p class="font-bold text-xl mt-4">Queen Fayola S</p>
            <p class="text-slate-400">5 Berita</p>
          </div>
        </a>

        <!-- Author 5 -->
        <a href="author.html">
          <div
            class="flex flex-col items-center border border-slate-200 px-4 py-8 rounded-2xl hover:border-primary hover:cursor-pointer">
            <img src="img/profile.png" alt="" class="rounded-full w-24 h-24">
            <p class="font-bold text-xl mt-4">Queen Fayola S</p>
            <p class="text-slate-400">5 Berita</p>
          </div>
        </a>

      </div>
    </div>

    <!-- Pilihan Author -->
    <div class="flex flex-col px-14 mt-10 mb-10">
      <div class="flex flex-col md:flex-row justify-between items-center w-full mb-6">
        <div class="font-bold text-2xl text-center md:text-left">
          <p>Pilihan Author</p>
        </div>
      </div>
      <div class="grid sm:grid-cols-1 gap-5 lg:grid-cols-4">
        <a href="detail-MotoGp.html">
          <div
            class="border border-slate-200 p-3 rounded-xl hover:border-primary hover:cursor-pointer transition duration-300 ease-in-out">
            <div class="bg-primary text-white rounded-full w-fit px-5 py-1 font-normal ml-2 mt-2 text-sm absolute">
              Pariwisata</div>
            <img src="img/Berita-Liburan.png" alt="" class="w-full rounded-xl mb-3">
            <p class="font-bold text-base mb-1">Spot Liburan Asyik Di Banyumas Yang Bisa Kamu Kunjungi</p>
            <p class="text-slate-400">22 Januari 2024</p>
          </div>
        </a>
        <a href="detail-MotoGp.html">
          <div
            class="border border-slate-200 p-3 rounded-xl hover:border-primary hover:cursor-pointer transition duration-300 ease-in-out">
            <div class="bg-primary text-white rounded-full w-fit px-5 py-1 font-normal ml-2 mt-2 text-sm absolute">
              Politik</div>
            <img src="img/Berita-Demo.png" alt="" class="w-full rounded-xl mb-3">
            <p class="font-bold text-base mb-1">Demo Terjadi Di Banyumas <br>Dikarenakan Kenaikan BBM</p>
            <p class="text-slate-400">22 Januari 2024</p>
          </div>
        </a>
        <a href="detail-MotoGp.html">
          <div
            class="border border-slate-200 p-3 rounded-xl hover:border-primary hover:cursor-pointer transition duration-300 ease-in-out">
            <div class="bg-primary text-white rounded-full w-fit px-4 py-1 font-normal ml-2 mt-2 text-sm absolute">
              Olahraga</div>
            <img src="img/Berita-Motor.png" alt="" class="w-full rounded-xl mb-3">
            <p class="font-bold text-base mb-1">MotoGp 2025 Akan Diadakan Di <br>Sirkuit Mandalika</p>
            <p class="text-slate-400">22 Januari 2024</p>
          </div>
        </a>
        <a href="detail-MotoGp.html">
          <div
            class="border border-slate-200 p-3 rounded-xl hover:border-primary hover:cursor-pointer transition duration-300 ease-in-out">
            <div class="bg-primary text-white rounded-full w-fit px-4 py-1 font-normal ml-2 mt-2 text-sm absolute">
              Gaya Hidup</div>
            <img src="img/Berita-Golf.png" alt="" class="w-full rounded-xl mb-3">
            <p class="font-bold text-base mb-1">Manfaat Bermain Golf Untuk <br>Menumbuhkan Koneksi</p>
            <p class="text-slate-400">22 Januari 2024</p>
          </div>
        </a>
      </div>
    </div>
@endsection
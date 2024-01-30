<x-layout>

    <main class=" mb-10">
        <section class="grid px-32 grid-cols-2 gap-20 mt-10 mb-20">
            <section class=" flex flex-col gap-6 justify-center">
                <h1 class="text-5xl text-slate-800">Wujudkan impian pendidikan Anda dengan <span
                        class="font-bold">BeasiswaKita</span></h1>
                <p class="text-slate-700 text-sm">Daftarkan diri Anda sekarang dan buka pintu menuju pendidikan
                    berkualitas
                    yang
                    akan membimbing Anda
                    menuju puncak kesuksesan tanpa hambatan keuangan</p>
                <p></p>
                <button
                    class="w-fit bg-[#F53838] hover:bg-[#da2d2d] transition-all duration-300 ease-in-out px-6 py-2 text-slate-100 rounded-md shadow-sm"><a
                        href="{{route('create')}}">Daftar
                        Sekarang !</a></button>
            </section>
            <section class="px-32">
                <img src="{{ asset('storage/icon/study.png' ) }}" alt="study" />
            </section>
        </section>

        <section class="w-full px-32 grid place-items-center mb-20">
            <section class=" shadow-md rounded-md flex w-fit py-6 divide-x-2 ">
                <section class="px-20 flex items-center gap-5">
                    <img src="{{ asset('storage/icon/person.png' ) }}" alt="person" />
                    <section>
                        <p class="font-medium text-lg">3 Pilihan</p>
                        <p class="text-sm text-slate-600">beasiswa</p>
                    </section>
                </section>
                <section class="px-20 flex items-center gap-5">
                    <img src="{{ asset('storage/icon/map.png' ) }}" alt="map" />

                    <section>
                        <p class="font-medium text-lg">20+ Mitra</p>
                        <p class="text-sm text-slate-600">Perguruan Tinggi</p>
                    </section>
                </section>
                <section class="px-20 flex items-center gap-5">
                    <img src="{{ asset('storage/icon/fee.png' ) }}" alt="fee" />

                    <section>
                        <p class="font-medium text-lg">120T</p>
                        <p class="text-sm text-slate-600">Alokasi Dana</p>
                    </section>
                </section>
            </section>
        </section>


        <section class="grid grid-cols-2 px-32 bg-[#F4F4F4]/40 place-items-center gap-20 py-10 mt-10 mb-20">
            <section class="grid place-items-center w-full ">
                <img src="{{ asset('storage/icon/happy-student.png' ) }}" alt="happy-student" class=" h-[22rem]" />
            </section>
            <section class="  w-full">
                <h1 class="text-2xl  text-slate-800">Apa saja yang<span class="font-bold"> BeasiswaKita
                    </span></h1>
                <h1 class="text-2xl mb-1 text-slate-800">sediakan
                    untuk anda</h1>
                <p class="text-slate-700 mb-4 text-sm">program Beasiswa kita memfasilitasi kebutuhan kuliah anda
                    mencakupi :
                </p>
                <section class="flex flex-col gap-1.5">
                    <section class="flex items-center gap-2 ">
                        <img src="{{ asset('storage/icon/check.png' ) }}" alt="check" />
                        <p class="text-sm font-medium">Gratis Biaya Semester</p>
                    </section>
                    <section class="flex items-center gap-2 ">
                        <img src="{{ asset('storage/icon/check.png' ) }}" alt="check" />
                        <p class="text-sm font-medium">Uang Saku</p>
                    </section>
                    <section class="flex items-center gap-2 ">
                        <img src="{{ asset('storage/icon/check.png' ) }}" alt="check" />
                        <p class="text-sm font-medium">Sesi Mentoring</p>
                    </section>
                    <section class="flex items-center gap-2 ">
                        <img src="{{ asset('storage/icon/check.png' ) }}" alt="check" />
                        <p class="text-sm font-medium">Koneksi Dengan Mitra</p>
                    </section>

                </section>
            </section>

        </section>

        <section class="text-center mb-32 px-32 ">
            <header class="mb-10">
                <h1 class="text-2xl text-slate-800 mb-1">Syarat & Ketentuan <span
                        class="font-medium">BeasiswaKita</span>
                </h1>
                <p class="text-slate-600 text-sm px-40">Dengan BeasiswaKita, Anda tidak hanya mendapatkan dukungan
                    keuangan
                    yang
                    substansial, tetapi juga
                    akses eksklusif ke program mentorship, workshop keterampilan, dan jaringan alumni yang kuat untuk
                    membantu Anda meraih keberhasilan dalam perjalanan pendidikan Anda.</p>
            </header>
            <main class="flex items-center w-full justify-center gap-10">
                <section
                    class="flex items-center flex-col gap-4 border-2 w-fit px-8 min-h-[500px]  pt-14 rounded-md shadow-sm hover:border-[#da2d2d] transition-all duration-300 hover:scale-105 hover:shadow-md">
                    <img src="{{ asset('storage/icon/box.png' ) }}" alt="check" />
                    <h1 class="font-bold text-xl mb-6">Akedemik</h1>
                    <section class="flex gap-2 flex-col mb-10">
                        <section class="flex items-center gap-2 ">
                            <img src="{{ asset('storage/icon/check.png' ) }}" alt="check" />
                            <p class="text-sm">Sertifikat Prestasi Akademik</p>
                        </section>
                        <section class="flex items-center gap-2 ">
                            <img src="{{ asset('storage/icon/check.png' ) }}" alt="check" />
                            <p class="text-sm">IPK Minimal 3.5</p>
                        </section>
                    </section>
                    <a href="{{route('create')}}" class="w-full">
                        <button
                            class="w-full bg-[#F53838] hover:bg-[#da2d2d] transition-all duration-300 ease-in-out px-6 py-2 text-slate-100 rounded-md text-sm shadow-sm">
                            Daftar Sekarang !
                        </button>
                    </a>
                </section>
                <section
                    class="flex items-center flex-col gap-4 border-2 w-fit px-8 min-h-[500px] pt-14 rounded-md shadow-sm hover:border-[#da2d2d] transition-all duration-300 hover:scale-105 hover:shadow-md">
                    <img src="{{ asset('storage/icon/box.png' ) }}" alt="check" />
                    <h1 class="font-bold text-xl mb-6">Non Akademik</h1>
                    <section class="flex gap-2 flex-col mb-10">
                        <section class="flex items-center gap-2 ">
                            <img src="{{ asset('storage/icon/check.png' ) }}" alt="check" />
                            <p class="text-sm">Sertifikat Prestasi Non Akademik</p>
                        </section>
                        <section class="flex items-center gap-2 ">
                            <img src="{{ asset('storage/icon/check.png' ) }}" alt="check" />
                            <p class="text-sm">IPK Minimal 3.5</p>
                        </section>
                    </section>
                    <a href="{{route('create')}}" class="w-full">
                        <button
                            class="w-full bg-[#F53838] hover:bg-[#da2d2d] transition-all duration-300 ease-in-out px-6 py-2 text-slate-100 rounded-md text-sm shadow-sm">
                            Daftar Sekarang !
                        </button>
                    </a>
                </section>
                <section
                    class="flex items-center flex-col gap-4 border-2 w-fit px-8 min-h-[500px] pt-14 rounded-md shadow-sm hover:border-[#da2d2d] transition-all duration-300 hover:scale-105 hover:shadow-md">
                    <img src="{{ asset('storage/icon/box.png' ) }}" alt="check" />
                    <h1 class="font-bold text-xl mb-6">Influencer</h1>
                    <section class="flex gap-2 flex-col mb-10">
                        <section class="flex items-center gap-2 ">
                            <img src="{{ asset('storage/icon/check.png' ) }}" alt="check" />
                            <p class="text-sm">Bukti Follower > 2M</p>
                        </section>
                        <section class="flex items-center gap-2 ">
                            <img src="{{ asset('storage/icon/check.png' ) }}" alt="check" />
                            <p class="text-sm">IPK Minimal 3.5</p>
                        </section>
                    </section>
                    <a href="{{route('create')}}" class="w-full">
                        <button
                            class="w-full bg-[#F53838] hover:bg-[#da2d2d] transition-all duration-300 ease-in-out px-6 py-2 text-slate-100 rounded-md text-sm shadow-sm">
                            Daftar Sekarang !
                        </button>
                    </a>
                </section>
            </main>
        </section>
    </main>
</x-layout>
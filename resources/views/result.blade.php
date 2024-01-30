<x-layout>
    <section class="px-32">
        <section
            class="shadow-md relative -bottom-14 bg-[#fdfdfd] z-20 drop-shadow-sm shadow-slate-200 px-32 py-14 rounded-md">
            @if ($fellowships->count() > 0)
            <header class="mb-10">
                <h1 class="text-4xl text-slate-800">
                    Horaayyy <span class="font-bold">BeasiswaKita</span> </h1>
                <h1 class="text-4xl text-slate-800 mb-2">Milikmu Terkirim 🔥</h1>
                <p class="text-slate-600 text-base">Berikut data trakhir yang kamu kirim </p>
            </header>
            <section class="grid grid-cols-2 gap-x-8 gap-y-6 mb-14">

                <section class="flex flex-col">
                    <p for="name" required class="mb-2 font-medium">Nama Lengkap
                    </p>
                    <p
                        class=" text-slate-600 py-1.5  transition-all duration-300 ease-in-out  px-2 border-b-2 text-sm border-slate-600 w-full">
                        {{$fellowships[0]->name}}</p>
                </section>
                <section class="flex flex-col">
                    <p for="email" class="mb-2 font-medium">Alamat Email </p>
                    <p
                        class=" text-slate-600 py-1.5  transition-all duration-300 ease-in-out  px-2 border-b-2 text-sm border-slate-600 w-full">
                        {{$fellowships[0]->email}}</p>
                </section>
                <section class="flex flex-col">
                    <p for="phone" class="mb-2 font-medium">Nomor Handphone </p>
                    <p
                        class=" text-slate-600 py-1.5  transition-all duration-300 ease-in-out  px-2 border-b-2 text-sm border-slate-600 w-full">
                        {{$fellowships[0]->phone}}</p>
                </section>
                <section class="flex flex-col">
                    <p for="semester" class="mb-2 font-medium">Semester</p>
                    <p
                        class=" text-slate-600 py-1.5  transition-all duration-300 ease-in-out  px-2 border-b-2 text-sm border-slate-600 w-full">
                        {{$fellowships[0]->semester}}</p>
                </section>
                <section class="flex flex-col">
                    <label for="IPK" class="mb-2 font-medium">IPK</label>
                    <p
                        class=" text-slate-600 py-1.5  transition-all duration-300 ease-in-out  px-2 border-b-2 text-sm border-slate-600 w-full">
                        {{$fellowships[0]->IPK}}</p>
                </section>
                <section class="flex flex-col">
                    <label for="fellowshipOption" class="mb-2 font-medium">Pilihan Beasiswa</label>
                    <p
                        class=" text-slate-600 py-1.5  transition-all duration-300 ease-in-out  px-2 border-b-2 text-sm border-slate-600 w-full">
                        {{$categoryLabels[$fellowships[0]->category] ?? ''}}</p>
                </section>


                <section class="flex flex-col">
                    <label for="IPK" class="mb-2 font-medium">Status Pengajuan</label>
                    <p
                        class=" text-slate-600 py-1.5  transition-all duration-300 ease-in-out  px-2 border-b-2 text-sm border-slate-600 w-full">
                        belum di verifikasi</p>
                </section>
                <section class="flex flex-col">
                    <label for="IPK" class="mb-2 font-medium">Lampiran Berkas</label>
                    <a href="{{ asset('storage/' . $fellowships[0]->attachment) }}" target="_blank"
                        class=" py-1.5  transition-all duration-300 ease-in-out  px-2  text-sm text-blue-500 italic  w-full">
                        Lihat berkas</a>
                </section>

            </section>
            <section>
                <section class="w-full col-span-2 mt-4 mb-8">
                    <section type="submit"
                        class="bg-slate-500 grid place-items-center  text-slate-100 w-full rounded-md shadow-sm py-1.5 border-2 ">
                        Riwayat
                        Pengajuan
                        Beasiswa</section>

                </section>
                <section class="overflow-x-auto ">
                    <table class="min-w-full bg-white border border-gray-300 shadow-md rounded-md">
                        <thead class="bg-slate-200 text-slate-600 font-normal">
                            <tr>
                                <th class="py-2 px-4 font-normal text-sm">ID</th>
                                <th class="py-2 px-4 font-normal text-sm">Nama</th>
                                <th class="py-2 px-4 font-normal text-sm">Email</th>
                                <th class="py-2 px-4 font-normal text-sm">Nomor Handphone</th>
                                <th class="py-2 px-4 font-normal text-sm">Semester</th>
                                <th class="py-2 px-4 font-normal text-sm">IPK</th>
                                <th class="py-2 px-4 font-normal text-sm">Pilihan Beasiswa</th>
                                <th class="py-2 px-4 font-normal text-sm">Status Pengajuan</th>
                                <th class="py-2 px-4 font-normal text-sm">Lampiran Berkas</th>
                            </tr>
                        </thead>
                        <tbody class="text-xs">

                            @foreach ($fellowships as $fellowship)
                            <tr>
                                <td class="py-2 px-4 text-center">{{$fellowship->id}}</td>
                                <td class="py-2 px-4 text-center text-nowrap">{{$fellowship->name}}</td>
                                <td class="py-2 px-4 text-center">{{$fellowship->email}}</td>
                                <td class="py-2 px-4 text-center">{{$fellowship->phone}}</td>
                                <td class="py-2 px-4 text-center">{{$fellowship->semester}}</td>
                                <td class="py-2 px-4 text-center">{{$fellowship->IPK}}</td>
                                <td class="py-2 px-4 text-center">{{$categoryLabels[$fellowship->category] ?? ''}}</td>
                                <td class="py-2 px-4 text-center">Belum di verifikasi</td>
                                <td class="py-2 px-4 text-center">
                                    <a href="{{ asset('storage/' . $fellowship->attachment) }}" target="_blank"
                                        class="text-blue-500 italic underline">Lihat berkas</a>
                                </td>
                            </tr>
                            @endforeach


                        </tbody>
                    </table>
                </section>
            </section>
            @else
            <header>
                <h1 class="text-4xl text-slate-800">
                    Maaff 🫤 Sepertinya kamu belum mengirimkan </h1>
                <h1 class="font-bold text-4xl text-slate-800 mb-2">BeasiswaKita</h1>
                <p class="text-slate-600 text-base inline">kamu bisa melakukan pengajuan beasiswa melalui tautan </p>
                <a href="{{route('create')}}" class="inline text-blue-500 italic underline">berikut</a>
            </header>
            @endif


        </section>
    </section>

</x-layout>
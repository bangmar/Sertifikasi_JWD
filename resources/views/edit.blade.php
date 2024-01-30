<x-layout>
    <section class="px-72">
        <section
            class="shadow-md relative -bottom-14 bg-[#fdfdfd] z-20 drop-shadow-sm shadow-slate-200 px-32 py-14 rounded-md">
            <header class="mb-10">
                <h1 class="text-4xl text-slate-800 mb-2">
                    Edit <span class="font-bold">BeasiswaKita</span></h1>
                <p class="text-slate-600 text-base">update data diri dan persyaratan anda</p>
            </header>
            <main>
                <form method="post" action="{{route('update', $fellowship)}}" enctype="multipart/form-data"
                    class="grid grid-cols-2 gap-x-8 gap-y-6">
                    @csrf
                    @method('patch')

                    <section class="flex flex-col">
                        <label for="name" class="mb-2 font-medium">Nama Lengkap <span
                                class="text-red-500">*</span></label>
                        <input value="{{ $fellowship->name }}" type="text" id="name" name="name"
                            placeholder="Mario Rudy Silalahi"
                            class="rounded-md text-slate-600 py-1.5 outline-2 transition-all duration-300 ease-in-out outline-slate-900 px-2 border-2 text-sm border-slate-500 w-full">
                        @error('name')
                        <span class="text-xs text-red-600 mt-1">{{$message}}</span>
                        @enderror
                    </section>
                    <section class="flex flex-col">
                        <label for="email" class="mb-2 font-medium">Alamat Email <span
                                class="text-red-500">*</span></label>
                        <input value="{{ $fellowship->email }}" type="email" id="email" name="email"
                            placeholder="Mario@example.com"
                            class="rounded-md text-slate-600 py-1.5 outline-2 transition-all duration-300 ease-in-out outline-slate-900 px-2 border-2 text-sm border-slate-500 w-full">
                        @error('email')
                        <span class="text-xs text-red-600 mt-1">{{$message}}</span>
                        @enderror
                    </section>
                    <section class="flex flex-col">
                        <label for="phone" class="mb-2 font-medium">Nomor Handphone <span
                                class="text-red-500">*</span></label>
                        <input value="{{ $fellowship->phone }}" type="number" id="phone" name="phone"
                            placeholder="08124578452"
                            class="rounded-md text-slate-600 py-1.5 outline-2 transition-all duration-300 ease-in-out outline-slate-900 px-2 border-2 text-sm border-slate-500 w-full">
                        @error('phone')
                        <span class="text-xs text-red-600 mt-1">{{$message}}</span>
                        @enderror
                    </section>
                    <section class="flex flex-col">
                        <label for="semester" class="mb-2 font-medium">Semester<span
                                class="text-red-500">*</span></label>
                        <select id="semester" name="semester"
                            class="rounded-md text-slate-600 py-1.5 outline-2 transition-all duration-300 ease-in-out outline-slate-900 px-2 border-2 text-sm border-slate-500 w-full ">
                            <option value="{{ old('semester') }}" disabled selected>Pilih Semester</option>
                            @for ($i = 1; $i <= 8; $i++) <option value="{{ $i }}">{{ $i }}
                                </option>
                                @endfor
                        </select>
                        @error('semester')
                        <span class="text-xs text-red-600 mt-1">{{$message}}</span>
                        @enderror
                    </section>
                    <section class="flex flex-col">
                        <label for="IPK" class="mb-2 font-medium">IPK<span class="text-red-500">*</span></label>
                        <input type="number" disabled readonly id="IPK" name="IPK" value="{{$fellowship->IPK}}"
                            class="rounded-md text-slate-600 py-1.5 outline-2 transition-all duration-300 ease-in-out outline-slate-900 px-2 border-2 text-sm bg-slate-200 border-slate-500 w-full">
                        @error('IPK')
                        <span class="text-xs text-red-600 mt-1">{{$message}}</span>
                        @enderror
                    </section>
                    <section class="flex flex-col">
                        <label for="category" class="mb-2 font-medium">Pilihan Beasiswa<span
                                class="text-red-500">*</span></label>
                        <select id="category" name="category"
                            class="rounded-md text-slate-600 py-1.5 outline-2 transition-all duration-300 ease-in-out outline-slate-900 px-2 border-2 text-sm border-slate-500 w-full "
                            {{ $fellowship->IPK < 3 ? 'disabled' : '' }} autofocus>
                                <option value="" disabled selected>{{ $fellowship->IPK < 3
                                        ? 'IPK Tidak Memenuhi Standar' : 'Pilih Beasiswa' }}</option>
                                        @foreach(['akademik' => 'Beasiswa Akademik', 'nonAkademik' => 'Beasiswa Non
                                        Akademik',
                                        'influencer' => 'Beasiswa Influencer'] as $value => $label)
                                <option value="{{ $value }}">{{ $label }}</option>
                                @endforeach
                        </select>
                        @error('category')
                        <span class="text-xs text-red-600 mt-1">{{$message}}</span>
                        @enderror
                    </section>

                    <section class="flex flex-col col-span-2">
                        <label for="attachment" class="mb-2 font-medium">Ganti Berkas<span
                                class="text-red-500">*</span></label>
                        @if ($fellowship->IPK < 3 ) <p
                            class="rounded-md text-slate-600 py-1.5 outline-2 transition-all duration-300 ease-in-out outline-slate-900 px-2 border-2 text-sm  border-slate-500 w-full">
                            IPK Tidak Memenuhi Standar
                            </p>
                            @else
                            <input type="file" id="attachment" name="attachment"
                                class="rounded-md text-slate-600 py-1.5 outline-2 transition-all duration-300 ease-in-out outline-slate-900 px-2 border-2 text-sm  border-slate-500 w-full"
                                {{ $fellowship->IPK < 3 ? 'disabled' : '' }}>
                                @endif
                                @error('attachment')
                                <span class="text-xs text-red-600 mt-1">{{$message}}</span>
                                @enderror

                                @if ($fellowship->attachment)
                                <h1 class=" text-sm mt-2">berkas sudah ada, lihat <a
                                        href="{{ asset('storage/' . $fellowship->attachment) }}" target="_blank"
                                        class="text-blue-500 italic underline">Lihat berkas</a>
                                </h1>
                                @endif
                    </section>
                    <section class="w-full grid grid-cols-3 col-span-2 gap-x-6 mt-2">
                        <button type="submit"
                            class="bg-[#F53838] hover:bg-[#da2d2d] disabled:bg-[#b84545] disabled:hover:bg-[#b84545] transition-all duration-300 ease-in-out col-span-2 text-slate-100 rounded-md shadow-sm py-1.5 border-2 border-[#F53838]"
                            {{ $fellowship->IPK < 3 ? 'disabled' : '' }}>Update
                                Data</button>

                        <a href="{{route('result')}}" type="button"
                            class="bg-slate-50 hover:bg-slate-100 grid place-items-center transition-all duration-300 ease-in-out rounded-md shadow-sm py-1.5 border-2 border-slate-800">Batal</a>
                    </section>
                </form>
                <form method="post" action="{{route('delete', $fellowship)}}"
                    class="mt-4 w-full  flex justify-end text-sm">
                    @csrf
                    @method('delete')
                    <button type="submit"
                        class=" w-fit transition-all duration-300 ease-in-out rounded-md shadow-sm py-1.5 text-red-600">Hapus</button>
                </form>
            </main>

        </section>
    </section>
</x-layout>
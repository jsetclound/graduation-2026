{{-- header --}}
<x-header></x-header>


{{-- main content --}}
<div class="bg-white">

    <div class="relative isolate px-6 pt-14 lg:px-8">
        <div aria-hidden="true"
            class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80">
            <div style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"
                class="relative left-[calc(50%-11rem)] aspect-1155/678 w-144.5 -translate-x-1/2 rotate-30 bg-linear-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-288.75">
            </div>
        </div>
        
        <div class="px-4 sm:px-0">
            <h3 class="text-base/7 font-semibold text-gray-900">Hasil Kelulusan Anda</h3>
            <p class="mt-1 max-w-2xl text-sm/6 text-gray-500">Berikut adalah hasil kelulusan Anda.</p>
        </div>
        <div class="mt-6 border-t border-gray-100">
            <dl class="divide-y divide-gray-100">
                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                    <dt class="text-sm/6 font-medium text-gray-900">Full name</dt>
                    <dd class="mt-1 text-sm/6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $student->nama_lengkap }}</dd>
                </div>
                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                    <dt class="text-sm/6 font-medium text-gray-900">Nomor Induk</dt>
                    <dd class="mt-1 text-sm/6 text-gray-700 sm:col-span-2 sm:mt-0">{{ $student->nomor_induk }}</dd>
                </div>
                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                    <dt class="text-sm/6 font-medium text-gray-900">Jenis Kelamin</dt>
                    <dd class="mt-1 text-sm/6 text-gray-700 sm:col-span-2 sm:mt-0">pria</dd>
                </div>
                <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                    <dt class="text-sm/6 font-medium text-gray-900">Rombel/Kelas</dt>
                    <dd class="mt-1 text-sm/6 text-gray-700 sm:col-span-2 sm:mt-0">x aphp</dd>
                </div>

                {{-- jika lulus, unduh pdf --}}
                @if ($student->status == 'Lulus')
                    <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                        <dt class="text-sm/6 font-medium text-gray-900">Attachments</dt>
                        <dd class="mt-2 text-sm text-gray-900 sm:col-span-2 sm:mt-0">
                            <ul role="list" class="divide-y divide-gray-100 rounded-md border border-gray-200">
                                <li class="flex items-center justify-between py-4 pr-5 pl-4 text-sm/6">
                                    <div class="flex w-0 flex-1 items-center">
                                        <svg viewBox="0 0 20 20" fill="currentColor" data-slot="icon" aria-hidden="true"
                                            class="size-5 shrink-0 text-gray-400">
                                            <path
                                                d="M15.621 4.379a3 3 0 0 0-4.242 0l-7 7a3 3 0 0 0 4.241 4.243h.001l.497-.5a.75.75 0 0 1 1.064 1.057l-.498.501-.002.002a4.5 4.5 0 0 1-6.364-6.364l7-7a4.5 4.5 0 0 1 6.368 6.36l-3.455 3.553A2.625 2.625 0 1 1 9.52 9.52l3.45-3.451a.75.75 0 1 1 1.061 1.06l-3.45 3.451a1.125 1.125 0 0 0 1.587 1.595l3.454-3.553a3 3 0 0 0 0-4.242Z"
                                                clip-rule="evenodd" fill-rule="evenodd" />
                                        </svg>
                                        <div class="ml-4 flex min-w-0 flex-1 gap-2">
                                            <span class="truncate font-medium text-gray-900">Susrat Keterangan
                                                Lulus.pdf</span>
                                            <span class="shrink-0 text-gray-400">secure</span>
                                        </div>
                                    </div>
                                    <div class="ml-4 shrink-0">
                                        <a href=""{{ route('download.skl', $student->id) }}"
                                            class="font-medium text-indigo-600 hover:text-indigo-500">Download</a>
                                    </div>
                                </li>
                            </ul>
                        </dd>
                    </div>
                @else
                    <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                        <dt class="text-sm/6 font-medium text-gray-900">Status</dt>
                        <dd class="mt-1 text-sm/6 text-gray-700 sm:col-span-2 sm:mt-0">Tidak Lulus</dd>
                    </div>
                @endif
            </dl>
        </div>
    </div>
</div>
</div>


{{-- footer --}}
<x-footer></x-footer>

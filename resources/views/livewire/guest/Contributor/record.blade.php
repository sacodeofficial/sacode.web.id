<div>

    
    <!-- Page Content -->
    <div class="max-w-3xl px-4 pt-6 lg:pt-10 pb-12 sm:px-6 lg:px-8 mx-auto">
        <div class="max-w-2xl">

            <!-- Title -->
            <div class="text-center mb-6">
                <p class="text-xs font-semibold text-gray-500 tracking-wide uppercase mb-3 dark:text-neutral-200">
                Contributor
                </p>
                <h1 class="text-3xl text-gray-800 font-bold sm:text-5xl lg:text-6xl lg:leading-tight dark:text-neutral-200">
                Community<br> <span class="text-blue-500">Sharing and Learning</span>
                </h1>
            </div>
            <!-- End Title -->

            <!-- Content -->
            <div class="space-y-5 md:space-y-8">

                <p class="text-lg font-bold text-gray-800 dark:text-neutral-200">2024's Contributor Events:</p>

                @if (count($Contributor) > 0)
                <div class="group flex flex-col h-full bg-white border border-gray-200 shadow-sm rounded-xl dark:bg-neutral-900 dark:border-neutral-700 dark:shadow-neutral-700/70 p-6">
                
                <div class="grid grid-cols-2 gap-8 md:gap-12">

                    @foreach ($Contributor as $item)

                    <!-- Col -->
                    <div class="grid sm:flex sm:items-center gap-y-3 gap-x-4">
                        <img class="rounded-lg size-20 grayscale" src="{{ asset('contributors/'. $item->picture ?? '') }}" alt="{{ asset($item->picture ?? '') }}">

                        <div class="sm:flex sm:flex-col sm:h-full">
                        <div>
                            <h3 class="font-medium text-gray-800 dark:text-neutral-200">
                                {{ $item->name ?? 'name' }}
                            </h3>
                            <p class="mt-1 text-xs text-gray-500 dark:text-neutral-500">
                                {{ $item->job_title ?? 'job_title' }}
                            </p>
                        </div>

                        <!-- Social Brands -->
                        <div class="mt-2 sm:mt-auto space-x-2.5">
                            @if($item->github)
                            <a class="inline-flex justify-center items-center text-gray-500 rounded-full hover:text-gray-800 dark:text-neutral-500 dark:hover:text-neutral-200"
                            href="{{ $item->github ?? 'https://github.com/sacodeofficial' }}" target="_blank">
                            <i class="fa-brands fa-github"></i>
                            </a>
                            @endif
                            
                            @if($item->linkedin)
                            <a class="inline-flex justify-center items-center text-gray-500 rounded-full hover:text-gray-800 dark:text-neutral-500 dark:hover:text-neutral-200"
                            href="{{ $item->linkedin ?? 'https://www.linkedin.com/company/sacode-official/' }}" target="_blank">
                            <i class="fa-brands fa-linkedin"></i>
                            </a>
                            @endif
                            
                        </div>
                        <!-- End Social Brands -->
                        </div>
                    </div>
                    <!-- End Col -->

                    @endforeach
                </div>
                <!-- End Grid -->
                </div>

                @else
                    <h1 class="text-xl text-center text-gray-800 font-semibold">Data Not Found</h1>
                @endif

            </div>

            {{-- <div class="py-6">
                {{ $Contributor->links() }}
            </div>           --}}

            <!-- Review -->
            <div class="py-6">
                <div class="flex space-x-1">
                    <div class="text-2xl text-gray-800 dark:text-neutral-400">
                    
                            <p class="text-4xl font-bold text-gray-800 dark:text-neutral-200">Be a Contributor</p>

                            <p class="text-2xl py-6 text-gray-700 dark:text-neutral-200">This is Contributor by SaCode Community! Here you can share and discuss. Additionally, <strong>you may contribute as a speaker, moderator, or as part of the team behind the scenes</strong>.</p>

                            <a class="py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none" href="https://wa.link/21qtrj" target="_blank">
                                <i class="fa-solid fa-laptop-code"></i>
                                Send us message on Whatsapp!
                            </a>

                            <a class="py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800" href="{{ route('donation') }}">
                                <i class="fa-solid fa-book-open"></i>
                                Give donation here
                            </a>
                            
                    </div>
                </div>
            </div>
            <!-- End Review -->

        </div>
    </div>
    <!-- End Page Content -->

</div>

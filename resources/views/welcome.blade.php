<x-guest-layout>




    




            <!-- Hero -->
            <div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8">
                <!-- Grid -->
                <div class="grid md:grid-cols-2 gap-4 md:gap-8 xl:gap-20 md:items-center">
                    <div>
                        <h1
                            class="block text-3xl font-bold text-gray-800 sm:text-4xl lg:text-6xl lg:leading-tight dark:text-white">
                            SaCode <span class="text-blue-600">Community & Coding School</span></h1>
                        <p class="mt-3 text-3xl text-gray-800 dark:text-neutral-400">A community of Information and Communication Technology Enthusiasts <br> in Papua.</p>

                        <!-- Buttons -->
                        <div class="mt-7 grid gap-3 w-full sm:inline-flex">
                            <a class="py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none"
                                href="{{ route('codingcourses') }}">
                                <i class="fa-solid fa-laptop-code"></i>
                                Coding Courses
                            </a>
                            <a class="py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800"
                                href="{{ route('techshare') }}">
                                <i class="fa-solid fa-book-open"></i>
                                TechShare Events
                            </a>
                        </div>
                        <!-- End Buttons -->

                        <!-- Review -->
                        <div class="mt-6 lg:mt-10 grid grid-cols-1 gap-x-5">
                            <!-- Review -->
                            <div class="py-5">
                                <div class="flex space-x-1">
                                    <div class="text-2xl text-gray-800 dark:text-neutral-400">
                                        Want to be a contributor? <strong>Be a Speaker, Moderator, Trainer or join the team behind the schene?</strong>
                                        <div class="flex items-center gap-4 text-white/80 mt-5">
                                            <a href="{{ url('techshare-events/2024') }}" class="text-blue-600 hover:text-blue-700 underline font-bold">Learn more and join here</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Review -->
                        </div>
                        <!-- End Review -->
                    </div>
                    <!-- End Col -->

                    <div class="">
                        <div class="relative">
                            {{-- <img class="w-full rounded-md" src="{{ asset('cover.jpg') }}" alt="Image Description"> --}}
                            {{-- <video autoplay loop>
                                <source src="{{URL::asset("/videos/sacode-official-website-updates.mp4")}}" type="video/mp4">
                                Your browser does not support the video tag.
                            </video> --}}
                            <iframe 
                                id="existing-iframe-example" 
                                frameborder="0"
                                height="340"
                                src="https://www.youtube.com/embed/rEJAM6xwYco?autoplay=1&mute=1&loop=1&playlist=rEJAM6xwYco&enablejsapi=1&controls=0&showinfo=0&autohide=1&modestbranding=1" 
                                frameborder="0"
                                class="min-w-full"
                            >
                            </iframe>
                            <div
                                class="absolute inset-0 -z-[1] bg-gradient-to-tr from-gray-200 via-white/0 to-white/0 size-full rounded-md mt-4 -mb-4 me-4 -ms-4 lg:mt-6 lg:-mb-6 lg:me-6 lg:-ms-6 dark:from-neutral-800 dark:via-neutral-900/0 dark:to-neutral-900/0">
                            </div>

                            <!-- SVG-->
                            <div class="absolute bottom-0 start-0">
                                <svg class="w-2/3 ms-auto h-auto text-white dark:text-neutral-900" width="630" height="451"
                                    viewBox="0 0 630 451" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="531" y="352" width="99" height="99" fill="currentColor" />
                                    <rect x="140" y="352" width="106" height="99" fill="currentColor" />
                                    <rect x="482" y="402" width="64" height="49" fill="currentColor" />
                                    <rect x="433" y="402" width="63" height="49" fill="currentColor" />
                                    <rect x="384" y="352" width="49" height="50" fill="currentColor" />
                                    <rect x="531" y="328" width="50" height="50" fill="currentColor" />
                                    <rect x="99" y="303" width="49" height="58" fill="currentColor" />
                                    <rect x="99" y="352" width="49" height="50" fill="currentColor" />
                                    <rect x="99" y="392" width="49" height="59" fill="currentColor" />
                                    <rect x="44" y="402" width="66" height="49" fill="currentColor" />
                                    <rect x="234" y="402" width="62" height="49" fill="currentColor" />
                                    <rect x="334" y="303" width="50" height="49" fill="currentColor" />
                                    <rect x="581" width="49" height="49" fill="currentColor" />
                                    <rect x="581" width="49" height="64" fill="currentColor" />
                                    <rect x="482" y="123" width="49" height="49" fill="currentColor" />
                                    <rect x="507" y="124" width="49" height="24" fill="currentColor" />
                                    <rect x="531" y="49" width="99" height="99" fill="currentColor" />
                                </svg>
                            </div>
                            <!-- End SVG-->
                            
                        </div>
                    </div>

                    
                    <!-- End Col -->
                </div>
                <!-- End Grid -->
            </div>
            <!-- End Hero -->










        













</x-guest-layout>
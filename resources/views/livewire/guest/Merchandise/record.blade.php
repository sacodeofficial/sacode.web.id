<div>

    
    <!-- Page Content -->
    <div class="max-w-3xl px-4 pt-6 lg:pt-10 pb-12 sm:px-6 lg:px-8 mx-auto">
        <div class="max-w-2xl">

            <!-- Title -->
            <div class="text-center mb-6">
                <p class="text-xs font-semibold text-gray-500 tracking-wide uppercase mb-3 dark:text-neutral-200">
                    Merchandise
                </p>
                <h1 class="text-3xl text-gray-800 font-bold sm:text-5xl lg:text-6xl lg:leading-tight dark:text-neutral-200">
                  Support Our Community Through <span class="text-blue-500">Your Donation</span>
                </h1>
            </div>
            <!-- End Title -->

            <!-- Content -->
            <div class="space-y-5 md:space-y-8">

                

                <p class="text-lg text-gray-800 dark:text-neutral-200"><strong>You can support our community by purchasing our merchandise.</strong> Here are some examples of our designs on T-shirt mockups. Hoodies and sweaters are also available, if you want.</p>

                <p class="text-lg text-gray-800 dark:text-neutral-200">If you want your own custom designs, please contact <a href="https://atstore.id" target="_blank" class="text-blue-600 decoration-2 hover:underline font-medium dark:text-blue-500">AT Store</a> to submit your design or have more information about donation.</p>

                <p class="text-lg font-bold text-gray-800 dark:text-neutral-200">SaCode T-Shirt Merchandises (Mockups):</p>

                @if (count($Merchandise) > 0)
                    
                <div class="grid sm:grid-cols-2 lg:grid-cols-2 gap-6">

                    @foreach ($Merchandise as $item)

                    <!-- Card -->
                    <div class="group flex flex-col h-full bg-white border border-gray-200 shadow-sm rounded-xl dark:bg-neutral-900 dark:border-neutral-700 dark:shadow-neutral-700/70">
                        <img src="{{ asset('merchandises/'.$item->thumbnail) }}" alt="{{ $item->title }}" class="rounded-t-xl">
                        <div class="mt-auto flex border-t border-gray-200 divide-x divide-gray-200 dark:border-neutral-700 dark:divide-neutral-700">
                        <a class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-ee-xl bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800 rounded-b-xl" href="{{ $item->order_link ?? 'https://atstore.id' }}" target="_blank">
                            <i class="fa-brands fa-whatsapp"></i> Order Now
                        </a>
                        </div>
                    </div>

                    @endforeach
                </div>
                <!-- End Content -->

                @else
                    <h1 class="text-xl text-center text-gray-800 font-semibold">Data Not Found</h1>
                @endif
            </div>

            <div class="py-6">
                {{ $Merchandise->links() }}
            </div>


        </div>
    </div>
    <!-- End Page Content -->

</div>

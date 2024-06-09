<div>

    
    <!-- Page Content -->
    <div class="max-w-3xl px-4 pt-6 lg:pt-10 pb-12 sm:px-6 lg:px-8 mx-auto">
        <div class="max-w-2xl">

            <!-- Title -->
            <div class="text-center mb-6">
                <p class="text-xs font-semibold text-gray-500 tracking-wide uppercase mb-3 dark:text-neutral-200">
                    Playgrounds
                </p>
                <h1 class="text-3xl text-gray-800 font-bold sm:text-5xl lg:text-6xl lg:leading-tight dark:text-neutral-200">
                  Community Learning and <span class="text-blue-500">Contributing</span>
                </h1>
            </div>
            <!-- End Title -->

            <!-- Content -->
            <div class="space-y-5 md:space-y-8">

                <p class="text-lg text-gray-800 dark:text-neutral-200">All the playgrounds available:</p>

            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">

                @foreach ($playgrounds as $playground)
                    
                <!-- Card -->
                <div class="group flex flex-col h-full bg-white border border-gray-200 shadow-sm rounded-xl dark:bg-neutral-900 dark:border-neutral-700 dark:shadow-neutral-700/70">
                    <img src="{{ asset($playground->image) }}" alt="{{ $playground->title }}" class="rounded-t-xl">
                    <div class="mt-auto flex border-t border-gray-200 divide-x divide-gray-200 dark:border-neutral-700 dark:divide-neutral-700">
                    <a class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-ee-xl bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800 rounded-b-xl" href="{{ $playground->repository_url }}" target="_blank">
                        <i class="fa-brands fa-github"></i> {{ $playground->title }}
                    </a>
                    </div>
                </div>

                @endforeach
            </div>
            <!-- End Content -->
        </div>
        <!-- End Page Content -->

        <div class="my-6">
            {{ $playgrounds->links() }}
        </div>


</div>

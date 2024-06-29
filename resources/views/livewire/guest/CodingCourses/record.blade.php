<div>




    <!-- Page Content -->
    <div class="max-w-3xl px-4 pt-6 lg:pt-10 pb-12 sm:px-6 lg:px-8 mx-auto">
        <div class="max-w-2xl">

          <!-- Title -->
          <div class="text-center mb-6">
            <p class="text-xs font-semibold text-gray-500 tracking-wide uppercase mb-3 dark:text-neutral-200">
              Coding Courses
            </p>
            <h1 class="text-3xl text-gray-800 font-bold sm:text-5xl lg:text-6xl lg:leading-tight dark:text-neutral-200">
              Introduction & Basics <br> <span class="text-blue-500">of Coding Skills</span>
            </h1>
          </div>
          <!-- End Title -->

          <!-- Content -->
          <div class="space-y-5 md:space-y-8">

          <p class="text-lg text-gray-800 dark:text-neutral-200">All available courses:</p>

          <!-- Grid -->
          <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">

            {{-- @dd($CodingCourses); --}}

            @if($CodingCourses && $CodingCourses->items() > 0)

              @foreach ($CodingCourses->items() as $item)

              <!-- Card -->
              <div class="group flex flex-col h-full bg-white border border-gray-200 shadow-sm rounded-xl dark:bg-neutral-900 dark:border-neutral-700 dark:shadow-neutral-700/70">
                <img src="{{ asset('courses/' . $item->thumbnail ?? '') }}" alt="{!! $item->thumbnail !!}" class="rounded-t-xl">
                <div class="p-4 md:p-6">
                  <span class="border dark:border-white/40 dark:text-white/40 text-xs rounded-lg px-2">
                    {{ $item->is_on_site }}
                  </span>
                  <p class="mt-3 text-gray-500 dark:text-neutral-500">
                    {{ $item->title }}
                  </p>
                </div>
                <div class="mt-auto flex border-t border-gray-200 divide-x divide-gray-200 dark:border-neutral-700 dark:divide-neutral-700">
                  
                  
                  <a 
                    class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-ee-xl bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800 rounded-b-xl" 
                    href="{{ $item->is_open ? $item->wa_link : '#' }}"
                    >
                    {{ $item->is_open ? 'REGISTER NOW' : 'Closed' }}
                  </a>
                </div>
              </div>
              <!-- End Card -->

              @endforeach

            @else
                No data...
            @endif


          </div>
          <!-- End Grid -->

          


        <div class="py-9">
          {{ $CodingCourses->links() }}
        </div>

          

          <!-- Review -->
          <div class="py-5">
              <div class="flex space-x-1">
                  <div class="text-2xl text-gray-800 dark:text-neutral-400">
                      <strong>Have any questions?</strong> We love to hear from you. Please contact our team and ask your questions.
                      <div class="flex items-center gap-4 text-white/80 mt-5">
                          <a href="https://wa.link/7xg3ji" target="_blank" class="py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none"><i class="fa-solid fa-mobile-alt me-2"></i>Contact from here</a>
                      </div>
                  </div>
              </div>
          </div>
          <!-- End Review -->



          </div>
          <!-- End Content -->
        </div>
      </div>
      <!-- End Page Content -->

    </div>
























</div>

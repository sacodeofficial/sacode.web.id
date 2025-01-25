<div>


  
    <!-- Page Content -->
    <div class="max-w-3xl px-4 pt-6 lg:pt-10 pb-12 sm:px-6 lg:px-8 mx-auto">
      <div class="max-w-2xl">

        <!-- Title -->
        <div class="text-center mb-6">
          <p class="text-xs font-semibold text-gray-500 tracking-wide uppercase mb-3 dark:text-neutral-200">
            Roadmaps
          </p>
          <h1 class="text-3xl text-gray-800 font-bold sm:text-5xl lg:text-6xl lg:leading-tight dark:text-neutral-200">
            Our <span class="text-blue-500">Roadmaps </span>  to help <br> your coding journey.
          </h1>
        </div>
        <!-- End Title -->


        <!-- Content -->

        <div class="space-y-4">
            <!-- Accordion Item 1 -->
            <div class="border border-gray-200 rounded-lg dark:border-gray-700">
                <button class="flex justify-between items-center w-full p-4 font-medium text-left text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800" data-accordion-target="#accordion-1" aria-expanded="true" aria-controls="accordion-1">
                    <span>Basic Coding with HTML & CSS</span>
                    <svg class="w-6 h-6 shrink-0 rotate-180" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </button>
                <div id="accordion-1" class="p-4 border-t border-gray-200 dark:border-gray-700">
                    <p class="text-gray-500 dark:text-gray-400 pb-5">Start your coding journey with the fundamentals. Learn HTML & CSS to build your first websites. Understand the basics of web development: How to use code editors, how to write HTML, how to style with CSS, and how to make your website responsive.</p>

                    <figure>
                      <img class="w-full object-cover rounded-xl" src="{{ asset('roadmaps/sacode-roadmap-beginner-html-css.png') }}"
                        alt="Image Description">
                    </figure>
                    
                </div>
            </div>

            <!-- Accordion Item 2 -->
            <div class="border border-gray-200 rounded-lg dark:border-gray-700">
                <button class="flex justify-between items-center w-full p-4 font-medium text-left text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800" data-accordion-target="#accordion-2" aria-expanded="false" aria-controls="accordion-2">
                    <span>Basic Coding with JavaScript</span>
                    <svg class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </button>
                <div id="accordion-2" class="hidden p-4 border-t border-gray-200 dark:border-gray-700">
                    <p class="text-gray-500 dark:text-gray-400 pb-5">Learn JavaScript to add interactivity to your websites. Understand variables, functions, and event-driven programming. Start with basic concepts like loops, conditionals, and DOM manipulation.</p>
                    <div class="p-4 mb-4 text-sm text-yellow-800 rounded-lg bg-yellow-50 dark:bg-yellow-900 dark:text-yellow-300" role="alert">
                      <span class="font-medium">Coming Soon!</span> We're working to bring you this content.
                    </div>
                </div>
            </div>

            <!-- Accordion Item 3 -->
            <div class="border border-gray-200 rounded-lg dark:border-gray-700">
                <button class="flex justify-between items-center w-full p-4 font-medium text-left text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800" data-accordion-target="#accordion-3" aria-expanded="false" aria-controls="accordion-3">
                    <span>Basic Coding with PHP</span>
                    <svg class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </button>
                <div id="accordion-3" class="hidden p-4 border-t border-gray-200 dark:border-gray-700">
                    <p class="text-gray-500 dark:text-gray-400 pb-5">Learn PHP to build dynamic web applications. Understand server-side scripting, database integration, and server management. Start with basic PHP syntax, variables, and functions.</p>
                    <div class="p-4 mb-4 text-sm text-yellow-800 rounded-lg bg-yellow-50 dark:bg-yellow-900 dark:text-yellow-300" role="alert">
                      <span class="font-medium">Coming Soon!</span> We're working to bring you this content.
                    </div>
                </div>
            </div>
        </div>

        <script>  
            document.querySelectorAll('[data-accordion-target]').forEach(button => {
                button.addEventListener('click', () => {
                    const target = document.querySelector(button.dataset.accordionTarget);
                    const icon = button.querySelector('svg');
                    
                    target.classList.toggle('hidden');
                    icon.style.transform = target.classList.contains('hidden') ? 'rotate(0deg)' : 'rotate(180deg)';
                });
            });
        </script>

        <!-- Content End -->
      </div>
    </div>
    <!-- End Page Content -->


</div>
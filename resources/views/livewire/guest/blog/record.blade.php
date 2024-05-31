<div class="wp-post-content" x-data="{
                posts: [],
                currentPage: 1,
                perPage: 3,
                totalPages: 0,
                fetchPosts() {
                    fetch(`https://public-api.wordpress.com/rest/v1.1/sites/blogsacode.wordpress.com/posts/?page=${this.currentPage}&per_page=${this.perPage}`)
                    .then(response => response.json())
                    .then(data => {
                        {{-- this.posts = data.posts; --}}
                        this.filterByCategory(data.posts);
                        this.totalPages = parseInt(response.headers.get('X-WP-TotalPages'));
                    })
                    .catch(error => console.error('Error:', error));
                },
                changePage(page) {
                    this.currentPage = page;
                    this.fetchPosts();
                },
                filterByCategory(data){

                  console.log(data.length);

                  for(let i = 0; i < data.length; i++) {

                    if(data[i].categories.Blog && data[i].categories.Blog.slug && data[i].categories.Blog.slug === 'blog'){
                      this.posts.push(data[i]);
                    }

                  }                 

                }
            }"
            x-init="fetchPosts()">
    
    

    
    <!-- Page Content -->
    <div class="max-w-3xl px-4 pt-6 lg:pt-10 pb-12 sm:px-6 lg:px-8 mx-auto">
        <div class="max-w-2xl">
  
          <!-- Title -->
          <div class="text-center mb-6">
            <p class="text-xs font-semibold text-gray-500 tracking-wide uppercase mb-3 dark:text-neutral-200">
              Blog
            </p>
            <h1 class="text-3xl text-gray-800 font-bold sm:text-5xl lg:text-6xl lg:leading-tight dark:text-neutral-200">
              Our Latest <br> <span class="text-blue-500">Blog Articles</span>
            </h1>
          </div>
          <!-- End Title -->
  
          <!-- Content -->

            <!-- Card Blog -->
            <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
              <!-- Title -->
              <div class="max-w-2xl text-center mx-auto mb-10 lg:mb-14">
                <p class="mt-1 text-gray-600 dark:text-neutral-400">Silahkan klik dan baca artikel SaCode.</p>
              </div>
              <!-- End Title -->

              <!-- Grid -->
              <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-4 mb-10 lg:mb-14">
                                
                <!-- Card -->
                <template x-for="(post, index) in posts" :key="index">

                  <a class="group flex flex-col bg-white border shadow-sm hover:shadow-md transition dark:bg-neutral-900 dark:border-neutral-800"  :href="`blogs/${post.slug}`">
                    <div class="aspect-w-16 aspect-h-9">
                      <img class="w-full object-cover" x-bind:src="post.featured_image" alt="Image Description">
                    </div>
                    <div class="p-4 md:p-5">
                      {{-- <p class="mt-2 text-xs uppercase text-gray-600 dark:text-neutral-400" x-text="post.categories[0].name">
                      </p> --}}
                      <h3 class="mt-2 text-lg font-medium text-gray-800 group-hover:text-blue-600 dark:text-neutral-300 dark:group-hover:text-white" x-text="post.title">
                      </h3>
                      <p class="card-text" x-html="post.content.substring(0, post.content.indexOf('.') + 1)"></p>
                    </div>
                  </a>
                </template>
                <!-- End Card -->

              </div>
              <!-- End Grid -->

              <!-- End Card -->
            </div>
            <!-- End Card Blog -->

          </div>
          <!-- End Card Blog -->

          <!-- Pagination -->
          <nav class="flex items-center gap-x-1">
            <button type="button" class="min-h-[38px] min-w-[38px] py-2 px-2.5 inline-flex justify-center items-center gap-x-1.5 text-sm rounded-lg text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10">
              <svg aria-hidden="true" class="hidden flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="m15 18-6-6 6-6"></path>
              </svg>
              <span>Previous</span>
            </button>
            <div class="flex items-center gap-x-1">
              <button type="button" class="min-h-[38px] min-w-[38px] flex justify-center items-center text-gray-800 hover:bg-gray-100 py-2 px-3 text-sm rounded-lg focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10" aria-current="page">1</button>
              <button type="button" class="min-h-[38px] min-w-[38px] flex justify-center items-center text-gray-800 hover:bg-gray-100 py-2 px-3 text-sm rounded-lg focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10">2</button>
              <button type="button" class="min-h-[38px] min-w-[38px] flex justify-center items-center text-gray-800 hover:bg-gray-100 py-2 px-3 text-sm rounded-lg focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10">3</button>
            </div>
            <button type="button" the min-h-[38px] min-w-[38px] py-2 px-2.5 inline-flex justify-center items-center gap-x-1.5 text-sm rounded-lg text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10">
              <span>Next</span>
              <svg aria-hidden="true" class="hidden flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="m9 18 6-6-6-6"></path>
              </svg>
            </button>
          </nav>
          <!-- End Pagination -->
  
        
          </div>
          <!-- End Content -->
        </div>
      </div>
      <!-- End Page Content -->


</div>

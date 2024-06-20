<div>
  
  <!-- Page Content -->
    <div class="max-w-3xl px-4 pt-6 lg:pt-10 pb-12 sm:px-6 lg:px-8 mx-auto">
        <div class="max-w-2xl">

        <div class="wp-post-content " x-data="{
            post: {},
            {{-- slug: new URL(location.href).searchParams.get('slug'), --}}
            fetchPost() {
                fetch(`{{ $blogEndpoint->endpoint ?? '' }}/slug:{{ Request::segment(2) }}`)
                .then(response => response.json())
                .then(data => {
                    this.post = data;
                })
                .catch(error => console.error('Error:', error));
            }
        }"
        x-init="fetchPost()"
        >

          
  
          <!-- Title -->
          <div class="text-center mb-6">
            <p class="text-xs font-semibold text-gray-500 tracking-wide uppercase mb-3 dark:text-neutral-200">
              Blog
            </p>
            <h1 
              class="text-3xl text-gray-800 font-bold sm:text-5xl lg:text-6xl lg:leading-tight dark:text-neutral-200" 
              x-html="post.title">
            </h1>
          </div>
          <!-- End Title -->

          <!-- Card Blog -->
          <div class="max-w-[85rem] px-4 pb-10 sm:px-6 lg:px-8 lg:pb-14 mx-auto">

            <div class="featured_image">
              <img 
                class="w-full h-100 object-cover object-center" 
                :src="post.featured_image" 
                alt="featured_image">
            </div>

            <div x-html="post.content"></div>

          </div>
        </div>


      </div>
    </div>
</div>
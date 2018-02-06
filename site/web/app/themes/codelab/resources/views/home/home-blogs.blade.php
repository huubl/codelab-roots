<section class="Section Section-blog bg-light-blue">
   <div class="container">

      <h2 class="Heading Heading-underlined"> Blog </h2>
      <div class="row">
         @foreach($blogs as $blog)
            <div class="col-sm-4">
               <article class="Card Card-blog card">
                  <img class="card-img-top img-fluid" src="{{ get_the_post_thumbnail_url($blog->ID) }}">
                  <div class="card-body text-center">
                     <h6 class="Card-blogTitle card-title"> {{ $blog->post_title }} </h6>
                     <small>
                        <a class="Card-blogCategory card-link"
                           href="{{ $blog->categoryUrl }}#"> {{ $blog->categoryName }} </a> <span
                           class="mx-1"> | </span>
                        <span class="Card-blogPublishedDate card-text"> {{ $blog->publishedDate }} </span>
                     </small>
                  </div>
               </article>
            </div>
         @endforeach
      </div>

   </div>
</section>

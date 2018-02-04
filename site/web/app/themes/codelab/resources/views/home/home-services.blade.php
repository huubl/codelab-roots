<section class="Section Section-services bg-light-blue">

   <div class="container">

      <h1 class="text-center mb-5"> Web Design & Development </h1>
      <br>

      @foreach($services as $service)
         <div class="Service py-5">
            <div class="row">
               <div class="col-sm-8 @if($loop->index % 2 == 1) order-last @endif">
                  <h2 class="Heading Heading-underlined"> {{ $service->post_title }} </h2>
                  <p> {{ $service->_codelab_description }}</p>
                  <button class="btn btn-primary"> LEARN MORE</button>
               </div>
               <div class="col-sm-4 @if($loop->index % 2 == 1) order-first @endif">
                  @include('partials.component-card-service')
               </div>
            </div>
         </div>
      @endforeach

   </div>
</section>
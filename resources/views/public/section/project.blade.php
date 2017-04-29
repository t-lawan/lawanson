<!-- Project Section -->
 <section id="project" class="project-section">
     <div class="container-fluid text-center">
                 <h1> Projects</h1>

                 <ul class="list-inline">
                 @foreach($projects as $project)
                 @if ($loop->first)
                  @include('public.section.projects.templates.active.title')
                  @else
                    @include('public.section.projects.templates.title')

                 @endif



                 @endforeach
                 </ul>


                 <div class="tab-content">
                   @foreach($projects as $project)

                     @if ($loop->first)
                      @include('public.section.projects.templates..active.content')
                      
                     @else
                      @include('public.section.projects.templates..content')
                     @endif
                   @endforeach
                 </div>




     </div>
 </section>

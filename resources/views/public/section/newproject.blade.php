<!-- Project Section -->
 <section id="project" class="project-section">
     <div class="container-fluid text-center">
                 <h1> Projects</h1>
                 @foreach($projects as $project)
                  @include('public.section.projects.templates.project')
                 @endforeach
     </div>
</section>

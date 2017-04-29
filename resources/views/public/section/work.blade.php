<!-- Work Section -->
 <section id="work" class="work-section">
   <div class="container-fluid text-center">
               <h1> Work Experience</h1>

               @foreach($experiences as $experience)
                @include('public.section.experience.templates.experience')
               @endforeach
    </div>
</section>

<!-- Education Section -->
 <section id="education" class="education-section">
   <div class="container-fluid text-center">
               <h1> Education</h1>
               @foreach($institutions as $institution)
                @include('public.section.education.templates.institution')
               @endforeach
               
</section>

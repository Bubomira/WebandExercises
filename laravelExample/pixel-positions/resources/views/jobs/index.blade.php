<x-layout>
    <div class="space-y-10">
        <section class="text-center mt-6 pt-6 space-y-4">
            <h1 class="font-bold text-4xl">Let's Find Your Next Job</h1>
             <x-forms.form class="mt-6" action="/search">
                <x-forms.input name="q" :label="false" placeholder="Web Developer..."/>
            </x-forms.form>
        </section>

        <section class="pt-10">
           <x-section-heading>Featured Jops</x-section-heading>
           <div class="grid lg:grid-cols-3 gap-8 mt-4">
              @foreach ($featuredJobs as $job)
                   <x-job-card :$job/>
                @endforeach
           </div>
        </section>
   
        <section>
           <x-section-heading>Tags</x-section-heading>
           <div class="mt-6 space-x-1">
                @foreach ( $tags as $tag)
                   <x-tag :$tag/>
                @endforeach
           </div>
        </section>  
         <section>
           <x-section-heading>Recent Jops</x-section-heading>
           <div class="mt-6 space-y-6">
               @foreach ($jobs as $job)
                   <x-job-card-wide :$job/>
                @endforeach
           </div>
        </section>
    </div>
</x-layout>
<x-layout>
    <div class="space-y-10">
        <section class="text-center mt-6 pt-6 space-y-4">
            <h1 class="font-bold text-4xl">Let's Find Your Next Job</h1>
            <form action="">
                <input type="text" placeholder="Web developer..." class="rounded-xl w-full max-w-xl bg-white/5 border-white/10 px-5 py-4">
            </form>
        </section>

        <section class="pt-10">
           <x-section-heading>Featured Jops</x-section-heading>
           <div class="grid lg:grid-cols-3 gap-8 mt-4">
               <x-job-card/>
               <x-job-card/>
               <x-job-card/>
           </div>
        </section>
   
        <section>
           <x-section-heading>Tags</x-section-heading>
           <div class="mt-6 space-x-1">
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
           </div>
        </section>  
         <section>
           <x-section-heading>Recent Jops</x-section-heading>
           <div class="mt-6 space-y-6">
               <x-job-card-wide/>
               <x-job-card-wide/>
               <x-job-card-wide/>
           </div>
        </section>
    </div>
</x-layout>
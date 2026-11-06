@extends('layout/app')

@section ('content')
<section aria-labelledby="cs-split-title" class="bg-white px-4 py-16 md:px-8 md:py-24">
    <div class="mx-auto grid max-w-7xl items-center gap-12 lg:grid-cols-2 lg:gap-16">
        <div class="max-w-[60ch]">
            <h2 id="cs-split-title"
                class="mt-3 text-3xl font-semibold tracking-tight text-balance text-neutral-950 sm:text-4xl">
                Website Dr.Tirta</h2>
            <div class="mt-6 text-base/7 text-neutral-600">
                <p>Kami membuat Website ini untuk mengetahui apa saja prestasi yang telah dia lalui</p>
                <p class="mt-4">Dengan ini kami dapat memenuhi penilaian terhadap tugas kami.</p>
            </div>
            <ul class="mt-8 space-y-4 text-sm text-neutral-950 dark:text-neutral-50">
            </ul>
            <a href="#"
                class="group/link mt-8 inline-flex items-center gap-1 rounded-sm text-sm font-medium whitespace-nowrap text-zinc-950 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-zinc-950 dark:text-zinc-50 dark:focus-visible:outline-zinc-50">Read
                the Atrium story<svg
                    class="size-4 shrink-0 transition-transform duration-200 group-hover/link:translate-x-0.5 motion-reduce:transition-none"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round"
                    stroke-linejoin="round" aria-hidden="true">
                    <path d="M5 12h14" />
                    <path d="m12 5 7 7-7 7" /></svg></a>
        </div>

        <figure>
            <div class="aspect-[4/3] overflow-hidden rounded-2xl bg-neutral-100">
                <img src="img/Dr.Tirta.jpg" alt="dr.Tirta berbicara" />   
            </div>
            <figcaption class="mt-3 flex items-start gap-2 text-sm text-neutral-600 dark:text-neutral-400"><svg
                    class="mt-0.5 size-4 shrink-0" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                    <path
                        d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0" />
</svg>
            </figcaption>
        </figure>
    </div>
</section>
@endsection

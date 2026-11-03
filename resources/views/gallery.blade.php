
@extends('layouts.app')

@section('content')

@php
    $galleryImages = collect(
        \Illuminate\Support\Facades\File::allFiles(
            public_path('images/gallery')
        )
    )
    ->filter(function ($file) {
        return in_array(
            strtolower($file->getExtension()),
            ['jpg', 'jpeg', 'png', 'webp', 'gif']
        );
    })
    ->sortBy(function ($file) {
        return strtolower($file->getFilename());
    })
    ->values();
@endphp

<div class="min-h-screen bg-black text-white">

    <section class="relative overflow-hidden px-6 py-24 text-center">
        <div class="absolute inset-0 bg-gradient-to-b from-red-950/40 via-black to-black"></div>

        <div class="relative z-10 mx-auto max-w-4xl">
            <p class="mb-4 text-sm font-bold uppercase tracking-[0.4em] text-red-500">
                JDM ZONE
            </p>

            <h1 class="mb-6 text-4xl font-black uppercase tracking-wider sm:text-6xl">
                Our <span class="text-red-600">Gallery</span>
            </h1>

            <p class="mx-auto max-w-2xl text-gray-400">
                Explore the world of Japanese Domestic Market cars,
                automotive culture, iconic builds and unforgettable moments.
            </p>

            <div class="mx-auto mt-8 h-1 w-24 bg-red-600"></div>
        </div>
    </section>

    <section class="mx-auto max-w-7xl px-6 pb-24">
        <div class="mb-10 flex flex-wrap items-end justify-between gap-4">
            <div>
                <p class="mb-2 text-sm font-semibold uppercase tracking-widest text-red-500">
                    Captured Moments
                </p>

                <h2 class="text-2xl font-bold uppercase sm:text-3xl">
                    JDM Collection
                </h2>
            </div>

            <p class="text-sm text-gray-500">
                {{ $galleryImages->count() }} photographs
            </p>
        </div>

        @if ($galleryImages->isNotEmpty())

            <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-3">
                @foreach ($galleryImages as $image)

                    @php
                        $imageUrl = asset(
                            'images/gallery/' .
                            str_replace('\\', '/', $image->getRelativePathname())
                        );

                        $imageTitle = ucwords(
                            str_replace(
                                ['-', '_'],
                                ' ',
                                pathinfo($image->getFilename(), PATHINFO_FILENAME)
                            )
                        );
                    @endphp

                    <a href="{{ $imageUrl }}"
                       target="_blank"
                       rel="noopener noreferrer"
                       class="group relative block overflow-hidden rounded-xl border border-zinc-800 bg-zinc-950 transition duration-300 hover:border-red-600">

                        <div class="aspect-[4/3] overflow-hidden">
                            <img
                                src="{{ $imageUrl }}"
                                alt="{{ $imageTitle }}"
                                loading="lazy"
                                class="h-full w-full object-cover transition duration-500 group-hover:scale-110"
                            >
                        </div>

                        <div class="absolute inset-x-0 bottom-0 bg-gradient-to-t from-black via-black/70 to-transparent p-5 pt-12">
                            <h3 class="font-bold uppercase tracking-wide text-white">
                                {{ $imageTitle }}
                            </h3>

                            <p class="mt-1 text-xs text-red-400">
                                JDM ZONE COLLECTION
                            </p>
                        </div>
                    </a>

                @endforeach
            </div>

        @else

            <div class="rounded-xl border border-zinc-800 bg-zinc-950 px-6 py-20 text-center">
                <h3 class="mb-3 text-xl font-bold uppercase">
                    No Images Found
                </h3>

                <p class="text-gray-400">
                    Our gallery is currently being updated.
                    Please check back later.
                </p>
            </div>

        @endif
    </section>

</div>

@endsection

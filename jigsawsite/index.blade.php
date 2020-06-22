@extends('_layouts.master')

@section('body')
<section class="container max-w-6xl mx-auto px-6 py-8 md:py-8">
    <div class="flex flex-col-reverse mb-16 lg:flex-row lg:mb-16">
        <div class="mt-8">
            <h1 id="intro-docs-template" class="text-textcolor">{{ $page->siteName }}</h1>

            <h2 id="intro-powered-by-jigsaw" class="font-light mt-4 text-textcolor">{{ $page->siteDescription }}</h2>

            <p class="text-lg">Start exploring quickly and easily using the search field at the top of the page.</p>

            <a href="/kb/getting-started"><button class="bg-transparent hover:bg-textcolor text-textcolor font-semibold hover:text-black py-2 px-4 border border-textcolor hover:border-transparent rounded">
                Enter the knowledge base
            </button></a>
        </div>
    </div>

    <div class="md:flex -mx-2 -mx-4">
        <div class="mb-8 mx-3 px-2 md:w-1/3">
            <img src="/assets/img/Discord-Logo-White.svg" class="h-12 w-12" alt="window icon">

            <h3 id="intro-laravel" class="text-2xl text-textcolor mb-0">Discord community</h3>

            <p>Join the community and be a part of our community-driven service.</p>

            <a href="https://discord.gg/NG2G7qe"><button class="bg-transparent hover:bg-textcolor text-textcolor font-semibold hover:text-black py-2 px-4 border border-textcolor hover:border-transparent rounded">
                Join
            </button></a>

            <br>
        </div>

        <div class="mb-8 mx-3 px-2 md:w-1/3">
            <img src="/assets/img/terminal-solid.svg" class="h-12 w-12" style="fill: white;" alt="terminal icon">

            <h3 id="intro-markdown" class="text-2xl text-textcolor mb-0">Code snippets and guides</h3>

            <p>Everything you need to know from start to finish on every datahoarding process.</p>
        </div>

        <div class="mx-3 px-2 md:w-1/3">
            <img src="/assets/img/comments-solid.svg" class="h-12 w-12" alt="stack icon">

            <h3 id="intro-mix" class="text-2xl text-textcolor mb-0">Community driven</h3>

            <p>Suggestions in our Discord server are regularly added and updated.</p>
        </div>
    </div>
</section>
@endsection

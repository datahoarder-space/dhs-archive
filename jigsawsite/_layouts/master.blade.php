<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="{{ $page->description ?? $page->siteDescription }}">

        <meta property="og:site_name" content="{{ $page->siteName }}"/>
        <meta property="og:title" content="{{ $page->title ?  $page->title . ' | ' : '' }}{{ $page->siteName }}"/>
        <meta property="og:description" content="{{ $page->description ?? $page->siteDescription }}"/>
        <meta property="og:url" content="{{ $page->getUrl() }}"/>
        <meta property="og:image" content="/assets/img/dhs.png"/>
        <meta property="og:type" content="website"/>

        <meta name="twitter:image:alt" content="{{ $page->siteName }}">
        <meta name="twitter:card" content="summary_large_image">

        @if ($page->docsearchApiKey && $page->docsearchIndexName)
            <meta name="generator" content="tighten_jigsaw_doc">
        @endif

        <title>{{ $page->siteName }}{{ $page->title ? ' | ' . $page->title : '' }}</title>

        <link rel="home" href="{{ $page->baseUrl }}">
        <link rel="apple-touch-icon-precomposed" sizes="57x57" href="/assets/img/icons/apple-touch-icon-57x57.png" />
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/assets/img/icons/apple-touch-icon-114x114.png" />
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/assets/img/icons/apple-touch-icon-72x72.png" />
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/assets/img/icons/apple-touch-icon-144x144.png" />
        <link rel="apple-touch-icon-precomposed" sizes="60x60" href="/assets/img/icons/apple-touch-icon-60x60.png" />
        <link rel="apple-touch-icon-precomposed" sizes="120x120" href="/assets/img/icons/apple-touch-icon-120x120.png" />
        <link rel="apple-touch-icon-precomposed" sizes="76x76" href="/assets/img/icons/apple-touch-icon-76x76.png" />
        <link rel="apple-touch-icon-precomposed" sizes="152x152" href="/assets/img/icons/apple-touch-icon-152x152.png" />
        <link rel="icon" type="image/png" href="/assets/img/icons/favicon-196x196.png" sizes="196x196" />
        <link rel="icon" type="image/png" href="/assets/img/icons/favicon-96x96.png" sizes="96x96" />
        <link rel="icon" type="image/png" href="/assets/img/icons/favicon-32x32.png" sizes="32x32" />
        <link rel="icon" type="image/png" href="/assets/img/icons/favicon-16x16.png" sizes="16x16" />
        <link rel="icon" type="image/png" href="/assets/img/icons/favicon-128.png" sizes="128x128" />
        <link rel="shortcut icon" href="/assets/img/icons/favicon.ico" type="image/x-icon">
        <meta name="application-name" content="datahoarder.space"/>
        <meta name="msapplication-TileColor" content="#222222" />
        <meta name="msapplication-TileImage" content="/assets/img/icons/mstile-144x144.png" />
        <meta name="msapplication-square70x70logo" content="/assets/img/icons/mstile-70x70.png" />
        <meta name="msapplication-square150x150logo" content="/assets/img/icons/mstile-150x150.png" />
        <meta name="msapplication-wide310x150logo" content="/assets/img/icons/mstile-310x150.png" />
        <meta name="msapplication-square310x310logo" content="/assets/img/icons/mstile-310x310.png" />

        @stack('meta')

        @if ($page->production)
            <!-- Insert analytics code here -->
        @endif

        <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,300i,400,400i,700,700i,800,800i" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">

        @if ($page->docsearchApiKey && $page->docsearchIndexName)
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/docsearch.js@2/dist/cdn/docsearch.min.css" />
        @endif
    </head>

    <body class="flex flex-col justify-between min-h-screen bg-darkergrey text-textcolor leading-normal font-sans">
        <header class="flex items-center shadow bg-darkgrey h-24 mb-8 py-4" role="banner">
            <div class="container flex items-center max-w-8xl mx-auto px-4 lg:px-8">
                <div class="flex items-center">
                    <a href="/" title="{{ $page->siteName }} home" class="inline-flex items-center">
                        <h1 class="text-4xl md:text-4xl text-textcolor font-roboto font-semibold hover:text-blue-600 my-0 pr-4">DHS</h1>
                    </a>
                </div>

                <div class="flex flex-1 justify-end items-center text-right md:pl-10">
                    @if ($page->docsearchApiKey && $page->docsearchIndexName)
                        @include('_nav.search-input')
                    @endif
                </div>
            </div>

            @yield('nav-toggle')
        </header>

        <main role="main" class="w-full flex-auto">
            @yield('body')
        </main>

        <script src="{{ mix('js/main.js', 'assets/build') }}"></script>

        @stack('scripts')

        <footer class="bg-darkgrey text-center text-sm mt-4 py-4" role="contentinfo">
            <ul class="flex flex-col md:flex-row justify-center">
                <li>
                    {{ $page->siteName }} - <a href="https://discord.gg/NG2G7qe">Discord Server</a> - <a href="https://fontawesome.com">Icons by Font Awesome</a> - <a href="https://datahoarder.space/kb/dmca">DMCA</a>
                </li>
            </ul>
        </footer>
    </body>
</html>

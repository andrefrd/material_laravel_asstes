<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="msapplication-tap-highlight" content="no">
		<meta name="description" content="">
		<meta name="keywords" content="">
		<title>{{ $title ?? "Título não definido" }} | {{ config('app.name') }}</title>
		{{-- Favicons--}}
		<link rel="icon" href="{{ asset('images/favicon/favicon-32x32.png') }}" sizes="32x32">
		<link rel="apple-touch-icon-precomposed" href="{{ asset('images/favicon/apple-touch-icon-152x152.png') }}">
		{{-- For iPhone --}}
		<meta name="msapplication-TileColor" content="#00bcd4">
		<meta name="msapplication-TileImage" content="{{ asset('images/favicon/mstile-144x144.png') }}">
        {{-- CSS Padrão do Template --}}
        @include('material_admin.layouts.app.defaultCSS')

        {{-- CSS Específico da Página --}}
        @yield('PageStyleSheets')
	</head>
	<body id="layouts-horizontal">
        {{-- Incluindo Loader --}}
        @include('material_admin.global.loader')
		{{-- Incluindo Header --}}
        @include('material_admin.layouts.app.header')
		<div id="main">
			{{-- Início Wrapper --}}
			<div class="wrapper">
				{{-- Incluindo menu mobile --}}
				@include('material_admin.layouts.app.menus.mobile')
                <section id="content">
                    {{-- Incluindo Breadcrumbs --}}
    				@include('material_admin.layouts.app.breadcrumbs')
						{{-- CONTEUDO DA PÁGINA ---}}
                        @yield('PageContent')
				</section>
			</div>
			{{-- Fim Wrapper --}}
		</div>
		{{-- Incluindo Footer --}}
        @include('material_admin.layouts.app.footer')

		{{-- Incluindo JavaScripts --}}
        @include('material_admin.layouts.app.defaultJavaScript')
        @yield('PageScripts')
	</body>
</html>

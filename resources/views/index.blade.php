<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Pokemon</title>
		@vite('resources/sass/app.scss')
    </head>
    <body>
		<main id="app">
			<example-component/>
		</main>

		@vite('resources/js/app.js')
    </body>
</html>

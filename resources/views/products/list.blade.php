<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body>
    <div class='min-h-screen max-w-screen-2xl'>
        <h1 class='bg-black text-white text-center text-3xl font-semibold py-3'>Simple Laravel CRUD</h1>

        @if (Session::has('success'))
            <div class="pt-2 mt-4">
                <div class="">
                    {{ Session::get('success') }}
                </div>
            </div>    
            @endif

        <div class='bg-white shadow-2xl w-[500px] mx-auto my-5 rounded-md'>
        <h1 class="text-center text-white text-2xl bg-black py-2 rounded-md">Products</h1>
        </div>
    </div>

</body>

</html>
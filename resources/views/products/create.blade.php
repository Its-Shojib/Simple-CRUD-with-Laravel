<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body>
    <div class='min-h-screen max-w-screen-2xl'>
        <h1 class='bg-black text-white text-center text-3xl font-semibold py-3'>This is simple create product page</h1>



        <div class='bg-gray-500 w-[500px] mx-auto my-5 rounded-md'>
            <form action="" class="p-10 space-y-5">
                <h1 class="text-center text-white text-3xl">Create Product</h1>
                <div>
                    <label class="text-2xl font-semibold" for="product_name">Product Name:</label>
                    <br>
                    <input class="p-1 outline-none rounded-2xl w-2/3" type="text" id="product_name" name="product_name"
                        required>
                </div>
                <div>
                    <label class="text-2xl font-semibold" for="product_price">Product Price:</label>
                    <br>
                    <input class="p-1 outline-none rounded-2xl w-2/3" type="number" id="product_price" name="product_price"
                        required>
                </div>
                <div>
                    <label class="text-2xl font-semibold" for="product_description">Product Description:</label>
                    <br>
                    <textarea class="p-1 outline-none rounded-2xl w-2/3" id="product_description" name="product_description" required></textarea>

            </form>
        </div>
    </div>

</body>

</html>
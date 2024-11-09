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

        <div class='bg-white shadow-2xl w-[500px] mx-auto my-5 rounded-md'>
            <form enctype="multipart/form-data" action="{{ route('products.update',$product->id) }}" method="post" class="p-10 space-y-5">
                @method('put')
                @csrf
                <h1 class="text-center text-white text-2xl bg-black py-2 rounded-md">Edit Product</h1>

                <div>
                    <label class="text-xl font-semibold" for="product_name">Product Name:</label>
                    <br>
                    <input class="p-2 border-2 rounded-md w-full" type="text" id="product_name" name="name" value="{{ $product->name }}" required>
                    @error('name')
                    <p>{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label class="text-xl font-semibold" for="SKU">SKU:</label>
                    <br>
                    <input class="p-2 border-2 rounded-md w-full" type="text" id="SKU" name="sku" value="{{ $product->sku }}" required>
                    @error('sku')
                    <p>{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label class="text-xl font-semibold" for="product_price">Product Price:</label>
                    <br>
                    <input class="p-2 border-2 rounded-md w-full" type="number" id="product_price" name="price" value="{{ $product->price }}" required>
                    @error('price')
                    <p>{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label class="text-xl font-semibold" for="image">Image:</label>
                    <br>
                    <div class="flex gap-10">
                        <input class="p-2 border-2 rounded-md flex-1" type="file" id="image" name="image">
                        @if($product->image)
                        <img class="w-10 h-12 rounded-full flex-1" src="{{ asset('uploads/products/' . $product->image) }}" alt="">
                        @endif
                    </div>
                </div>

                <div>
                    <label class="text-xl font-semibold" for="product_description">Product Description:</label>
                    <br>
                    <textarea class="p-2 border-2 rounded-md w-full" id="product_description" name="description">{{ $product->description }}</textarea>
                </div>

                <div>
                    <button type="submit" class="p-2 bg-blue-500 text-white rounded-md w-full">Update Product</button>
                </div>
            </form>


        </div>
    </div>

</body>

</html>
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

        <div class='bg-white shadow-2xl w-[1000px] mx-auto my-5 rounded-md'>
            <h1 class="text-center text-white text-2xl bg-black py-2 rounded-md">Products</h1>

            <table class="table-auto w-full">
                <thead>
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-w-normal">
                            ID
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-w-normal">
                            Image
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-w-normal">
                            Name
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-w-normal">
                            Price
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-w-normal">
                            SKU
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-w-normal">
                            Created At.
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-w-normal">
                            Actions
                        </th>
                    </tr>
                    <thead>
                    <tbody>
                        @if($products -> isNotEmpty())
                        @foreach ($products as $product)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $product->id }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                @if ($product->image != "")
                                <img class="rounded-full" width="50" src="{{ asset('uploads/products/'.$product->image) }}" alt="">
                                @endif
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $product->name }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $product->price }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $product->sku }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $product->created_at->format('d/m/Y') }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500  flex gap-2 items-center">
                                <a href="{{ route('product.edit', $product->id) }}" class="bg-blue-800 text-white px-2 rounded-lg">Edit</a> |
                                <form action="{{ route('product.destroy', $product->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="bg-red-800 text-white px-2 rounded-lg">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                        @endif

                    </tbody>
            </table>
        </div>
    </div>

</body>

</html>
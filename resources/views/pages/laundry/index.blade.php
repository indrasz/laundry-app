<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Laundry') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mb-10 p-4 md:p-0">
                <a href="{{ route('dashboard.laundry.create') }}"
                    class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded shadow-lg">
                    + Add laundry data
                </a>
            </div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-3">

                <div class="hidden sm:flex flex-col">
                    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="py-4 inline-block w-full sm:px-6 lg:px-8">
                            <div class="overflow-hidden">
                                <table class="w-full text-center">
                                    <thead class="border-b bg-gray-800 ">
                                        <tr>
                                            <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                                No
                                            </th>
                                            <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                                Username
                                            </th>
                                            <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                                Phone Number
                                            </th>
                                            <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                                Category
                                            </th>
                                            <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                                Price
                                            </th>
                                            <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                                Action
                                            </th>
                                        </tr>
                                    </thead class="border-b">
                                    <tbody>
                                        @forelse ($laundry as $key => $item)
                                            <tr class="bg-white border-b">
                                                <td
                                                    class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                                    {{ $item->id }}
                                                </td>
                                                <td
                                                    class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                    {{ $item->name }}
                                                </td>
                                                <td
                                                    class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                    {{ $item->phoneNumber }}
                                                </td>
                                                <td
                                                    class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                    {{ $item->category }}
                                                </td>
                                                <td
                                                    class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                    {{ $item->price }}
                                                </td>
                                                <th scope="col"
                                                    class="flex gap-2 text-sm font-medium text-white justify-center px-6 py-4">

                                                    <a href="{{ route('dashboard.laundry.edit', $item->id) }}"
                                                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded">
                                                        Edit
                                                    </a>

                                                    <form class="inline-block"
                                                        action="{{ route('dashboard.laundry.destroy', $item->id) }}"
                                                        method="POST">

                                                        @method('DELETE')
                                                        @csrf
                                                        <button type="submit"
                                                            class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 border border-red-700 rounded show_confirm">
                                                            Delete
                                                        </button>
                                                    </form>

                                                    <a target="_blank" href="https://api.whatsapp.com/send?phone=+6282283127185&text={{ strip_tags($item->message) }}"
                                                        class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 border border-green-700 rounded">
                                                        Send
                                                    </a>
                                                </th>
                                            </tr>
                                        @empty

                                            <tr>
                                                <td colspan="12">
                                                    <h5 class="d-flex justify-content-center text-center mt-4">
                                                        Belum ada request yang diupload
                                                    </h5>
                                                </td>
                                            </tr>
                                        @endforelse

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="sm:hidden">
                    @forelse ($laundry as $key => $item)
                        <div class="flex justify-center mb-6">
                            <div class="block rounded-lg shadow-lg bg-white w-full">
                                <div class="p-12">
                                    <table class="border-0 text w-full">
                                        <tr>
                                            <td class="justify-start">
                                                <p class="font-semibold">Username</p>
                                            </td>
                                            <td class="flex justify-end">
                                                <p class="text-gray-500">{{ $item->name }}</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class=" justify-start">
                                                <p class="font-semibold">Phone Number</p>
                                            </td>
                                            <td class="flex justify-end">
                                                <p class="text-gray-500">{{ $item->phoneNumber }}
                                                </p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class=" justify-start">
                                                <p class="font-semibold">Category</p>
                                            </td>
                                            <td class="flex justify-end">
                                                <p class="text-gray-500">{{ $item->category }}</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class=" justify-start">
                                                <p class="font-semibold">Price</p>
                                            </td>
                                            <td class="flex justify-end">
                                                <p class="text-gray-500">{{ $item->price }}</p>
                                            </td>
                                        </tr>
                                    </table>
                                    <div class="flex gap-1 mt-6">
                                        <a type="button" href="{{ route('dashboard.laundry.edit', $item->id) }}"
                                            class=" inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Edit</a>
                                        <form action="{{ route('dashboard.laundry.destroy', $item->id) }}"
                                            method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit"
                                                class=" inline-block px-6 py-2.5 bg-red-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-red-700 hover:shadow-lg focus:bg-red-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-800 active:shadow-lg transition duration-150 ease-in-out show_confirm">Delete</button>
                                        </form>
                                        <a type="button"
                                            class=" inline-block px-6 py-2.5 bg-green-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-green-700 hover:shadow-lg focus:bg-green-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-800 active:shadow-lg transition duration-150 ease-in-out">Send</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    @empty
                    @endforelse
                </div>
                {{ $laundry->links() }}
            </div>
        </div>
    </div>

    <x-slot name="script">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
        <script>
            $('.show_confirm').click(function(event) {
                var form = $(this).closest("form");
                var name = $(this).data("name");
                event.preventDefault();
                swal({
                        title: `Are you sure you want to delete this record?`,
                        text: "If you delete this, it will be gone forever.",
                        icon: "warning",
                        buttons: true,
                        dangerMode: true,
                    })
                    .then((willDelete) => {
                        if (willDelete) {
                            form.submit();
                        }
                    });
            });
        </script>
    </x-slot>


</x-app-layout>

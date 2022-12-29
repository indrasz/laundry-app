<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Laundry Data') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mb-10">

                @if ($errors->any())
                    <div class="mb-5" role="alert">
                        <div class="bg-red-500 text-white font-bold rounded-t px-4 py-2">
                            Theres something wrong!
                        </div>
                        <div class="border border-t-0 border-red-400 rounded-b bg-red-100 px-4 py-3 text-red-700">
                            <p>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                            </p>
                        </div>
                    </div>
                @endif
            </div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <form class="w-full p-4 sm:p-12" action="{{ route('dashboard.laundry.store') }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="grid lg:grid-cols-2 gap-4 mb-3">
                        <div class="flex flex-wrap -mx-3 mb-2">
                            <div class="w-full px-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                    for="name">
                                    Fullname user
                                </label>
                                <input name="name"
                                    class="appearance-none block w-full bg-gray-200 text-gray-700  border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                    id="name" type="text" placeholder="Name">
                            </div>
                        </div>
                        <div class="flex flex-wrap -mx-3 mb-2">
                            <div class="w-full px-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                    for="phoneNumber">
                                    Phone Number
                                </label>
                                <input name="phoneNumber"
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                    id="phoneNumber" type="text" placeholder="+62">
                            </div>
                        </div>
                        <div class="flex flex-wrap -mx-3 mb-2">
                            <div class="w-full px-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                    for="clothes">
                                    Clothes
                                </label>
                                <input name="clothes"
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                    id="clothes" type="text" placeholder="Kemeja, etc">
                            </div>
                        </div>

                        <div class="flex flex-wrap -mx-3 mb-2">
                            <div class="w-full px-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                    for="weight">
                                    Weight
                                </label>
                                <input name="weight"
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                    id="weight" type="number" placeholder="Kg">
                            </div>
                        </div>

                        <div class="flex flex-wrap -mx-3 mb-2">
                            <div class="w-full px-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                    for="category">
                                    Category
                                </label>
                                <input name="category"
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                    id="category" type="text" placeholder="Choose Category">
                            </div>
                        </div>
                        <div class="flex flex-wrap -mx-3 mb-2">
                            <div class="w-full px-3">
                                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                    for="price">
                                    Price
                                </label>
                                <input name="price"
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                    id="price" type="number" placeholder="Total Price">
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-wrap -mx-3 mb-2">
                        <div class="w-full px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                for="message">
                                Message
                            </label>
                            <textarea name="message"
                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                id="editor" type="text" placeholder="Message text"></textarea>
                        </div>
                    </div>

                    <div class="flex flex-wrap -mx-3 mb-2">
                        <div class="w-full px-3 text-right">
                            <button type="submit"
                                class=" shadow-lg bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                                Save
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('editor');
    </script>
</x-app-layout>

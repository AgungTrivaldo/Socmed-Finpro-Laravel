@extends('layout')

@section('content')

<div class="my-10">
    <h5 class="font-bold mb-4">My Event</h5>
</div>

<div>
    <div class="flex justify-center items-center">
        <div class="max-w-3xl w-full bg-white dark:bg-gray-700 rounded-lg shadow-md p-4">
            <table class="min-w-full w-full"> <!-- Set table to full width -->
                <thead>
                    <tr>
                        <th class="py-2 px-4 border-b text-left">#</th>
                        <th class="py-2 px-4 border-b text-left">Event Title</th>
                        <th class="py-2 px-4 border-b text-center">Detail</th>
                    </tr>
                </thead>
                <tbody>
                    @for ($i = 1; $i <= 10; $i++)
                    <tr>
                        <td class="py-2 px-4 border-b">{{ $i }}</td>
                        <td class="py-2 px-4 border-b">Event Title {{ $i }}</td>
                        <td class="py-2 px-4 border-b">
                            <div class="flex justify-center"> <!-- Centering detail section -->
                                <div class="space-x-2">
                                    <button class="bg-blue-500 text-white py-1 px-3 rounded hover:bg-blue-800 ">Detail</button>
                                    <button id="cancelButton" class="bg-red-500 text-white py-1 px-3 rounded hover:bg-red-800">Cancel</button> 
                                </div>
                            </div>
                        </td>
                    </tr>
                    @endfor
                </tbody>
            </table>
        </div>
    </div>

    <div id="popup-modal" tabindex="-1"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <button type="button"
                    class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                    id="closeModalButton">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="p-4 md:p-5 text-center">
                    <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                    <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Are you sure you want to
                        cancel to join this event?</h3>
                    <button id="confirmButton" type="button"
                        class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                        Yes, I'm sure
                    </button>
                    <button id="cancelModalButton" type="button"
                        class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                        No, cancel
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById('cancelButton').addEventListener('click', function () {
        document.getElementById('popup-modal').classList.remove('hidden');
        document.getElementById('popup-modal').classList.add('flex');
    });

    document.getElementById('closeModalButton').addEventListener('click', function () {
        document.getElementById('popup-modal').classList.add('hidden');
        document.getElementById('popup-modal').classList.remove('flex');
    });

    document.getElementById('cancelModalButton').addEventListener('click', function () {
        document.getElementById('popup-modal').classList.add('hidden');
        document.getElementById('popup-modal').classList.remove('flex');
    });

    document.getElementById('confirmButton').addEventListener('click', function () {
        // Add your confirm action here
        document.getElementById('popup-modal').classList.add('hidden');
        document.getElementById('popup-modal').classList.remove('flex');
    });
</script>

@endsection

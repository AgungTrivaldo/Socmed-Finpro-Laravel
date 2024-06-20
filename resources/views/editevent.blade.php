@extends('navbar')

@section('navbar')

<div class="my-10">
  <h5 class="font-bold mb-4">Edit Event</h5>
</div>

<body class="bg-gray-100 flex justify-center items-center h-screen">
    <div class="flex flex-col items-center">
        <div class="max-w-md w-full bg-white p-8 rounded-lg shadow-md">
            <h1 class="text-2xl font-bold mb-4">Edit Event</h1>
            <form action="#" method="POST" class="space-y-4">
                <div>
                    <label for="title" class="block text-sm font-medium text-black">Event Title</label>
                    <input type="text" id="title" name="title" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50" required>
                </div>

                <div>
                    <label for="description" class="block text-sm font-medium text-black">Description</label>
                    <textarea id="description" name="description" rows="4" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50" required></textarea>
                </div>

                <div>
                  <label for="item-weight" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Attendees Goals</label>
                  <input type="number" name="item-weight" id="item-weight" class="bg-gray-50 border border-gray-300 text-black text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="0" required min="0" required max="250">
                </div>
                

                <div>
                    <label for="user_avatar" class="block text-sm font-medium text-black">Upload file</label>
                    <input type="file" id="user_avatar" name="user_avatar" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50" required>
                </div>

                <button type="submit" class="w-full bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-800 focus:outline-none focus:bg-blue-600 focus:ring focus:ring-blue-300 focus:ring-opacity-50">Create Event</button>
            </form>
        </div>
    </div>
</body>

</html>
@endsection

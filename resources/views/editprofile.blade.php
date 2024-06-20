@extends('navbar')

@section('navbar')

<div class="my-10">
  <h5 class="font-bold mb-4">Edit Progile</h5>
</div>

<body class="bg-gray-100 flex justify-center items-center h-screen">
    <div class="flex flex-col items-center">
        <div class="max-w-md w-full bg-white p-8 rounded-lg shadow-md">
            <h1 class="text-2xl font-bold mb-4">Edit Profile</h1>
            <form action="#" method="POST" class="space-y-4">
                <div>
                    <label for="title" class="block text-sm font-medium text-black">Username</label>
                    <input type="text" id="title" name="title" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50" required>
                </div>

                <div>
                    <label for="description" class="block text-sm font-medium text-black">Bio</label>
                    <textarea id="description" name="description" rows="4" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50" required></textarea>
                </div>                

                <div>
                    <label for="user_avatar" class="block text-sm font-medium text-black">Upload Photo Profile</label>
                    <input type="file" id="user_avatar" name="user_avatar" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50" required>
                </div>
                <div>
                    <label for="user_avatar" class="block text-sm font-medium text-black">Upload Banner</label>
                    <input type="file" id="user_avatar" name="user_avatar" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-500 focus:ring-opacity-50" required>
                </div>

                <button type="submit" class="w-full bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-800 focus:outline-none focus:bg-blue-600 focus:ring focus:ring-blue-300 focus:ring-opacity-50">Confirm Edit</button>
            </form>
        </div>
    </div>
</body>

@endsection

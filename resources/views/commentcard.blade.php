@extends('layout')

@section('content')
 <div class="my-10 ">
  <h5 class="font-bold mb-4">Recent Posts</h5>
 </div>
    <div class="bg-white dark:bg-gray-700 rounded-lg shadow-md p-4">
        <div class="flex space-x-4">
            <div class="flex-shrink-0 w-12 h-12 bg-gray-300 rounded-full overflow-hidden">
                <img src="./img/koceng.jpg" alt="Profile Picture" class="w-full h-full object-cover rounded-full">
            </div>
            <div>
                <h3 class="font-semibold text-gray-900 dark:text-white">@MasLorem</h3>
                <p class="mt-2 text-gray-600 dark:text-gray-300">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni, architecto. Placeat id temporibus hic dolore esse fuga dolores iusto delectus, recusandae autem neque optio impedit ducimus ex dicta maiores enim! Tenetur rerum laborum porro, nulla, cumque totam assumenda dolores a fugit placeat ad saepe vitae, commodi eum voluptas. Praesentium tempore provident quo? Consectetur esse dolorum iure veritatis. Autem, vel non!
                </p>
                <!-- Post image -->
                <img class="w-48 h-48 object-cover mt-4" src="./img/Dika.jpg" alt="Post Image" />
            </div>
        </div>

        <div class="mt-6">
            <h3 class="text-lg font-semibold mb-4">Comments</h3>
            
            <div class="mb-4 flex items-start">
                <img src="./img/Agung.jpg" alt="Commenter Profile Picture" class="w-10 h-10 rounded-full mr-4">
                <p><span class="font-semibold">@DikaGay:</span> This is a sample comment.</p>
            </div>
            
            <div class="mb-4 flex items-start">
                <img src="./img/Adi.jpg" alt="Commenter Profile Picture" class="w-10 h-10 rounded-full mr-4">
                <p><span class="font-semibold">@PenjahatKelamin:</span> Another sample comment.</p>
            </div>

            <div class="relative flex items-center w-full">
                <img src="./img/Agung.jpg" alt="Commenter Profile Picture" class="mr-4 w-10 h-10 rounded-full">
                <div class="relative flex-1">
                    <input type="text" placeholder="Add a comment..." class="block w-full p-4 pl-12 pr-20 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500">
                    <button class="absolute right-2.5 bottom-2.5 text-white bg-blue-500 hover:bg-blue-600 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2">Post</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

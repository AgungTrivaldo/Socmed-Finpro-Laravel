    @extends('layout')

    @section('content')

    <div class="my-10 ">
    <h5 class="font-bold mb-4">Recent Posts</h5>
    </div>

    <a href="#" class="block max-w-3xl mx-auto mt-4 bg-white dark:bg-gray-700 rounded-lg shadow-md p-4 hover:bg-gray-100 dark:hover:bg-gray-600">
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
            <!-- Likes button -->
            <div class="flex justify-start mt-4">
                <button class="text-gray-600 dark:text-gray-300 hover:text-red-500 dark:hover:text-red-500 focus:outline-none">
                    <i class="fas fa-heart text-2xl"></i>
                </button>
            </div>

            

        </div>
    </div>
    </a>
    @endsection
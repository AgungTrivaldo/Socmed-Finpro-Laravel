<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body class="bg-grey-100 text-black">
    <div class="max-w-3xl mx-auto mt-10 bg-white rounded-lg shadow-md">
        <div class="relative">
            <img src=".\img\Dika.jpg" alt="Cover Photo" class="w-full h-48 object-cover rounded-t-lg">
            <div class="absolute top-20 left-4">
                <div class="w-24 h-24 bg-gray-300 rounded-full overflow-hidden border-4 border-grey-100">
                    <img src=".\img\koceng.jpg" alt="Profile Picture" class="w-full h-full object-cover rounded-full">
                </div>
            </div>
            <button class="absolute top-4 right-4 bg-blue-700 text-white py-1 px-4 rounded">Edit profile</button>
        </div>
        <div class="p-4">
            <h2 class="text-2xl font-semibold">Full Name</h2>
            {{-- <p class="text-gray-400">@username</p> --}}
            <p class="mt-2">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laudantium enim reprehenderit deleniti corrupti nobis? Pariatur veniam beatae obcaecati, reprehenderit magni quisquam cupiditate ea dolorum distinctio eaque, ut quae, maiores at!
            Ducimus eius nesciunt, delectus necessitatibus non velit eligendi, voluptatibus voluptates, ipsa enim aperiam magni autem vero totam cupiditate quisquam! Animi, harum culpa? Maiores consequatur repudiandae sint mollitia hic, quibusdam sed.
            Recusandae architecto amet doloribus tenetur neque nihil quod beatae repudiandae eum libero eos unde magni aliquid asperiores reiciendis consectetur, minima similique temporibus illo, earum aliquam aperiam totam. Unde, dolores aperiam.</p>
            {{-- <p class="text-gray-400 mt-2">Joined November 2021</p> --}}
            <div class="flex space-x-4 mt-2">
                <p><span class="font-semibold">87</span> Following</p>
                <p><span class="font-semibold">24</span> Followers</p>
                <p><span class="font-semibold">30</span> Event Joined</p>
            </div>
            {{-- <div class="border-b border-gray-700 mt-4"></div> --}}
            {{-- <div class="flex space-x-6 mt-4">
                <a href="#" class="text-white border-b-2 border-blue-500 pb-2">Posts</a>
                <a href="#" class="text-gray-400">Replies</a>
                <a href="#" class="text-gray-400">Highlights</a>
                <a href="#" class="text-gray-400">Articles</a>
                <a href="#" class="text-gray-400">Media</a>
                <a href="#" class="text-gray-400">Likes</a>
            </div> --}}
        </div>
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
 

    <div class="max-w-3xl mx-auto mt-4 bg-gray-100 rounded-lg shadow-md p-4">
     <div class="flex space-x-4">
         <div class="flex-shrink-0 w-12 h-12 bg-gray-300 rounded-full overflow-hidden">
             <img src="./img/koceng.jpg" alt="Profile Picture" class="w-full h-full object-cover rounded-full">
         </div>
         <div>
             <h3 class="font-semibold">Full-Name</h3>
             <p class="mt-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni, architecto. Placeat id temporibus hic dolore esse fuga dolores iusto delectus, recusandae autem neque optio impedit ducimus ex dicta maiores enim! Tenetur rerum laborum porro, nulla, cumque totam assumenda dolores a fugit placeat ad saepe vitae, commodi eum voluptas. Praesentium tempore provident quo? Consectetur esse dolorum iure veritatis. Autem, vel non!</p>
         </div>
     </div>
 </div>
</body>
</html>

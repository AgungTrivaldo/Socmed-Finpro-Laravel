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
                <button class="flex justify-between text-gray-600 dark:text-gray-300 hover:text-red-500 dark:hover:text-red-500 focus:outline-none">
                    <i class="fas fa-heart text-2xl text-blue-400"></i>
                </button>
                <button id="modalButton" class="flex justify-between text-gray-600 dark:text-gray-300 hover:text-red-500 dark:hover:text-red-500 focus:outline-none">
                    <i class="mx-4 fa-regular fa-comment text-2xl text-blue-400"></i>
                </button>      
                
                <div id="authentication-modal" tabindex="-1" aria-hidden="true" class="hidden fixed inset-0 z-50 flex justify-center items-center">
                    <div class="relative p-4 w-full max-w-md max-h-full">
                        <!-- Modal content -->
                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                            <!-- Modal header -->
                            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                    Post Something
                                </h3>
                                <button id="closeModalButton" type="button" class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="authentication-modal">
                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                    </svg>
                                    <span class="sr-only">Close modal</span>
                                </button>
                            </div>
                            <!-- Modal body -->
                            <form>
                                <div class="w-full mb-4 border border-gray-200 rounded-lg bg-gray-50 dark:bg-gray-700 dark:border-gray-600">
                                    <div class="px-4 py-2 bg-white rounded-t-lg dark:bg-gray-800">
                                        <label for="comment" class="sr-only">Your comment</label>
                                        <textarea id="comment" rows="4" class="w-full px-0 text-sm text-gray-900 bg-white border-0 dark:bg-gray-800 focus:ring-0 dark:text-white dark:placeholder-gray-400" placeholder="Info Kegiatan" required ></textarea>
                                    </div>
                                    <div class="flex items-center justify-between px-3 py-2 border-t dark:border-gray-600">
                                        <button type="submit" class="inline-flex items-center py-2.5 px-4 text-xs font-medium text-center text-white bg-blue-700 rounded-lg focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-900 hover:bg-blue-800">
                                            Post comment
                                        </button>
                                        <div class="flex ps-0 space-x-1 rtl:space-x-reverse sm:ps-2">
                                            <button type="button" class="inline-flex justify-center items-center p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                                                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 12 20">
                                                    <path stroke="currentColor" stroke-linejoin="round" stroke-width="2" d="M1 6v8a5 5 0 1 0 10 0V4.5a3.5 3.5 0 1 0-7 0V13a2 2 0 0 0 4 0V6"/>
                                                </svg>
                                                <span class="sr-only">Attach file</span>
                                            </button>
                                            <button type="button" class="inline-flex justify-center items-center p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                                                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 20">
                                                    <path d="M8 0a7.992 7.992 0 0 0-6.583 12.535 1 1 0 0 0 .12.183l.12.146c.112.145.227.285.326.4l5.245 6.374a1 1 0 0 0 1.545-.003l5.092-6.205c.206-.222.4-.455.578-.7l.127-.155a.934.934 0 0 0 .122-.192A8.001 8.001 0 0 0 8 0Zm0 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6Z"/>
                                                </svg>
                                                <span class="sr-only">Set location</span>
                                            </button>
                                            <button type="button" class="inline-flex justify-center items-center p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 dark:text-gray-400 dark:hover:text-white dark:hover:bg-gray-600">
                                                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 18">
                                                    <path d="M18 0H2a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2Zm-5.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm4.376 10.481A1 1 0 0 1 16 15H4a1 1 0 0 1-.895-1.447l3.5-7A1 1 0 0 1 7.468 6a.965.965 0 0 1 .9.5l2.775 4.757 1.546-1.887a1 1 0 0 1 1.618.1l2.541 4a1 1 0 0 1 .028 1.011Z"/>
                                                </svg>
                                                <span class="sr-only">Upload image</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>                                         
            </div>
        </div>
    </div>
    </a>

    <script>
            document.addEventListener('DOMContentLoaded', function() {
        const modalButton = document.getElementById('modalButton');
        const modal = document.getElementById('authentication-modal');
        const closeModalButton = document.getElementById('closeModalButton');

        modalButton.addEventListener('click', function() {
            modal.classList.remove('hidden');
        });

        closeModalButton.addEventListener('click', function() {
            modal.classList.add('hidden');
        });

        // Optional: close the modal when clicking outside of it
        window.addEventListener('click', function(event) {
            if (event.target == modal) {
                modal.classList.add('hidden');
            }
        });
    });

    </script>

    @endsection
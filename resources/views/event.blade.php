  @extends('layout')

  @section('content')

    <div class="my-10">
    <h5 class="font-bold mb-4">Recent Event</h5>
    </div>

    <div class="flex justify-center items-center min-h-screen">
      <div class="block max-w-3xl mx-auto mb-4 bg-white dark:bg-gray-700 rounded-lg shadow-md p-4">
      <a href="#">
        <img class="rounded-t-lg w-full h-48 object-cover" src="./img/Dika.jpg" alt="" />
      </a>
        <div class="p-5">
            <a href="#">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Event Title</h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quasi officia modi fuga vel, similique aliquam, voluptas cupiditate exercitationem sunt inventore nam architecto, ipsam fugit accusantium. Corrupti eum rerum molestiae in.
                  Rem inventore sit quod tempore saepe iusto ex pariatur. Nobis repellat voluptatum, illum amet facilis porro corporis cum, perspiciatis alias quas fugiat odit aliquid sequi qui quae nostrum, nisi veritatis!
                  Iste soluta illo hic, est laborum autem consequuntur molestias iure consequatur similique reiciendis tempora voluptatem magnam nihil totam assumenda modi, nulla architecto distinctio maxime non? Nemo ipsum quod sequi ab.</p>
                <div class="flex justify-between mb-1">
                  <span class="text-base font-semibold text-black dark:text-white">Attendees</span>
                  <span class="text-sm font-semibold text-black dark:text-white">20/24</span>
                </div>
                <div class="w-full mb-4 bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                  <div class="bg-blue-600 h-2.5 rounded-full" style="width: 95%"></div>
                </div>

                  <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Join Now!!
                  <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                </svg>
            </a>
        </div>
      </div>
    </div>


  @endsection

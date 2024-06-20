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
                    <tr>
                        <td class="py-2 px-4 border-b"></td>
                        <td class="py-2 px-4 border-b">Event Title </td>
                        <td class="py-2 px-4 border-b">
                            <div class="flex justify-center"> <!-- Centering detail section -->
                                <div class="space-x-2">
                                    <button class="bg-blue-500 text-white py-1 px-3 rounded hover:bg-blue-800 ">Detail</button>
                                    <button class="bg-blue-500 text-white py-1 px-3 rounded hover:bg-blue-800 ">Edit</button>
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection

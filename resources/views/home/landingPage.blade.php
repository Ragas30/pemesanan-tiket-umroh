@extends('template.home.header')
@section('title', 'Home')
@section('content')
    <main class="bg-pink-900 min-h-screen">
        <div class="flex items-center justify-center min-h-screen">

            <div class="w-3/4 h-3/4 bg-white rounded-lg shadow-md ">
                <div data-hs-carousel='{
                    "loadingClasses": "opacity-0",
                    "dotsItemClasses": "hs-carousel-active:bg-blue-700 hs-carousel-active:border-blue-700 size-3 border border-gray-400 rounded-full cursor-pointer "
                  }'
                    class="relative">
                    <div class="hs-carousel relative overflow-hidden w-full min-h-64 bg-white rounded-lg">
                        <div
                            class="hs-carousel-body absolute top-0 bottom-0 start-0 flex flex-nowrap transition-transform duration-700 opacity-0">
                            <div class="hs-carousel-slide">
                                <div class="flex justify-center h-full bg-gray-100 p-6 ">
                                    <span class="self-center text-4xl text-black transition duration-700 ">First
                                        <p>kontol</p>
                                        slide
                                    </span>
                                </div>
                            </div>
                            <div class="hs-carousel-slide">
                                <div class="flex justify-center h-full bg-gray-200 p-6 ">
                                    <span class="self-center text-4xl text-black transition duration-700 ">Second
                                        slide</span>
                                </div>
                            </div>
                            <div class="hs-carousel-slide">
                                <div class="flex justify-center h-full bg-gray-300 p-6 ">
                                    <span class="self-center text-4xl text-black transition duration-700 ">Third
                                        slide</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <button type="button"
                        class="hs-carousel-prev hs-carousel-disabled:opacity-50 disabled:pointer-events-none absolute inset-y-0 start-0 inline-flex justify-center items-center w-[46px] h-full text-gray-800 hover:bg-gray-800/10 focus:outline-none focus:bg-gray-800/10 rounded-s-lg ">
                        <span class="text-2xl" aria-hidden="true">
                            <svg class="shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path d="m15 18-6-6 6-6"></path>
                            </svg>
                        </span>
                        <span class="sr-only">Previous</span>
                    </button>
                    <button type="button"
                        class="hs-carousel-next hs-carousel-disabled:opacity-50 disabled:pointer-events-none absolute inset-y-0 end-0 inline-flex justify-center items-center w-[46px] h-full text-gray-800 hover:bg-gray-800/10 focus:outline-none focus:bg-gray-800/10 rounded-e-lg ">
                        <span class="sr-only">Next</span>
                        <span class="text-2xl" aria-hidden="true">
                            <svg class="shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path d="m9 18 6-6-6-6"></path>
                            </svg>
                        </span>
                    </button>

                    <div class="hs-carousel-pagination flex justify-center absolute bottom-3 start-0 end-0 space-x-2"></div>
                </div>
            </div>
        </div>
    </main>
@endsection

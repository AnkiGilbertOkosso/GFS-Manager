@extends('layouts.app')

@section('name')
    <div class="p-6">
        <div class="grid grid-cols-1 gap-6 mb-6">
            <div class="bg-white flex flex-row  py-6 px-12 items-center justify-between">
                <div class="flex flex-col">
                    <h1 class="text-xl text-text-color font-semibold">Hi Romaric!</h1>
                    <p class="text-[16px] text-gray-700">Your working summary</p>
                </div>
                <div>
                    <button class="bg-secondary text-white py-4 px-8 font-semibold rounded-lg">+ Add</button>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 mb-6">
            <div class="bg-white p-6 lg:col-span-5">
                <div class="bg-white flex flex-row  items-center justify-between">
                    <div class="flex flex-col">
                        <h1 class="text-lg text-gray-700 font-medium">Operations & transport</h1>
                        <p class="text-[14px] text-gray-700">Small description</p>
                    </div>
                    <div>
                        <svg width="4" height="18" viewBox="0 0 4 18" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M0 16C0 17.1 0.9 18 2 18C3.1 18 4 17.1 4 16C4 14.9 3.1 14 2 14C0.9 14 0 14.9 0 16ZM0 2C0 3.1 0.9 4 2 4C3.1 4 4 3.1 4 2C4 0.9 3.1 0 2 0C0.9 0 0 0.9 0 2ZM0 9C0 10.1 0.9 11 2 11C3.1 11 4 10.1 4 9C4 7.9 3.1 7 2 7C0.9 7 0 7.9 0 9Z"
                                fill="#BFBFBF" />
                        </svg>
                    </div>
                </div>
                <ul role="list" class="grid grid-cols-1 gap-6 mt-2 md:grid-cols-3">
                    <li class="col-span-1 flex flex-col rounded-lg bg-light-blue text-center">
                        <div class="flex flex-1 flex-col p-2 pt-4">
                            <img class="" src="{{ asset('images/circle.png') }}" alt="">
                            <h3 class="mb-3 mt-2 text-2xl font-semibold text-[#151D48]">546</h3>
                            <p class="text-[#425166] text-[16px] font-medium">Shipment</p>
                            <div class="flex flex-row mt-1 justify-center items-center">
                                <svg width="6" height="5" viewBox="0 0 6 5" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 4L3 1L5 4" stroke="#1C75BC" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                                <p class="text-primary text-[12px] font-medium ml-1">+4% (1 day) </p>
                            </div>
                        </div>
                    </li>
                    <li class="col-span-1 flex flex-col rounded-lg bg-[#FFF4DE] text-center">
                        <div class="flex flex-1 flex-col p-2 pt-4">
                            <img class="" src="{{ asset('images/circle.png') }}" alt="">
                            <h3 class="mb-3 mt-2 text-2xl font-semibold text-[#151D48]">300K</h3>
                            <p class="text-[#425166] text-[16px] font-medium">Inventory</p>
                            <div class="flex flex-row mt-1 justify-center items-center">
                                <svg width="6" height="5" viewBox="0 0 6 5" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 1L3 4L5 1" stroke="#B22234" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                                <p class="text-[#B22234] text-[12px] font-medium ml-1">-4% (2 days) </p>
                            </div>
                        </div>
                    </li>
                    <li class="col-span-1 flex flex-col rounded-lg bg-[#FFC7A2] text-center">
                        <div class="flex flex-1 flex-col p-2 pt-4">
                            <img class="" src="{{ asset('images/circle.png') }}" alt="">
                            <h3 class="mb-3 mt-2 text-2xl font-semibold text-[#151D48]">896</h3>
                            <p class="text-[#425166] text-[16px] font-medium">Warehouse</p>
                            <div class="flex flex-row mt-1 justify-center items-center">
                                <svg width="6" height="5" viewBox="0 0 6 5" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 4L3 1L5 4" stroke="#F47827" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                                <p class="text-[#F47827] text-[12px] font-medium ml-1">+4% (6 days) </p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="bg-white p-6 lg:col-span-6">
                <div class="bg-white flex flex-row  items-center justify-between">
                    <div class="flex flex-col">
                        <h1 class="text-lg text-gray-700 font-medium">Finance</h1>
                        <p class="text-[14px] text-gray-700">Small description</p>
                    </div>
                    <div>
                        <svg width="4" height="18" viewBox="0 0 4 18" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M0 16C0 17.1 0.9 18 2 18C3.1 18 4 17.1 4 16C4 14.9 3.1 14 2 14C0.9 14 0 14.9 0 16ZM0 2C0 3.1 0.9 4 2 4C3.1 4 4 3.1 4 2C4 0.9 3.1 0 2 0C0.9 0 0 0.9 0 2ZM0 9C0 10.1 0.9 11 2 11C3.1 11 4 10.1 4 9C4 7.9 3.1 7 2 7C0.9 7 0 7.9 0 9Z"
                                fill="#BFBFBF" />
                        </svg>
                    </div>
                </div>
                <div class="grid grid-cols-1 gap-6 mt-2 md:grid-cols-2">
                    <div class="col-span-1">
                        <div class="bg-gray-100 rounded-xl px-2 py-3">
                            <div class="flex items-center">
                                <div class="p-2 bg-purple-200 mr-3 rounded-full">
                                    <!-- Icon from Heroicons (https://heroicons.com/) -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-purple-600" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M17 20h5v-2a2 2 0 00-2-2h-3v4z" />
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M4 15V7a2 2 0 012-2h10a2 2 0 012 2v8" />
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M4 15v4a2 2 0 002 2h3v-4" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 15h16" />
                                    </svg>
                                </div>
                                <div>
                                    <div class="text-[#A3AED0] text-sm">Balance</div>
                                    <div class="text-[#2B3674] text-2xl font-semibold">
                                        10k M XAF
                                        <p class="text-[12px] font-medium text[#A3AED0]">
                                            <span class="text-secondary">
                                                +23%
                                            </span>since last month
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-1">
                        <div class="bg-gray-100 rounded-xl px-2 py-3">
                            <div class="flex items-center">
                                <div class="p-2 bg-purple-200 mr-3 rounded-full">
                                    <!-- Icon from Heroicons (https://heroicons.com/) -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-purple-600"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M17 20h5v-2a2 2 0 00-2-2h-3v4z" />
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M4 15V7a2 2 0 012-2h10a2 2 0 012 2v8" />
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M4 15v4a2 2 0 002 2h3v-4" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 15h16" />
                                    </svg>
                                </div>
                                <div>
                                    <div class="text-[#A3AED0] text-sm">Investment</div>
                                    <div class="text-[#2B3674] text-2xl font-semibold">
                                        57k XAF
                                        <p class="text-[12px] font-medium text[#A3AED0]">
                                            <span class="text-[#05CD99]">
                                                +23%
                                            </span>since last month
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-1">
                        <div class="bg-gray-100 rounded-xl px-2 py-3">
                            <div class="flex items-center">
                                <div class="p-2 bg-purple-200 mr-3 rounded-full">
                                    <!-- Icon from Heroicons (https://heroicons.com/) -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-purple-600"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M17 20h5v-2a2 2 0 00-2-2h-3v4z" />
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M4 15V7a2 2 0 012-2h10a2 2 0 012 2v8" />
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M4 15v4a2 2 0 002 2h3v-4" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 15h16" />
                                    </svg>
                                </div>
                                <div>
                                    <div class="text-[#A3AED0] text-sm">Investment</div>
                                    <div class="text-[#2B3674] text-2xl font-semibold">
                                        57k XAF
                                        <p class="text-[12px] font-medium text[#A3AED0]">
                                            <span class="text-[#004CE8]">
                                                +23%
                                            </span>since last month
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-1">
                        <div class="bg-gray-100 rounded-xl px-2 py-3">
                            <div class="flex items-center">
                                <div class="p-2 bg-purple-200 mr-3 rounded-full">
                                    <!-- Icon from Heroicons (https://heroicons.com/) -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-purple-600"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M17 20h5v-2a2 2 0 00-2-2h-3v4z" />
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M4 15V7a2 2 0 012-2h10a2 2 0 012 2v8" />
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M4 15v4a2 2 0 002 2h3v-4" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 15h16" />
                                    </svg>
                                </div>
                                <div>
                                    <div class="text-[#A3AED0] text-sm">Spend this month</div>
                                    <div class="text-[#2B3674] text-2xl font-semibold">
                                        3M XAF
                                        <p class="text-[12px] font-medium text[#A3AED0]">
                                            <span class="text-[#B22234]">
                                                +23%
                                            </span>since last month
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="bg-white p-6 lg:col-span-1">

            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-6">
            <div class="bg-white p-6 lg:col-span-1">

            </div>
            <div class="bg-white p-6 lg:col-span-1">

            </div>
            <div class="bg-white p-6 lg:col-span-1">

            </div>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-6">
            <div class="bg-white border border-gray-100 p-6 rounded-md lg:col-span-1">

            </div>
            <div class="bg-white border border-gray-100 p-6 rounded-md lg:col-span-2">

            </div>
        </div>
    </div>
@endsection

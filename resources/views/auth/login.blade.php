@extends('layouts.authentication')

@section('content')
    <div class="hidden md:block pt-20">
        <h1 class="text-5xl font-semibold mb-6 text-white text-center">Login</h1>
        <h1 class="text-2xl font-semibold mb-6 text-white text-center">Enter your email and password to
            sign
            in!
        </h1>
    </div>
    <div class="md:hidden pt-20">
        <h1 class="text-3xl font-semibold mb-6 text-white text-center">Connect to your account</h1>

    </div>
    @if (Session::has('error'))
        <div class="alert alert-danger" role="alert">
            {{ Session::get('error') }}
        </div>
    @endif
    <form action="{{ route('login') }}" method="POST" class="space-y-8">
        @csrf
        <div>
            <label for="email" class="block text-[16px] font-medium text-white">Login*</label>
            <input type="email" id="email" placeholder="Login, Email or phone number" name="email"
                class="mt-1 p-3 px-6 w-full border rounded-2xl focus:border-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-white transition-colors duration-300">
        </div>
        <div>
            <label for="password" class="block text-[16px] font-medium text-white">Password*</label>
            <input type="password" id="password" name="password" placeholder="Enter password"
                class="mt-1 p-3 px-6 w-full border rounded-2xl focus:border-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-300 transition-colors duration-300">
        </div>
        <div class="flex flex-row w-full items-center justify-between">
            <div class="flex items-center">
                <input type="checkbox" id="myCheckbox" class="h-4 w-4 text-iprimary focus:primary border-gray-300 rounded">
                <label for="myCheckbox" class="ml-2 block text-[16px] font-medium text-white">Keep me
                    logged
                    in</label>
            </div>
            <div>
                <h1 class="text-[16px] font-medium text-white">Forget password?</h1>
            </div>
        </div>
        <div>
            <button type=" submit"
                class="w-full bg-orange text-white p-3 px-6 border-orange rounded-2xl  focus:outline-none focus:ring-2 focus:ring-offset-2">
                Sign In</button>
        </div>
    </form>
    <div class="hidden md:flex mt-8 text-sm text-white items-center justify-between">
        <svg width="180" height="1" viewBox="0 0 200 1" fill="none" xmlns="http://www.w3.org/2000/svg">
            <line y1="0.5" x2="200" y2="0.5" stroke="white" />
        </svg>
        <p class="text-center px-">or Login with</p>
        <svg width="180" height="1" viewBox="0 0 200 1" fill="none" xmlns="http://www.w3.org/2000/svg">
            <line y1="0.5" x2="200" y2="0.5" stroke="white" />
        </svg>
    </div>
    <div class=" hidden mt-4 md:flex flex-col lg:flex-row items-center justify-between space-x-4">
        <div class="w-full flex lg:w-1/2 mb-2 items-center lg:mb-0">
            <button type="submit"
                class="w-full p-3 px-6 border-[1px] border-white flex text-white justify-center rounded-2xl focus:outline-none focus:ring-2 focus:ring-offset-2">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_686_807)">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M18.6667 2C19.5507 2 20.3986 2.35119 21.0237 2.97631C21.6488 3.60143 22 4.44928 22 5.33333V18.6667C22 19.5507 21.6488 20.3986 21.0237 21.0237C20.3986 21.6488 19.5507 22 18.6667 22H5.33333C4.44928 22 3.60143 21.6488 2.97631 21.0237C2.35119 20.3986 2 19.5507 2 18.6667V5.33333C2 4.44928 2.35119 3.60143 2.97631 2.97631C3.60143 2.35119 4.44928 2 5.33333 2H18.6667ZM7.55556 9.77778C7.26087 9.77778 6.97826 9.89484 6.76988 10.1032C6.56151 10.3116 6.44444 10.5942 6.44444 10.8889V16.4444C6.44444 16.7391 6.56151 17.0217 6.76988 17.2301C6.97826 17.4385 7.26087 17.5556 7.55556 17.5556C7.85024 17.5556 8.13286 17.4385 8.34123 17.2301C8.5496 17.0217 8.66667 16.7391 8.66667 16.4444V10.8889C8.66667 10.5942 8.5496 10.3116 8.34123 10.1032C8.13286 9.89484 7.85024 9.77778 7.55556 9.77778ZM10.8889 8.66667C10.5942 8.66667 10.3116 8.78373 10.1032 8.9921C9.89484 9.20048 9.77778 9.48309 9.77778 9.77778V16.4444C9.77778 16.7391 9.89484 17.0217 10.1032 17.2301C10.3116 17.4385 10.5942 17.5556 10.8889 17.5556C11.1836 17.5556 11.4662 17.4385 11.6746 17.2301C11.8829 17.0217 12 16.7391 12 16.4444V12.3778C12.3389 11.9956 12.9111 11.5467 13.5478 11.2744C13.9178 11.1167 14.4744 11.0522 14.8611 11.1744C14.9894 11.207 15.1036 11.2803 15.1867 11.3833C15.2444 11.4611 15.3333 11.6344 15.3333 12V16.4444C15.3333 16.7391 15.4504 17.0217 15.6588 17.2301C15.8671 17.4385 16.1498 17.5556 16.4444 17.5556C16.7391 17.5556 17.0217 17.4385 17.2301 17.2301C17.4385 17.0217 17.5556 16.7391 17.5556 16.4444V12C17.5556 11.2556 17.3667 10.5933 16.9733 10.0622C16.6114 9.58062 16.1048 9.22747 15.5278 9.05444C14.5256 8.74 13.4156 8.91444 12.6744 9.23222C12.437 9.33385 12.2058 9.44961 11.9822 9.57889C11.9356 9.32288 11.8007 9.09133 11.6009 8.92463C11.4011 8.75792 11.1491 8.66663 10.8889 8.66667ZM7.55556 6.44444C7.26087 6.44444 6.97826 6.56151 6.76988 6.76988C6.56151 6.97826 6.44444 7.26087 6.44444 7.55556C6.44444 7.85024 6.56151 8.13286 6.76988 8.34123C6.97826 8.5496 7.26087 8.66667 7.55556 8.66667C7.85024 8.66667 8.13286 8.5496 8.34123 8.34123C8.5496 8.13286 8.66667 7.85024 8.66667 7.55556C8.66667 7.26087 8.5496 6.97826 8.34123 6.76988C8.13286 6.56151 7.85024 6.44444 7.55556 6.44444Z"
                            fill="white" />
                    </g>
                    <defs>
                        <clipPath id="clip0_686_807">
                            <rect width="24" height="24" fill="white" />
                        </clipPath>
                    </defs>
                </svg>
            </button>
        </div>
        <div class="w-full flex lg:w-1/2 mb-2 items-center lg:mb-0">
            <button type="submit"
                class="w-full p-3 px-6 border-[1px] border-white flex text-white justify-center rounded-2xl focus:outline-none focus:ring-2 focus:ring-offset-2">
                <svg width="11" height="20" viewBox="0 0 11 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M7 11.5H9.5L10.5 7.5H7V5.5C7 4.47 7 3.5 9 3.5H10.5V0.14C10.174 0.0970001 8.943 0 7.643 0C4.928 0 3 1.657 3 4.7V7.5H0V11.5H3V20H7V11.5Z"
                        fill="white" />
                </svg>
            </button>
        </div>
        <div class="w-full flex lg:w-1/2 mb-2 items-center lg:mb-0">
            <button type="submit"
                class="w-full p-3 px-6 border-[1px] border-white flex text-white justify-center rounded-2xl focus:outline-none focus:ring-2 focus:ring-offset-2">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M19.803 8.12475C19.9305 8.79419 20 9.49411 20 10.2245C20 15.9376 16.0981 20 10.2047 20C8.86452 20.0004 7.53735 19.742 6.29907 19.2396C5.06079 18.7372 3.93567 18.0006 2.98799 17.072C2.04031 16.1433 1.28865 15.0407 0.775958 13.8273C0.263266 12.6139 -0.00040815 11.3133 4.74216e-07 10C-0.00040815 8.68667 0.263266 7.38613 0.775958 6.17269C1.28865 4.95926 2.04031 3.8567 2.98799 2.92804C3.93567 1.99937 5.06079 1.26279 6.29907 0.76039C7.53735 0.257984 8.86452 -0.000399962 10.2047 4.64701e-07C12.9601 4.64701e-07 15.2625 0.993499 17.029 2.60666L14.1523 5.42564V5.41853C13.0814 4.41894 11.7224 3.90593 10.2047 3.90593C6.83771 3.90593 4.10097 6.69342 4.10097 9.99391C4.10097 13.2934 6.83771 16.088 10.2047 16.088C13.2597 16.088 15.3392 14.3753 15.7663 12.0246H10.2047V8.12475H19.803Z"
                        fill="white" />
                </svg>
            </button>
        </div>
    </div>
    <!-- mobile  -->
    <div class=" md:hidden mt-4 flex flex-col lg:flex-row items-center justify-between space-x-4">
        <div class="w-full flex lg:w-1/2 mb-2 items-center lg:mb-0 relative">
            <button id="dropdownButton" type="button" aria-haspopup="true" aria-expanded="false"
                class="w-full p-3 px-6 border-[1px] border-white flex text-white justify-center items-center font-bold rounded-2xl focus:outline-none focus:ring-2 focus:ring-offset-2">
                Or login with
                <svg width="10" height="6" viewBox="0 0 10 6" fill="none" class="ml-2"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M5.02933 5.50214L5.02854 5.50215C4.96274 5.50253 4.89751 5.48991 4.83659 5.46503C4.77593 5.44025 4.72073 5.40379 4.67413 5.35773C4.67394 5.35753 4.67374 5.35734 4.67354 5.35715L0.674989 1.35858C0.580453 1.26405 0.527344 1.13583 0.527344 1.00214C0.527344 0.868445 0.580453 0.740227 0.674989 0.645691C0.769524 0.551156 0.897741 0.498047 1.03144 0.498047C1.16503 0.498047 1.29315 0.551075 1.38766 0.645474C1.38774 0.645546 1.38781 0.645619 1.38788 0.645691L4.67735 3.94515L5.0309 4.29978L5.38499 3.94569L8.65899 0.671694C8.75276 0.596449 8.87069 0.5574 8.99119 0.562054C9.11703 0.566915 9.2364 0.619081 9.32545 0.708129C9.41449 0.797174 9.46666 0.916544 9.47152 1.04238C9.47617 1.16288 9.43712 1.28081 9.36188 1.37459L5.37933 5.35714C5.37913 5.35734 5.37894 5.35753 5.37874 5.35772C5.28567 5.44973 5.16022 5.50159 5.02933 5.50214Z"
                        fill="white" stroke="white" />
                </svg>
            </button>
            <div id="dropdownContent" class="absolute right-0 mt-2 w-48 bg-primary rounded-md shadow-lg z-10 hidden">
                <div class="py-1">
                    <div class="w-full flex lg:w-1/2 mb-2 items-center lg:mb-0">
                        <button type="submit"
                            class="w-full p-3 px-6 border-[1px] border-white flex text-white justify-center rounded-2xl focus:outline-none focus:ring-2 focus:ring-offset-2">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_686_807)">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M18.6667 2C19.5507 2 20.3986 2.35119 21.0237 2.97631C21.6488 3.60143 22 4.44928 22 5.33333V18.6667C22 19.5507 21.6488 20.3986 21.0237 21.0237C20.3986 21.6488 19.5507 22 18.6667 22H5.33333C4.44928 22 3.60143 21.6488 2.97631 21.0237C2.35119 20.3986 2 19.5507 2 18.6667V5.33333C2 4.44928 2.35119 3.60143 2.97631 2.97631C3.60143 2.35119 4.44928 2 5.33333 2H18.6667ZM7.55556 9.77778C7.26087 9.77778 6.97826 9.89484 6.76988 10.1032C6.56151 10.3116 6.44444 10.5942 6.44444 10.8889V16.4444C6.44444 16.7391 6.56151 17.0217 6.76988 17.2301C6.97826 17.4385 7.26087 17.5556 7.55556 17.5556C7.85024 17.5556 8.13286 17.4385 8.34123 17.2301C8.5496 17.0217 8.66667 16.7391 8.66667 16.4444V10.8889C8.66667 10.5942 8.5496 10.3116 8.34123 10.1032C8.13286 9.89484 7.85024 9.77778 7.55556 9.77778ZM10.8889 8.66667C10.5942 8.66667 10.3116 8.78373 10.1032 8.9921C9.89484 9.20048 9.77778 9.48309 9.77778 9.77778V16.4444C9.77778 16.7391 9.89484 17.0217 10.1032 17.2301C10.3116 17.4385 10.5942 17.5556 10.8889 17.5556C11.1836 17.5556 11.4662 17.4385 11.6746 17.2301C11.8829 17.0217 12 16.7391 12 16.4444V12.3778C12.3389 11.9956 12.9111 11.5467 13.5478 11.2744C13.9178 11.1167 14.4744 11.0522 14.8611 11.1744C14.9894 11.207 15.1036 11.2803 15.1867 11.3833C15.2444 11.4611 15.3333 11.6344 15.3333 12V16.4444C15.3333 16.7391 15.4504 17.0217 15.6588 17.2301C15.8671 17.4385 16.1498 17.5556 16.4444 17.5556C16.7391 17.5556 17.0217 17.4385 17.2301 17.2301C17.4385 17.0217 17.5556 16.7391 17.5556 16.4444V12C17.5556 11.2556 17.3667 10.5933 16.9733 10.0622C16.6114 9.58062 16.1048 9.22747 15.5278 9.05444C14.5256 8.74 13.4156 8.91444 12.6744 9.23222C12.437 9.33385 12.2058 9.44961 11.9822 9.57889C11.9356 9.32288 11.8007 9.09133 11.6009 8.92463C11.4011 8.75792 11.1491 8.66663 10.8889 8.66667ZM7.55556 6.44444C7.26087 6.44444 6.97826 6.56151 6.76988 6.76988C6.56151 6.97826 6.44444 7.26087 6.44444 7.55556C6.44444 7.85024 6.56151 8.13286 6.76988 8.34123C6.97826 8.5496 7.26087 8.66667 7.55556 8.66667C7.85024 8.66667 8.13286 8.5496 8.34123 8.34123C8.5496 8.13286 8.66667 7.85024 8.66667 7.55556C8.66667 7.26087 8.5496 6.97826 8.34123 6.76988C8.13286 6.56151 7.85024 6.44444 7.55556 6.44444Z"
                                        fill="white" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_686_807">
                                        <rect width="24" height="24" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </button>
                    </div>
                    <div class="w-full flex lg:w-1/2 mb-2 items-center lg:mb-0">
                        <button type="submit"
                            class="w-full p-3 px-6 border-[1px] border-white flex text-white justify-center rounded-2xl focus:outline-none focus:ring-2 focus:ring-offset-2">
                            <svg width="11" height="20" viewBox="0 0 11 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M7 11.5H9.5L10.5 7.5H7V5.5C7 4.47 7 3.5 9 3.5H10.5V0.14C10.174 0.0970001 8.943 0 7.643 0C4.928 0 3 1.657 3 4.7V7.5H0V11.5H3V20H7V11.5Z"
                                    fill="white" />
                            </svg>
                        </button>
                    </div>
                    <div class="w-full flex lg:w-1/2 mb-2 items-center lg:mb-0">
                        <button type="submit"
                            class="w-full p-3 px-6 border-[1px] border-white flex text-white justify-center rounded-2xl focus:outline-none focus:ring-2 focus:ring-offset-2">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M19.803 8.12475C19.9305 8.79419 20 9.49411 20 10.2245C20 15.9376 16.0981 20 10.2047 20C8.86452 20.0004 7.53735 19.742 6.29907 19.2396C5.06079 18.7372 3.93567 18.0006 2.98799 17.072C2.04031 16.1433 1.28865 15.0407 0.775958 13.8273C0.263266 12.6139 -0.00040815 11.3133 4.74216e-07 10C-0.00040815 8.68667 0.263266 7.38613 0.775958 6.17269C1.28865 4.95926 2.04031 3.8567 2.98799 2.92804C3.93567 1.99937 5.06079 1.26279 6.29907 0.76039C7.53735 0.257984 8.86452 -0.000399962 10.2047 4.64701e-07C12.9601 4.64701e-07 15.2625 0.993499 17.029 2.60666L14.1523 5.42564V5.41853C13.0814 4.41894 11.7224 3.90593 10.2047 3.90593C6.83771 3.90593 4.10097 6.69342 4.10097 9.99391C4.10097 13.2934 6.83771 16.088 10.2047 16.088C13.2597 16.088 15.3392 14.3753 15.7663 12.0246H10.2047V8.12475H19.803Z"
                                    fill="white" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

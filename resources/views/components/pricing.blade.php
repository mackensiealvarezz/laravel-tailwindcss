<div class="relative py-32 bg-blue-600 text-blue-100">

    {{-- gray box --}}
    <div class="absolute top-0 inset-x-0 h-48 bg-gray-300"></div>

    <div class="container mx-auto px-6 lg:px-0 flex flex-col lg:flex-row items-center space-x-8">
        {{-- left --}}
        <div class="order-2 lg:order-1 lg:w-1/3 pt-12  text-center lg:text-right space-y-2 text-lg">
            <p>Some text information here</p>
            <p>Some text information here</p>
            <p>Some text information here</p>
        </div>
        {{-- pricing --}}
        <div
            class="order-1 lg:order-2 relative w-full lg:w-1/3  bg-white p-8 rounded text-gray-800 shadow-2x1 border-8 border-purple-700 text-center space-y-8 transform hover:scale-105 duration-500 ">

            {{-- arrows --}}
            <div class="absolute top-0 inset-x-0 transform -translate-y-full flex items-end justify-center space-x-8">
                <div class="w-2 h-16  mb-8 bg-red-400 rounded transform -rotate-45 origin-bottom"></div>
                <div class="w-2 h-24  mb-8 bg-yellow-400 rounded"></div>
                <div class="w-2 h-16  mb-8 bg-green-400 rounded transform rotate-45 origin-bottom"></div>
            </div>

            <h4 class="text-gray-600 text-sm">Start tailwind<span class="italic">ing</span>!</h4>
            <div><span class="text-6xl text-purple-800 font-bold"><span class="opacity-25">$</span>47</span></div>
            <a href="" class="block p-3 bg-yellow-300 text-yellow-800 rounded shadow-xl">Buy the course</a>
        </div>
        {{-- right --}}
        <div class="order-3  lg:w-1/3  pt-12 space-y-2 text-lg text-center lg:text-right">
            <p>Some text information here</p>
            <p>Some text information here</p>
            <p>Some text information here</p>
        </div>
    </div>
</div>

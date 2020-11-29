<div class="relative bg-gradient-to-br from-white to-gray-300 py-24 font-normal text-gray-400">

    <div class="absolute top-0 left-0 transform translate-y-6 translate-x-8">
        <x-circles />
    </div>



    <div class=" relative container mx-auto px-4 lg:px-0">



        {{-- top footer --}}
        <div class="lg:flex justify-between space-y-6 lg:space-y-0">
            {{-- news letter  --}}
            <div class="flex flex-col justify-center">
                <h2
                    class="mb-4 font-bold text-2xl lg:text-5xl text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-purple-400">
                    Get updates on this course</h2>
                <form class="flex">
                    <input type="email" name="email" placeholder="example@test.com"
                        class="w-full p-3 outline-none rounded-l border-2 border-r-0 border-gray-300 focus:border-purple-400 placeholder-gray-300">
                    <button class="p-3 bg-purple-400 text-purple-100 rounded-r">Subscripe</button>
                </form>
            </div>
            {{-- links  --}}
            <div class="text-center lg:text-right md:flex md:justify-center md:space-x-8 space-y-8 md:space-y-0 ">
                <div class="space-y-2">
                    <p class="mb-3 font-bold text-gray-400 uppercase tracking-wide">Company</p>
                    <a href="" class="block hover:text-gray-800 hover:underline">Link2</a>
                    <a href="" class="block hover:text-gray-800 hover:underline">Link1</a>
                    <a href="" class="block hover:text-gray-800 hover:underline">Link1</a>
                </div>
                <div class="space-y-2">
                    <p class="mb-3 font-bold text-gray-400 uppercase tracking-wide">Company</p>
                    <a href="" class="block hover:text-gray-800 hover:underline">Link2</a>
                    <a href="" class="block hover:text-gray-800 hover:underline">Link1</a>
                    <a href="" class="block hover:text-gray-800 hover:underline">Link1</a>
                </div>
                <div class="space-y-2">
                    <p class="mb-3 font-bold text-gray-400 uppercase tracking-wide">Company</p>
                    <a href="" class="block hover:text-gray-800 hover:underline">Link2</a>
                    <a href="" class="block hover:text-gray-800 hover:underline">Link1</a>
                    <a href="" class="block hover:text-gray-800 hover:underline">Link1</a>
                </div>

            </div>
        </div>


        {{-- bottom footer --}}
        <div class="pt-4 mt-16 flex justify-between border-t border-gray-400 text-sm">
            {{-- copyrightr --}}
            <div>copyright</div>
            {{-- links --}}
            <div class="space-x-4">
                <a href="">Link1</a>
                <a href="">Link1</a>
                <a href="">Link1</a>
            </div>
        </div>

    </div>
</div>

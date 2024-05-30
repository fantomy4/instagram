<div class="w-full p-3">
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}

    <h3 class="font-bold text-4xl">Notifications</h3>

    <main class="my-7 w-full">
        <div class="space-y-5">
            {{-- newFollower --}}

            <div class="grid grid-cols12 gap-2 w-full">
                <a href="#" class="col-span-2">
                    <x-avatar wire:ignore src="https://source.unsplash.com/500x500?face-{{rand(0,10)}}" class="h-10 w-10"></x-avatar>
                </a>

                <div class="col-span-7 font-medium">
                    <a href="#"><strong>{{fake()->name}}</strong></a>
                    Started Following you
                    <span class="text-gray-400">2d</span>
                </div>

                <div class="col-span-3">
                    <button class="font-bold text-sm bg-blue-500 text-white px-3 py-1 rounded-lg">Following</button>
                    {{-- <button class="font-bold text-sm bg-gray-100 text-black/90 px-3 py-1 rounded-lg">Following</button> --}}
                </div>
            </div>
            
            {{-- postLiked --}}
            <div class="grid grid-cols12 gap-2 w-full">
                <a href="" class="col-span-2">
                    <x-avatar wire:ignore src="https://source.unsplash.com/500x500?face-{{rand(0,10)}}" class="h-10 w-10"></x-avatar>
                </a>

                <div class="col-span-7 font-medium">
                    <a href="#"><strong>{{fake()->name}}</strong></a>

                    <a href="#">
                        Liked your post
                        <span class="text-gray-400">2d</span>
                    </a>
                </div>

                <a href="" class="col-span-3 ml-auto">
                    <img class="h-11 w-10 object-cover" src="https://source.unsplash.com/500x500?nature-{{rand(0,10)}}" alt="">
                </a>
            </div>

            {{-- newComment --}}
            <div class="grid grid-cols12 gap-2 w-full">
                <a href="" class="col-span-2">
                    <x-avatar wire:ignore src="https://source.unsplash.com/500x500?face-{{rand(0,10)}}" class="h-10 w-10"></x-avatar>
                </a>

                <div class="col-span-7 font-medium">
                    <a href="#"><strong>{{fake()->name}}</strong></a>

                    <a href="#">
                        Commented:
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam, vitae?
                        <span class="text-gray-400">2d</span>
                    </a>
                </div>

                <a href="" class="col-span-3 ml-auto">
                    <img class="h-11 w-10 object-cover" src="https://source.unsplash.com/500x500?nature-{{rand(0,10)}}" alt="">
                </a>
            </div>
            
        </div>
    </main>
</div>

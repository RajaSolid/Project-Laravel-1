<div>
    <!-- Waste no more time arguing what a good man should be, be one. - Marcus Aurelius -->
     <a     {{$attributes}} aria-current="page" 
            class="{{$active ? 'bg-gray-950/50 text-white' : 'text-gray-300 hover:bg-white/5 hover:text-white' }} 
            rounded-md px-3 py-2 text-sm font-medium">{{$slot}}</a>

</div>
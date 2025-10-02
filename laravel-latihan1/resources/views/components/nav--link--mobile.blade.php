<div>
    <!-- We must ship. Goldship - Taylor Otwell -->
    <a {{ $attributes }} 
       aria-current="page"
       class="{{ $active ? 'bg-gray-950 text-white' : 'text-gray-300 hover:bg-gray-800 hover:text-white' }} 
              block w-full text-left rounded-md px-3 py-2 text-sm font-medium">{{ $slot }}
    </a>
</div>

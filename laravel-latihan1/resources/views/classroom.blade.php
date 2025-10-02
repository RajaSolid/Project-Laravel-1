<x-layout>
    <x-slot:judul>{{ $title }}</x-slot:judul>

    <table class="table-auto border-collapse border border-black w-full">
        <thead class="bg-gray-200">
            <tr>
                @for ($i = 0; $i < count($headers); $i++)
                    <th class="border border-black px-4 py-2">{{ $headers[$i] }}</th>
                @endfor
            </tr>
        </thead>
        <tbody>
            @for ($i = 0; $i < count($classrooms); $i++)
                <tr>
                    @for ($j = 0; $j < count($fields); $j++)
                        <td class="border border-black px-4 py-2 {{ in_array($fields[$j], ['id','name','gender']) ? 'text-center' : '' }}">
                            {{ $classrooms[$i][$fields[$j]] }}
                        </td>
                    @endfor
                </tr>
            @endfor
        </tbody>
    </table>
</x-layout>

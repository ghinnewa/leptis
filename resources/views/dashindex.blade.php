<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <a href="{{route('addpage')}}">add course</a>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                

                @foreach($courses as $course)
                <div class="p-6 bg-white border-b border-gray-200">
                    {{$course->title}}
                    <a href="{{route('delete',$course)}}" class="text-red-500" >[delete]</a>
                </div>
@endforeach
            </div>
        </div>
    </div>
</x-app-layout>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

            <form action="submit" method="POST">
                @csrf
  <label for="title">title</label>
  <input type="text" id="title" name="title"><br><br>
  <label for="about">about</label>
  <input type="text" id="about" name="about"><br><br>
  <label for="content">content</label>
  <input type="text" id="content" name="content"><br><br>
  <label for="topic_id">topic</label>
  <input type="text" id="topic_id" name="topic_id"><br><br>
  <input type="submit" value="Submit">
</form>
<h1>hi</h1>
            </div>
        </div>
    </div>
</x-app-layout>

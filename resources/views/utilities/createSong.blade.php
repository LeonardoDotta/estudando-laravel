<x-layout title="New Song">
    <form action="/dashboard/saveSong" method="post">
        @csrf
        <div class="mb-3">
            <label for="nome">Song Name:</label>
            <input type="text" id="nome" name="nome">
        </div>
        <button type="submit" class="btn btn-primary">Add</button>
    </form>
</x-layout>

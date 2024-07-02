<x-layout title="New Serie">
    <form action="/dashboard/saveSerie" method="post">
        @csrf
        <div class="mb-3">
            <label for="nome">Serie Name:</label>
            <input type="text" id="nome" name="nome">
        </div>
        <button type="submit" class="btn btn-primary">Add</button>
    </form>
</x-layout>

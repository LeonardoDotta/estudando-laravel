<x-layout title="New Movie">
    <form action="/dashboard/saveMovie" method="post">
        @csrf
        <div class="mb-3">
            <label for="nome">Movie Name:</label>
            <input type="text" id="nome" name="nome">
        </div>
        <button type="submit" class="btn btn-primary">Add</button>
    </form>
</x-layout>

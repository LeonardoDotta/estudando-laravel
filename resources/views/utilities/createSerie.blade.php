@extends('importacoes')
<x-layout title="New Serie">
    <div class="headerDashboard">Listas Online</div>
    <form class="createScreen" action="/dashboard/saveSerie" method="post">
        @csrf
        <img class="createImg" src="{{ asset('imgs/1.jpg') }}" />
        <label class="createLabel" for="nome">Serie Name:</label>
        <input class="createInput" type="text" id="nome" name="nome">
        <button class="createButton btn btn-primary" type="submit">Add</button>
    </form>
    <div class="footerDashboard">Footer</div>
</x-layout>

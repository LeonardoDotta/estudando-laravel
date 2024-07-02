@extends('importacoes')
@section('dashboard')
@section('content')
@stack('dashboard')
<div>
    <div class="headerDashboard">Listas Online</div>
    <div class="contentAndSideBar">
        <div class="sideBarDashboard">SideBar</div>
        <div class="contentDashboard">
            <div class="addSerie">
                <a href="/series/create" class="btn btn-primary">Adicionar Série</a>
                <ul class="list-group" style="max-height: 300px; overflow-y: scroll; border-top-right-radius: unset; border-bottom-right-radius: unset">
                    @foreach ($series as $serie)
                    <li class="list-group-item">{{ $serie->nome }}
                    </li>
                    @endforeach
                </ul>
            </div>
            <div class="addSerie">
                <a href="/movies/create" class="btn btn-primary">Adicionar Filme</a>
                <ul class="list-group" style="max-height: 300px; overflow-y: scroll; border-top-right-radius: unset; border-bottom-right-radius: unset">
                    @foreach ($movies as $movie)
                    <li class="list-group-item">{{ $movie->nome }}<button onclick="">Delete</button></li>
                    @endforeach
                </ul>
            </div>
            <div class="addSerie">
                <a href="/songs/create" class="btn btn-primary">Adicionar Música</a>
                <ul class="list-group" style="max-height: 300px; overflow-y: scroll; border-top-right-radius: unset; border-bottom-right-radius: unset">
                    @foreach ($songs as $song)
                    <li class="list-group-item">{{ $song->nome }}</li>
                    @endforeach
                </ul>
            </div>
            {{-- <div class="addSerie">
                <a href="/series/criar" class="btn btn-primary">Adicionar Série</a>
                <ul class="list-group">
                    @foreach ($series as $serie)
                    <li class="list-group-item">{{ $serie->nome }}</li>
                    @endforeach
                </ul>
            </div> --}}
        </div>
    </div>
    <div class="footerDashboard">Footer
    </div>
</div>
@endsection

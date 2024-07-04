@extends('importacoes')
@section('dashboard')
@section('content')
@stack('dashboard')

<script>
    function confirmExclusion(id) {
        if (confirm('Tem certeza que deseja excluir este item?')) {
            window.location = '/dashboard';
        }
    }
</script>

<div>
    <div class="headerDashboard">Listas Online</div>
    <div class="contentAndSideBar">
        <div class="sideBarDashboard">SideBar</div>
        <div class="contentDashboard">
            <div class="addSerie">
                <a href="/series/create" class="btn btn-primary">Adicionar Série</a>
                <ul class="listGroup">
                    @foreach ($series as $serie)
                    <li class="listGroupItem">{{ $serie->nome }}
                        <form action="{{ route('series.destroy', $serie->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input name="id" type="hidden" value="{{$serie->id}}"></input>
                            <button class="deleteButton" onclick="confirmExclusion({{ $serie->id }})">
                                <svg class="svg" xmlns="http://www.w3.org/2000/svg"><path d="M16 1.75V3h5.25a.75.75 0 0 1 0 1.5H2.75a.75.75 0 0 1 0-1.5H8V1.75C8 .784 8.784 0 9.75 0h4.5C15.216 0 16 .784 16 1.75Zm-6.5 0V3h5V1.75a.25.25 0 0 0-.25-.25h-4.5a.25.25 0 0 0-.25.25ZM4.997 6.178a.75.75 0 1 0-1.493.144L4.916 20.92a1.75 1.75 0 0 0 1.742 1.58h10.684a1.75 1.75 0 0 0 1.742-1.581l1.413-14.597a.75.75 0 0 0-1.494-.144l-1.412 14.596a.25.25 0 0 1-.249.226H6.658a.25.25 0 0 1-.249-.226L4.997 6.178Z"></path><path d="M9.206 7.501a.75.75 0 0 1 .793.705l.5 8.5A.75.75 0 1 1 9 16.794l-.5-8.5a.75.75 0 0 1 .705-.793Zm6.293.793A.75.75 0 1 0 14 8.206l-.5 8.5a.75.75 0 0 0 1.498.088l.5-8.5Z"></path></svg>
                            </button>
                        </form>
                    </li>
                    @endforeach
                </ul>
            </div>
            {{-- <div class="addSerie">
                <a href="/movies/create" class="btn btn-primary">Adicionar Filme</a>
                <ul class="listGroup">
                    @foreach ($movies as $movie)
                    <li class="listGroupItem">{{ $movie->nome }}
                        <form action="{{ route('movies.destroy', $movie->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input name="id" type="hidden" value="{{$serie->id}}"></input>
                            <button class="deleteButton" onclick="confirmExclusion({{ $movie->id }})">
                                <svg class="svg" xmlns="http://www.w3.org/2000/svg"><path d="M16 1.75V3h5.25a.75.75 0 0 1 0 1.5H2.75a.75.75 0 0 1 0-1.5H8V1.75C8 .784 8.784 0 9.75 0h4.5C15.216 0 16 .784 16 1.75Zm-6.5 0V3h5V1.75a.25.25 0 0 0-.25-.25h-4.5a.25.25 0 0 0-.25.25ZM4.997 6.178a.75.75 0 1 0-1.493.144L4.916 20.92a1.75 1.75 0 0 0 1.742 1.58h10.684a1.75 1.75 0 0 0 1.742-1.581l1.413-14.597a.75.75 0 0 0-1.494-.144l-1.412 14.596a.25.25 0 0 1-.249.226H6.658a.25.25 0 0 1-.249-.226L4.997 6.178Z"></path><path d="M9.206 7.501a.75.75 0 0 1 .793.705l.5 8.5A.75.75 0 1 1 9 16.794l-.5-8.5a.75.75 0 0 1 .705-.793Zm6.293.793A.75.75 0 1 0 14 8.206l-.5 8.5a.75.75 0 0 0 1.498.088l.5-8.5Z"></path></svg>
                            </button>
                        </form>
                    </li>
                    @endforeach
                </ul>
            </div> --}}
            <div class="addSerie">
                <a href="/songs/create" class="btn btn-primary">Adicionar Música</a>
                <ul class="listGroup" style="max-height: 300px; overflow-y: scroll; border-top-right-radius: unset; border-bottom-right-radius: unset">
                    @foreach ($songs as $song)
                    <li class="listGroupItem">{{ $song->nome }}
                        <form action="{{ route('series.destroy', $serie->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input name="id" type="hidden" value="{{$serie->id}}"></input>
                            <button class="deleteButton" onclick="confirmExclusion({{ $serie->id }})">
                                <svg class="svg" xmlns="http://www.w3.org/2000/svg"><path d="M16 1.75V3h5.25a.75.75 0 0 1 0 1.5H2.75a.75.75 0 0 1 0-1.5H8V1.75C8 .784 8.784 0 9.75 0h4.5C15.216 0 16 .784 16 1.75Zm-6.5 0V3h5V1.75a.25.25 0 0 0-.25-.25h-4.5a.25.25 0 0 0-.25.25ZM4.997 6.178a.75.75 0 1 0-1.493.144L4.916 20.92a1.75 1.75 0 0 0 1.742 1.58h10.684a1.75 1.75 0 0 0 1.742-1.581l1.413-14.597a.75.75 0 0 0-1.494-.144l-1.412 14.596a.25.25 0 0 1-.249.226H6.658a.25.25 0 0 1-.249-.226L4.997 6.178Z"></path><path d="M9.206 7.501a.75.75 0 0 1 .793.705l.5 8.5A.75.75 0 1 1 9 16.794l-.5-8.5a.75.75 0 0 1 .705-.793Zm6.293.793A.75.75 0 1 0 14 8.206l-.5 8.5a.75.75 0 0 0 1.498.088l.5-8.5Z"></path></svg>
                            </button>
                        </form>
                    </li>
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
    <div class="footerDashboard">Footer</div>
</div>
@endsection

@extends('layouts/admin')

@section('content')

<div class="coontainer py-3">

    {{-- nome del tipo inserito nel titolo --}}
    <h1>Progetti della tipologia "{{$type->name}}"</h1>

    {{-- comprendo l'eventualità che la tipologia mostrata non abbia alcun progetto --}}
    @if(count($type->projects) > 0)

    <table class="table table-striped">
        <th>Titolo</th>
        <th>Slug</th>
        <th></th>
        
        
        <tbody>

            @foreach ($type->projects as $project)
                
            <tr>
                {{-- titolo --}}
                <td>{{$project->title}}</td>
                {{-- slug --}}
                <td>{{$project->slug}}</td>
                {{-- link che porta alla show del singolo progetto --}}
                <td><a href="{{route('admin.projects.show', $project)}}"><i class="fa-solid fa-magnifying-glass"></i></a></td>
            </tr>

            @endforeach
        </tbody>
    </table>

    {{-- altrimenti --}}
    @else

    <em>Nessun progetto disponibile per la tipologia selezionata</em>

    @endif

    <div class="d-flex justify-content-around">

        <a href="{{route('admin.types.edit', $type)}}" class="btn btn-primary">Modifica</a>

        

    </div>
    
</div>

@endsection
@extends('layouts/admin')

@section('content')

<div class="coontainer py-3">

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
                <td>{{$project->title}}</td>
                <td>{{$project->slug}}</td>
                <td><a href="{{route('admin.projects.show', $project)}}"><i class="fa-solid fa-magnifying-glass"></i></a></td>
            </tr>

            @endforeach
        </tbody>
    </table>

    {{-- altrimenti --}}
    @else

    <em>Nessun progetto disponibile per la tipologia selezionata</em>

    @endif
    
</div>

@endsection
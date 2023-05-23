@extends('layouts/admin')

@section('content')

<div class="container py-3">

    <h1>Tipologie</h1>

    <table class="table table-striped">
        <th>Nome</th>
        <th>Descrizione</th>
        <th>Slug</th>
        <th></th>
        
        <tbody>

            @foreach ($types as $type)
                
            <tr>
                <td>{{$type->name}}</td>
                <td>{{$type->description}}</td>
                <td>{{$type->slug}}</td>
                <td><a href="{{route('admin.types.show', $type)}}">Mostra</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>
    
@endsection
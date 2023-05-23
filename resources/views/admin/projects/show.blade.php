@extends('layouts/admin')

@section('content')

<div class="container text-center">

    <div class="py-3">

        
        <h1 class="text-start">Visualizzazione Progetto</h1>

        {{-- tipologia, operatore ternario per il caso in cui il valore type sia nullo(visto che è stata impostata la possibilità che sia nullo) --}}
        <span>Tipologia: {{$project->type ? $project->type->name : 'nessuna'}}</span>
        <hr>

        <h2>{{$project->title}}</h2>
        <small>{{$project->slug}}</small>
        <hr>
        <p>{{$project->content}}</p>
    </div>

    <div class="d-flex justify-content-around">

        <a href="{{route('admin.projects.edit', $project)}}" class="btn btn-primary">Modifica</a>

        
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Elimina
        </button>

    </div>
        
</div>


  
  <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Elimina Progetto</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Sei sicuro di voler eliminare definitivamente il progetto "{{$project->title}}" ?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
          
                <form action="{{route('admin.projects.destroy', $project)}}" method="POST">
        
                    @csrf
                    @method('DELETE')
        
                    <button type="submit" class="btn btn-danger">Elimina</button>
                </form>

            </div>
        </div>
    </div>
</div>



  

@endsection
@extends('layouts.index')
@section('content')
    <h1 class="text-danger">Hello home</h1>

    @foreach ($eleves as $eleve)
        <h1 class="text-primary">{{ $eleve->name }}</h1>
        <form action="{{route("eleves.destroy" , $eleve->id)}}" method="POST">
            @csrf
            @method("DELETE")
            <button class="btn btn-danger" type="submit">Delete</button>
        </form>

        @foreach ($eleve->matieres as $matiere)
            <h1> cours :{{$matiere->name}}</h1>
            <form action="{{route("eleveMatieres.destroyFrom" , [$eleve->id , $matiere->id])}}" method="POST">
                @csrf
                @method("DELETE")
                <button type="submit" class="btn btn-info">Delete</button>
            </form>
        @endforeach
    @endforeach

    @foreach ($matieres as $matiere)
        <h1 class="text-success">{{ $matiere->name }}</h1>
        <form action="{{route("matieres.destroy" , $matiere->id)}}" method="POST">
            @csrf
            @method("DELETE")
            <button class="btn btn-danger" type="submit">Delete</button>
        </form>
        @foreach ($matiere->eleves as $eleve)
            <h1>eleve :{{$eleve->name}}</h1>
            <form action="{{route("eleveMatieres.destroyFrom" , [$eleve->id , $matiere->id])}}" method="POST">
                @csrf
                @method("DELETE")
                <button type="submit" class="btn btn-info">Delete</button>
            </form>
        @endforeach
    @endforeach

    <form action="{{route("eleveMatiere.store")}}" method="POST">
        @csrf
        <select name="eleve_id" id="eleve_id">
            <option selected disabled>Choisis un eleve</option>
            @foreach ($eleves as $eleve)
                <option value={{$eleve->id}}>{{$eleve->name}}</option>
            @endforeach
        </select>
        <select name="matiere_id" id="matiere_id">
            <option selected disabled>Choisis une matiere</option>
            @foreach ($matieres as $matiere)
                <option value={{$matiere->id}}>{{$matiere->name}}</option>
            @endforeach
        </select>
        <button class="btn btn-primary" type="submit">Inscrire un eleve a une matière</button>
    </form>
    
    @foreach ($eleve_matieres as $eleve_matiere)
        <h1 class="text-warning">{{ $eleve_matiere->eleve->name }} travaille sur la matiere {{$eleve_matiere->matiere->name}}</h1>
        <form action="{{route("eleveMatieres.destroy" , $eleve_matiere->id)}}" method="POST">
            @csrf
            @method("DELETE")
            <button type="submit">Désinscrire from eleve_matiere</button>
        </form>
    @endforeach

@endsection

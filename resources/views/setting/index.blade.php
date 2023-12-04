@extends('app.base')
@section('title', 'Setting')

@section('content')

<form action="{{ url('setting')}}" method="post">
    
    @method('put')
    @csrf
    
    <div>
        behaviour after inserting new juego
    </div>
    
    <input class="form-check-input" type="radio" id="showJuego" name="afterInsert" value="show juegos" @if(session('afterInsert', 'show juegos') == 'show juegos') checked @endif/>
    <label class="form-check-label" for="showJuego">
       Show all juegos list
    </label>
    <br>
    <input class="form-check-input" type="radio" id="createJuego" name="afterInsert" value="show create from" @if(session('afterInsert', 'show juegos') == 'show create from') checked @endif/>
    <label class="form-check-label" for="createJuego">
       Show create new juego from
    </label>
     <br>
    <button type="submit" class="btn btn-primary">Save Setting</button>
    <a class="btn btn-success" href="{{ url('juego') }}" style="margin-left: 2%;">Back</a>
    
</form>

@endsection
@extends('app.base')

@section('title', 'Juego Create Juego')

@section('content')

<div class="table-responsive small">
    <table class="table table-striped table-sm">
        <form action="{{ url('juego') }}" method="post">
            
            @csrf
            
            <div class="mb-3">
                <label for="title" class="form-label">Titulo:</label><br>
                <input type="text" class="form-control" id="titulo" name="titulo" maxlength="100" value="{{ old('titulo') }}" required><br>
            </div>
            
            <div class="mb-3">
                <label for="director" class="form-label">Categoría:</label><br>
                <input type="text" class="form-control" id="categoría" name="categoría" maxlength="50" value="{{ old('categoría') }}" required><br>
            </div>
            
            <div class="mb-3">
                <label for="year" class="form-label">Pegi:</label><br>
                <input type="number" class="form-control" id="pegi" name="pegi" value="{{ old('pegi') }}" required><br>
            </div>
            
            <div class="mb-3">
                <label for="genre" class="form-label">Lanzamiento:</label><br>
                <input type="text" class="form-control" id="lanzamiento" name="lanzamiento" value="{{ old('lanzamiento') }}"><br>
            </div>
            
            <input type="submit" class="btn-info btn" value="Create">
            <a class="btn btn-success" href="{{ url('juego') }}" style="margin-left: 2%;">Back</a>
            
        </form>
    </table>
</div>

@endsection
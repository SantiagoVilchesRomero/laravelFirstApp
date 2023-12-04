 @extends('app.base')

@section('title', 'Juego Edit Juego')

@section('content')

<form action="{{ url('juego/' . $juego->id) }}" method="post">
        
    @method('put')    
    @csrf
    
    <div class="mb-3">
        <label for="title" class="form-label">Titulo:</label><br>
        <input type="text" class="form-control" id="titulo" name="titulo" maxlength="100" value="{{ old('titulo', $juego->titulo) }}"  required><br>
    </div>
    
    <div class="mb-3">
        <label for="director" class="form-label">Categoría:</label><br>
        <input type="text" class="form-control" id="categoría" name="categoría" maxlength="50" value="{{ old('categoría', $juego->categoría) }}" required><br>
    </div>
    
    <div class="mb-3">
        <label for="year" class="form-label">Pegi:</label><br>
        <input type="number" class="form-control" id="pegi" name="pegi" value="{{ old('pegi', $juego->pegi) }}" required><br>
    </div>
    
    <div class="mb-3">
        <label for="genre" class="form-label">Lanzamiento:</label><br>
        <input type="text" class="form-control" id="lanzamiento" name="lanzamiento" value="{{ old('lanzamiento', $juego->lanzamiento) }}"><br>
    </div>
    
    <input type="submit" class="btn-success btn" value="Edit">
    <a class="btn btn-success" href="{{ url('juego') }}" style="margin-left: 2%;">Back</a>
    
</form>

@endsection
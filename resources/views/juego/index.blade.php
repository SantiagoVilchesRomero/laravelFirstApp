@extends('app.base')

@section('title', 'Juego List')

@section('content')

<div class="table-responsive small">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Titulo</th>
          <th scope="col">Categoría</th>
          <th scope="col">Pegi</th>
          <th scope="col">Lanzamiento</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        @foreach($juegos as $juego)
            <tr>
                <td>{{ $juego->id }}</td>
                <td>{{ $juego->titulo }}</td>
                <td>{{ $juego->categoría }}</td>
                <td>{{ $juego->pegi }}</td>
                <td>{{ $juego->lanzamiento }}</td>
                <td>
                    <a class="btn-primary btn" href="{{ url('juego/' . $juego->id) }}">Show</a>
                    <a class="btn-secondary btn" href="{{ url('juego/' . $juego->id . '/edit') }}">Edit</a>
                    <form data-juego="{{ $juego-> titulo }}" class="formDelete" action="{{ url('juego/' . $juego->id) }}" method="post" style="display: inline-block">
                      @csrf
                      @method('delete')
                      <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
      </tbody>
    </table>
    <a class="btn-info btn" href="{{ url('juego/create') }}">Create</a>
</div>

<script>
  const forms = document.querySelectorAll(".formDelete");
  forms.forEach(function(form) {
      form.onsubmit = (event) => {
          return confirm('Seguro que quieres borrar ' + event.target.dataset.movie + '?');
      };
  });
</script>
@endsection
@extends('app.base')

@section('title', 'Juego Juego')

@section('content')

<div class="table-responsive small">
    <table class="table table-striped table-sm">
        <tbody>
            <tr>
                <td>#</td>
                <td>{{ $juego->id }}</td>
            </tr>
            <tr>
                <td>Title</td>
                <td>{{ $juego->titulo }}</td>
            </tr>
            <tr>
                <td>Director</td>
                <td>{{ $juego->categoría }}</td>
            </tr>
            <tr>
                <td>Year</td>
                <td>{{ $juego->pegi }}</td>
            </tr>
            <tr>
                <td>Genre</td>
                <td>{{ $juego->lanzamiento }}</td>
            </tr>
        </tbody>
    </table>
    <a class="btn btn-success" href="{{ url('juego') }}" style="margin-left: 2%;">Back</a>
</div>

@endsection
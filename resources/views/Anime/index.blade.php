@extends('Template.page')

@section('title', 'Keranjang Anime')

@section('main')
    <table class="table table-striped table-dark">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Genre</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach($animes as $animed)
                @method('delete')
                <tr>
                    <th scope="row">1</th>
                    <td>{{ $animed['title'] }}</td>
                    <td>{{ $animed['genre'] }}</td>
                    <td>
                        <form action="{{ route('anime.destroy', ['anime' => $animed['anime_id']]) }}" method="post">
                            <button type="submit" class="btn btn-danger font-weight-bold">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection

@extends('Template.page')

@section('title', 'Genres')

@section('main')
    <table class="table table-dark">
        <thead>
            <tr></tr>
        </thead>
        <tbody>
            @foreach($genres as $number => $value)
                <tr>
                    <td><strong>{{ $value }} :</strong> <code>{{ $count[$number] }}</code></td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="row mt-3 pt-3 border-top" id="genres-list"></div>

    <!-- Modal -->
    <div class="modal fade" id="animeModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Anime Details</h5>
                    <button type="button" class="close" id="tanda-silang" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body"></div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal" id="animeModal-close">Close</button>
                </div>
            </div>
        </div>
    </div>
@endsection()

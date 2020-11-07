@extends('Template.page')
@section('title', 'Daftar Produk')

@section('main')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="input-group">
                <input class="form-control mr-sm-2" id="product-search" type="search" placeholder="Search anime" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-info my-2 my-sm-0" type="submit" id="product-search-button">Search</button>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-3 pt-3 border-top" id="anime-list"></div>

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
@endsection

$(document).ready(function () {
    const searchAnime = () => {
        $('#anime-list').html('');
        fetch(`https://api.jikan.moe/v3/search/anime?q=${$("#product-search").val()}&genre_exclude=12`)
            .then(response => {
                if (response.ok) {
                    return response.json();
                }
                throw new Error(response.statusText)
            })
            .then(response => {
                let anime = response.results;
                $.each(anime, (i, data) => {
                    $('#anime-list').append(`
                        <div class="col-md-4">
                            <div class="card bg-dark text-light mb-3">
                                <img src="${data.image_url}" class="card-img-top" alt="${data.title}">
                                <div class="card-body">
                                    <h4 class="card-title font-weight-bold">${data.title}</h4>
                                    <h5 class="card-title">${data.episodes} Episodes</h5>
                                    <h5 class="card-title font-italic">Rate: ${data.score}</h5>
                                   <button class="btn btn-info" id="detail-button"
                                    data-toggle="modal" data-target="#animeModal"
                                    data-id="${data.mal_id}">Selengkapnya</button>
                                </div>
                            </div>
                        </div>
                    `);
                });
                $('#search').val('');
            })
            .catch(error => {
                console.error(`Error: ${error}`)
            })
    }

    $('#product-search-button').click(() => {
        searchAnime();
    });

    $('#product-search').keyup((e) => {
        if (e.keyCode === 13) {
            searchAnime()
        }
    })

    $('#anime-list').on("click", "#detail-button", function() {
        fetch(`https://api.jikan.moe/v3/anime/${$(this).data('id')}`)
            .then(response => {
                if (response.ok) return response.json();
                throw new Error(response.statusText);
            })
            .then(response => {
                $('.modal-body').html(`
                    <div class="row">
                        <div class="col-md-5">
                            <img src="${response.image_url}" alt="${response.title}" class="img-fluid card-img">
                        </div>
                        <div class="col-md-7">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><b>Title : </b>${response.title}</li>
                                <li class="list-group-item" id="genre-${response.mal_id}"><b>Genre :</b>
                                ${response.genres.map(data => {
                                    return ' ' + data.name;
                                })}</li>
                                <li class="list-group-item"><b>Total Episodes : </b>${response.episodes} Episodes</li>
                                <li class="list-group-item"><b>Scores : </b>${response.score}</li>
                                <li class="list-group-item"><b>Synopsis : </b>${response.synopsis}</li>
                            </ul>
                        </div>
                    </div>
                    <input type="hidden" name="title" value="${response.title}">
                    <input type="hidden" name="genre" value="${response.genres.map(data => {
                        return ' ' + data.name;
                    })}">
                `);
            })
            .catch(error => {
                console.error(`Error: ${error}`)
            })
    })

    $('#animeModal-close').click(function() {
        console.log($(this));
        $('.modal-body').html('');
    })

    $('#tanda-silang').click(function () {
        console.log($(this));
        $('.modal-body').html('');
    });
});


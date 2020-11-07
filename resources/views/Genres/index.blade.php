@extends('Template.page')

@section('title', 'Genres')

@section('main')

    <table class="table table-dark">
        <thead>
        <tr>
            <th scope="col" colspan="2">Anime Genre</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td><strong>Action:</strong> <code>1</code></td>
            <td><strong>Romance:</strong> <code>22</code></td>
        </tr>
        <tr>
            <td><strong>Adventure:</strong> <code>2</code></td>
            <td><strong>School:</strong> <code>23</code></td>
        </tr>
        <tr>
            <td><strong>Cars:</strong> <code>3</code></td>
            <td><strong>Sci Fi:</strong> <code>24</code></td>
        </tr>
        <tr>
            <td><strong>Comedy:</strong> <code>4</code></td>
            <td><strong>Shoujo:</strong> <code>25</code></td>
        </tr>
        <tr>
            <td><strong>Dementia:</strong> <code>5</code></td>
            <td><strong>Shoujo Ai:</strong> <code>26</code></td>
        </tr>
        <tr>
            <td><strong>Demons:</strong> <code>6</code></td>
            <td><strong>Shounen:</strong> <code>27</code></td>
        </tr>
        <tr>
            <td><strong>Mystery:</strong> <code>7</code></td>
            <td><strong>Shounen Ai</strong>: <code>28</code></td>

        </tr>
        <tr>
            <td><strong>Drama:</strong> <code>8</code></td>
            <td><strong>Space:</strong> <code>29</code></td>
        </tr>
        <tr>
            <td><strong>Ecchi:</strong> <code>9</code></td>
            <td><strong>Sports:</strong> <code>30</code></td>
        </tr>
        <tr>
            <td><strong>Fantasy:</strong> <code>10</code></td>
            <td><strong>Super Power:</strong> <code>31</code></td>
        </tr>
        <tr>
            <td><strong>Game:</strong> <code>11</code></td>
            <td><strong>Vampire:</strong> <code>32</code></td>
        </tr>
        <tr>
            <td><strong>Historical:</strong> <code>13</code></td>
            <td><strong>Harem:</strong> <code>35</code></td>
        </tr>
        <tr>
            <td><strong>Horror:</strong> <code>14</code></td>
            <td><strong>Slice Of Life:</strong> <code>36</code></td>
        </tr>
        <tr>
            <td><strong>Kids:</strong> <code>15</code></td>
            <td><strong>Supernatural:</strong> <code>37</code></td>
        </tr>
        <tr>
            <td><strong>Magic:</strong> <code>16</code></td>
            <td><strong>Military:</strong> <code>38</code></td>
        </tr>
        <tr>
            <td><strong>Martial Arts:</strong> <code>17</code></td>
            <td><strong>Police:</strong> <code>39</code></td>
        </tr>
        <tr>
            <td><strong>Mecha:</strong> <code>18</code></td>
            <td><strong>Psychological:</strong> <code>40</code></td>
        </tr>
        <tr>
            <td><strong>Music:</strong> <code>19</code></td>
            <td><strong>Thriller:</strong> <code>45</code></td>
        </tr>
        <tr>
            <td><strong>Parody:</strong> <code>20</code></td>
            <td><strong>Seinen:</strong> <code>42</code></td>
        </tr>
        <tr>
            <td><strong>Samurai:</strong> <code>21</code></td>
        </tr>
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

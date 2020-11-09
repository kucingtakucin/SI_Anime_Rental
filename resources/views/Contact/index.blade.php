@extends('Template.page')

@section('title', 'Hubungi Kami')

@section('main')
    <form method="post" class="text-light">
        <div class="form-group form-advanced-search">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" placeholder="Name" class="form-control border-with-color blue-border">
        </div>
        <div class="form-group form-advanced-search">
            <label for="email">Email</label>
            <input type="text" name="email" id="email" placeholder="Email" class="form-control border-with-color blue-border">
        </div>
        <div class="form-group form-advanced-search">
            <label for="subject">Subject</label>
            <input type="text" name="subject" id="subject" placeholder="Subject" class="form-control border-with-color blue-border">
        </div>
        <div class="form-group form-advanced-search">
            <label for="message">Message</label>
            <textarea id="message" class="form-control border-with-color blue-border" name="message" placeholder="Message" rows="7"></textarea>
        </div>
        <button type="submit" class="btn btn-primary btn-gradient green pull-right mb-3 submit" id="btn-save">Kirim</button>
    </form>
@endsection

@extends('admin.layouts.main')

@section('main')
    <h3>影音之旅</h3>
    <form action={{ url('/webAdmin/videoTrip/create') }} method="post">
    {{ csrf_field() }}
        <div class="form-group">
            <label for="exampleFormControlTextarea1">影片標題</label>
            <input type="text" name="title" class="form-control">
            <label for="exampleFormControlTextarea1">影片嵌入</label>
            <textarea class="form-control" name="htmlframe" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <small id="emailHelp" class="form-text text-muted text-right"><a href={{ url('/webAdmin/video-insert-help') }} class="text-secondary">如何嵌入?</a></small>
            
            <button type="submit" class="btn btn-primary">submit</button>
    </form>
@endsection

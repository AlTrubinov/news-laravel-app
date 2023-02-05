@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mt-5">
        <div class="col-12 p-3">
            <img src="{{ $article->img }}" class="border rounded mx-auto d-block" alt="...">
            <h5 class="mt-5">{{ $article->title }}</h5>
            <p class="text-muted">
                @foreach($article->tags as $tag)
                @if($loop->last)
                <span class="tag">{{ $tag->label }}</span>
                @else
                <span class="tag">{{ $tag->label }} |</span>
                @endif
                @endforeach
            </p>
            <p class="card-text">{{ $article->body }}</p>
            <p>Опубликованно: <i>{{ $article->createdAtForHumans() }}</i></p>
        </div>
    </div>
    <hr>
    <div class="row">
        <form action="">
            <div class="mb-3">
                <label for="commentSubject" class="form-label">Тема комментария</label>
                <input type="text" class="form-control" id="commentSubject">
            </div>
            <div class="mb-3">
                <label for="commentBody" class="form-label">Комментарий</label>
                <textarea class="form-control" id="commentBody" rows="3"></textarea>
            </div>
            <button class="btn btn-success" type="submit">Отправить</button>
        </form>
        <div class="container bootdey">
        <br>
            <div class="col-md-12 bootstrap snippets">
                <div class="panel">
                    <div class="panel-body">
                        <div class="media-block">
                            @foreach ($article->comments as $comment)
                                <div class="media-block">
                                    <div class="media-body">
                                        <a class="media-left" href="#"><img src="https://via.placeholder.com/50/5F113B/FFFFFF/?text=User" class="rounded me-2" alt="..."></a>
                                        <strong class="me-auto">{{ $comment->subject }}</strong>
                                        <small class="text-muted">{{ $comment->createdAtForHumans() }}</small>
                                        <p>{{ $comment->body }}</p>
                                        <hr>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
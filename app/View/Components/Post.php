<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Post extends Component
{
    public $comments , $post ;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($comments,$post)
    {
        $this->post = $post ;
        $this->comments = $comments ;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return <<<'blade'
        <div {{$attributes}}>
        <main class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="blog-post mb-3">
                        <h2 class="blog-post-title"><a href="/posts/{{ $post->id }}">{{$post->title}}</a></h2>
                        <p class="blog-post-meta">بقلم <a href="#">{{ $post->author }}</a> {{ Carbon\Carbon::parse($post->created_at)->diffForHumans() }}</p>
                        <p class="blog-post-body">{{$post->body}}</p>
                        <a href="/posts/{{ $post->id }}/edit" class="btn btn-primary mb-3">تعديل المقالة</a>
                        <h1>التعليقات</h1>
                        @if (count($comments) == 0)
                        <h3>لايوجد تعليقات</h3>
                        @else
                        @foreach ($comments as $comment)
                        <div class="">
                            <h2 class="">{{$comment->name}}</h2>
                            <p>{{$comment->body}}</p>
                        </div>
                        @endforeach
                        @endif
                    </div>

blade;
    }
}

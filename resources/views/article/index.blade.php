@extends('layouts.app')

@section('content')
    <h1>Список статей</h1>
    <div>
        <table>
            <thead>
            <tr>
                <td>ID</td>
                <td>Name</td>
            </tr>
            </thead>
            <tbody>
            @foreach($articles as $article)
                <tr>
                    <td>{{$article->id}}</td>
                    <td><a href="/articles/{{$article->id}}">{{$article->name}}</a></td>
                    <td><a href="/articles/{{$article->id}}/edit/">edit</a></td>
                    <td><a href="/articles/{{$article->id}}" data-confirm="Вы уверены?" data-method="delete" rel="nofollow">Delete</a></td>
                    <td>
                    <form action="{{url("/articles/$article->id")}}" method="post">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                        <button type="submit">Delete</button>
                    </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        <br>
        <div><a href="/articles/create/">Создать новую статью</a></div>
        <div>{{$articles->links()}}</div>
    </div>
@endsection

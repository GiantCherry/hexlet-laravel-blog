@extends('layouts.app')

<!-- Секция, содержимое которой обычный текст. -->
@section('title', 'Главная страница блога')

<!-- Секция, содержащая HTML блок. Имеет открывающую и закрывающую часть. -->
@section('content')
    <a href="/about">about</a>
    <a href="/articles">articles</a>
@endsection


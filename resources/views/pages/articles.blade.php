@extends('layout.layout')
@section('title', $title)
@section('description', 'Статьи')
@section('keywords', 'Ключевые поля для заполнения')
@section('image', 'Изображение')
@section('content')
    <livewire:section.articles-section />
@endsection
@extends('layouts.app')

@section('title','実行準備')

@section('content')
    <header-component v-bind:authcheck="@auth true @endauth @guest false @endguest" v-bind:logout="'{{route('logout')}}'" v-bind:user="{{$user}}"></header-component>

    <prepare-component></prepare-component>

    <footer-component></footer-component>
@endsection

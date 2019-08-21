@extends('layouts.app')

@section('title','実行中')

@section('content')

    <proceed-component v-bind:history="{{$history}}"></proceed-component>

@endsection

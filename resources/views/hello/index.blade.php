@extends('layouts.helloapp')
<style>
.pagination { font-size:10pt; }
.pagination li { display:inline-block }
a
tr th a:link { color: white; }
tr th a:visited { color: white; }
tr th a:hover { color: white; }
tr th a:active { color: white; }
</style>
@section('title', 'Index')
@section('menubar')
@parent
インデックスページ
@endsection
@section('content')
   <p>ここが本文のコンテンツです。</p>
   <p>ViewComposer value<br>'view_message' = {{$view_message}}</p>
@endsection
@section('footer')
copyright 2020 tuyano.
@endsection

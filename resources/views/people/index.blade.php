@extends('layouts.helloapp')

@section('title', 'Person.index')
@section('menubar')
    @parent
    インデックスページ
@endsection

@section('content')
    <table>
        <tr><th>Name</th><th>Mail</th><th>Age</th></tr>
        @foreach ($allPeople as $person)
            <tr>
                <td>{{$person->name}}</td>
                <td>{{$person->mail}}</td>
                <td>{{$person->age}}</td>
            </tr>
        @endforeach
    </table>
@endsection

@section('footer')
copyright 2020 tuyano.
@endsection

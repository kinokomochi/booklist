<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> ImageForm</title>
</head>
<body>
@extends('layout')
@section('title')
@section('content')
<table class="table">
    <thead>
    <tr>
        <th>状態</th>
        <th>タイトル</th>
        <th>著者</th>
        <th>値段</th>
        <th>要約</th>
        <th>感想</th>
        <th>備考</th>
    </tr>
    </thead>
    <tbody>
    @foreach($book as $val)
    <tr>
        <td>{{$val->status}}</td>
        <td>{{$val->title}}</td>
        <td>{{$val->autor}}</td>
        <td>{{$val->price}}</td>
        <td>{{$val->summary}}</td>
        <td>{{$val->impression}}</td>
        <td>{{$val->remark}}</td>
    </tr>
    @endforeach
    </tbody>
</table>
@endsection
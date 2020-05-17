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
<form action="/post" method="post">
{{csrf_field()}}
    <div class="form-group">
        <h3>本を登録する</h3>
        <label>本の画像</label>
        <input type="file" name="image" enctype="multipart/form-data" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">登録へ進む</button>
</form>
<br>

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
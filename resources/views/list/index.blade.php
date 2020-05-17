<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
@extends('layout')
@section('title')
@section('content')
@if ($errors->any())
        <div class="alert alert-danger">
            <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error}}</li>
            @endforeach
            </ul>
        </div>
    @endif

    <form action="/post" method="post">
    {{csrf_field()}}
        <div class="form-group">
            <label>選んでね</label>
            <select name="status">
                <option name="read_now" value="進行中">進行中</option>
                <option name="want"　value="読みたい">読みたい</option>
                <option name="finished" value="読み終わった">読み終わった</option>
            </select>
            <br>
            <label>タイトル</label>
            <input type="text" name="title" class="form-control">
            <label>著者</label>
            <input type="text" name="autor" class="form-control">
            <label>値段</label>
            <input type="text" name="price" class="form-control">
            <label>要約</label>
            <textarea type="text" name="summary" class="form-control" row="4"></textarea>
            <label>感想</label>
            <textarea type="text" name="impression" class="form-control" row="10"></textarea>
            <label>備考</label>
            <input type="text" name="remark" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">画像登録へ進む</button>
    </form>
@endsection
@extends('app')
@section('title','飲料詳細資料')
@section('Drink_inventory')
    <body bgcolor="#C9FFC9"></body>
<table border="1">
    <tr><th>編號</th><td>{{$drink->id}}</td></tr>
    <tr><th>名稱</th><td>{{$drink->name}}</td></tr>
    <tr><th>品牌</th><td>{{$drink->brand->brand}}</td></tr>
    <tr><th>毫升</th><td>{{$drink->milliliters}}</td></tr>
    <tr><th>價錢</th><td>{{$drink->price}}</td></tr>
    <tr><th>熱量</th><td>{{$drink->calories}}</td></tr>
</table>
@endsection

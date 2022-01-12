@extends('app')
@section('title','品牌詳細資料')
@section('Drink_inventory')

<table border="1">

    <tr><th>編號</th><td>{{$brand->id}}</td></tr>
    <tr><th>品牌</th><td>{{$brand->brand}}</td></tr>
    <tr><th>創辦人</th><td>{{$brand->founder}}</td></tr>
    <tr><th>國家</th><td>{{$brand->country}}</td></tr>
</table>
<h1>{{$brand->name}}品牌的所有飲料</h1>
<table border="1">
    <tr>
        <th>編號</th>
        <th>飲料</th>
        <th>品牌編號</th>
        <th>毫升</th>
        <th>價錢</th>
        <th>熱量</th>
    </tr>
    @foreach($brand->drink as $drink)
       <tr>
        <th>{{$drink->id}}</th>
        <th>{{$drink->name}}</th>
        <th>{{$drink->bid}}</th>
        <th>{{$drink->milliliters}}</th>
        <th>{{$drink->price}}</th>
        <th>{{$drink->calories}}</th>
       </tr>
    @endforeach
</table>
</body>
</html>
@endsection

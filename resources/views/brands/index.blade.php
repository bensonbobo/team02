@extends('app')

@section('Drink_inventory')
<h1>顯示所有品牌資料</h1>
<a href="/drinks">
    飲料資料
</a>
<a href="/brands/UScountry">
    美國品牌
</a>
<a href="/brands/UKcountry">
    英國品牌
</a>
<a href="/brands/TWcountry">
    台灣品牌
</a>
<table border="1">
    <tr>
        <th>編號</th>
        <th>品牌</th>
        <th>創辦人</th>
        <th>國家</th>
        <th>操作1</th>
        <th>操作2</th>
        <th>操作3</th>
        <th>操作4</th>
    </tr>
    @foreach($brands as $brand)
        <tr>
            <th>{{$brand->id}}</th>
            <th>{{$brand->brand}}</th>
            <th>{{$brand->founder}}</th>
            <th>{{$brand->country}}</th>
            <th>
                <a href="/brands/{{$brand->id}}">
                    詳細資料
                </a>
            </th>
            <th>
                <a href="brands/{{$brand->id}}/edit">
                    修改
                </a>
            </th>
            <td>
                <form method="post" action="brands/{{$brand->id}}">
                @csrf <!-- CSRF =Cross-Site Request Forgery-->
                    @method("delete")
                    <input type="submit" value="刪除"/>
                </form>
            </td>
            <th>
            <a href="brands/create">
                新增
            </a>
            </th>
        </tr>
    @endforeach

</table>
@endsection

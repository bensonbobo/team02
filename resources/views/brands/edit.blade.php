@extends('app')

@section('Drink_inventory')
<form method="post" action="/brands/{{$brand->id}}">
    @csrf
    @method("put")
顯示單一品牌的編輯表單
<table border="1">
    <tr>
        <th>編號</th><td>{{$brand->id}}</td>
    </tr>
    <tr>
        <th>品牌</th><td><!--<select name="brand">
                <option value="立頓" selected>立頓</option>
                <option value="統一">統一</option>
                <option value="三洋威士比">三洋威士比</option>
                <option value="美粒果">美粒果</option>
                <option value="泰山">泰山</option>
                <option value="百事">百事</option>
                <option value="可口可樂">可口可樂</option>
                <option value="黑松">黑松</option>
                <option value="波蜜">波蜜</option>
                <option value="英聯">英聯</option>
                </select></td>-->
            <select name ="id">
        @foreach($brands as $i)
            @if($brand->brand==$i->brand)
                <option value="{{$i->id}}"selected>{{$i->brand}}</option>
            @else
                <option value="{{$i->id}}">{{$i->brand}}</option>
            @endif
        @endforeach
            </select>
    </tr>
    <tr>
        <th>創辦人</th><td><input type="text" name="founder" value="{{$brand->founder}}"required/></td>
    </tr>
    <tr>
        <th>國家</th><td><select name="country">
                <option value="英國">英國</option>
                <option value="美國">美國</option>
                <option value="台灣">台灣</option>
            </select>
        </td>
    </tr>
    </table>
    <input type="submit" value="修改"/><input type="reset" value="重新輸入"/>
</form>
</body>
</html>
@endsection

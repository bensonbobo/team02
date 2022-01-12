@extends('app')
@section('title','新增品牌資料')
@section('Drink_inventory')
<form method="post" action="/brands">
    @csrf
    顯示品牌新增表單
    <table border="1">
        <tr>
            <th>品牌</th><td><select name="brand">
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
                </select></td>
        </tr>
        <tr>
            <th>創辦人</th><td><input type="text" name="founder"/></td>
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
    <input type="submit" value="新增"/><input type="reset" value="重新輸入"/>
</form>
</body>
</html>
@endsection

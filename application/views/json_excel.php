<?php
/**
 * Created by PhpStorm.
 * User: yajima
 * Date: 2018-8月-29
 * Time: 1:40
 */
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">

            <nav class="nav nav-sidebar">
                <li><a href="<?php echo base_url('excel/cols'); ?>">列番号変換</a></li>
                <li><a href="<?php echo base_url('json/excel'); ?>">JSONからEXCEL</a></li>
            </nav>
<a href="https://px.a8.net/svt/ejp?a8mat=2ZEXHJ+6P4KS2+CO4+ZTFR5" target="_blank" rel="nofollow">
<img border="0" width="160" height="600" alt="" src="https://www27.a8.net/svt/bgt?aid=180415495405&wid=001&eno=01&mid=s00000001642006016000&mc=1"></a>
<img border="0" width="1" height="1" src="https://www13.a8.net/0.gif?a8mat=2ZEXHJ+6P4KS2+CO4+ZTFR5" alt="">
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <h1 class="page-header">JSONからExcelファイルを出力</h1>
            <?php echo form_open('json/excel'); ?>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label for="apiurl" class="control-label">JSON の URL</label>
                        <input type="text" name="apiurl" id="apiurl" class="form-control" value="" placeholder="" />
                    </div>
                    <div class="form-group">
                        <label for="colname" class="control-label">フィールド名</label>
                        <input type="text" name="colname" id="colname" class="form-control" value="data" placeholder="data" />
                    </div>
                    <div class="form-group hidden">
                        <button class="btn btn-default disabled" name="mode" value="excel5">Excel5</button>
                        <button class="btn btn-default disabled" name="mode" value="excel2007">Excel2007</button>
                        <button class="btn btn-default" name="mode" value="csv">CSV</button>
                    </div>
                </div>
            </div>
            <?php echo form_close(); ?>
            <div class="row">
                <div class="col-md-12">
                    <p>「取引時期From」&「取引時期To」&「都道府県コード」<br>
                        <span onclick="getElementById('apiurl').value='http://www.land.mlit.go.jp/webland/api/TradeListSearch?from=20151&to=20152&area=13';getElementById('colname').value='data';" style="text-decoration: underline;color: #0000ff;">http://www.land.mlit.go.jp/webland/api/TradeListSearch?from=20151&to=20152&area=13</span></p>
                    <p>「取引時期From」&「取引時期To」&「市区町村コード」<br>
                        <span onclick="getElementById('apiurl').value='http://www.land.mlit.go.jp/webland/api/TradeListSearch?from=20151&to=20152&city=13102';getElementById('colname').value='data';" style="text-decoration: underline;color: #0000ff;">http://www.land.mlit.go.jp/webland/api/TradeListSearch?from=20151&to=20152&city=13102</span></p>
                    <p>東京都内の市区町村一覧を取得する。<br>
                        <span onclick="getElementById('apiurl').value='http://www.land.mlit.go.jp/webland/api/CitySearch?area=13';getElementById('colname').value='data';" style="text-decoration: underline;color: #0000ff;">http://www.land.mlit.go.jp/webland/api/CitySearch?area=13</span></p>
                    <p>郵便番号検索<br>
                        <span onclick="getElementById('apiurl').value='http://zipcloud.ibsnet.co.jp/api/search?zipcode=0790177';getElementById('colname').value='results';" style="text-decoration: underline;color: #0000ff;">http://zipcloud.ibsnet.co.jp/api/search?zipcode=0790177</span></p>
                </div>
            </div>
        </div>
    </div>
</div>
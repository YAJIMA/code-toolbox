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
<a href="https://px.a8.net/svt/ejp?a8mat=2ZEXHL+D73XIQ+CO4+68MF5" target="_blank" rel="nofollow">
<img border="0" width="160" height="600" alt="" src="https://www27.a8.net/svt/bgt?aid=180415497798&wid=001&eno=01&mid=s00000001642001048000&mc=1"></a>
<img border="0" width="1" height="1" src="https://www10.a8.net/0.gif?a8mat=2ZEXHL+D73XIQ+CO4+68MF5" alt="">
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <h1 class="page-header">Excel</h1>
            <?php echo form_open('excel/cols'); ?>
            <div class="row">
                <div class="col-md-5">
                    <div class="form-group">
                        <label for="colname" class="control-label">Excel列名</label>
                        <input type="text" name="colname" id="colname" value="<?php echo $colname; ?>" class="form-control text-center">
                    </div>
                </div>
                <div class="col-md-2 text-center">
                    <div class="form-group">
                        <label class="control-label">列番号変換</label>
                        <button type="submit" name="mode" value="num2name" class="btn btn-sm btn-warning btn-block"><span class="glyphicon glyphicon-arrow-left"></span> 変換</button>
                        <button type="submit" name="mode" value="name2num" class="btn btn-sm btn-primary btn-block">変換 <span class="glyphicon glyphicon-arrow-right"></span></button>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="form-group">
                        <label for="colnumber" class="control-label">列番号</label>
                        <input type="text" name="colnumber" id="colnumber" value="<?php echo $colnumber; ?>" class="form-control text-center">
                    </div>
                </div>
            </div>
            <?php echo form_close(); ?>
            <div class="row">
                <div class="col-md-6">
                    <p>Excel の列番号を10進数の値に変換します。</p>
                    <p>CSVファイルの処理を行う時などに、何番目の列なのかを確認するために利用できます。<br>
                        注意点として、CSVファイルを配列で処理する場合、1番目のインデックス番号は0（ゼロ）から始まりますので、列番号の値から1引いて下さい。
                    </p>
                </div>
                <div class="col-md-6">
                    <img src="/uploads/sheetimage.png" alt="スプレッドシート" class="img-responsive">
                </div>
            </div>
        </div>
    </div>
</div>
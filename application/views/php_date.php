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
                <li><a href="<?php echo base_url('php/date'); ?>">日付変換</a></li>
                <li><a href="<?php echo base_url('php/decode'); ?>">テキスト変換</a></li>
                <li><a href="<?php echo base_url('php/mailencode'); ?>">メールエンコード</a></li>
                <li><a href="<?php echo base_url('php/crypt'); ?>">Crypt変換</a></li>
                <li><a href="<?php echo base_url('php/pregmatch'); ?>">正規表現 - pregmatch</a></li>
                <li><a href="<?php echo base_url('php/kakunin'); ?>">接続環境の確認</a></li>
            </nav>
            <a href="https://px.a8.net/svt/ejp?a8mat=2HFRN7+BFZZEA+D8Y+6LHDT" target="_blank" rel="nofollow">
                <img border="0" width="160" height="600" alt="" src="https://www28.a8.net/svt/bgt?aid=150221491692&wid=001&eno=01&mid=s00000001717001108000&mc=1"></a>
            <img border="0" width="1" height="1" src="https://www19.a8.net/0.gif?a8mat=2HFRN7+BFZZEA+D8Y+6LHDT" alt="">
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <h1 class="page-header">日付変換</h1>
            <?php echo form_open('php/date',array('class'=>'form')); ?>
            <div class="row">
                <div class="col-md-5">
                    <div class="form-group">
                        <label for="unixtime" class="control-label">UNIX タイムスタンプ（数値）</label>
                        <input type="text" name="unixtime" id="unixtime" value="<?php echo $unixtime; ?>" placeholder="<?php echo time(); ?>" class="form-control">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="date2time" class="control-label">日付変換</label>
                        <button type="submit" name="mode" id="date2time" value="date2time" class="btn btn-sm btn-default btn-block"><span class="glyphicon glyphicon-arrow-left"></span> 変換</button>
                        <button type="submit" name="mode" value="time2date" class="btn btn-sm btn-primary btn-block">変換 <span class="glyphicon glyphicon-arrow-right"></span></button>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="form-group">
                        <label for="hiduke" class="control-label">変換結果テキスト</label>
                        <input type="text" name="hiduke" id="hiduke" value="<?php echo $datestr; ?>" placeholder="<?php echo date('Y-m-d H:i:s'); ?>" class="form-control">
                    </div>

                </div>
            </div>
            <?php echo form_close(); ?>
            <div class="row">
                <div class="col-md-12">
                    <p>UNIX タイムスタンプは、UNIXエポック（1970年1月1日00:00:00 GMT）からの通算秒を表す長整数です。</p>
                </div>
            </div>
            <div class="row">
                <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                <!-- code.hatchbit.jp.001 -->
                <ins class="adsbygoogle"
                     style="display:block"
                     data-ad-client="ca-pub-6204628612026249"
                     data-ad-slot="4581966295"
                     data-ad-format="auto"></ins>
                <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
            </div>
        </div>
    </div>
</div>
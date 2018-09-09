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
            <a href="https://px.a8.net/svt/ejp?a8mat=2HFF0A+B7NWXE+7YE+6BEQ9" target="_blank" rel="nofollow">
                <img border="0" width="160" height="600" alt="" src="https://www25.a8.net/svt/bgt?aid=150205114678&wid=001&eno=01&mid=s00000001031001061000&mc=1"></a>
            <img border="0" width="1" height="1" src="https://www15.a8.net/0.gif?a8mat=2HFF0A+B7NWXE+7YE+6BEQ9" alt="">
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <h1 class="page-header">Crypt変換</h1>
            <?php echo form_open('php/crypt',array('class'=>'form')); ?>
            <div class="row">
                <div class="col-md-5">
                    <div class="form-group">
                        <label for="cryptstr" class="control-label">テキスト</label>
                        <input type="text" name="cryptstr" id="cryptstr" value="<?php echo $cryptstr; ?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="cryptsalts" class="control-label">ソルト</label>
                        <input type="text" name="cryptsalts" id="cryptsalts" value="<?php echo $cryptsalts; ?>" class="form-control">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="" class="control-label">Crypt変換</label>
                        <button type="submit" name="mode" value="crypt" class="btn btn-sm btn-default btn-block">変換 <span class="glyphicon glyphicon-arrow-right"></span></button>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="form-group">
                        <label for="result" class="control-label">変換結果テキスト</label>
                        <input type="text" name="result" id="result" value="<?php echo $result; ?>" class="form-control">
                    </div>

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
            <?php echo form_close(); ?>
        </div>
    </div>
</div>
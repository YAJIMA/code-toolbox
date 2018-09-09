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
            <a href="https://px.a8.net/svt/ejp?a8mat=2HFF0A+B7NWXE+7YE+626XT" target="_blank" rel="nofollow">
                <img border="0" width="160" height="600" alt="" src="https://www28.a8.net/svt/bgt?aid=150205114678&wid=001&eno=01&mid=s00000001031001018000&mc=1"></a>
            <img border="0" width="1" height="1" src="https://www16.a8.net/0.gif?a8mat=2HFF0A+B7NWXE+7YE+626XT" alt="">
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <h1 class="page-header">メールエンコード</h1>
            <?php echo form_open('php/mailencode'); ?>
            <div class="row">
                <div class="col-md-5">
                    <div class="form-group">
                        <label for="orgtext" class="control-label">変換元のテキスト</label>
                        <textarea name="orgtext" id="orgtext" rows="30" class="form-control"><?php echo $orgtext; ?></textarea>
                    </div>
                </div>
                <div class="col-md-2 text-center">
                    <label for="encoding" class="control-label">文字コード</label>
                    <select name="encoding" id="encoding" class="form-control">
                        <option value="utf-8">UTF-8</option>
                        <option value="utf-7">UTF-7</option>
                        <option value="euc-jp">EUC-JP</option>
                        <option value="shift_jis">SHIFT-JIS</option>
                        <option value="iso-2022-jp" selected>ISO-2022-JP</option>
                        <option value="iso-8859-1">ISO-8859-1</option>
                        <option value="us-ascii">US-ASCII</option>
                    </select>
                    <label for="mode" class="control-label">変換種別</label>
                    <button type="submit" name="mode" value="encode" class="btn btn-sm btn-block btn-default">エンコード encode</button>
                    <button type="submit" name="mode" value="decode" class="btn btn-sm btn-block btn-default">デコード decode</button>
                    <button type="submit" name="mode" value="reverse" class="btn btn-link">テキスト入替 <span class="glyphicon glyphicon-transfer"></span></button>
                </div>
                <div class="col-md-5">
                    <div class="form-group">
                        <label for="result" class="control-label">変換結果テキスト</label>
                        <textarea name="result" id="result" rows="30" class="form-control"><?php echo $result; ?></textarea>
                    </div>
                </div>
            </div>
            <?php echo form_close(); ?>
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
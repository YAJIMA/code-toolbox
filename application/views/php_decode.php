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
            <a href="https://px.a8.net/svt/ejp?a8mat=2HFF0A+B7NWXE+7YE+67RK1" target="_blank" rel="nofollow">
                <img border="0" width="160" height="600" alt="" src="https://www25.a8.net/svt/bgt?aid=150205114678&wid=001&eno=01&mid=s00000001031001044000&mc=1"></a>
            <img border="0" width="1" height="1" src="https://www18.a8.net/0.gif?a8mat=2HFF0A+B7NWXE+7YE+67RK1" alt="">
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <h1 class="page-header">テキスト変換</h1>
            <?php echo form_open('php/decode',array('class'=>'form')); ?>
            <div class="row">
                <div class="col-md-5">
                    <div class="form-group">
                        <label for="orgtext" class="control-label">変換元のテキスト</label>
                        <textarea name="orgtext" id="orgtext" rows="6" class="form-control"><?php echo $orgtext; ?></textarea>
                    </div>
                </div>
                <div class="col-md-2">
                    <label for="mode" class="control-label">変換種別</label>
                    <button type="submit" name="mode" value="md5" class="btn btn-sm btn-block btn-default <?php echo ($active == "md5") ? 'active' : ''; ?>">MD5</button>
                    <button type="submit" name="mode" value="sha1" class="btn btn-sm btn-block btn-default <?php echo ($active == "sha1") ? 'active' : ''; ?>">SHA1</button>
                    <button type="submit" name="mode" value="base64_encode" class="btn btn-sm btn-block btn-default <?php echo ($active == "base64_encode") ? 'active' : ''; ?>">BASE64エンコード</button>
                    <button type="submit" name="mode" value="base64_decode" class="btn btn-sm btn-block btn-default <?php echo ($active == "base64_decode") ? 'active' : ''; ?>">BASE64デコード</button>
                    <button type="submit" name="mode" value="urlencode" class="btn btn-sm btn-block btn-default <?php echo ($active == "urlencode") ? 'active' : ''; ?>">URLエンコード</button>
                    <button type="submit" name="mode" value="urldecode" class="btn btn-sm btn-block btn-default <?php echo ($active == "urldecode") ? 'active' : ''; ?>">URLデコード</button>
                    <button type="submit" name="mode" value="serialize" class="btn btn-sm btn-block btn-default <?php echo ($active == "serialize") ? 'active' : ''; ?>">serialize</button>
                    <button type="submit" name="mode" value="unserialize" class="btn btn-sm btn-block btn-default <?php echo ($active == "unserialize") ? 'active' : ''; ?>">unserialize</button>
                    <button type="submit" name="mode" value="json_encode" class="btn btn-sm btn-block btn-default <?php echo ($active == "json_encode") ? 'active' : ''; ?>">JSONエンコード</button>
                    <button type="submit" name="mode" value="json_decode" class="btn btn-sm btn-block btn-default <?php echo ($active == "json_decode") ? 'active' : ''; ?>">JSONデコード</button>
                    <button type="submit" name="mode" value="reverse" class="btn btn-link">テキスト入替 <span class="glyphicon glyphicon-transfer"></span></button>
                </div>
                <div class="col-md-5">
                    <label for="result" class="control-label">変換結果テキスト</label>
                    <textarea name="result" id="result" rows="6" class="form-control"><?php echo $result; ?></textarea>
                </div>
            </div>
            <?php echo form_close(); ?>
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-striped table-bordered">
                        <caption>テキスト変換</caption>
                        <thead>
                        <tr>
                            <th style="width:18rem;">変換種別</th>
                            <th>説明</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>MD5</td>
                            <td>MD5メッセージダイジェストアルゴリズム を用いてテキストの MD5 ハッシュ値を計算し、 そのハッシュを返します。<br>
                                32 文字の 16 進数からなるハッシュを返します。</td>
                        </tr>
                        <tr>
                            <td>SHA1</td>
                            <td>US Secure Hash Algorithm 1 を使用してテキストの sha1 ハッシュを計算します。<br>
                                返り値は40文字の16進数となります。</td>
                        </tr>
                        <tr>
                            <td>BASE64エンコード</td>
                            <td>MIME base64 方式でデータをエンコードします。<br>
                                Base64 でエンコードされたデータは、エンコード前のデータにくらべて 33% 余計に容量が必要です。</td>
                        </tr>
                        <tr>
                            <td>BASE64デコード</td>
                            <td>MIME base64 方式によりエンコードされたデータをデコードします。</td>
                        </tr>
                        <tr>
                            <td>URLエンコード</td>
                            <td>文字列を URL エンコードします。<br>
                                -_. を除くすべての非英数文字が % 記号 (%)に続く二桁の数字で置き換えられ、 空白は + 記号(+)にエンコードされます。</td>
                        </tr>
                        <tr>
                            <td>URLデコード</td>
                            <td>URL エンコードされた文字列をデコードします。<br>
                                与えられた文字列中のあらゆるエンコード文字 %## をデコードします。 プラス記号 ('+') は、スペース文字にデコードします。</td>
                        </tr>
                        <tr>
                            <td>serialize</td>
                            <td>値の保存可能な表現を生成します。<br>
                                型や構造を失わずに PHP の値を保存または渡す際に有用です。</td>
                        </tr>
                        <tr>
                            <td>unserialize</td>
                            <td>保存用表現から PHP の値を生成します。</td>
                        </tr>
                        <tr>
                            <td>JSONエンコード</td>
                            <td>テキストを JSON 形式にして返します。</td>
                        </tr>
                        <tr>
                            <td>JSONデコード</td>
                            <td>JSON 文字列をデコードします。</td>
                        </tr>
                        </tbody>
                    </table>
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
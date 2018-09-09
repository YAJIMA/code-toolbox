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
            <a href="https://px.a8.net/svt/ejp?a8mat=2ZEXHL+D73XIQ+CO4+6IWSH" target="_blank" rel="nofollow">
                <img border="0" width="160" height="600" alt="" src="https://www29.a8.net/svt/bgt?aid=180415497798&wid=001&eno=01&mid=s00000001642001096000&mc=1"></a>
            <img border="0" width="1" height="1" src="https://www15.a8.net/0.gif?a8mat=2ZEXHL+D73XIQ+CO4+6IWSH" alt="">
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <h1 class="page-header">正規表現</h1>
            <?php echo form_open('php/pregmatch'); ?>
            <div class="row">
                <div class="col-md-5">
                    <div class="form-group">
                        <label for="regtext" class="control-label">正規表現</label>
                        <input type="text" name="regtext" id="regtext" class="form-control"><?php echo $regtext; ?></input>
                    </div>
                    <div class="form-group">
                        <label for="orgtext" class="control-label">テキスト</label>
                        <textarea name="orgtext" id="orgtext" rows="6" class="form-control" required><?php echo $orgtext; ?></textarea>
                    </div>
                </div>
                <div class="col-md-2 text-center">
                    <div class="form-group">
                        <label class="control-label">チェック</label>
                        <button type="submit" name="mode" value="pregmatch" class="btn btn-sm btn-default btn-block">preg_match <span class="glyphicon glyphicon-arrow-right"></span></button>
                    </div>
                </div>
                <div class="col-md-5">
                    <fieldset>
                        <legend>結果</legend>
                        <dl>
                            <dt>返り値</dt>
                            <dd>
                                <?php if ($result == 'match') : ?>
                                <span class="text-success">マッチしました！</span>
                                <?php elseif ($result == 'nomatch') : ?>
                                <span class="text-warning">マッチしません</span>
                                <?php elseif ($result == 'error') : ?>
                                <span class="text-danger">エラーが発生しました</span>
                                <?php endif; ?>
                            </dd>
                            <dt>検索結果</dt>
                            <dd>
                                <?php if (count($matches) > 0) : ?>
                                    <?php foreach ($matches as $key => $val) : ?>
                                        <span class="text-primary"><?php echo $val[0]; ?></span><br>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </dd>
                        </dl>
                    </fieldset>
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
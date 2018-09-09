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
            <a href="https://px.a8.net/svt/ejp?a8mat=2HFF0A+B7NWXE+7YE+69P01" target="_blank" rel="nofollow">
                <img border="0" width="160" height="600" alt="" src="https://www25.a8.net/svt/bgt?aid=150205114678&wid=001&eno=01&mid=s00000001031001053000&mc=1"></a>
            <img border="0" width="1" height="1" src="https://www10.a8.net/0.gif?a8mat=2HFF0A+B7NWXE+7YE+69P01" alt="">
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <h1 class="page-header">接続環境の確認</h1>
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-bordered table-striped">
                        <tbody>
                        <?php foreach ($_SERVER as $skey => $sval) : ?>
                        <?php if ( ! in_array($skey, array('PATH','DOCUMENT_ROOT','CONTEXT_DOCUMENT_ROOT','SCRIPT_FILENAME'))) : ?>
                        <tr>
                            <th><?php echo (isset($skey)) ? $skey : ''; ?></th>
                            <td>
                                <?php if (is_array($sval)) : ?>
                                <dl>
                                    <?php foreach ($sval as $sv => $ss) : ?>
                                    <dt><?php echo $sv; ?></dt>
                                    <dd><?php echo $ss; ?></dd>
                                    <?php endforeach; ?>
                                </dl>
                                <?php else : ?>
                                <?php echo (isset($sval)) ? $sval : ''; ?>
                                <?php endif; ?>
                            </td>
                        </tr>
                        <?php endif; ?>
                        <?php endforeach; ?>
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
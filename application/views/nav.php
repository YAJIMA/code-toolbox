<?php
/**
 * Created by PhpStorm.
 * User: yajima
 * Date: 2018-8月-29
 * Time: 1:41
 */
?>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo base_url(); ?>"><img src="/logo.png" width="100" height="22" alt="CODE.HATCHBIT.JP"></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-left">
                <li><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">PHP <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo base_url('php/date'); ?>">日付変換</a></li>
                        <li><a href="<?php echo base_url('php/decode'); ?>">テキスト変換</a></li>
                        <li><a href="<?php echo base_url('php/mailencode'); ?>">メールエンコード</a></li>
                        <li><a href="<?php echo base_url('php/crypt'); ?>">Crypt変換</a></li>
                        <li><a href="<?php echo base_url('php/pregmatch'); ?>">正規表現 - pregmatch</a></li>
                        <li><a href="<?php echo base_url('php/kakunin'); ?>">接続環境の確認</a></li>
                    </ul>
                </li>
                <li><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">EXCEL <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo base_url('excel/cols'); ?>">列番号変換</a></li>
                        <li><a href="<?php echo base_url('json/excel'); ?>">JSONからEXCEL出力</a></li>
                    </ul>
                </li>
                <li><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">SEOMOZ <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo base_url('seomoz/colscalc'); ?>">URL Metrics Calculator</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="https://www.hatchbit.jp/inquiry/" target="_blank">問い合わせ <span class="glyphicon glyphicon-new-window"></span></a></li>
            </ul>
        </div>
    </div>
</nav>
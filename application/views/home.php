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
                <li><a href="<?php echo base_url('excel/cols'); ?>">列番号変換</a></li>
                <li><a href="<?php echo base_url('json/excel'); ?>">JSONからEXCEL出力</a></li>
                <li><a href="<?php echo base_url('seomoz/colscalc'); ?>">SEOMOZ URL Metrics Calculator</a></li>
            </nav>

        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <h1 class="page-header">Dashboard</h1>
            <div class="row">
                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">PHP</div>
                        <div class="panel-body">
                            <p>PHP 関数のシミュレーション。日付をUNIXタイムスタンプに変換したり、テキストのエンコードをテストしてみます。</p>
                        </div>
                        <div class="list-group">
                            <a href="<?php echo base_url('php/date'); ?>" class="list-group-item">
                                <h4>日付変換 - strtotime, mktime</h4>
                                <p>UNIXタイムスタンプと日付文字列を相互変換</p>
                            </a>
                            <a href="<?php echo base_url('php/decode'); ?>" class="list-group-item">
                                <h4>テキスト変換</h4>
                                <p>MD5・SHA1ハッシュ変換、各種エンコード・デコード変換</p>
                            </a>
                            <a href="<?php echo base_url('php/mailencode'); ?>" class="list-group-item">
                                <h4>メールエンコード</h4>
                                <p>メール本文をエンコード（デコード）変換</p>
                            </a>
                            <a href="<?php echo base_url('php/crypt'); ?>" class="list-group-item">
                                <h4>Crypt変換</h4>
                                <p>文字列の一方向のハッシュ化</p>
                            </a>
                            <a href="<?php echo base_url('php/pregmatch'); ?>" class="list-group-item">
                                <h4>正規表現 - pregmatch</h4>
                                <p>正規表現のチェックツール</p>
                            </a>
                            <a href="<?php echo base_url('php/kakunin'); ?>" class="list-group-item">
                                <h4>接続環境の確認</h4>
                                <p>現在の接続元情報を表示</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">EXCEL</div>
                        <div class="panel-body">
                            <p>Excel を PHP などプログラムで使用する時、便利なTips。</p>
                        </div>
                        <div class="list-group">
                            <a href="<?php echo base_url('excel/cols'); ?>" class="list-group-item">
                                <h4>列番号変換</h4>
                                <p>Excelの列番号を10進数の値に変換</p>
                            </a>
                        </div>
                        <div class="list-group">
                            <a href="<?php echo base_url('json/excel'); ?>" class="list-group-item">
                                <h4>JSONからEXCEL出力</h4>
                                <p>JSON形式からExcelファイルを出力</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
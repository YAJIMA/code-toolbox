<?php
/**
 * Created by PhpStorm.
 * User: yajima
 * Date: 2018-8月-29
 * Time: 1:40
 */
?>
<script type="text/javascript">
    <!--
    function calculator() {
        var res = 0;
        for (i=0; i<document.form01.length-1; i++) {
            if (document.form01.elements[i].checked) {
                res += eval(document.form01.elements[i].value);
            }
        }
        document.getElementById('result').value = res;
    }
    //-->
</script>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">

            <nav class="nav nav-sidebar">
                <li><a href="<?php echo base_url('seomoz/colscalc'); ?>">URL Metrics Calculator</a></li>
            </nav>
<a href="https://px.a8.net/svt/ejp?a8mat=2ZEXHI+7JHOMQ+CO4+15RCDD" target="_blank" rel="nofollow">
<img border="0" width="160" height="600" alt="" src="https://www21.a8.net/svt/bgt?aid=180415494456&wid=001&eno=01&mid=s00000001642007014000&mc=1"></a>
<img border="0" width="1" height="1" src="https://www18.a8.net/0.gif?a8mat=2ZEXHI+7JHOMQ+CO4+15RCDD" alt="">
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <h1 class="page-header">SEOMOZ URL Metrics Calculator</h1>
            <?php echo form_open('seomoz/colscalc',array('name' => 'form01', 'class' => 'form', 'role' => 'form')); ?>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <input type="text" name="result" id="result" value="0" class="form-control">
                    </div>
                    <table class="table table-bordered table-striped table-hover">
                        <thead>
                        <tr>
                            <th>Check</th>
                            <th>URL Metric</th>
                            <th>Bit Flag</th>
                            <th>Response Field</th>
                            <th>Description<br></th>
                            <th>Free Access?<br></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td><input type="checkbox" name="ck[]" value="1" onclick="javascript:calculator();" onchange="javascript:calculator();"></td>
                            <td>Title</td>
                            <td>1</td>
                            <td>ut</td>
                            <td>The title of the page, if available</td>
                            <td>yes</td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="ck[]" value="4" onclick="javascript:calculator();" onchange="javascript:calculator();"></td>
                            <td>Canonical URL</td>
                            <td>4</td>
                            <td>uu</td>
                            <td>The canonical form of the URL</td>
                            <td>yes</td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="ck[]" value="8" onclick="javascript:calculator();" onchange="javascript:calculator();"></td>
                            <td>Subdomain</td>
                            <td>8</td>
                            <td>ufq</td>
                            <td>The subdomain of the URL (for example, <em>blog.moz.com</em>)<br></td>
                            <td>no</td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="ck[]" value="16" onclick="javascript:calculator();" onchange="javascript:calculator();"></td>
                            <td>Root Domain</td>
                            <td>16</td>
                            <td>upl</td>
                            <td>The root domain of the URL (for example, <em>moz.com</em>)</td>
                            <td>no</td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="ck[]" value="32" onclick="javascript:calculator();" onchange="javascript:calculator();"></td>
                            <td>External Equity Links</td>
                            <td>32</td>
                            <td>ueid</td>
                            <td>The number of external <a href="/help/guides/moz-glossary#equity">equity</a> links to the URL</td>
                            <td>yes</td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="ck[]" value="64" onclick="javascript:calculator();" onchange="javascript:calculator();"></td>
                            <td>Subdomain External Links</td>
                            <td>64</td>
                            <td>feid</td>
                            <td>The number of external equity links to the subdomain of the URL<br></td>
                            <td>no</td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="ck[]" value="128" onclick="javascript:calculator();" onchange="javascript:calculator();"></td>
                            <td>Root Domain External Links</td>
                            <td>128</td>
                            <td>peid</td>
                            <td>The number of external equity links to the root domain of the URL</td>
                            <td>no</td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="ck[]" value="256" onclick="javascript:calculator();" onchange="javascript:calculator();"></td>
                            <td>Equity Links</td>
                            <td>256</td>
                            <td>ujid</td>
                            <td>The number of equity links (internal or external) to the URL</td>
                            <td>no</td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="ck[]" value="512" onclick="javascript:calculator();" onchange="javascript:calculator();"></td>
                            <td>Subdomains Linking</td>
                            <td>512</td>
                            <td>uifq</td>
                            <td>The number of subdomains with any pages linking to the URL</td>
                            <td>no</td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="ck[]" value="1024" onclick="javascript:calculator();" onchange="javascript:calculator();"></td>
                            <td>Root Domains Linking</td>
                            <td>1024</td>
                            <td>uipl</td>
                            <td>The number of root domains with any pages linking to the URL</td>
                            <td>no</td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="ck[]" value="2048" onclick="javascript:calculator();" onchange="javascript:calculator();"></td>
                            <td>Links</td>
                            <td>2048</td>
                            <td>uid</td>
                            <td>The number of links (equity or nonequity or not, internal or external) to the URL</td>
                            <td>yes</td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="ck[]" value="4096" onclick="javascript:calculator();" onchange="javascript:calculator();"></td>
                            <td>Subdomain, Subdomains Linking</td>
                            <td>4096</td>
                            <td>fid</td>
                            <td>The number of subdomains with any pages linking to the subdomain of the URL</td>
                            <td>no</td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="ck[]" value="8192" onclick="javascript:calculator();" onchange="javascript:calculator();"></td>
                            <td>Root Domain, Root Domains Linking</td>
                            <td>8192</td>
                            <td>pid</td>
                            <td>The number of root domains with any pages linking to the root domain of the URL</td>
                            <td>no</td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="ck[]" value="16384" onclick="javascript:calculator();" onchange="javascript:calculator();"></td>
                            <td>MozRank: URL</td>
                            <td>16384</td>
                            <td>umrp<br>umrr</td>
                            <td>The MozRank of the URL, in both the normalized 10-point score (umrp) and the raw score (umrr)</td>
                            <td>yes</td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="ck[]" value="32768" onclick="javascript:calculator();" onchange="javascript:calculator();"></td>
                            <td>MozRank: Subdomain</td>
                            <td>32768</td>
                            <td>fmrp<br>fmrr</td>
                            <td>The MozRank of the URL's subdomain, in both the normalized 10-point score (fmrp) and the raw score (fmrr)</td>
                            <td>yes</td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="ck[]" value="65536" onclick="javascript:calculator();" onchange="javascript:calculator();"></td>
                            <td>MozRank: Root Domain</td>
                            <td>65536</td>
                            <td>pmrp<br>pmrr</td>
                            <td>The MozRank of the URL's root domain, in both the normalized 10-point score (pmrp) and the raw score (pmrr)<br></td>
                            <td>no</td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="ck[]" value="131072" onclick="javascript:calculator();" onchange="javascript:calculator();"></td>
                            <td>MozTrust</td>
                            <td>131072</td>
                            <td>utrp<br>utrr</td>
                            <td>The MozTrust of the URL, in both the normalized 10-point score (utrp) and the raw score (utrr)</td>
                            <td>no</td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="ck[]" value="262144" onclick="javascript:calculator();" onchange="javascript:calculator();"></td>
                            <td>MozTrust: Subdomain</td>
                            <td>262144</td>
                            <td>ftrp<br>ftrr</td>
                            <td>The MozTrust of the subdomain of the URL, in both the normalized 10-point score (ftrp) and the raw score (ftrr)<br></td>
                            <td>no</td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="ck[]" value="524288" onclick="javascript:calculator();" onchange="javascript:calculator();"></td>
                            <td>MozTrust: Root Domain</td>
                            <td>524288</td>
                            <td>ptrp<br>ptrr</td>
                            <td>The MozTrust of the root domain of the URL, in both the normalized 10-point score (ptrp) and the raw score (ptrr)<br></td>
                            <td>no</td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="ck[]" value="1048576" onclick="javascript:calculator();" onchange="javascript:calculator();"></td>
                            <td>MozRank: External Equity</td>
                            <td>1048576</td>
                            <td>uemrp<br>uemrr</td>
                            <td>The fraction of the URL's MozRank derived solely from external links, in both the normalized 10-point score (uemrp) and the raw score (uemrr)<br></td>
                            <td>no</td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="ck[]" value="2097152" onclick="javascript:calculator();" onchange="javascript:calculator();"></td>
                            <td>MozRank: Subdomain, External Equity</td>
                            <td>2097152</td>
                            <td>fejp<br>fejr</td>
                            <td>The fraction, derived solely from external links, of the composite MozRank of all pages on the URL's subdomain, in both the normalized 10-digit score (fejp) and the raw score</td>
                            <td>no</td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="ck[]" value="4194304" onclick="javascript:calculator();" onchange="javascript:calculator();"></td>
                            <td>MozRank: Root Domain, External Equity</td>
                            <td>4194304</td>
                            <td>pejp<br>pejr</td>
                            <td>The fraction, derived solely from external links, of the composite MozRank of all pages on the URL's root domain, in both the normalized 10-digit score (pejp) and the raw source</td>
                            <td>no</td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="ck[]" value="8388608" onclick="javascript:calculator();" onchange="javascript:calculator();"></td>
                            <td>MozRank: Subdomain Combined</td>
                            <td>8388608</td>
                            <td>pjp<br>pjr</td>
                            <td>The combined MozRank of all pages on the root domain, in both the normalized 10-point score (pjp) and the raw score (pjr)</td>
                            <td>no</td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="ck[]" value="16777216" onclick="javascript:calculator();" onchange="javascript:calculator();"></td>
                            <td>MozRank: Root Domain Combined</td>
                            <td>16777216</td>
                            <td>fjp<br>fjr</td>
                            <td>The combined MozRank of all pages on the subdomain, in both the normalized 10-point score (fjp) and the raw score (fjr)</td>
                            <td>no</td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="ck[]" value="67108864" onclick="javascript:calculator();" onchange="javascript:calculator();"></td>
                            <td>Subdomain Spam Score™</td>
                            <td>67108864</td>
                            <td>fspsc<br>fspf<br>flan<br>fsps<br>fsplc<br>fspp</td>
                            <td>Returns six different columns related to the Spam Score metric:
                                <ul>
                                    <li>Spam score for the page's subdomain (fspsc)</li>
                                    <li>Bit field of triggered spam flags (fspf)</li>
                                    <li>Language of the subdomain (flan)</li>
                                    <li>HTTP status code of the spam crawl (fsps)</li>
                                    <li>Epoch time when the subdomain was last crawled (fsplc)</li>
                                    <li>List of pages used for the subdomain's spam crawl (fspp)</li>
                                </ul>
                                For more information, see <a href="http://moz.com/help/guides/moz-api/mozscape/getting-started-with-mozscape/spam-score">Spam Score</a>.</td> <td>no</td>
                        </tr>

                        <tr>
                            <td><input type="checkbox" name="ck[]" value="134217728" onclick="javascript:calculator();" onchange="javascript:calculator();"></td>
                            <td>Social</td>
                            <td>134217728</td>
                            <td>ffb<br>ftw<br>fg+<br>fem*</td>
                            <td>Returns social contact information found on the target entity:
                                <ul>
                                    <li>Facebook account (ffb)</li>
                                    <li>Twitter handle (ftw)</li>
                                    <li>Google+ account (fg+)</li>
                                    <li>Email address (fem)*</li>
                                </ul>
                                * Emails in the Contacts column are collected automatically, and are not CAN-SPAM compliant - they cannot be used in outbound mail campaigns.</td>
                            <td>no</td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="ck[]" value="536870912" onclick="javascript:calculator();" onchange="javascript:calculator();"></td>
                            <td>HTTP Status Code</td>
                            <td>536870912</td>
                            <td>us</td>
                            <td>The HTTP status code recorded by Mozscape for this URL, if available</td>
                            <td>yes</td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="ck[]" value="4294967296" onclick="javascript:calculator();" onchange="javascript:calculator();"></td>
                            <td>Links to Subdomain</td>
                            <td>4294967296</td>
                            <td>fuid</td>
                            <td>The total number of links (including internal and nofollow links) to the subdomain of the URL</td>
                            <td>no </td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="ck[]" value="8589934592" onclick="javascript:calculator();" onchange="javascript:calculator();"></td>
                            <td>Links to Root Domain</td>
                            <td>8589934592</td>
                            <td>puid</td>
                            <td>The total number of links, including internal and nofollow links, to the root domain of the URL</td>
                            <td>no</td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="ck[]" value="17179869184" onclick="javascript:calculator();" onchange="javascript:calculator();"></td>
                            <td>Root Domains Linking to Subdomain</td>
                            <td>17179869184</td>
                            <td>fipl</td>
                            <td>The number of root domains with at least one link to the subdomain of the URL</td>
                            <td>no</td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="ck[]" value="34359738368" onclick="javascript:calculator();" onchange="javascript:calculator();"></td>
                            <td>Page Authority</td>
                            <td>34359738368</td>
                            <td>upa</td>
                            <td>A normalized 100-point score representing the likelihood of a page to rank well in search engine results</td>
                            <td>yes</td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="ck[]" value="68719476736" onclick="javascript:calculator();" onchange="javascript:calculator();"></td>
                            <td>Domain Authority</td>
                            <td>68719476736</td>
                            <td>pda</td>
                            <td>A normalized 100-point score representing the likelihood of a domain to rank well in search engine results</td>
                            <td>yes</td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="ck[]" value="549755813888" onclick="javascript:calculator();" onchange="javascript:calculator();"></td>
                            <td>External links</td>
                            <td>549755813888</td>
                            <td>ued</td>
                            <td>The number of external links to the URL, including nofollowed links</td>
                            <td>no</td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="ck[]" value="140737488355328" onclick="javascript:calculator();" onchange="javascript:calculator();"></td>
                            <td>External links to subdomain</td>
                            <td>140737488355328</td>
                            <td>fed</td>
                            <td>The number of external links to the subdomain, including nofollowed links</td>
                            <td>no</td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="ck[]" value="2251799813685248" onclick="javascript:calculator();" onchange="javascript:calculator();"></td>
                            <td>External links to root domain</td>
                            <td>2251799813685248</td>
                            <td>ped</td>
                            <td>The number of external links to the root domain, including nofollowed links</td>
                            <td>no</td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="ck[]" value="36028797018963968" onclick="javascript:calculator();" onchange="javascript:calculator();"></td>
                            <td>Linking C Blocks</td>
                            <td>36028797018963968</td>
                            <td>pib</td>
                            <td>The number of links from the same C class IP addresses.</td>
                            <td>no</td>
                        </tr>
                        <tr>
                            <td><input type="checkbox" name="ck[]" value="144115188075855872" onclick="javascript:calculator();" onchange="javascript:calculator();"></td>
                            <td>Time last crawled</td>
                            <td>144115188075855872</td>
                            <td>ulc</td>
                            <td>The time and date on which Mozscape last crawled the URL, returned in <a rel="nofollow" href="http://www.epochconverter.com/">Unix epoch</a> format</td>
                            <td>yes</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>
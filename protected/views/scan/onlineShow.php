<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>漏洞扫描结果报表</title>
        <link rel="stylesheet" href="<?php echo REPORT_CSS;?>ns_report.css" />
        <link rel="stylesheet" href="<?php echo REPORT_CSS;?>ns_report_rsas.css" />
        <link rel="stylesheet" href="<?php echo REPORT_JS;?>jtree.css" />
        <script src="<?php echo REPORT_JS;?>jquery-1.7.2.js"></script>
        <script src="<?php echo REPORT_JS;?>common.js"></script>
        <script src="<?php echo REPORT_JS;?>jtree.js"></script>
    </head>
    <style>
        .fix_web_scan_vuls_img,
        .fix_web_scan_vuls_hidden,
        input[type="checkbox"].fix_web_scan_vuls_checkbox{
            display:none;
        }
    </style>
<body>
<div id="report" class="wrapper">
<div id="head" class="report_title">
    <h1>东南大学&#34;网络攻防实验平台&#34;漏洞扫描结果评估报告</h1>
    <input  type="button"  style="font-size:18px;width:120px;height:40px;" value="下载导出" onclick ="alert('报表导出窗口：选择文件保存路径、文件命名和文件保存格式')"/> 
    <span class="note">&nbsp;</span>
</div>
<div id="catalog">
    <div class="report_h1">目录</div>
</div>
<div id="content">
<!--第一部分：被扫网站站点概况-->
<div class="report_h report_h1">1.站点概况</div>
<div class="report_content">
    <table class="report_table plumb">
        <tbody>
            <tr class="odd" >
                <th width="120" style="vertical-align:middle">风险等级</th>
                <td style="padding:6px;"> 
                <img align="absmiddle" src="<?php echo REPORT_IMG;?>b_high.gif"/><span class="level_danger high">非常危险（9.8分）</span> 
                </td>
            </tr>
        </tbody>
    </table>
    <table>
        <tr>
            <td valign="top" style="width:50%;">
            <table class="report_table plumb">
                <tbody><tr class="even" >
                        <th width="120">站点名称</th>
                        <td>http://www.dys120.com</td>
                    </tr>
                    <tr class="odd" >
                        <th width="120">站点IP地址</th>
                        <td>222.186.160.88</td>
                    </tr>
                    <tr class="odd" >
                        <th>当前状态</th>
                        <td>扫描完成</td>
                    </tr>
                    <tr class="even" >
                        <th>漏洞信息</th>
                        <td>
                    高风险：21个<br />
                    中风险：0个<br />
                    低风险：166个
                        </td>
                    </tr>
                </tbody>
            </table>
            </td>
            <td style="width:12px;"></td>
            <td valign="top" style="width:50%;">
            <table class="report_table plumb">
                <tbody>
                    <tr class="even" >
                        <th width="120" >扫描链接数</th>
                        <td>125</td>
                    </tr>
                    <tr class="odd" >
                        <th width="120" >时间统计</th>
                        <td>
                    开始：2016-07-04 17:04:44<br />
                    结束：2016-07-04 17:29:53<br />
                    历时：25分9秒
                        </td>
                    </tr>
                    <tr class="odd" >
                        <th width="120" >扫描配置信息</th>
                        <td>
                            调用扫描配置表中的内容
                        </td>
                    </tr>
                    <tr class="odd" >
                        <th width="120" >创建者</th>
                        <td>
                            yq
                        </td>
                    </tr>
                </tbody>
            </table>
            </td>
        </tr>
    </table></div>
<!--图标形式：展示风险分类统计-->
<div class="report_h report_h1">2.风险分类统计</div>
<div class="report_content"><table width="100%">
    <tbody>
    <tr>
        <td valign="middle" width="50%">
            <table class="report_table">
              <thead>
              <tr class="second_title" >
                  <th width="200px">威胁分类</th>
                  <th width="50px">高风险</th>
                  <th width="50px">中风险</th>
                  <th width="50px">低风险</th>
                  <th width="50px">总计</th>
              </tr>
              </thead>
              <tbody>
                  <tr>
                  <td>客户端攻击类型:内容欺骗</td>
                  <td>2</td>
                  <td>0</td>
                  <td>1</td>
                  <td>3</td>
                  </tr><tr>
                  <td>信息泄露类型:信息泄露</td>
                  <td>1</td>
                  <td>0</td>
                  <td>7</td>
                  <td>8</td>
                  </tr><tr>
                  <td>命令执行类型:SQL注入</td>
                  <td>1</td>
                  <td>0</td>
                  <td>0</td>
                  <td>1</td>
                  </tr><tr>
                  <td>客户端攻击类型:跨站脚本攻击</td>
                  <td>1</td>
                  <td>0</td>
                  <td>0</td>
                  <td>1</td>
                  </tr><tr>
                  <td>授权类型:授权不充分</td>
                  <td>0</td>
                  <td>0</td>
                  <td>1</td>
                  <td>1</td>
                  </tr><tr>
                  <td>认证类型:暴力猜测</td>
                  <td>0</td>
                  <td>0</td>
                  <td>1</td>
                  <td>1</td>
                  </tr><tr>
                  <td>信息泄露类型:资源位置可预测</td>
                  <td>0</td>
                  <td>0</td>
                  <td>1</td>
                  <td>1</td>
                  </tr><tr>
                  <td>逻辑攻击类型:过程验证不充分</td>
                  <td>0</td>
                  <td>0</td>
                  <td>1</td>
                  <td>1</td>
                  </tr><tr>
                  <td>其他</td>
                  <td>0</td>
                  <td>0</td>
                  <td>1</td>
                  <td>1</td>
                  </tr></tbody>
              <tfoot>
                  <tr>
                  <td>合计</td>
                  <td>5</td>
                  <td>0</td>
                  <td>13</td>
                  <td>18</td>
                  </tr>
              </tfoot>
          </table>
        </td>
    </tr>
    </tbody>
</table>
</div>
<!-- 第三部分：web应用漏洞分布 -->
<div class="report_h report_h1">3.Web风险分布</div>
<div class="report_content"><div class="report_h report_h2" id="title3_1">3.1 Web应用漏洞</div>
    <div>
    <table class="report_table">
        <tbody>
        <input type="button" value="批量误报修正" class="cmn_btn fix_web_scan_vuls_hidden" style='padding:2px 5px;' onclick="batch_fix_web_vuls()">
        <tr class="odd" style="cursor:pointer" onclick="no_toggle('v1_img_1','files_1')">
            <td>
                <img id='v1_img_1' src="<?php echo REPORT_IMG;?>blank.gif" class="ico plus" /><img align="absmiddle" src="<?php echo REPORT_IMG;?>vuln_high.gif" />检测到目标URL存在跨站漏洞
            </td>
        </tr>
        <tr class="more hide" id="files_1">
            <td style="padding:0;">
                <table width="100%" cellspacing="1" class="report_table">
                    <tr>
                        <td>
                            <label class="fix_web_scan_vuls_hidden" for='check_all_1' style='font-weight:bold'>
                            <input type='checkbox' class="fix_web_scan_vuls_checkbox_all" id='check_all_1' onclick='check_all(this)'/>
                            全选链接
                            </label>
                            <div class='vul_urls' id='scan_vuls_id_108505'>
                    <input type='checkbox' name='web_scan_vuls_id' class="fix_web_scan_vuls_checkbox check_all_1" id='check_1_1' value='108505'/>
                    <label for="check_1_1" style='font-weight:bold' class=''>http://www.dys120.com/phpsso_server/?a=logind&amp;c=login&amp;m=admin</label>
                    <table class="report_table plumb" style='word-wrap:break-word;word-break:break-all;'>
                        <tbody>
                        <tr class="even" >
                                <th width="100">请求方式</th>
                                <td>POST</td>
                            </tr>
                            <tr class="odd" >
                                <th>URL</th>
                                <td>http://www.dys120.com/phpsso_server/?a=logind&amp;c=login&amp;m=admin</td>
                            </tr>
                            <tr class="even" >
                                <th>问题参数</th>
                                <td>Referer</td>
                            </tr>
                            <tr class="odd" >
                                <th>参考（验证）</th>
                                <td>http://www.dys120.com/phpsso_server/?a=logind&amp;c=login&amp;m=admin(POST)forward=atestu&amp;username=atestuseru&amp;password=atestpwdu&amp;code=atestu(REFERER)&#34;&#39;&#34;&gt;&lt;/a&gt;&lt;/ScRipt&gt;&lt;ScRipt&gt;andvcy(6605);&lt;/ScRipt&gt;</td>
                            </tr>

                            </tbody>
                    </table>
                </div>
                <div class='vul_urls' id='scan_vuls_id_108502'>
                    <input type='checkbox' name='web_scan_vuls_id' class="fix_web_scan_vuls_checkbox check_all_1" id='check_1_2' value='108502'/>
                    <label for="check_1_2" style='font-weight:bold' class=''>http://www.dys120.com/index.php?a=login&amp;c=index&amp;dosubmit=1&amp;m=admin&amp;pc_hash=</label>
                    <table class="report_table plumb" style='word-wrap:break-word;word-break:break-all;'>
                        <tbody>
                        <tr class="even" >
                                <th width="100">请求方式</th>
                                <td>GET</td>
                            </tr>
                            <tr class="odd" >
                                <th>URL</th>
                                <td>http://www.dys120.com/index.php?a=login&amp;c=index&amp;dosubmit=1&amp;m=admin&amp;pc_hash=</td>
                            </tr>
                            <tr class="even" >
                                <th>问题参数</th>
                                <td>Referer</td>
                            </tr>
                            <tr class="odd" >
                                <th>参考（验证）</th>
                                <td>http://www.dys120.com/index.php?a=login&amp;c=index&amp;dosubmit=1&amp;m=admin&amp;pc_hash=(REFERER)&#34;&#39;&#34;&gt;&lt;/a&gt;&lt;ScRipt&gt;andvcy(6777);&lt;/ScRipt&gt;</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
               </td>
               </tr>
               </table>
            </td>
        </tr>
    </tbody>
</table>
</div>
<!--第三部分：漏洞详情-->
<div class="report_h report_h2" id="title3_2">3.2 漏洞详情</div>
    <div>
    <table class="report_table">
        <tbody>
            <tr class="odd" style="cursor:pointer" onclick="no_toggle('v2_img_1','details_1')">
            <td>
                <img id='v2_img_1' src="<?php echo REPORT_IMG;?>blank.gif" class="ico plus" /><img align="absmiddle" src="<?php echo REPORT_IMG;?>vuln_high.gif" />检测到目标URL存在跨站漏洞
            </td>
            </tr>
            <tr class="more hide" id="details_1">
            <td style="padding:0;">
                <table class="report_table plumb">
                    <tbody>
                        <tr class="even">
                        <th width="100">详细描述</th>
                        <td class='text' style='white-space: pre-wrap;'>
                            跨站脚本攻击（也称为XSS）指利用网站漏洞从用户那里恶意盗取信息。用户在浏览网站、使用即时通讯软件、甚至在阅读电子邮件时，通常会点击其中的链接。攻击者通过在链接中插入恶意代码，就能够盗取用户信息或在终端用户系统上执行恶意代码。

                            成功的跨站脚本攻击所带来的主要问题包括：

                            帐号劫持 - 攻击者可以在会话cookie过期之前劫持用户的会话，并以访问ULR用户的权限执行操作，如发布数据库查询并查看结果。 

                            恶意脚本执行 - 用户可能在不知情的情况下执行攻击者注入到动态生成页面中的JavaScript、VBScript、ActiveX、HTML甚至Flash内容。 

                            蠕虫传播 - 通过Ajax应用，跨站脚本可以以类似于病毒的方式传播。跨站脚本负载可以自动将其自身注入到页面中，并通过更多的跨站脚本轻易的重新注入同一主机，而
                            所有这些都无需手动刷新页面。因此，跨站脚本可以使用复杂的HTTP方式发送多个请求，并以用户不可视的方式自我传播。

                            信息窃取 - 攻击者可以通过重新定向和伪造站点将用户连接到攻击者所选择的恶意服务器并获得用户所输入的任何信息。

                            拒绝服务 - 通常攻击者通过在包含有跨站脚本漏洞的站点上使用畸形的显示请求，就可以导致主机站点反复的自我查询，出现拒绝服务的情况。 

                            浏览器重新定向 - 在某些使用帧的站点上，用户可能在实际上已经被重新定向到恶意站点的情况下误导为仍处在原始站点上，因为浏览权地址栏中的URL仍保持不变。这是由于没有重新定向整个页面，而只是执行JavaScript的帧。 

                            控制用户设置 - 攻击者可以恶意更改用户设置。
                            本漏洞属于Web应用安全常见漏洞。</td>
                    </tr>
                    <tr class="odd">
                    <th width="100">解决办法</th>
                    <td class='text' style='white-space: pre-wrap;'>推荐措施包括实施安全编程技术确保正确过滤用户提供的数据，并编码所有用户提供的数据以防以可执行的格式向终端用户发送注入的脚本。

                        对于开发
                        ========

                        可通过仔细验证所有输入和正确编码所有输出来防范跨站脚本攻击。可使用标准的ASP.NET验证控件或直接在代码中实施验证，要尽可能使用严格的模版。

                        输出编码要确保在将内容发送给客户端之前对任何可脚本化的内容都进行了正确的HTML编码。可通过HttpUtility.HtmlEncode函数实现，如以下Label控件示例所示：

                        Label2.Text = HttpUtility.HtmlEncode(input)

                        要考虑用户输入通过应用可能用到的所有路径。例如，如果数据是由用户输入的，存储在数据库中，然后再重新显示，就必须要确保在每次检索的时候都能正确编码。如果必须允许自由格式文本输入（如在消息板中），而又希望允许使用一些HTML格式，则可以通过仅明确允许很小的安全标签列表来安全的处理这种情况，如下所示：

                        C#示例：
                        StringBuilder sb = new StringBuilder(HttpUtility.HtmlEncode(htmlInputTxt.Text));
                        sb.Replace(&#34;&amp;lt;b&amp;gt;&#34;, &#34;&lt;b&gt;&#34;);
                        sb.Replace(&#34;&amp;lt;/b&amp;gt;&#34;, &#34;&lt;/b&gt;&#34;);
                        sb.Replace(&#34;&amp;lt;i&amp;gt;&#34;, &#34;&lt;i&gt;&#34;);
                        sb.Replace(&#34;&amp;lt;/i&amp;gt;&#34;, &#34;&lt;/i&gt;&#34;);
                        Response.Write(sb.ToString());

                        VB.NET示例： 
                        Dim sb As StringBuilder = New StringBuilder( _
                        HttpUtility.HtmlEncode(input));
                        sb.Replace(&#34;&amp;lt;b&amp;gt;&#34;, &#34;&lt;b&gt;&#34;);
                        sb.Replace(&#34;&amp;lt;/b&amp;gt;&#34;, &#34;&lt;/b&gt;&#34;);
                        sb.Replace(&#34;&amp;lt;i&amp;gt;&#34;, &#34;&lt;i&gt;&#34;);
                        sb.Replace(&#34;&amp;lt;/i&amp;gt;&#34;, &#34;&lt;/i&gt;&#34;);
                        Response.Write(sb.ToString());

                        Java示例：
                        public static String HTMLEncode(String aText){
                             final StringBuilder result = new StringBuilder();
                             final StringCharacterIterator iterator = new StringCharacterIterator(aText);
                             char character =  iterator.current();
                             while (character != CharacterIterator.DONE ){
                               if (character == &#39;&lt;&#39;) {
                                 result.append(&#34;&amp;lt;&#34;);
                               }
                               else if (character == &#39;&gt;&#39;) {
                                 result.append(&#34;&amp;gt;&#34;);
                               }
                               else if (character == &#39;&amp;&#39;) {
                                 result.append(&#34;&amp;amp;&#34;);
                              }
                               else if (character == &#39;\&#34;&#39;) {
                                 result.append(&#34;&amp;quot;&#34;);
                               }
                               else {
                                 //the char is not a special one
                                 //add it to the result as is
                                 result.append(character);
                               }
                               character = iterator.next();
                             }
                             return result.toString();
                          }

                        以下建议可帮助构建能够抵御跨站脚本攻击的web应用。 

                        定义允许的内容。确保web应用对所有输入参数（cookies、头、查询字符串、表单、隐藏字段等）验证严格定义的预期结果。 

                        检查POST和GET请求的响应，确保返回内容是预期的且有效。

                        通过编码用户提供的数据从用户输入中删除冲突字符、括号、单双引号。这可以防范以可执行的方式向终端用户发送注入的脚本。

                        在可能的时候将所有客户端提供的数据仅限于字母数字的数据。使用这种过滤方案时，如果用户输入了&lt;script&gt;alert( &#39;aaa&#39;) &lt;/script&gt;，就会被减少为scriptalert( &#39;aaa&#39;)script。如果必须使用非字母数字字符，在HTTP响应中使用之前将其编码为HTML实体，这样就无法将其用于修改HTML文档的结构。

                        使用双重用户认证机制而不是单重认证。

                        在修改或使用脚本之前确认其来源。

                        在自己的代码中使用时不要明确的信任任何来自他人的脚本，无论是从web下载还是来自熟人。

                        大多数服务器端脚本语言都提供了内嵌方式将输入变量的值转换为正确的不可解释HTML。应使用这种方式在将输入显示给客户端之前过滤所有输入。 

                        PHP: string htmlspecialchars (string string [, int quote_style])

                        ASP / ASP.NET: Server.HTMLEncode (strHTML String)

                        对于安全操作
                        ============

                        服务器端编码指的是首先通过编码函数发送所有的动态内容，使用所选择字符集中的代码替换Scripting标签，这可以帮助防范跨站脚本攻击。服务器端编码的缺点是可能耗费资源，对一些web服务器的性能产生负面影响。 

                        如果必须允许站点用户使用HTML标签，如允许用户使用的格式化标签的公告栏，则应限制可使用的标签。创建可接受标签的列表，如粗体字、斜体字或下划线，并仅允许使用这些，拒绝任何其他标签。以下是一些可帮助检测跨站脚本的正则表达式。

                        简单跨站脚本攻击的正则表达式： 
                        /((\%3C)|&lt;)((\%2F)|\/)*[a-z0-9\%]+((\%3E)|&gt;)/ix

                        应如下将上述正则表达式添加到新的Snort规则：

                        alert tcp $EXTERNAL_NET any -&gt; $HTTP_SERVERS $HTTP_PORTS (msg:&#34;NIICross-Site Scripting attempt&#34;; flow:to_server,established;pcre:&#34;/((\%3C)|&lt;)((\%2F)|\/)*[a-z0-9\%]+((\%3E)|&gt;)/i&#34;;classtype:Web-application-attack; sid:9000; rev:5;)

                        跨站脚本攻击的偏执行正则表达式：
                        /((\%3C)|&lt;)[^\n]+((\%3E)|&gt;)/I

                        这条特征仅仅查找起始的HTML标签及其对等的16进制，之后的一个或多个字符为非换行符，再之后为结尾标签或其对等的16进制。这可能导致一些误报，具体取决于Web应用和Web服务器的架构。但这种方式可以确保捕获任何攻击，甚至远程类似的跨站脚本攻击。对于公众方面，可以加强教育程序，帮助用户防范可用于帐号劫持和其他形式身份窃取的在线欺诈，如网络钓鱼。 

                        对于质量保证
                        ============

                        修复跨站脚本漏洞最终要求基于代码的修复。“对于开发”和“对于安全操作”部分所述步骤可为开发人员提供修复这些问题所需的信息。以下步骤概括了如何对应用程序手动测试跨站脚本。 

                        步骤1. 在浏览器中打开任意Web站点，查找可接受用户输入的位置，如搜索表单或某些登录页面。在搜索框中输入test并发送给Web服务器。

                        步骤2. 寻找返回类似于Your search for &#39;test&#39; did not find any items或Invalid login test页面的WEB服务器。如果结果页面中出现了test，请继续。 

                        步骤3. 如果要测试跨站脚本，在之前使用的同一搜索或登录框中输入&lt;script&gt;alert(&#39;hello&#39;)&lt;/script&gt;字符串并发送给Web服务器。

                        步骤4. 如果服务器所响应的弹出框显示hello，则站点受跨站脚本影响。

                        步骤5. 即使步骤4失败，站点没有返回这条信息，仍可能存在风险。在浏览器中点击“查看源码”选项，查看Web页面的实际HTML代码。现在查找发送给服务器的&lt;script&gt;字符串，如果在源码中看到整个&lt;script&gt;alert(&#39;hello&#39;)&lt;/script&gt;文本，则Web服务器受跨站脚本的影响。
                    </td>
                    </tr>
                    <tr class="even">
                    <th width="100">威胁分值</th>
                        <td>10</td>
                    </tr>
                    <tr class="odd">
                        <th>危险插件</th>
                        <td>否</td>
                    </tr>
                    <tr class="even">
                        <th>发现日期</th>
                        <td>2001-01-01</td>
                    </tr>
                    </tbody>
                </table>
            </td>
        </tr>
    </tbody>
</table>
</div>
</div>
 <!--4.站点树，先不考虑-->

<!-- 展示爬取到的外部链接 -->
<div class="report_h report_h1">4.外部链接列表</div>
<div class="report_content"><span>本站点外部链接总数为:66</span>
    <table class="report_table">
        <thead>
            <tr class="first_title">
                <td width="90%">域名</td>
                <td width="10%">外链数目</td>
            </tr>
        </thead>
        <tbody>
            <tr class="odd" style="cursor:pointer" onclick="no_toggle('img_1','link_1')">
            <td><img id='img_1' src="<?php echo REPORT_IMG;?>blank.gif" class="ico plus" />http://map.baidu.com</td>
            <td>1</td>
            </tr>
        <tr class="more hide" id="link_1">
            <td colspan="2" style="padding:0;">
                <table width="100%" cellspacing="1" class="report_table">
                    <tbody>
                    <tr class="second_title">
                        <td>外部链接url</td>
                        <td>来源页面url</td>
                        <td width="80px">请求方式</td>
                    </tr><tr class="even">
                        <td style="word-break: break-word;">http://map.baidu.com/?sr=1</td>
                        <td style="word-break: break-word;">http://www.dys120.com/html/aboutus/contact/</td>
                        <td>GET</td>
                    </tr>
                    </tbody>
                </table>
            </td>
        </tr>
        </tbody>
    </table>

</div>
<!-- 系统危险等级评判标准信息 -->
<div class="report_h report_h1">5.参考标准</div>

<div class="report_content"><div class="report_h report_h2" id="title61">
        5.1 单一漏洞风险等级评定标准
    </div>
    <div>
        <table class="report_table">
            <tbody>
                <tr class="second_title">
                    <td width="100px">危险程度</td>
                    <td width="150px">危险值区域</td>
                    <td>危险程度说明</td>
                </tr>
                <tr class="even">
                    <td><img src='<?php echo REPORT_IMG;?>vuln_high.gif'></img> 高</td>
                    <td>7 &lt;= 漏洞风险值 &lt;= 10</td>
                    <td>攻击者可以远程操作系统文件、读写后台数据库、执行任意命令或进行远程拒绝服务攻击。</td>
                </tr>
                <tr class="odd">
                    <td><img src='<?php echo REPORT_IMG;?>vuln_middle.gif'></img> 中</td>
                    <td>4 &lt;= 漏洞风险值 &lt; 7</td>
                    <td>攻击者可以利用Web网站攻击其他用户，读取系统文件或后台数据库。</td>
                </tr>
                <tr class="even">
                    <td><img src='<?php echo REPORT_IMG;?>vuln_low.gif'></img> 低</td>
                    <td>0 &lt;= 漏洞风险值 &lt; 4</td>
                    <td>攻击者可以获取某些系统、文件的信息或冒用身份。</td>
                </tr>
            </tbody>
        </table>
        <table class="report_table">
            <tbody><tr class="second_title">
                <td width="100px">分值</td>
                <td>评估标准</td>
            </tr>
            <tr class="even">
                <td>1</td>
                <td>可远程获取Web服务器组件的版本信息。</td>
            </tr>
            <tr class="odd">
                <td>2</td>
                <td>目标Web服务器开放了不必要的服务。</td>
            </tr>
            <tr class="even">
                <td>3</td>
                <td>可远程访问到某些不在目录树中的文件或读取服务器动态脚本的源码。</td>
            </tr>
            <tr class="odd">
                <td>4</td>
                <td>可远程因为会话管理的问题导致身份冒用。</td>
            </tr>
            <tr class="even">
                <td>5</td>
                <td>可远程利用受影响的Web服务器攻击其他浏览网站的用户。</td>
            </tr>
            <tr class="odd">
                <td>6</td>
                <td>可远程读取系统文件或后台数据库。</td>
            </tr>
            <tr class="even">
                <td>7</td>
                <td>可远程读写系统文件、操作后台数据库。</td>
            </tr>
            <tr class="odd">
                <td>8</td>
                <td>可远程以普通用户身份执行命令或进行拒绝服务攻击。</td>
            </tr>
            <tr class="even">
                <td>9</td>
                <td>可远程以管理用户身份执行命令（受限、不太容易利用）。</td>
            </tr>
            <tr class="odd">
                <td>10</td>
                <td>可远程以管理用户身份执行命令（不受限、容易利用）。</td>
            </tr>
            </tbody>
        </table>
    </div>
    <div class="report_h report_h2" id="title62">
        5.2 站点风险等级评定标准
    </div>
    <div>
        <table class="report_table">
            <tbody>
                <tr class="second_title">
                    <td width="100px">站点风险等级</td>
                    <td>站点风险值区域</td>
                </tr>
                <tr class="even">
                    <td><img src="<?php echo REPORT_IMG;?>d_high.gif"> 非常危险</td>
                    <td>8 &lt;= 站点风险值 &lt;= 10</td>
                </tr>
                <tr class="odd">
                    <td><img src="<?php echo REPORT_IMG;?>d_middle.gif"> 比较危险</td>
                    <td>5 &lt;= 站点风险值 &lt; 8</td>
                </tr>
                <tr class="even">
                    <td><img src="<?php echo REPORT_IMG;?>d_low.gif"> 比较安全</td>
                    <td>1 &lt;= 站点风险值 &lt; 5</td>
                </tr>
                <tr class="odd">
                    <td><img src="<?php echo REPORT_IMG;?>d_safe.gif"> 非常安全</td>
                    <td>0 &lt;= 站点风险值 &lt; 1</td>
                </tr>
            </tbody>
        </table>
        <p style="text-indent:0;">
            说明：
        </p>
        <ol style="list-style:decimal;padding-left:20px;">
            <li>
                按照站点风险评估模型计算站点风险值。根据得到的站点风险值参考“站点风险等级评定标准”标识站点风险等级。
            </li>
            <li>
                将站点风险等级按照风险值的高低进行排序，得到非常危险、比较危险、比较安全、非常安全四种站点风险等级。
            </li>
        </ol>
    </div>
    <div class="report_h report_h2" id="title63">
        5.3 安全建议
    </div>
    <div>
        <div>
            <p style='text-indent: 2em;'>随着越来越多的网络访问通过Web界面进行操作，Web安全已经成为互联网安全的一个热点，基于Web的攻击广为流行，SQL注入、跨站脚本等Web应用层漏洞的存在使得网站沦陷、页面篡改、网页挂马等攻击行为困扰着网站管理者并威胁着网站以及直接用户的安全。基于此，我们可从如下几个方面来消除这些风险，做到防患于未然：</p>
            <ul style="list-style:circle; padding-left:30px;">
              <li>对网站的开发人员进行安全编码方面的培训，在开发过程避免漏洞的引入能起到事半功倍的效果。</li>
              <li>请专业的安全研究人员或安全公司对架构网站的程序和代码做全面的源码审计，修补所有发现的安全漏洞，这种白盒安全测试比较全面、深入，能发现绝大部分的安全问题。</li>
              <li>在网站上线前，使用Web应用漏洞扫描系统进行安全评估，并修补发现的问题；在网站上线后，坚持更新并使用网站安全监测系统，对整站以及关键页面进行周期和实时监测，及时消除发现的隐患。</li>
              <li>采用专业的Web安全防火墙产品，可以在不修改网站本身的情况下对大多数的Web攻击起到有效的阻断作用，绿盟科技提供了功能强大的WAF产品，可以满足用户在这方面的需求。</li>
              <li>建议网络管理员、系统管理员、安全管理员关注安全信息、安全动态及最新的严重漏洞，特别是影响到Web站点所使用的系统和软件的漏洞，应该在事前设计好应对规划，一旦发现系统受漏洞影响及时采取措施。</li>
            </ul>
        </div>
    </div></div></div>
 
</div>
       
        <script type="text/javascript">
            function getPageY(element){
                return element.offsetTop + (element.offsetParent ? arguments.callee(element.offsetParent) : 0) 
            }
            jQuery(function($){
                //window.dialog = new UI.Dialog({name:'dialog'});
                $("#catalog_tree").report_tree();
                $("#report").catalog();
                $('#catalog').delegate('a.link', 'click', function(event){
                    event.preventDefault();
                    $("#catalog").find("div.report_content").hide();
                    $("#catalog").find(".h1_dot").addClass("up");
                    jumpToHash(event.target.hash);
                });
                $.gotop();
            });
        </script>
    </body>
</html>
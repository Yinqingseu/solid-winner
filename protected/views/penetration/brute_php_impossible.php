<div id="main_menu">
        <div id="main_menu_padded">
            <ul class="menuBlocks">
                <li><center><strong>训练漏洞</strong></center></li>
                <li onclick="window.location='../../vulnerabilities/brute/'" class="selected"><a href="../../vulnerabilities/brute/">暴力破解</a></li>
                <li onclick="window.location='../../vulnerabilities/exec/'" class=""><a href="../../vulnerabilities/exec/">命令行注入</a></li>
                <li onclick="window.location='../../vulnerabilities/csrf/'" class=""><a href="../../vulnerabilities/csrf/">CSRF</a></li>
                <li onclick="window.location='../../vulnerabilities/fi/.?page=include.php'" class=""><a href="../../vulnerabilities/fi/.?page=include.php">文件包含</a></li>
                <li onclick="window.location='../../vulnerabilities/upload/'" class=""><a href="../../vulnerabilities/upload/">文件上传</a></li>
                <li onclick="window.location='../../vulnerabilities/sqli/'" class=""><a href="../../vulnerabilities/sqli/">SQL注入</a></li>
                <li onclick="window.location='../../vulnerabilities/sqli_blind/'" class=""><a href="../../vulnerabilities/sqli_blind/">SQL注入(盲注)</a></li>
                <li onclick="window.location='../../vulnerabilities/xss_r/'" class=""><a href="../../vulnerabilities/xss_r/">XSS 漏洞(反射型)</a></li>
                <li onclick="window.location='../../vulnerabilities/xss_s/'" class=""><a href="../../vulnerabilities/xss_s/">XSS 漏洞(存储型)</a></li>
            </ul>
        </div>
    </div>
<div id="main_body">				
<div class="body_padded">
    <h1>漏洞: 暴力破解</h1>
    <div class="vulnerable_code_area">
        <h2>登录</h2>
        <form action="#" method="POST">
                用户名:<br />
                <input type="text" name="username"/><br />
                密码:<br />
                <input type="password" AUTOCOMPLETE="off" name="password"/><br />
                <br />
                <input type="submit" value="Login" name="Login"/>
                <input type='hidden' name='user_token' value='3874874bdfccab09ca436a53868ad17f' />
        </form>		
    </div>
    <h2>更多链接</h2>
    <ul>
        <li><a href="https://www.owasp.org/index.php/Testing_for_Brute_Force_(OWASP-AT-004)" target="_blank">https://www.owasp.org/index.php/Testing_for_Brute_Force_(OWASP-AT-004)</a></li>
        <li><a href="http://www.symantec.com/connect/articles/password-crackers-ensuring-security-your-password" target="_blank">http://www.symantec.com/connect/articles/password-crackers-ensuring-security-your-password</a></li>
        <li><a href="http://www.sillychicken.co.nz/Security/how-to-brute-force-http-forms-in-windows.html" target="_blank">http://www.sillychicken.co.nz/Security/how-to-brute-force-http-forms-in-windows.html</a></li>
    </ul>
</div>
<br /><br />
</div>
<div class="clear"></div>
<div id="system_info">
    <input type="button" value="查看帮助" class="popup_button" onClick="javascript:popUp( '../../vulnerabilities/view_help.php?id=brute&security=impossible' )"/> 
    <input type="button" value="查看源码" class="popup_button" onClick="javascript:popUp( '../../vulnerabilities/view_source.php?id=brute&security=impossible' )"/> 
    <div align="left">
        <em>难度级别:</em> 非常高<br />
        <em>建站语言:</em> PHP
    </div>
</div>
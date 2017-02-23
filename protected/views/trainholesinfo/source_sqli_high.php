<div class="body_padded">
    <h1>SQL Injection Source</h1>
    <div id="code">
        <table width='100%' bgcolor='white' style="border:2px #C0C0C0 solid">
            <tr>
                <td><div id="code"><code><span style="color: #000000">
                    <span style="color: #0000BB">&lt;?php
                    <br />
                    <br /></span><span style="color: #007700">if(&nbsp;isset(&nbsp;</span><span style="color: #0000BB">$_SESSION&nbsp;</span><span style="color: #007700">[&nbsp;</span><span style="color: #DD0000">'id'&nbsp;</span><span style="color: #007700">]&nbsp;)&nbsp;)&nbsp;{
                    <br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;Get&nbsp;input
                    <br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$id&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$_SESSION</span><span style="color: #007700">[&nbsp;</span><span style="color: #DD0000">'id'&nbsp;</span><span style="color: #007700">];
                    <br />
                    <br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;Check&nbsp;database
                    <br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$query&nbsp;&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">"SELECT&nbsp;first_name,&nbsp;last_name&nbsp;FROM&nbsp;users&nbsp;WHERE&nbsp;user_id&nbsp;=&nbsp;'</span><span style="color: #0000BB">$id</span><span style="color: #DD0000">'&nbsp;LIMIT&nbsp;1;"</span><span style="color: #007700">;
                    <br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$result&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">mysqli_query</span><span style="color: #007700">(</span><span style="color: #0000BB">$GLOBALS</span><span style="color: #007700">[</span><span style="color: #DD0000">"___mysqli_ston"</span><span style="color: #007700">],&nbsp;&nbsp;</span><span style="color: #0000BB">$query&nbsp;</span><span style="color: #007700">)&nbsp;or&nbsp;die(&nbsp;</span><span style="color: #DD0000">'&lt;pre&gt;Something&nbsp;went&nbsp;wrong.&lt;/pre&gt;'&nbsp;</span><span style="color: #007700">);
                    <br />
                    <br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;Get&nbsp;results
                    <br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">while(&nbsp;</span><span style="color: #0000BB">$row&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">mysqli_fetch_assoc</span><span style="color: #007700">(&nbsp;</span><span style="color: #0000BB">$result&nbsp;</span><span style="color: #007700">)&nbsp;)&nbsp;{
                    <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;Get&nbsp;values
                    <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$first&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$row</span><span style="color: #007700">[</span><span style="color: #DD0000">"first_name"</span><span style="color: #007700">];
                    <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #0000BB">$last&nbsp;&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">$row</span><span style="color: #007700">[</span><span style="color: #DD0000">"last_name"</span><span style="color: #007700">];
                    <br />
                    <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #FF8000">//&nbsp;Feedback&nbsp;for&nbsp;end&nbsp;user
                    <br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #007700">echo&nbsp;</span><span style="color: #DD0000">"&lt;pre&gt;ID:&nbsp;</span><span style="color: #007700">{</span><span style="color: #0000BB">$id</span><span style="color: #007700">}</span><span style="color: #DD0000">&lt;br&nbsp;/&gt;First&nbsp;name:&nbsp;</span><span style="color: #007700">{</span><span style="color: #0000BB">$first</span><span style="color: #007700">}</span><span style="color: #DD0000">&lt;br&nbsp;/&gt;Surname:&nbsp;</span><span style="color: #007700">{</span><span style="color: #0000BB">$last</span><span style="color: #007700">}</span><span style="color: #DD0000">&lt;/pre&gt;"</span><span style="color: #007700">;
                    <br />&nbsp;&nbsp;&nbsp;&nbsp;}
                    <br />
                    <br />&nbsp;&nbsp;&nbsp;&nbsp;((</span><span style="color: #0000BB">is_null</span><span style="color: #007700">(</span><span style="color: #0000BB">$___mysqli_res&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #0000BB">mysqli_close</span><span style="color: #007700">(</span><span style="color: #0000BB">$GLOBALS</span><span style="color: #007700">[</span><span style="color: #DD0000">"___mysqli_ston"</span><span style="color: #007700">])))&nbsp;?&nbsp;</span><span style="color: #0000BB">false&nbsp;</span><span style="color: #007700">:&nbsp;</span><span style="color: #0000BB">$___mysqli_res</span><span style="color: #007700">);
                    <br />}
                    <br />
                    <br /></span><span style="color: #0000BB">?&gt;
                    <br /></span>
                    </span>
                    </code></div></td>
            </tr>
    </table>
	</div>
	<br /> <br />

	<form>
		<input type="button" value="Compare All Levels" onclick="window.location.href='view_source_all.php?id=sqli'">
	</form>
</div>


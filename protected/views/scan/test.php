
      <form action="/vulnerability/index/" method="get" name="patchsform" id="patchsform" />
    <table width="100%" border="0"  style="height:181px;" cellspacing="0" cellpadding="0">
      <input type="hidden" name="vulcode2" id="vulcode2" value="" />
      <input type="hidden" name="cnnvdid2" id="cnnvdid2" value="" />
        <tr>
          <td width="42%" height="40">&nbsp;</td>
          <td colspan="2">&nbsp;</td>
        </tr>
        <tr>
          <td align="right" nowrap="nowrap">漏洞名称：</td>
          <td colspan="2" height="29"><input type="text" name="vulcode" id="vulcode" value="" size="15" /></td>
        </tr>
        <tr>
          <td align="right" nowrap="nowrap">漏洞编号：</td>
         <td colspan="2" height="29"><input type="text" name="cnnvdid" style="color:#999;" size="15" id="cnnvdid" value="CNNVD或CVE编号"" size="15" /></td>
        </tr>
          <tr>
            <td height="25" style="text-align: right" nowrap="nowrap">发布时间 从：</td>
            <td width="58%" align="left">
              <input type="text" size="15" name="fbsjs" id="fbsjs" readonly="readonly" value=""  class="Wdate" onclick="WdatePicker()" />              </td>
          </tr>
          <tr>
            <td style="text-align: right" nowrap="nowrap">到：</td>
            <td align="left">
             <input type="text" size="15" name="fbsje" id="fbsje" readonly="readonly" value=""  class="Wdate" onclick="WdatePicker()"/>              
            </td>
          </tr>
        <tr>
          <td align="center">&nbsp;</td>
          <td colspan="2" >
               <input type="button" size="5"  value="搜索"  class="Wdate" />  
              </a
              <span style="float:right;padding-right:8px;">
                      <a href="/vulnerability/statistics" style="color:#900">&nbsp;高级搜索</a>
              </span>
          </td>
        </tr>
</table>

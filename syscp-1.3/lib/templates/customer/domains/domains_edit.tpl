$header
    <form method="post" action="{$config->get('env.filename')}">
     <input type="hidden" name="s" value="{$config->get('env.s')}">
     <input type="hidden" name="page" value="{$config->get('env.page')}">
     <input type="hidden" name="action" value="{$config->get('env.action')}">
     <input type="hidden" name="id" value="{$config->get('env.id')}">
     <table cellpadding="3" cellspacing="1" border="0" align="center" class="maintable">
      <tr>
       <td colspan="2" class="title">{$lng['domains']['subdomain_edit']}</td>
      </tr>
      <tr>
       <td class="maintable">{$lng['domains']['domainname']}:</td>
       <td class="maintable" nowrap>{$result['domain']}</td>
      </tr>
      <if $alias_check == '0'><tr>
       <td class="maintable">{$lng['domains']['aliasdomain']}:</td>
       <td class="maintable" nowrap><select name="alias">$domains</select></td>
      </tr></if>
      <tr>
       <td class="maintable">{$lng['panel']['path']}:</td>
       <td class="maintable">{$pathSelect}</td>
      </tr>
      <if $result['parentdomainid'] == '0' && $userinfo['subdomains'] != '0' ><tr>
       <td class="maintable">{$lng['domains']['wildcarddomain']}</td>
       <td class="maintable">$iswildcarddomain</td>
      </tr></if>
      <if $result['subcanemaildomain'] == '1' && $result['parentdomainid'] != '0' ><tr>
       <td class="maintable" nowrap>Emaildomain:</td>
       <td class="maintable" nowrap>$isemaildomain</td>
      </tr></if>
      <tr>
       <td class="maintable" colspan="2" align="right"><input type="hidden" name="send" value="send"><input type="submit" value="{$lng['panel']['save']}"></td>
      </tr>
     </table>
    </form>
$footer
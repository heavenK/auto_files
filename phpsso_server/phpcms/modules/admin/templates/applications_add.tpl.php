<?php defined('IN_ADMIN') or exit('No permission resources.');?>
<?php 
$page_title = L('application_add');
include $this->admin_tpl('header');
?>
<script language="javascript" type="text/javascript" src="<?php echo JS_PATH?>formvalidator.js" charset="UTF-8"></script>
<script language="javascript" type="text/javascript" src="<?php echo JS_PATH?>formValidatorRegex.js" charset="UTF-8"></script>
<script type="text/javascript">
<!--
$(function(){
	$.formValidator.initConfig({autotip:true,formid:"myform"});
	$("#name").formValidator({onshow:"<?php echo L('input').L('application_name')?>",onfocus:"<?php echo L('input').L('application_name')?>"}).inputValidator({min:1,max:20,onerror:"<?php echo L('input').L('application_name')?>"}).ajaxValidator({type : "get",url : "",data :"m=admin&c=applications&a=ajax_name",datatype : "html",async:'false',success : function(data){	if( data == "1" ){return true;}else{return false;}},buttons: $("#dosubmit"),onerror : "<?php echo L('application_name').L('exist')?>",onwait : "<?php echo L('connecting_please_wait')?>"});

	$("#url").formValidator({onshow:'<?php echo L('application_url_msg')?>',onfocus:'<?php echo L('application_url_msg')?>',tipcss:{width:"400px"}}).inputValidator({min:1,max:255,onerror:'<?php echo L('application_url_msg')?>'}).regexValidator({regexp:"http:\/\/(.+)\/$",onerror:'<?php echo L('application_url_msg')?>'}).ajaxValidator({type : "get",url : "",data :"m=admin&c=applications&a=ajax_url",datatype : "html",async:'false',success : function(data){	if( data == "1" ){return true;}else{return false;}},buttons: $("#dosubmit"),onerror : "<?php echo L('application_url').L('exist')?>",onwait : "<?php echo L('connecting_please_wait')?>"});

	$("#authkey").formValidator({onshow:'<?php echo L('input').L('authkey')?>',onfocus:'<?php echo L('input').L('authkey')?>'}).inputValidator({min:1,max:255,onerror:'<?php echo L('input').L('authkey')?>'});

})
//-->
</script>
<div class="subnav">
<h2 class="title-1 line-x f14 fb blue lh28"><?php echo L('application_manage')?></h2>
<div class="content-menu ib-a blue line-x"><a href="?m=admin&c=applications&a=init"><em><?php echo L('application_list')?></em></a><span>|</span> <a href="?m=admin&c=applications&a=add"  class="on"><em><?php echo L('application_add')?></em></a></div>
</div>
<div class="pad-lr-10">
<form action="?m=admin&c=applications&a=add" method="post" id="myform">
<table width="100%"  class="table_form">
  <tr>
    <th width="80"><?php echo L('application_name')?>��</th>
    <td class="y-bg"><input type="text" class="input-text" name="name" id="name" /></td>
  </tr><tr>
    <th><?php echo L('application_url')?>��</th>
    <td class="y-bg"><input type="text" class="input-text" name="url" id="url" /></td>
  </tr>
  <tr>
    <th><?php echo L('authkey')?>��</th>
    <td class="y-bg"><input type="text" class="input-text" name="authkey" id="authkey" /> <input type="button" class="button" name="dosubmit" value="<?php echo L('automatic_generation')?>" onclick="creat_authkey()" /> </td>
  </tr>
   <tr>
    <th><?php echo L('type')?>��</th>
    <td class="y-bg"><select name="type" onchange="change_apifile(this.value)">
	<option value="phpcms_v9">phpcms_v9</option>
    <option value="phpcms_2008_sp4">phpcms_2008_sp4</option>
    <option value="other"><?php echo L('other')?></option>
    </select></td>
  </tr>
   <tr>
    <th><?php echo L('application_ip')?>��</th>
    <td class="y-bg"><input type="text" class="input-text" name="ip" /> <?php echo L('application_ip_msg')?></td>
  </tr>
   <tr>
    <th><?php echo L('application_apifilename')?>��</th>
    <td class="y-bg"><input type="text" class="input-text" name="apifilename" id="apifilename" value="phpsso.php" /></td>
  </tr>
   <tr>
    <th><?php echo L('application_charset')?>��</th>
    <td class="y-bg"><select name="charset">
    <option value="gbk">GBK</option>
    <option value="utf-8">utf-8</option>
    </select></td>
  </tr>
    <tr>
    <th><?php echo L('application_synlogin')?>��</th>
    <td class="y-bg"><input type="checkbox" name="synlogin" value="1" /> <?php echo L('yes')?></td>
  </tr>
</table>
<div class="bk15"></div>
    <input type="submit" class="button" name="dosubmit"  id="dosubmit"value="<?php echo L('submit')?>" />

</form>

</div>
<script type="text/javascript">
function creat_authkey() {
	var  x="0123456789qwertyuioplkjhgfdsazxcvbnm";
	var  tmp="";
	for(var  i=0;i< 32;i++)  {
	  tmp  +=  x.charAt(Math.ceil(Math.random()*100000000)%x.length);
	}
	$('#authkey').val(tmp);
}

function change_apifile(value) {
	if (value=='phpcms'  && $('#apifilename').val() == '') {
		$('#apifilename').val('?m=api&c=phpsso');
	}
}
</script>

</body>
</html>
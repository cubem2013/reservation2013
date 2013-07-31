function showM(m)
{
	var box = getId('subMenuBox'+m);
	if(box) box.style.display = 'block';
}
function hideM(m)
{
	var box = getId('subMenuBox'+m);
	if(box) box.style.display = 'none';
}
function tabCheck(n,obj)
{
	if (n==1)
	{
		obj.parentNode.children[0].className = 'tp vline on';
		obj.parentNode.children[1].className = 'tp';
		getId('nlogLayer').style.display = 'block';
		getId('slogLayer').style.display = 'none';
	}
	else {
		obj.parentNode.children[0].className = 'tp vline';
		obj.parentNode.children[1].className = 'tp on';
		getId('nlogLayer').style.display = 'none';
		getId('slogLayer').style.display = 'block';
	}
}
function tabCheck_s(n,obj,layer,num)
{
	if (obj!='')
	{
		if (n==1)
		{
			obj.parentNode.children[0].className = 'tp vline on';
			obj.parentNode.children[1].className = 'tp';
		}
		if (n==2)
		{
			obj.parentNode.children[0].className = 'tp vline';
			obj.parentNode.children[1].className = 'tp on';
		}
	}
	getId(layer).innerHTML = '<div style="text-align:center;padding:10px;"><img src="'+rooturl+'/_core/image/loading/white_middle.gif" alt="" /></div>';
	setTimeout("tabCheck1Load("+n+",'"+layer+"','"+num+"');",100);
}
function tabCheck1Load(n,layer,num)
{
	var result = getHttprequest(rooturl+'/?r='+raccount+'&_themePage=ajax/'+layer+'&type='+n+'&num='+num,'');
	getId(layer).innerHTML=getAjaxFilterString(result,'RESULT');
}
function layoutLogCheck(f)
{
	if (f.id.value == '')
	{
		alert('아이디를 입력해 주세요.');
		f.id.value='';
		f.id.focus();
		return false;
	}
	if (f.pw.value == '')
	{
		alert('패스워드를 입력해 주세요.');
		f.pw.value='';
		f.pw.focus();
		return false;
	}
	getIframeForAction(f);
	return true;
}
function snsCheck(key,use,conn)
{
	getIframeForAction('');
	if (conn == 'connect')
	{
		if (use == 'on' || use == 'off')
		{
			if (use == 'on')
			{
				if (!confirm('정말로 변경하시겠습니까?   '))
				{
					return false;
				}
			}
			frames.__iframe_for_action__.location.href = rooturl+'/?r='+raccount+'&m=social&a=disconnect&connect=Y&type='+key;
		}
		else {
			var w;
			var h;

			switch(key) 
			{
				case 't':
					w = 810;
					h = 550;
					break;
				case 'f':
					w = 1024;
					h = 680;
					break;
				case 'm':
					w = 900;
					h = 500;
					break;
				case 'y':
					w = 450;
					h = 450;
					break;
			}
			var url = rooturl+'/?r='+raccount+'&m=social&a=snscall_direct&type='+key;
			window.open(url,'','width='+w+'px,height='+h+'px,statusbar=no,scrollbars=no,toolbar=no');
		}
	}
	else if (conn == 'delete')
	{
		if (confirm('정말로 연결을 끊으시겠습니까?   '))
		{
			frames.__iframe_for_action__.location.href = rooturl+'/?r='+raccount+'&m=social&a=disconnect&delete=Y&type='+key;
		}
	}
	else {
		if (confirm('정말로 변경하시겠습니까?   '))
		{
			frames.__iframe_for_action__.location.href = rooturl+'/?r='+raccount+'&m=social&a=disconnect&type='+key;
		}
	}
}

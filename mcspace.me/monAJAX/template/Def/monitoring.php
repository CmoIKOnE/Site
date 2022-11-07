<meta charset='utf-8'>
<script src='//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js' type='text/javascript'></script>
<link rel=stylesheet href='//mcspace.me/monAJAX/template/monStyle.css?20200726142315' type='text/css'>
<script type='text/javascript'>
var Monitoring = {
    servers:[{name:"MMORPG"},],
    createMon: function(){var newHTML='',servers=this.servers,server,srvOnlStr,onBar,version,pingTime,fullOnStr,fullOnBar,todRec,onlRec,timeTodRec,timeRec;srvOnlStr='<span class=JSSrvString>.</span>';fullOnStr='<span id=JSComString>.</span>';todRec='<span id=DayRec>.</span>';onlRec='<span id=AbsRec>.</span>';timeTodRec='<span id=TodRTime>.</span>';timeRec='<span id=RecDate>.</span>';version='<span class=SrvVers>.</span>';pingTime='<span class=SrvPing>.</span>';onBar='<div class="OnlineBar loading" style="width:100%"></div>';fullOnBar='<div class=OnlineBar id=CommonBar style="width:100%"></div>';for(var i=0,len=servers.length;i<len;i++){server=servers[i]['name'];newHTML+="<div class=OneServer>	<div class=ServInfo>		<span class='ServName Tooltipped'>			"+server+"			<div class='Tooltip LeftTool' style='display:none'>"+version+"</div>		</span>		<span class='ServOnline Tooltipped'>			"+srvOnlStr+"			<div class='Tooltip RightTool' style='display:none'>"+pingTime+"</div>		</span>	</div>	<div class=BarCont>"+onBar+"</div></div>"};newHTML+="<div id=CommonOnline>	<div class=OneServer style='padding-top:13px;margin-bottom:14px'>		<div class=ServInfo>			<span class=ServName>Текущий онлайн:</span>			<span class=ServOnline>"+fullOnStr+"</span>		</div>		<div class=BarCont>"+fullOnBar+"</div>	</div>	<p class=Tooltipped>		Суточный рекорд: "+todRec+"		<span class='Tooltip TopTool' style='display:none'><span class=ToolFix style='box-shadow:none'>"+timeTodRec+"</span></span>	</p>	<p class=Tooltipped>		<span>Абсолютный рекорд: "+onlRec+"</span>		<span class='Tooltip BotTool' style='display:none'><span class=ToolFix>"+timeRec+"</span></span>	</p></div>";$('#Monitoring').html(newHTML);delete newHTML},
	updateMon: function(){var servers=this.servers,i,len=servers.length,smoothTime=1200,ellipsis='<span class=Ellipsis>.</span>',maxErrLen=14,status,server,srvOnlStr=[],statusClass=[],onBar=[],version=[],pingTime=[],fullOnStr,fullOnBar,todRec,onlRec,timeRec,timeTodRec;
		$.ajax({
			url:'//mcspace.me/monAJAX/ajax.php',
            beforeSend: function(){$('#Monitoring .OnlineBar').removeClass('online offline upderr');$('#Monitoring .OneServer').each(function(){$(this).find('.JSSrvString, .SrvVers, .SrvPing').html(ellipsis);$(this).find('.OnlineBar').addClass('loading').animate({'width':'100%'},{queue:false,duration:smoothTime})});$('#JSComString, #DayRec, #AbsRec, #TodRTime, #RecDate').html(ellipsis);$('#CommonBar').animate({'width':'100%'},{queue:false,duration:smoothTime});},
            success: function(data){for(i=0;i<len;i++){server=servers[i]['name'];status=data['servers'][server]['status'];if(status!='online'){statusClass[i]='offline';srvOnlStr[i]=(status.length>maxErrLen) ? '<span class="monTrouble monTooBig">'+status+'</span>': '<span class=monTrouble>'+status+'</span>';pingTime[i]=version[i] = '';onBar[i]=100}else{statusClass[i]='online';srvOnlStr[i]=data['servers'][server]['online']+'/'+data['servers'][server]['slots'];pingTime[i]=data['servers'][server]['ping'];version[i]=data['servers'][server]['version'];onBar[i]=data['servers'][server]['percent']}};fullOnStr=data['online']+'/'+data['slots'];fullOnBar=data['percent'];onlRec=data['record'];todRec=data['recordday'];timeRec=data['timerec'];timeTodRec=data['timerecday']},
            error: function(){for(i=0;i<len;i++){statusClass[i]='upderr';srvOnlStr[i]='<span class=monTrouble>Ошибка..</span>';pingTime[i]=version[i]='';onBar[i]=100};fullOnStr='<span class=monTrouble>Ошибка..</span>';fullOnBar=100;todRec=onlRec=timeRec=timeTodRec='Ошибка..'},
            complete: function(){setTimeout(function(){$('#Monitoring .OnlineBar').removeClass('loading');$('#Monitoring .OneServer').each(function(i){$(this).find('.JSSrvString').html(srvOnlStr[i]);$(this).find('.OnlineBar').addClass(statusClass[i]).animate({'width':onBar[i]+'%'},{queue:false,duration:smoothTime});$(this).find('.SrvVers').html(version[i]);$(this).find('.SrvPing').html('Пинг:&nbsp;'+pingTime[i]+'&nbsp;мс');if(version[i]=='') $(this).find('.Tooltip').fadeOut({duration:0,queue:false})});$('#JSComString').html(fullOnStr);$('#CommonBar').animate({'width':fullOnBar+'%'},{queue:false,duration:smoothTime});$('#DayRec').html(todRec);$('#AbsRec').html(onlRec);$('#RecDate').html(timeRec);$('#TodRTime').html(timeTodRec)},smoothTime*1.01);delete data}
        })
	}
}
$(document).ready(function(){
    Monitoring.createMon();Monitoring.updateMon();
	setInterval(function(){Monitoring.updateMon()},20000);

	var dot_txt=[],dot_i=0;
	dot_txt[1]='.';dot_txt[2]='..';dot_txt[3]='...';
	setInterval(function(){dot_i<3 ? dot_i++ : dot_i=1;$('#Monitoring .Ellipsis').html(dot_txt[dot_i])}, 165);

    $('#Monitoring .Tooltipped').each(function(){
		$(this).mouseenter(function(){if($(this).find('.Tooltip span').html() != 'ping:&nbsp;' && $(this).find('.Tooltip span').html() != '')$(this).find('.Tooltip').fadeIn({duration:75,easing:'swing',queue:false})});
		$(this).mouseleave(function() {$(this).find('.Tooltip').fadeOut({duration:75,easing:'swing',queue:false})})
	})
})
</script>

	<div id=Monitoring></div>

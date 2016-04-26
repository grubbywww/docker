function edit(tag,image,ev,name){
	if(confirm("确认修改?")){
 $.post("submit.php", {
                    "image": image,
		    "tag": tag,
		    "name": name,
                }, function (data) {
                	
			$(ev).parent().next().html('<button type="button" class="btn btn-danger">'+data+'</button>');
			
			$('.modal-body').attr('tr',tag);
			$('.modal-body').attr('ti',name);
			document.getElementById(name).innerHTML=tag;
		}, "text");
}
}

function show(){
	tag=$(".modal-body").attr('tr');
	im=$(".modal-body").attr('ti');
	document.getElementById(im).innerHTML=tag;
}

function showtag(str,image,name){
	arr=str.split(",");

	str="<table  class=table  table-striped>";
	for (var i=0;i<arr.length;i++)
{
   id="#"+arr[i];
   str+="<tr><td> <button  onclick=edit('"+arr[i]+"','"+image+"',this,'"+name+"') type='button' class='btn btn-success'>"+arr[i]+"</button></td><td></td></tr>";
}
str+="</table>";
	$('.modal-body').html(str);
	$('#myModalLabel').html(image);
}


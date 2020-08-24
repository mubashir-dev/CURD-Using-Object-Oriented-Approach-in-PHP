$(function(e)
{
	$(".delete-object").on("click",function(e)
	{
	e.preventDefault();
	var id=$(this).attr('delete-id');
	$.ajax({

			url:"delete_student.php",
			method:"POST",
			data:{id:id},
			success:function(resp)
			{
				alert(resp);
				location.reload();
			},
			error:function(resp)
			{
				alert(resp);
			}

	});
	});
})

$(function(){
	$('input.date-picker').daterangepicker({
		locale: {
            format: 'DD/MM/YYYY'
        }
	});

	$('#CategorySelect').on('change',function(){
		var category = $(this).val();
		var url = "/getCategoryType/"+category;
		$.get(url,function(r){
			if (r!="") {
				$('#selectCategoryType').html(r);
				$('#CategoryTypeBox').fadeIn();
			}else{
				$('#CategoryTypeBox').fadeOut();
				$('#tipo_categoria').val("");
			}

		})
	})
	$('#selectCategoryType').on('change',function(){
		var categoryType = $(this).val();
		$('#tipo_categoria').val(categoryType);
	})
})

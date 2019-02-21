// Load SummerNote Editor
$(document).ready(function () {
  $('.summernote').summernote();


	// Delete via Bootstrap Modal
	$("#delete").on("show.bs.modal", function (event) {
		var button = $(event.relatedTarget)
		var url = button.data("url")
	
		var modal = $(this)
		modal.find("#deleteForm").attr("action", url)
	})
	
	// Category slug generator
	$('#category_name').keyup(function() {
		//$(this).val($.trim($(this).val()));
		// Trim empty space
		$(this).val($(this).val().replace(/\s+/g,' '));
		// replace more then 1 space with only one

		$('#category_slug').val($(this).val().toLowerCase());
		$('#category_slug').val($('#category_slug').val().replace(/\W/g, ' '));
		$('#category_slug').val($.trim($('#category_slug').val()));
		$('#category_slug').val($('#category_slug').val().replace(/\s+/g, '-'));
	});

	// Category slug generator
	$('#post_title').keyup(function() {
		//$(this).val($.trim($(this).val()));
		// Trim empty space
		$(this).val($(this).val().replace(/\s+/g,' '));
		// replace more then 1 space with only one

		$('#post_slug').val($(this).val().toLowerCase());
		$('#post_slug').val($('#post_slug').val().replace(/\W/g, ' '));
		$('#post_slug').val($.trim($('#post_slug').val()));
		$('#post_slug').val($('#post_slug').val().replace(/\s+/g, '-'));
	});

});
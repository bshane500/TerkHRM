$(function () {
	"use strict";

	$(document).ready(function () {
		$("div.info-tab-menu>div.list-group>a").click(function (e) {
			e.preventDefault();
			$(this).siblings('a.active').removeClass("active");
			$(this).addClass("active");
			var index = $(this).index();
			$("div.info-tab>div.info-tab-content").removeClass("active");
			$("div.info-tab>div.info-tab-content").eq(index).addClass("active");
		});
	});

	$('#indexTables').DataTable({
		"paging": true,
		"lengthChange": false,
		"searching": true,
		"ordering": true,
		"info": true,
		"autoWidth": false
	});

	$(".select2").select2();

	$('.datepicker').pickadate({
		selectMonths: true,
		format: 'yyyy-mm-dd'

	});
	$('.dobdatepicker').pickadate({
		selectMonths: true,
		selectYears: 70,
		format: 'yyyy-mm-dd',
		min: new Date(1945, 1, 1),
		max: new Date(1999, 1, 1)
	});


	//Make the dashboard widgets sortable Using jquery UI
	$(".connectedSortable").sortable({
		placeholder: "sort-highlight",
		connectWith: ".connectedSortable",
		handle: ".box-header, .nav-tabs",
		forcePlaceholderSize: true,
		zIndex: 999999
	});
	$(".connectedSortable .box-header, .connectedSortable .nav-tabs-custom").css("cursor", "move");

	//jQuery UI sortable for the todo list
	$(".todo-list").sortable({
		placeholder: "sort-highlight",
		handle: ".handle",
		forcePlaceholderSize: true,
		zIndex: 999999
	});

	//bootstrap WYSIHTML5 - text editor
	$(".textarea").wysihtml5();

	$('input').iCheck({
		checkboxClass: 'icheckbox_square-blue',
		radioClass: 'iradio_square-blue',
		increaseArea: '20%' // optional
	});
});
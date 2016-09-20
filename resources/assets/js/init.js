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
        "dom": 'T<"clear">lfrtip',
		"paging": true,
		"lengthChange": false,
		"searching": true,
		"ordering": true,
		"info": true,
		"autoWidth": false,
        "tableTools": {
            "aButtons": [
                {
                    "sExtends": "copy",
                    "sButtonText": "Copy to clipboard"
                },
                {
                    "sExtends": "csv",
                    "sButtonText": "Save to CSV"
                },
                {
                    "sExtends": "xls",
                    "oSelectorOpts": {
                        page: 'current'
                    }
                }
            ]
        }
	});

	$(".select2").select2();

	$('.dobdatepicker').datepicker({
		format: "yyyy-mm-dd",
		endDate:"1995-12-31"
	});
	$('.datepicker').datepicker({
		format: "yyyy-mm-dd",
		clearBtn :true,
		autoclose: true
	});


	//bootstrap WYSIHTML5 - text editor
	$(".textarea").wysihtml5();

	$('input').iCheck({
		checkboxClass: 'icheckbox_square-blue',
		radioClass: 'iradio_square-blue',
		increaseArea: '20%' // optional
	});

});
$('#photo_pictureFile_file').change(function (e) {
	if (this === '') {
		$(this).removeClass('green');
		$(this).addClass('red');
	} else if (this != '') {
		$(this).removeClass('red');
		$(this).addClass('green');
	}
});
$('.fa-folder').hover(
	function (e) {
		$(this).removeClass('fa-folder');
		$(this).addClass('fa-folder-open');
	},
	function (e) {
		$(this).removeClass('fa-folder-open');
		$(this).addClass('fa-folder');
	},
);

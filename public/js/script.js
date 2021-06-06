$('#photo_pictureFile_file').change(function (e) {
	if (this === '') {
		$(this).removeClass('green');
		$(this).addClass('red');
	} else if (this != '') {
		$(this).removeClass('red');
		$(this).addClass('green');
	}
});

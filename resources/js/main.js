$(window).on('load',function(){
	$('html body').fadeTo('3000','1')
});
$('div#get_help-box-gallery').lightGallery({
    loadYoutubeThumbnail: true,
    youtubeThumbSize: 'default',
    loadVimeoThumbnail: true,
    vimeoThumbSize: 'thumbnail_medium',
}); 
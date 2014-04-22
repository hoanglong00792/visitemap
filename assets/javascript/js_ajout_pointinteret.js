/**
 * Created by seb on 19/04/14.
 */

$(function(){

    // Gestion du Drag And Drop
    var obj = $("#dragandrop");

    var video_cpt = 2;
    var id_video = '';

    obj.on('dragenter', function (e)
    {
        e.stopPropagation();
        e.preventDefault();
        $(this).css('border', '2px solid #0B85A1');
    });
    obj.on('dragover', function (e)
    {
        e.stopPropagation();
        e.preventDefault();
    });
    obj.on('drop', function (e)
    {

        $(this).css('border', '2px dotted #0B85A1');
        e.preventDefault();
        var files = e.originalEvent.dataTransfer.files;

        //We need to send dropped files to Server
        handleFileUpload(files,obj);
    });

    obj.on('dragend',function(e){
        $(this).css('border', '2px dotted #0B85A1');
    });

    $(document).on('dragenter', function (e)
    {
        e.stopPropagation();
        e.preventDefault();
    });
    $(document).on('dragover', function (e)
    {
        e.stopPropagation();
        e.preventDefault();
        obj.css('border', '2px dotted #0B85A1');
    });
    $(document).on('drop', function (e)
    {
        e.stopPropagation();
        e.preventDefault();
    });


    function handleFileUpload(files,obj)
    {
        for (var i = 0; i < files.length; i++)
        {
            var fd = new FormData();
            fd.append('file', files[i]);

            var status = new createStatusbar(obj); //Using this we can set progress.
            status.setFileNameSize(files[i].name,files[i].size);
            sendFileToServer(fd,status);

        }
    }

    function sendFileToServer(formData,status)
    {

    }

    // Fin Drag and drop


    $('#add_video_link').click(function(){


        $(' <input id="video_input' + video_cpt  + '" type="text" name="video' + video_cpt +'" placeholder="http://" />').insertAfter("#video_input" + id_video);


        if (id_video == '')
            id_video = 1;

        id_video++;
        video_cpt++;

    });


    $("#date_input" ).datepicker();

    // Attribution note
    $('#rating').raty();

    $(".various").fancybox({
        maxWidth	: 800,
        maxHeight	: 600,
        fitToView	: false,
        width		: '70%',
        height		: '70%',
        autoSize	: false,
        closeClick	: false,
        openEffect	: 'none',
        closeEffect	: 'none'
    });

});
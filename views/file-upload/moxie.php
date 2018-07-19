


<form action="/" method="post">
    <label for="text">editor</label><br/>
    <textarea name="text">Next, get a free Tiny Cloud API key!</textarea>
</form>

<script src="/vendor/tinymce/jquery.tinymce.min.js"></script>
<script src="/vendor/tinymce/tinymce.min.js"></script>

<script>

$(document).ready(function(){

    var defaultTool = {
        height: 500,
        width: '99.6%',
        selector: 'textarea',
        menu: {
            file: {title: 'File', items: 'newdocument'},
            edit: {title: 'Edit', items: 'undo redo | cut copy paste pastetext | selectall'},
            insert: {title: 'Insert', items: 'link media | template hr'},
            view: {title: 'View', items: 'visualaid'},
            format: {title: 'Format', items: 'bold italic underline strikethrough superscript subscript | formats | removeformat'},
            table: {title: 'Table', items: 'inserttable tableprops deletetable | cell row column'},
            tools: {title: 'Tools', items: 'spellchecker code'}
        },
        plugins: [
            'advlist autolink lists link image moxiemanager charmap print preview hr anchor pagebreak',
            'searchreplace wordcount visualblocks visualchars code fullscreen',
            'insertdatetime media nonbreaking save table contextmenu directionality',
            'emoticons template paste textcolor colorpicker textpattern codesample toc'
        ],
        toolbar1: 'undo redo | insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent',
        toolbar2: 'link image moxiemanager media | forecolor backcolor | codesample | fullscreen',
        menubar: 'file edit insert view format table tools',
        external_plugins: {
            "moxiemanager": "/vendor/moxiemanager/plugin.js"
        }
    };

    tinymce.init(defaultTool);
});

</script>
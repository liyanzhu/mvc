<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-30 14:56:06
  from '/Applications/MAMP/htdocs/htdocs/mvc/application/template/admin/addcon.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f4bbe06710817_76456035',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0c1956ea1396872a0542e639a79d2aa2e5401e39' => 
    array (
      0 => '/Applications/MAMP/htdocs/htdocs/mvc/application/template/admin/addcon.html',
      1 => 1598799288,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4bbe06710817_76456035 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>content</title>
    <link rel="stylesheet" href="<?php echo CSS_ADD;?>
admin/bootstrap.css">
    <link rel="stylesheet" href="<?php echo CSS_ADD;?>
admin/addcon.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
jquery-3.4.1.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
addcon.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
upload.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
tinymce/tinymce.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
        tinymce.init({
            selector: '#cons',
            //skin:'oxide-dark',
            language:'zh_CN',
            plugins: 'print preview searchreplace autolink directionality visualblocks visualchars fullscreen image link media template code codesample table charmap hr pagebreak nonbreaking anchor insertdatetime advlist lists wordcount imagetools textpattern help emoticons autosave bdmap indent2em autoresize lineheight formatpainter axupimgs',
            toolbar: 'code undo redo restoredraft | cut copy paste pastetext | forecolor backcolor bold italic underline strikethrough link anchor | alignleft aligncenter alignright alignjustify outdent indent | \
    styleselect formatselect fontselect fontsizeselect | bullist numlist | blockquote subscript superscript removeformat | \
    table image media charmap emoticons hr pagebreak insertdatetime print preview | fullscreen | bdmap indent2em lineheight formatpainter axupimgs',
            height: 650, //编辑器高度
            min_height: 400,
            /*content_css: [ //可设置编辑区内容展示的css，谨慎使用
                '/static/reset.css',
                '/static/ax.css',
                '/static/css.css',
            ],*/
            fontsize_formats: '12px 14px 16px 18px 24px 36px 48px 56px 72px',
            font_formats: '微软雅黑=Microsoft YaHei,Helvetica Neue,PingFang SC,sans-serif;苹果苹方=PingFang SC,Microsoft YaHei,sans-serif;宋体=simsun,serif;仿宋体=FangSong,serif;黑体=SimHei,sans-serif;Arial=arial,helvetica,sans-serif;Arial Black=arial black,avant garde;Book Antiqua=book antiqua,palatino;',
            link_list: [
                { title: '预置链接1', value: 'http://www.tinymce.com' },
                { title: '预置链接2', value: 'http://tinymce.ax-z.cn' }
            ],
            image_list: [
                { title: '预置图片1', value: 'https://www.tiny.cloud/images/glyph-tinymce@2x.png' },
                { title: '预置图片2', value: 'https://www.baidu.com/img/bd_logo1.png' }
            ],
            image_class_list: [
                { title: 'None', value: '' },
                { title: 'Some class', value: 'class-name' }
            ],
            importcss_append: true,
            //自定义文件选择器的回调内容
            file_picker_callback: function (callback, value, meta) {
                if (meta.filetype === 'file') {
                    callback('https://www.baidu.com/img/bd_logo1.png', { text: 'My text' });
                }
                if (meta.filetype === 'image') {
                    callback('https://www.baidu.com/img/bd_logo1.png', { alt: 'My alt text' });
                }
                if (meta.filetype === 'media') {
                    callback('movie.mp4', { source2: 'alt.ogg', poster: 'https://www.baidu.com/img/bd_logo1.png' });
                }
            },
            autosave_ask_before_unload: false,
        });
    <?php echo '</script'; ?>
>
</head>
<body>
    <div class="container">
        <form action="/htdocs/mvc/index.php/admin/content/addcon" method="post">
        <div class="form-group">
            <label for="cid">所属栏目</label>
            <select id="cid" name="cid" class="form-control">
            </select>
        </div>
        <div class="form-group">
            <label for="ctitle">内容标题</label>
            <input type="text" class="form-control" id="ctitle" name="ctitle" placeholder="输入标题">
        </div>
        <div class="form-group">
            <label for="info">内容概要</label>
            <textarea id="info" name="info" class="form-control" rows="3"></textarea>
        </div>
        <input type="hidden" name="imgurl">
        <div class="upload"></div>
        <div class="form-group">
            <label for="cons">内容主题</label>
            <textarea id="cons" name="conts" class="form-control" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-default">添加</button>
    </form>
    </div>
    <?php echo '<script'; ?>
>
        var uploadObj = new upload();
        uploadObj.selectBtnCon = "选择图片";
        uploadObj.multiple = true;
        uploadObj.createView({
            parent: document.querySelector(".upload")
        })
        uploadObj.up("/htdocs/mvc/index.php/admin/content/uploadfile",function(event) {
            $("input[type=hidden]").val(event[0]);
        })
    <?php echo '</script'; ?>
>
</body>
</html><?php }
}

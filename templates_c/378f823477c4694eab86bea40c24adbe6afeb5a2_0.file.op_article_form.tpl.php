<?php
/* Smarty version 3.1.30, created on 2017-11-16 16:15:25
  from "C:\Users\tad\Dropbox\www\reporter\templates\op_article_form.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a0db99d5e7526_18851857',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '378f823477c4694eab86bea40c24adbe6afeb5a2' => 
    array (
      0 => 'C:\\Users\\tad\\Dropbox\\www\\reporter\\templates\\op_article_form.tpl',
      1 => 1510848894,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a0db99d5e7526_18851857 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 src="ckeditor/ckeditor.js"><?php echo '</script'; ?>
>
<h2 class="my-3">編輯文章</h2>
<form action="admin.php" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="title" class="col-form-label sr-only">文章標題</label>
        <input type="text" class="form-control" name="title" id="title" placeholder="請輸入文章標題" <?php if ($_smarty_tpl->tpl_vars['article']->value['title']) {?>value="<?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
"<?php }?>>
    </div>
    <div class="form-group">
        <label for="content" class="col-form-label sr-only">文章內容</label>
        <textarea name="content" id="content" rows="20" class="form-control" placeholder="請輸入文章內容"><?php if ($_smarty_tpl->tpl_vars['article']->value['content']) {
echo $_smarty_tpl->tpl_vars['article']->value['content'];
}?></textarea>
    </div>
    <div class="form-group">
        <label for="content" class="col-form-label sr-only">封面圖</label>
        <input type="file" class="form-control" name="pic" id="pic" placeholder="上傳封面圖">
    </div>
    <div class="text-center">
        <input type="hidden" name="username" value="<?php echo $_SESSION['username'];?>
">
        <?php if ($_smarty_tpl->tpl_vars['article']->value['sn']) {?>
            <input type="hidden" name="sn" value="<?php echo $_smarty_tpl->tpl_vars['article']->value['sn'];?>
">
            <input type="hidden" name="op" value="update">
        <?php } else { ?>
            <input type="hidden" name="op" value="insert">
        <?php }?>
        <button type="submit" class="btn btn-primary">儲存</button>
    </div>
</form>

<?php echo '<script'; ?>
>
    CKEDITOR.replace('content');

<?php echo '</script'; ?>
><?php }
}
<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="/Public/Admin/bootstrap/css/bootstrap.min.css" />
</head>
<body>
<style>
	li{list-style:none;float:left;margin-left:20px;}
	a{margin-right: 0px}
</style>
	<table class="table table-bordered">
		<tr >
			<th>id</th>
			<th>分类名称</th>
			<th>状态</th>
			<th>操作</th>
		</tr>
		<?php foreach ($row as $key => $value): ?>
		<tr class="success">
			<td><?php echo ($value["id"]); ?></td>
			<td>
				<?php echo ($value["level_name"]); ?>
			</td>
			<td><?php echo $value['status'] == 1?激活:禁止;?></td>
			<td>删除修改</td>
		</tr>
		<?php endforeach ?>
	</table>
	<?php echo $page_show; ?>
	<div style="width:200px;height:160px;margin-left:20px;">
	<form id ="level">
		<label for="">上级类别:</label>
		<select name="parent_id" id="level">
			<?php foreach ($result as $key => $value): ?>
				<option value="<?php echo ($value["id"]); ?>">
					<?php $str = ''; ?>
					<?php for($i=0; $i< $value['level'];$i++):?>
						<?php  $str.='&nbsp;&nbsp;&nbsp;';?>
					<?php endfor; ?>
					<?php echo $str; ?>
					<?php echo ($value["level_name"]); ?></option>
			<?php endforeach ?>
		</select>
		<label for="">类别名称:</label>
		<input type="text" />
		<input type="button" value="确定"/>
	</form>
	</div>
</body>
</html>
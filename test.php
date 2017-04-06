

<? include("bootstrapinclude.php") ?>
<button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
	开始演示模态框
</button>
<!-- 模态框（Modal） -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
		
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
					&times;
				</button>
				<h4 class="modal-title" id="myModalLabel">
					插入图片
				</h4>
			</div>
			<form action="upload_content_img.php" method="post" class="form-inline" role="form" enctype="multipart/form-data" id="uploadform">
			<div class="modal-body">
				<input type="file" id="file" name="file" id="file"/>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">关闭
				</button>
				<button type="subimt" class="btn btn-primary">
					提交
				</button>
				</form>
			</div>
			
		</div><!-- /.modal-content -->
	</div><!-- /.modal -->
</div>
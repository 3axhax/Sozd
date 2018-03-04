<div class="page-header">
    <h3><?=self::$title?></h3>
</div>
<script src="/lib/js/sozd34.js"></script>
<?php foreach ($fileList as $img):?>
    <img src="<?='/lib/img/'.$img?>" class="img-thumbnail task-34" alt="<?=$img?>" title="<?=$img?>">
<?php endforeach;?>
<hr>
<div class="form-horizontal col-md-12">
    <div class="form-group">
        <label class="col-md-2 control-label">Файл:</label>
        <div class="col-md-4">
            <input type="file" id="file" name="file" class="form-control" accept="<?php foreach (\models\Task34::$ext as $ext):?>image/<?=$ext?>, <?php endforeach; ?>">
        </div>
        <div class="help-block" id="file-error"></div>
    </div>
    <div class="form-group">
        <div class="col-md-offset-2 col-md-3">
            <button type="submit" class="btn btn-success" onclick="saveFile()">Загрузить <span class='glyphicon glyphicon-save'></span></button>
        </div>
    </div>
</div>

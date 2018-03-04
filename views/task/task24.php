<div class="page-header">
    <h3><?=self::$title?></h3>
</div>
<div>
    <div class="form-horizontal col-md-12">
        <div class="form-group">
            <label class="col-md-2 control-label">Текст1:</label>
            <div class="col-md-3">
                <input type="text" id="text1" class="form-control" placeholder="Текст1">
            </div>
            <div class="help-block" id="text1-error"></div>
        </div>
        <div class="form-group">
            <label class="col-md-2 control-label">Текст2:</label>
            <div class="col-md-3">
                <input type="text" id="text2" class="form-control" placeholder="Текст2">
            </div>
            <div class="help-block" id="text2-error"></div>
        </div>
        <div class="form-group">
            <label class="col-md-2 control-label">Текст3:</label>
            <div class="col-md-3">
                <input type="text" id="text3" class="form-control" placeholder="Текст3">
            </div>
            <div class="help-block" id="text3-error"></div>
        </div>
        <div class="form-group">
            <div class="col-md-offset-2 col-md-3">
                <button class="btn btn-success" onclick="back()">Отменить <span class="glyphicon glyphicon-arrow-left"></button>
            </div>
        </div>
        <div class="form-group">
            <div id = 'message' class="col-md-offset-2 col-md-3">
            </div>
        </div>
    </div>
</div>
<script src="/lib/js/sozd24.js"></script>

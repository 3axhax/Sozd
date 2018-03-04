<div class="page-header">
    <h3><?=self::$title?></h3>
</div>
<div>
    <div class="form-horizontal col-md-12">
        <div class="form-group">
            <label class="col-md-2 control-label">Текст:</label>
            <div class="col-md-3">
                <input type="text" id="text" class="form-control" placeholder="Текст">
            </div>
            <div class="help-block" id="text-error"></div>
        </div>
        <div class="form-group">
            <label class="col-md-2 control-label">Телефон:</label>
            <div class="col-md-3">
                <input type="tel" id="phone" class="form-control" placeholder="Телефон">
            </div>
            <div class="help-block" id="phone-error"></div>
        </div>
        <div class="form-group">
            <label class="col-md-2 control-label">E-mail:</label>
            <div class="col-md-3">
                <input type="email" id="email" class="form-control" placeholder="E-mail">
            </div>
            <div class="help-block" id="email-error"></div>
        </div>
        <div class="form-group">
            <div class="col-md-offset-2 col-md-3">
                <button class="btn btn-success" onclick="validator()">Проверить форму <span class="glyphicon glyphicon-check"></button>
            </div>
        </div>
        <div class="form-group">
            <div id = 'message' class="col-md-offset-2 col-md-3">
            </div>
        </div>
    </div>
</div>
<script src="/lib/js/sozd22.js"></script>

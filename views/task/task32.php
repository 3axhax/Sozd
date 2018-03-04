<div class="page-header">
    <h3><?=self::$title?></h3>
</div>
    <script src="/lib/js/sozd32.js"></script>
<div>
    <div class="form-horizontal col-md-12">
        <div class="form-group">
            <label class="col-md-2 control-label">Число:</label>
            <div class="col-md-3">
                <input type="text" id="number" class="form-control" placeholder="Число">
            </div>
            <div class="help-block" id="number-error"></div>
        </div>
        <div class="form-group">
            <label class="col-md-2 control-label">Номер месяца:</label>
            <div class="col-md-3">
                <input type="text" id="month" class="form-control" placeholder="Номер месяца">
            </div>
            <div class="help-block" id="month-error"></div>
        </div>
        <div class="form-group">
            <div class="col-md-offset-2 col-md-3">
                <button class="btn btn-success" onclick="transform()">Перевести <span class="glyphicon glyphicon-calendar"></button>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-2 control-label">Дата:</label>
            <div class="col-md-3">
                <input type="text" id="date" class="form-control" readonly>
            </div>
        </div>
    </div>
</div>

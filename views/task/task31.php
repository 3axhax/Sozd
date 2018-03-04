<div class="page-header">
    <h3><?=self::$title?></h3>
</div>
    <script src="/lib/js/sozd31.js"></script>
<div>
    <div class="form-horizontal col-md-12">
        <div class="form-group">
            <label class="col-md-2 control-label">Сумма вклада:</label>
            <div class="col-md-3">
                <input type="text" id="amount" class="form-control" placeholder="Сумма вклада">
            </div>
            <div class="help-block" id="amount-error"></div>
        </div>
        <div class="form-group">
            <label class="col-md-2 control-label">Срок в месяцах:</label>
            <div class="col-md-3">
                <input type="text" id="time" class="form-control" placeholder="Срок в месяцах">
            </div>
            <div class="help-block" id="time-error"></div>
        </div>
        <div class="form-group">
            <label class="col-md-2 control-label">Годовой процент:</label>
            <div class="col-md-3">
                <input type="text" id="percent" class="form-control" placeholder="Годовой процент">
            </div>
            <div class="help-block" id="percent-error"></div>
        </div>
        <div class="form-group">
            <div class="col-md-offset-2 col-md-3">
                <button class="btn btn-success" onclick="toCount()">Посчтитать <span class="glyphicon glyphicon-usd"></button>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-2 control-label">Итоговая сумма вклада:</label>
            <div class="col-md-3">
                <input type="text" id="total" class="form-control" readonly>
            </div>
        </div>
    </div>
</div>

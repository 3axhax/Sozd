<div class="page-header">
    <h3><?=self::$title?></h3>
</div>
<script src="/lib/js/sozd33.js"></script>
<div>
    <div class="form-horizontal col-md-12">
        <div class="form-group">
            <label class="col-md-2 control-label">Число №1:</label>
            <div class="col-md-3">
                <input type="text" id="number1" class="form-control" placeholder="Число №1">
            </div>
            <div class="help-block" id="number1-error"></div>
        </div>
        <div class="form-group">
            <label class="col-md-2 control-label">Оператор:</label>
            <div class="col-md-3">
                <select id="operator" class="form-control">
                    <option value="plus">+</option>
                    <option value="minus">-</option>
                    <option value="divide">/</option>
                    <option value="multiply">*</option>
                </select>
            </div>
            <div class="help-block" id="operator-error"></div>
        </div>
        <div class="form-group">
            <label class="col-md-2 control-label">Число №2:</label>
            <div class="col-md-3">
                <input type="text" id="number2" class="form-control" placeholder="Число №2">
            </div>
            <div class="help-block" id="number2-error"></div>
        </div>
        <div class="form-group">
            <div class="col-md-offset-2 col-md-3">
                <button class="btn btn-success" onclick="calculate()">Рассчитать <span class="glyphicon glyphicon-th"></button>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-2 control-label">Ответ:</label>
            <div class="col-md-3">
                <input type="text" id="answer" class="form-control" readonly>
            </div>
        </div>
    </div>
</div>

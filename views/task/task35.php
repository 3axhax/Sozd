<div class="page-header">
    <h3><?=self::$title?></h3>
</div>
    <script src="/lib/js/sozd35.js"></script>
<div>
    <div class="form-horizontal col-md-12">
        <div class="form-group">
            <label class="col-md-2 control-label">Минуты:</label>
            <div class="col-md-3">
                <input type="text" id="minutes" class="form-control" placeholder="Минуты">
            </div>
            <div class="help-block" id="minutes-error"></div>
        </div>
        <div class="form-group">
            <label class="col-md-2 control-label">Часы:</label>
            <div class="col-md-3">
                <input type="text" id="hours" class="form-control" placeholder="Часы">
            </div>
            <div class="help-block" id="hours-error"></div>
        </div>
        <div class="form-group">
            <div class="col-md-offset-2 col-md-3">
                <button class="btn btn-success" onclick="calculate()">Посчитать угол <span class="glyphicon glyphicon-time"></button>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-2 control-label">Угол между стрелками:</label>
            <div class="col-md-3">
                <input type="text" id="answer" class="form-control" readonly>
            </div>
        </div>
    </div>
</div>

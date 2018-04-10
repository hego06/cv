<div class="box-body">
    <div class="form-group">
        <label for="degree">Grado</label>
        <input type="text" class="form-control" id="degree" name="degree" value="{{isset($education)?$education->degree:''}}">
    </div>
    <div class="form-group">
        <label for="name">Titulo</label>
        <input type="text" class="form-control" id="name" name="name" value="{{isset($education)?$education->name:''}}">
    </div>
    <div class="form-group">
        <label for="institution">Institución</label>
        <input type="text" class="form-control" id="institution" name="institution" value="{{isset($education)?$education->institution:''}}">
    </div>
    <div class="form-group">
        <label>Fecha inicial:</label>
        <div class="input-group">
            <div class="input-group-addon">
                <i class="fa fa-calendar"></i>
            </div>
            <input type="text" class="form-control" name="initialdate" data-inputmask="'alias': 'yyyy-mm-dd'" data-mask value="{{isset($education)?$education->initialdate->toDateString():''}}">
        </div>
    </div>
    <div class="form-group">
        <label>Fecha final:</label>
        <div class="input-group">
            <div class="input-group-addon">
                <i class="fa fa-calendar"></i>
            </div>
            <input type="text" class="form-control" name="finaldate" data-inputmask="'alias': 'yyyy-mm-dd'" data-mask value="{{isset($education)?$education->finaldate->toDateString():''}}">
        </div>
    </div>
</div>
<div class="box-footer">
    <button type="submit" class="btn btn-primary">Guardar</button>
</div>
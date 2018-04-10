<div class="box-body">
    <div class="form-group">
        <label for="degree">Puesto</label>
        <input type="text" class="form-control" id="degree" name="name" value="{{isset($experience)?$experience->name:''}}">
    </div>
    <div class="form-group">
        <label for="name">Lugar</label>
        <input type="text" class="form-control" id="place" name="place" value="{{isset($experience)?$experience->place:''}}">
    </div>
    <div class="form-group">
        <label for="institution">Descripción</label>
        <textarea class="form-control" id="description" name="description" rows="3">{{isset($experience)?$experience->description:''}}</textarea>
    </div>
    <div class="form-group">
        <label>Fecha inicial:</label>
        <div class="input-group">
            <div class="input-group-addon">
                <i class="fa fa-calendar"></i>
            </div>
            <input type="text" class="form-control" name="initialdate" data-inputmask="'alias': 'yyyy-mm-dd'" data-mask value="{{isset($experience)?$experience->initialdate->toDateString():''}}">
        </div>
    </div>
    <div class="form-group">
        <label>Fecha final:</label>
        <div class="input-group">
            <div class="input-group-addon">
                <i class="fa fa-calendar"></i>
            </div>
            <input type="text" class="form-control" name="finaldate" data-inputmask="'alias': 'yyyy-mm-dd'" data-mask value="{{isset($experience)?$experience->finaldate->toDateString():''}}">
        </div>
    </div>
</div>
<div class="box-footer">
    <button type="submit" class="btn btn-primary">Guardar</button>
</div>
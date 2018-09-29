<div class="box-header with-border">
    <h3 class="box-title">Datos</h3>
</div>
<form class="form-horizontal">
    <div class="box-body">
        <label class="control-label">Item:</label>
        <div class="form-group">
            <label class="col-sm-2 control-label"></label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputEmail3" placeholder="Carnet de Identidad">
            </div>
        </div>
        <label class="control-label">Cedula Identidad:</label>
        <div class="form-group">
            <label class="col-sm-2 control-label"></label>
            <div class="col-sm-4">
                <input type="text" class="form-control" id="inputPassword3" placeholder="Password">
            </div>
            <div class="col-sm-4">
                {{--  {{ $departamento }}  --}}
                <select name="example1_length" aria-controls="example1" class="form-control input-sm">
                  @foreach ($departamento as $departamentos)
                    <option value="{{ $departamentos['id']}}">{{ $departamentos['abreviatura']}}</option>    
                  @endforeach
                </select> 
            </div>
        </div>
        <label class="control-label">Paterno:</label>
        <div class="form-group">
            <label class="col-sm-2 control-label"></label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputPassword3" placeholder="Password">
            </div>
        </div>
        <label class="control-label">Materno:</label>
        <div class="form-group">
            <label class="col-sm-2 control-label"></label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputPassword3" placeholder="Password">
            </div>
        </div>
        <label class="control-label">Nombres:</label>
        <div class="form-group">
            <label class="col-sm-2 control-label"></label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputPassword3" placeholder="Password">
            </div>
        </div>
        <label class="control-label">Fecha de Nacimiento:</label>
        <div class="form-group">
            <label class="col-sm-2 control-label"></label>
            <div class="col-sm-10">
                <input type="date" class="form-control" id="inputPassword3" placeholder="Password">
            </div>
        </div>
        <label class="control-label">Genero:</label>
        <div class="form-group">
            <label class="col-sm-2 control-label"></label>
            <div class="col-sm-10">
                <select class="form-control" placeholder="dd">
                    <option value="">Seleccione una Opción</option>
                    <option value="M">MASCULINO</option>
                    <option value="F">FEMENINO</option>
                </select> 
            </div>
        </div>
        <label class="control-label">Correo Electronico:</label>
        <div class="form-group">
            <label class="col-sm-2 control-label"></label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputPassword3" placeholder="Password">
            </div>
        </div>
        <label class="control-label">Dirección:</label>
        <div class="form-group">
            <label class="col-sm-2 control-label"></label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputPassword3" placeholder="Password">
            </div>
        </div>
        <label class="control-label">Telefono:</label>
        <div class="form-group">
            <label class="col-sm-2 control-label"></label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputPassword3" placeholder="Password">
            </div>
        </div>
        <label class="control-label">Celular:</label>
        <div class="form-group">
            <label class="col-sm-2 control-label"></label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputPassword3" placeholder="Password">
            </div>
        </div>
    </div>
    <div class="box-footer">
        <button type="submit" class="btn btn-info pull-right">Guardar</button>
    </div>
</form>
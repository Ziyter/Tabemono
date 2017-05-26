Адрес<br>
<center>
    <div class="btn-group" data-toggle="buttons" >
        <label class="btn order radiobt rbold" value="new">
            <input type="radio" class="btaddress" name="optionsRadios1">
            Новый
        </label>
        <label class="btn order radiobt rbnew" value="old">
            <input type="radio" class="btaddress"  name="optionsRadios2">
            Из списка
        </label>
    </div>
</center>
<select class="form-control list_address">
</select>
<div class="address_block_order"  class="form-group row">
    <input type="text" id="address_input" name="newaddress" placeholder="Введите новый адрес" class="form-control">
    <div class="form-control-feedback"></div>
</div>
<br>
<div class="form-group">
    <label for="inputTime">Введите время:</label>
    <input type="time" id="time" name="time" class="form-control time-input" value="now">
    <div class="form-control-feedback"></div>
</div>
<div class="form-group">
    <label for="inputDate">Введите дату:</label>
    <input type="date" id="date"  name="date" class="form-control date-input">
    <div class="form-control-feedback"></div>
</div>
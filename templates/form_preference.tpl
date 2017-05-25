<form id="ordering_preference_form">
    Адрес<br>
    <center>
        <div class="btn-group" data-toggle="buttons" >
            <label class="btn order radiobt rbold" value="new">
                <input type="radio" name="optionsRadios">
                Новый
            </label>
            <label class="btn order radiobt rbnew" value="old">
                <input type="radio" name="optionsRadios">
                Из списка
            </label>
        </div>
    </center>
    <select class="form-control list_address">
    </select>
    <div class="address_block_order"  class="form-group row">
        <div class="col-sm-7 col-lg-8">
            <input required type="text" size='30' id="address" name="address" placeholder="Введите новый адрес" class="form-control" >
        </div>
    </div>
    <br>
    <div class="form-group">
        <label for="inputTime">Введите время:</label>
        <input type="time" class="form-control time-input" value="00:00">
    </div>
    <div class="form-group">
        <label for="inputDate">Введите дату:</label>
        <input type="date" class="form-control date-input">
    </div>
</form>
@extends('admin.master')

@section('body')
    <table class="table table-bordered table-hover" id="tab_logic">
        <thead>
        <tr>
            <th class="text-center"> # </th>
            <th width="25%" class="text-center"> Raw Material Name</th>
            <th class="text-center"> Price </th>
            <th class="text-center"> Qty </th>
            <th class="text-center"> Sub Total </th>
        </tr>
        </thead>
        <tbody>
        <tr id='addr0'>
            <td>1</td>
            <td>
                <select name="raw_material_ids[]" id="" class="form-control">
                    <option>ond</option>
                    <option>ond</option>
                    <option>ond</option>
                </select>
            </td>
            <td><input type="number" name='price[]' placeholder='Enter Unit Price'
                       class="form-control price" min="0" /></td>
            <td><input type="number" name='qty[]' placeholder='Enter Qty' class="form-control qty"
                       min="0" /></td>
            <td><input type="number" name='total[]' placeholder='0.00' class="form-control total"
                       readonly /></td><td><button id="add_row" value="add"></button></td>
        </tr>
        <tr id='addr1'></tr>
        </tbody>
    </table>

    @endsection

@section('js_attach')
<script>
    $(document).ready(function(){
    var i=1;
    $("#add_row").click(function(){b=i-1;
    $('#addr'+i).html($('#addr'+b).html()).find('td:first-child').html(i+1);
    $('#tab_logic').append('<tr id="addr'+(i+1)+'"></tr>');
    i++;
    });
    $("#delete_row").click(function(){
    if(i>1){
    $("#addr"+(i-1)).html('');
    i--;
    }
    calc();
    });
    });

</script>
    @endsection
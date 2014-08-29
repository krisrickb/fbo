(function($){
    $(document).ready(function(){

        var amount_fields =   $("input.digits");
        amount_fields.after('<div class="inc button">+</div><div class="dec button">-</div>');
        amount_fields.each(function(){
            var value_field = $(this);
            var plus =  $(this).next();
            var minus = plus.next();
            plus.on('click',function(){
                var field_value =  (value_field.attr('value') !=''?value_field.attr('value'):0);

               value_field.val(parseFloat(field_value)+1);
            });
            minus.on('click',function(){

                 var field_value =  (value_field.attr('value') !=''?value_field.attr('value'):0);
                          if(field_value != 0)

                          {
                 value_field.val(parseFloat(field_value) - 1);
                }
            });
        });


        var currentHour =(new Date()).getHours();
        if (currentHour > 18){
            var dateFormat = $.datepicker.formatDate('DD MM dd, yy', new Date((new Date).getTime()+48*60*60*1e3));
            $("input.date").minDate = (new Date).getTime()-24;
        }else{
            var dateFormat = $.datepicker.formatDate('DD MM dd, yy', new Date((new Date).getTime()+24*60*60*1e3));

        }
        $("input.date").val(dateFormat);
    });
})(jQuery);

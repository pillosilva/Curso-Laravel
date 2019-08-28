var biblioteca = function (){
    return{
        validacionGeneral:function(id, reglas, mensajes) {
            const formulario=$('#' + id);
            formulario.validate({
                rules: reglas,
                messages: mensajes,
                errorElement: 'span',
                errorClass:'help-block help-block-error',
                focusinvalid:false,
                ignore: "",
                higlight: function (element, errorClass, validClass) {
                    $(element).closest('.form-group').addClass('has-error');
                },   

                unhighlight: function(element){
                    $(element).closest('.form-group').removeClass('has-error');
                },
                success: function(label) {
                    $(label).closest('.form-group').removeClass('has-error');
                },
                errorPlacement:function(error, element){
                    if ($(element).is('select') && element.hasClass('bs-select')) {
                        error.insertAfter(element);
                    }else if($(element).is('select') && element.hasClass('select2-hidden-accessible')) {
                        element.next().after(error);

                    }else if(element.attr("data-error-container")){
                        error.appendTo(element.attr("data-error-container"));
                    }else {
                        error.insertAfter(element);
                    }
                },
                invalidHandler: function(event, validate){

                },
                submitHandler: function(form){

                }
            });
            },
          }
}();
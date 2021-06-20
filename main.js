jQuery(function($){
    jQuery('#calc').submit(function() {
      let filter = jQuery(this);
      $.ajax({
        url: '/function.php',
        data: filter.serialize(),
        type: 'POST',
        beforeSend: function(xhr){
          filter.find('button.result').text('Считаем');
        },
        success: function(data){
          filter.find('button.result').text('Посчитано');
          $('#res').html(data);
        },
      });
      return false;
    });

    jQuery('.btn-num').click(function() {
      let val = $(this).val();
      let mode = $('#mode').val();
      let fieldOutputVal = $('.field').val();
      if(mode == '')
      {
        fieldOutputVal += val+'';
        $('.field').val(fieldOutputVal);
      }
      else
      {
        $('#result').val(fieldOutputVal);
        $('.field').val(val);
        $('#mode').val('');
      }

    });

    jQuery('.act').click(function() {
      let val = $(this).val();
      $('#currentoperation').val(val);
      $('#mode').val(1);
    });

    jQuery('#reset').click( function() {
      $('.field').val(0);
      $('#currentoperation').val(0);
      $('#mode').val(0);
      $('#result').val(0);
    })

    jQuery('.equals').click(function() {
      let curOperation =  $('#currentoperation').val();
      let fieldOutputVal = $('.field').val();
      let result = $('#result').val();
      $('#mode').val(1);
      $.ajax({
        url: '/function.php',
        data: { curOperation: curOperation, fieldOutputVal: fieldOutputVal, result: result},
        type: 'POST',
        success: function(data){
          $('.field').val(data);
          $('#result').val('');
        },
      });
    });


  });

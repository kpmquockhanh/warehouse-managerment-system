$(document).ready(function() {
    $(".child>div").mouseover(function(){
        $(this).find('.add-cart-flash').css('visibility','visible').css('z-index',1000);
        $(this).find('img').css('opacity','0.2');
    }).mouseout(function(){
        $(this).find('img').css('opacity','1');
        $(this).find('.add-cart-flash').css('visibility','hidden');
    })

    $(".block-muahang-menu .mdi-plus").on('click', function(){
        $(this).parents('li').addClass('active');
    });
    $(".block-muahang-menu .mdi-minus").on('click', function(){
        $(this).parents('li').removeClass('active');
    });

    // $('.fa-search').on('click', function(){
    //   $('.nav-search').show();
    // });

    // $('body main.body').on('click', function(){
    //   $('.nav-search').hide();
    // });

    window.addEventListener('click', function(e){   
      if (document.querySelector('.fa-search').contains(e.target)){
        $('.nav-search').show();
      }
      else if (document.querySelector('.nav-search').contains(e.target)) {

      } 
      else{
        $('.nav-search').hide();
      }
    });

});
function increaseValue() {
    var value = parseInt(document.getElementById('number').value, 10);
    value = isNaN(value) ? 1 : value;
    value < 5 ? value++ : "";
    if(value < 10) value = "0"+value;
    document.getElementById('number').value = value;
  };
  
  function decreaseValue() {
    var value = parseInt(document.getElementById('number').value, 10);
    value = isNaN(value) ? 1 : value;
    // value < 1 ? value = 2 : '';
    value > 1 ? value-- : "";
    
    if(value < 10) value = "0"+value;
    document.getElementById('number').value = value;
  };

function checkNaN(value) {
    var value = parseFloat(value);
    value = isNaN(value)||value==''?0:value;
    return parseFloat(value.toFixed(0));
};

function formatNumber(nStr) {
  nStr = nStr.toString().replace( /,/g ,"");
  nStr = parseFloat(nStr);
  nStr = isNaN(nStr)||nStr==''?0:nStr;
  nStr += '';
  var x = nStr.split('.');
  var x1 = x[0];
  var x2 = x.length > 1 ? '.' + x[1] : '';
  var rgx = /(\d+)(\d{3})/;
  while (rgx.test(x1)) {
    x1 = x1.replace(rgx, '$1' + ',' + '$2');
  }
  return x1 + x2;
};
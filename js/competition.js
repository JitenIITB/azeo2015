$(function() {

          // var a  #ab1, #ab2, #ab3, #ab4, #ab5, #ab6, #ab7, #ab8, #ab9, #ab10
           

              $(document).ready(function(){

                  // grid to individual competition transition
                
                  // individual competition content variation
                  $('#ab1, #ab2, #ab3, #ab4, #ab5, #ab6, #ab7, #ab8, #ab9, #ab10').click(function(){
                      $('#probs1, #probs2, #probs3, #probs4, #probs5, #probs6, #probs7, #probs8, #probs9, #probs10').hide().removeClass('animated bounceInUp');
                      $('#regis1, #regis2, #regis3, #regis4, #regis5, #regis6, #regis7, #regis8, #regis9, #regis10').hide().removeClass('animated bounceInDown');
                      $('#contact1, #contact2, #contact3, #contact4, #contact5, #contact6, #contact7, #contact8, #contact9, #contact10').hide().removeClass('animated bounceInUp');
                      $('#desc1, #desc2, #desc3, #desc4, #desc5, #desc6, #desc7, #desc8, #desc9, #desc10').show().addClass('animated bounceInDown');
                  });

                  $('#ps1, #ps2, #ps3, #ps4, #ps5, #ps6, #ps7, #ps8, #ps9, #ps10').click(function(){
                      $('#desc1, #desc2, #desc3, #desc4, #desc5, #desc6, #desc7, #desc8, #desc9, #desc10').hide().removeClass('animated bounceInDown');
                      $('#regis1, #regis2, #regis3, #regis4, #regis5, #regis6, #regis7, #regis8, #regis9, #regis10').hide().removeClass('animated bounceInDown');
                      $('#contact1, #contact2, #contact3, #contact4, #contact5, #contact6, #contact7, #contact8, #contact9, #contact10').hide().removeClass('animated bounceInUp');
                      $('#probs1, #probs2, #probs3, #probs4, #probs5, #probs6, #probs7, #probs8, #probs9, #probs10').removeClass('hide').show().addClass('animated bounceInUp');     
                  });

                  $('#rg1, #rg2, #rg3, #rg4, #rg5, #rg6, #rg7, #rg8, #rg9, #rg10').click(function(){
                      $('#desc1, #desc2, #desc3, #desc4, #desc5, #desc6, #desc7, #desc8, #desc9, #desc10').hide().removeClass('animated bounceInDown');
                      $('#probs1, #probs2, #probs3, #probs4, #probs5, #probs6, #probs7, #probs8, #probs9, #probs10').hide().removeClass('animated bounceInUp');
                      $('#contact1, #contact2, #contact3, #contact4, #contact5, #contact6, #contact7, #contact8, #contact9, #contact10').hide().removeClass('animated bounceInUp');
                      $('#regis1, #regis2, #regis3, #regis4, #regis5, #regis6, #regis7, #regis8, #regis9, #regis10').removeClass('hide').show().addClass('animated bounceInDown');
                  });

                  $('#cn1, #cn2, #cn3, #cn4, #cn5, #cn6, #cn7, #cn8, #cn9, #cn10').click(function(){
                      $('#desc1, #desc2, #desc3, #desc4, #desc5, #desc6, #desc7, #desc8, #desc9, #desc10').hide().removeClass('animated bounceInDown');
                      $('#probs1, #probs2, #probs3, #probs4, #probs5, #probs6, #probs7, #probs8, #probs9, #probs10').hide().removeClass('animated bounceInUp');
                      $('#regis1, #regis2, #regis3, #regis4, #regis5, #regis6, #regis7, #regis8, #regis9, #regis10').hide().removeClass('animated bounceInDown');
                      $('#contact1, #contact2, #contact3, #contact4, #contact5, #contact6, #contact7, #contact8, #contact9, #contact10').removeClass('hide').show().addClass('animated bounceInUp');
                  });

             
              });


              $(window).load(function(){
                    $('#probs1, #probs2, #probs3, #probs4, #probs5, #probs6, #probs7, #probs8, #probs9, #probs10').hide();
                    $('#regis1, #regis2, #regis3, #regis4, #regis5, #regis6, #regis7, #regis8, #regis9, #regis10').hide();
                    $('#contact1, #contact2, #contact3, #contact4, #contact5, #contact6, #contact7, #contact8, #contact9, #contact10').hide();
                    $('#desc1, #desc2, #desc3, #desc4, #desc5, #desc6, #desc7, #desc8, #desc9, #desc10').show();

              });

        
});
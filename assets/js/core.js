$(document).ready(function(){
          
            $('#adddeal').click(function(){
                
                alert('adf');
                
            });
                       var link="http://localhost/simulator/simulator/index.php";
           $("ul.products form").submit(function(){
                   
                   var id=$(this).find('input[name=pid]').val();var qua=$(this).find('input[name=quan]').val();
                     
                     $.post(link+'/cart/add_new_item', {pid:id,quan:qua,ajax:1 },
                      function(data) {
                                   
                          ('#feedback').html(data);
                          
                      }
                     );
               
           });
          
          
      })  ;
      
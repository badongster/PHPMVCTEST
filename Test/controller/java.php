<script>
    $(document).ready(function(){
        function dataFetch(){
            alert("aasf");
            $.ajax({  
                url:"select.php",  
                method:"POST",  
                success:function(data){
                    $('#live_data').html(data);  
                },
                error: function(){
                    alert('error!');
                }  
            });  
        };

        $(document).on('click', '#btn_add', function(){  
            var first_name = $('#first_name').text();  
            var last_name = $('#last_name').text();  
            if(first_name == '')  
            {  
                alert("Enter First Name");  
                return false;  
            }  
            if(last_name == '')  
            {  
                alert("Enter Last Name");  
                return false;  
            }  
            $.ajax({  
                url:"insert.php",  
                method:"POST",  
                data:{first_name:first_name, last_name:last_name},  
                dataType:"text",  
                success:function(data)  
                {  
                        alert(data);  
                        dataFetch();
                }  
            })  
        });
        
        $("#test").click(function(){

            dataFetch();
        });

        function edit_data(id, text, column_name)  
        {  
            $.ajax({  
                url:"update.php",  
                method:"POST",  
                data:{id:id, text:text, column_name:column_name},  
                dataType:"text",  
                success:function(data){  
                    alert(data);  
                }  
            });  
        }  

        $(document).on('blur', '.first_name', function(){  
            var id = $(this).data("id1");  
            var first_name = $(this).text();  
            edit_data(id, first_name, "FirstName");  
        });  

        $(document).on('blur', '.last_name', function(){  
            var id = $(this).data("id2");  
            var last_name = $(this).text();  
            edit_data(id,last_name, "LastName");  
        });  

        $(document).on('click', '.btn_delete', function(){  
            var id=$(this).data("id3");  
            if(confirm("Are you sure you want to delete this?"))  
            {  
                $.ajax({  
                        url:"delete.php",  
                        method:"POST",  
                        data:{id:id},  
                        dataType:"text",  
                        success:function(data){  
                            alert(data);  
                            dataFetch();  
                        }  
                });  
            }  
        });  
        
    });
</script>
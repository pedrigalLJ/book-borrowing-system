    <?php include '../repeatable/footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.12.1/datatables.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            $("table").DataTable();

            //Add book ajax request
            $("#add-book-btn").click(function(e){
                if($("#add-book-form")[0].checkValidity()){
                    e.preventDefault();

                    $("#add-book-btn").val('Please Wait...');

                    $.ajax({
                        url: '../process.php',
                        method: 'post',
                        data: $("#add-book-form").serialize()+'&action=add-book',
                        success: function(response){
                            console.log(response);
                            $("#add-book-btn").val('Please Wait...');
                        }
                    });
                }
            });
        });

    </script>

</body>
</html>

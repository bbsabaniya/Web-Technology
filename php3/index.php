<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AJAX Example</title>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#submitBtn").click(function(){
                var name = $("#name").val();
                var email = $("#email").val();

                $.ajax({
                    type: "POST",
                    url: "process.php",  // Separate PHP file for processing
                    data: { name: name, email: email },
                    success: function(response) {
                        $("#response").html(response);
                    }
                });
            });
        });
    </script>
</head>
<body>

<h2>AJAX Example</h2>

<form id="ajax-form">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required>
    
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>
    
    <button type="button" id="submitBtn">Submit</button>
</form>

<div id="response"></div>

</body>
</html>

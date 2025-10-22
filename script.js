$(document).ready(function(){
    $("#regForm").submit(function(e){
        e.preventDefault();
        if($("#course").val() === "") { alert("Please select a course."); return; }

        $.ajax({
            url: "submit.php",
            type: "POST",
            data: $(this).serialize(),
            success: function(response){
                $("#result").html(response);
                $("#regForm")[0].reset();
            },
            error: function(){
                $("#result").html("<p style='color:red;'>Error submitting form</p>");
            }
        });
    });
});

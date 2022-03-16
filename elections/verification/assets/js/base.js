$(function () {
    $("form#general-form").submit(function (event) {
        event.preventDefault();

        var f = $(this);
        submitForm(f);

    });

});


var myinterval = "";

function submitForm(f) {


    //reset progress
    resetProgress();

    // clear errors
    $("#notifications").html("");

    // close progress
    $(".progress").show("slow");

    //hide modal
    $("#id-downloadticket-modal").modal("hide");

    $.ajax({
        url: "./voter_registration.php",
        type: "POST",
        data: f.serialize(),
        success: function (res) {
            console.log("success", res);

            try {
                var res = JSON.parse(res);
                if (res.type == "success") {
                    $("#studnum-placeholder").attr("href", res.value);
                    $("#studnum-placeholder-img").attr("src", res.value);
                    $("#id-downloadticket-modal").modal("show");

                    //set progress bar to 100%
                    clearInterval(myinterval);
                    $("#progress").css("width", "100%");
                    $("#progress").html("100%");

                } else if (res.type == "error") {
                    var errors = res.value;
                    errors.forEach(element => {
                        notify(element, "danger", 0);
                    });

                    //reset progress
                    resetProgress();

                } else if (res.type == "student_data") {
                    $("#retrived-studs tbody").html("");
                    $("#retrived-studs").show();
                    res.value.forEach(function (v, i) {
                        $("#retrived-studs tbody").append(
                            `<tr>
                            <form action="">
                            <th scope="row">1</th>
                            <td>` + v.name + `</td>
                            <td>` + v.province + `</td>
                            <td>` + v.university + `</td>
                            <td> <input type="email" name="email" placeholder="email" required></td>
                            <input type="hidden" name="action" value="get_voter">
                            <td><button type="submit" style="font-size: 20px;" class="btn btn-sm btn-primary btn-block">Verify</button></td>
                            </form>
                            </tr>`
                        );
                    });

                    //set progress bar to 100%
                    clearInterval(myinterval);
                    $("#progress").css("width", "100%");
                    $("#progress").html("100%");
                }
            } catch (e) {
                console.log("exception", res,e);

                notify("An error occurred, try again after a few minutes", "danger", 0);

                //reset progress
                resetProgress();
            }
        },
        error: function (res) {
            console.log("error", res);

            notify("An error occurred, try again after a few minutes", "danger", 0);

            //reset progress
            resetProgress();

        },
        complete: function () {

        }
    });

    //hide modal
    $("#id-downloadticket-modal").modal("hide");

    var width = 10;
    myinterval = setInterval(function () { // set interval to show progress
        width += 10;
        $("#progress").css("width", width + "%");
        $("#progress").html(width + "%");

        if (width == 90) {
            clearInterval(myinterval);
        }
    }, 1000)

}


// reset progress
function resetProgress() {

    if (myinterval) {
        clearInterval(myinterval);
    }


    //reset progress
    $("#progress").css("width", "10%");
    $("#progress").html("10%");
    $(".progress").hide("slow"); // hide the progress bar
}

function resetgetTicket() {
    //reset progress
    resetProgress();

    // clear errors
    $("#notifications").html("");

    //clear input
    $("#student-num").val("");

}
function pagination(totalpages, currentpage) {
    var pagelist = "";
    if (totalpages > 1) {
        currentpage = parseInt(currentpage);
        pagelist += `<ul class="pagination justify-content-center">`;
        const prevClass = currentpage == 1 ? " disabled" : "";
        pagelist += `<li class="page-item${prevClass}"><a class="page-link" href="#" data-page="${currentpage - 1}">Previous</a></li>`;
        for (let p = 1; p <= totalpages; p++) {
            const activeClass = currentpage == p ? " active" : "";
            pagelist += `<li class="page-item ${activeClass}"><a class="page-link" href="#" data-page="${p}">${p}</a></li>`;
        }
        const nextClass = currentpage == totalpages ? " disabled" : "";
        pagelist += `<li class="page-item${nextClass}"><a class="page-link" href="#" data-page="${currentpage + 1}">Next</a></li>`;
        pagelist += `</ul>`;
    }
    $("#pagination").html(pagelist);
}
function getquestions(player) {
    var playerRow = "";
    if (player) {
        playerRow = `<tr>
        <td class="align-middle" style="max-width: 6em;overflow: hidden;text-overflow: ellipsis;white-space: nowrap;">${player.mm_ID}</td>
        <td class="align-middle" style="max-width: 6em;overflow: hidden;text-overflow: ellipsis;white-space: nowrap;"><img src="database/db2/uploads/${player.mm_question}" class="img-thumbnail rounded float-left"></td>
        <td class="align-middle" style="max-width: 6em;overflow: hidden;text-overflow: ellipsis;white-space: nowrap;">${player.mm_option1}</td>
        <td class="align-middle" style="max-width: 6em;overflow: hidden;text-overflow: ellipsis;white-space: nowrap;">${player.mm_option2}</td>
        <td class="align-middle" style="max-width: 6em;overflow: hidden;text-overflow: ellipsis;white-space: nowrap;">${player.mm_option3}</td>
        <td class="align-middle" style="max-width: 6em;overflow: hidden;text-overflow: ellipsis;white-space: nowrap;">${player.mm_option4}</td>
        <td class="align-middle" style="max-width: 6em;overflow: hidden;text-overflow: ellipsis;white-space: nowrap;">${player.mm_answer}</td>
        <td class="align-middle">
        <a href="#" class="btn btn-success mr-3 profile" data-toggle="modal" data-target="#userViewModal" title="Profile" data-id="${player.mm_ID}"><i class="fa fa-address-card-o" aria-hidden="true"></i></a>
        <a href="#" class="btn btn-warning mr-3 edituser" data-target="#userModal" title="Edit" data-id="${player.mm_ID}"><i class="fa fa-pencil-square-o fa-lg"></i></a>
        <a href="#" class="btn btn-danger deleteuser" data-userid="14" title="Delete" data-id="${player.mm_ID}"><i class="fa fa-trash-o fa-lg"></i></a>
      </td>
      </tr>`;
    }
    return playerRow;
}
//get players list
function getplayers() {
    var pageno = $("#currentpage").val();
    $.ajax({
        url: "ajax/mm_ajax.php",
        type: "GET",
        dataType: "json",
        data: { page: pageno, action: "getusers" },
        beforeSend: function () {
            // $("#overlay").fadeIn();
        },
        success: function (rows) {
            console.log(rows);
            if (rows.list) {
                var questionlist = "";
                $.each(rows.list, function (index, player) {
                    questionlist += getquestions(player);
                });
                $("#userstable tbody").html(questionlist);
                let totalPlayers = rows.count;
                let totalpages = Math.ceil(parseInt(totalPlayers) / 10);
                const currentpage = $("#currentpage").val();
                pagination(totalpages, currentpage);
                // $("#overlay").fadeOut();
            }
        },
        error: function () {
            console.log("something went wrong");
        },
    });
}
//on submit click
function popup(){
    $('[id*="userModal"]').modal('show');
}
$(document).ready(function () {
    //add/edit user
    $(document).on( "submit", "#addform", function (event) {
        
            event.preventDefault();
            $.ajax({
                url: "ajax/mm_ajax.php",
                type: "POST",
                dataType: "json",
                data:new FormData(this),
                processData: false,
                contentType: false,
                beforeSend: function () {
                    // $('#overlay').fadeIn();
                    if (document.getElementById("photo1").value == "" && document.getElementById("questionphoto1").value == "") {
                        alert("select image first");
                        return false;
                    }
                    else if(document.getElementById("option1").value == ""){
                        alert("enter option1");
                        return false;
                    }
                    else if(document.getElementById("option2").value == ""){
                        alert("enter option2");
                        return false;
                    }
                    else if(document.getElementById("option3").value == ""){
                        alert("enter option3");
                        return false;
                    }
                    else if(document.getElementById("option4").value == ""){
                        alert("enter option4");
                        return false;
                    }
                    else if(document.getElementById("answer").value == ""){
                        alert("select option first");
                        return false;
                    }
                },
                success: function (response) {
                    console.log(response);
                    if (response) {
                        $('#userModal').modal("hide");
                        $('#addform')[0].reset();
                        getplayers();
                        // $('#overlay').fadeOut();
                    }
                },
                error: function () {
                    console.log("oops galti se mistake ho gai");
                    console.log(response);

                }
            });
        
    });
    $(document).on("click", "ul.pagination li a", function (event) {
        event.preventDefault();
        var $this = $(this);
        const pagenum = $(this).data("page");
        $("#currentpage").val(pagenum);
        getplayers();
        $this.parent().siblings().removeClass("active");
        $this.parent().addClass("active");
    });
    $(document).on("click", "a.deleteuser", function (e) {
        e.preventDefault();
        var pid = $(this).data("id");
        var photo = document.getElementById("hp1");
        if (confirm("Are you sure want to delete this?")) {
            $.ajax({
                url: "ajax/mm_ajax.php",
                type: "GET",
                dataType: "json",
                data: { id: pid, action: "deleteuser", delphoto: photo },
                beforeSend: function () {
                    // $("#overlay").fadeIn();
                },
                success: function (res) {
                    if (res.deleted == 1) {
                        getplayers();
                        // $("#overlay").fadeOut();
                    }
                },
                error: function (response) {
                    console.log("something went wrong");
                    console.log(response);
                },
            });
        }
    });
    $(document).on("click", "a.profile", function () {
        var pid = $(this).data("id");
        $.ajax({
            url: "ajax/mm_ajax.php",
            type: "GET",
            dataType: "json",
            data: { id: pid, action: "getuser" },
            success: function (player) {
                switch(player.mm_answer){
                    case "A":
                        var answer = player.mm_option1;
                        break;
                    case "B":
                        var answer = player.mm_option2;
                        break;
                    case "C":
                        var answer = player.mm_option3;
                        break;
                    case "D":
                        var answer = player.mm_option4;
                        break;
                };
                if (player) {
                    const profile = `<div class="row">
                    <div class="col-sm-6 col-md-8">
                        <h4 class="text-primary">Question no : ${player.mm_ID}</h4>
                        <p class="text-secondary" style="word-wrap:break-word;width:400px;">
                        <i class="fa " aria-hidden="true"></i><img src="database/db2/uploads/${player.mm_question}" class="img-thumbnail rounded float-left">
                        <br />
                        <i class="fa " aria-hidden="true"></i>Answer : ${answer}
                        </p>
                    </div>
                    
                </div>`;
                    $("#profile").html(profile);
                }
            },
            error: function () {
                console.log("something went wrong");
            },
        });
    });
    $("#addnewbtn").on("click",function(){
        $("#addform")[0].reset();
        $("#qid").val("");

    });
    $(document).on("click", "a.edituser", function () {
        popup();
        var pid = $(this).data("id");
        $.ajax({
            url: "ajax/mm_ajax.php",
            type: "GET",
            dataType: "json",
            data: { id: pid, action: "getuser" },
            beforeSend: function () {
                $("#overlay").fadeIn();
            },
            success: function (player) {
                console.log(player);
                if (player) {
                    $("#photo1").val(player.mm_question);
                    $("#option1").val(player.mm_option1);
                    $("#option2").val(player.mm_option2);
                    $("#option3").val(player.mm_option3);
                    $("#option4").val(player.mm_option4);
                    $("#answer").val(player.mm_answer);
                    $("#qid").val(player.mm_ID);
                }
                $("#overlay").fadeOut();
            },
            error: function () {
                console.log("something went wrong");
            },
        });
    });
    $("#searchinput").on("keyup", function () {
        const searchText = $(this).val();
        if (searchText.length >= 1) {
            $.ajax({
                url: "ajax/mm_ajax.php",
                type: "GET",
                dataType: "json",
                data: { searchQuery: searchText, action: "search" },
                success: function (players) {
                    if (players) {
                        var questionlist = "";
                        $.each(players, function (index, player) {
                            questionlist += getquestions(player);
                        });
                        $("#userstable tbody").html(questionlist);
                        $("#pagination").hide();
                    }
                },
                error: function () {
                    console.log("something went wrong");
                },
            });
        } else {
            getplayers();
        }
    });
    getplayers();
});
<!doctype html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Veterinarian Office</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B"
        crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em"
        crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
</head>

<body>
    <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="#">
            <div><b>Paws</b><br>to Care</div></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="index.html">Home
                        <span class="sr-only"></span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.html">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.html">Contact</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Animal Info
                    </a>
                    <div class="dropdown-menu admin" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="cats.html">Cats</a>
                        <a class="dropdown-item" href="dogs.html">Dogs</a>
                        <a class="dropdown-item" href="exotics.html">Exotics</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container">
        <!-- START THE SECTIONALS -->

        <div class="row jumbotron">
            <h2>Animal Data
                <br>
                <span class="text-muted">Dogs</span>
            </h2>
            <input class="form-control" id="myInput" type="text" placeholder="Search..">
            <hr>
            <table class="table table-hover table-responsive table-sm table-bordered">
                <br>
                <thead>
                    <tr><th>#</th></tr>
                </thead>
                <tbody id="myTable">
                    <tr></tr>
                </tbody>
            </table>
        </div>
    </div>      
      <div class="modal fade" id="Center" tabindex="-1" role="dialog" aria-labelledby="CenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="LongTitle">Owner</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
      <div class="modal fade" id="Center2" tabindex="-1" role="dialog" aria-labelledby="CenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="LongTitle">Notes</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body2">
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>

    <!-- FOOTER -->
    <footer class="container">
        <p class="float-right">
            <a href="#">Back to top</a>
        </p>
        <p>&copy; 2017-2018 Midterm, Inc. &middot;
            <a href="#">Privacy</a> &middot;
            <a href="#">Terms</a>
        </p>
    </footer>

    <script>
       
function sortTable(n) {
  let table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
  table = document.getElementById("myTable");
  switching = true;
  //Set the sorting direction to ascending:
  dir = "asc"; 
  /*Make a loop that will continue until
  no switching has been done:*/
  while (switching) {
    //start by saying: no switching is done:
    switching = false;
    rows = table.getElementsByTagName("tr");
    /*Loop through all table rows (except the
    first, which contains table headers):*/
    for (i = 1; i < (rows.length - 1); i++) {
      //start by saying there should be no switching:
      shouldSwitch = false;
      /*Get the two elements you want to compare,
      one from current row and one from the next:*/
      x = rows[i].getElementsByTagName("td")[n];
      y = rows[i + 1].getElementsByTagName("td")[n];
      /*check if the two rows should switch place,
      based on the direction, asc or desc:*/
      if (dir == "asc") {
        if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
          //if so, mark as a switch and break the loop:
          shouldSwitch= true;
          break;
        }
      } else if (dir == "desc") {
        if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
          //if so, mark as a switch and break the loop:
          shouldSwitch = true;
          break;
        }
      }
    }
    if (shouldSwitch) {
      /*If a switch has been marked, make the switch
      and mark that a switch has been done:*/
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
      //Each time a switch is done, increase this count by 1:
      switchcount ++;      
    } else {
      /*If no switching has been done AND the direction is "asc",
      set the direction to "desc" and run the while loop again.*/
      if (switchcount == 0 && dir == "asc") {
        dir = "desc";
        switching = true;
      }
    }
  }
};
       $(document).ready(function () {

            jQuery.support.cors = true;

            $.ajax({
                type: "GET",
                url: "dogs.json",
                data: "{}",
                contentType: "application/json; charset=utf-8",
                dataType: "json",
                cache: false,

                success: function (data) {
                
                let triangle_worthy = ['name','breed','sex','owners'];
                Object.keys(data.dogs[0]).forEach( (key) => {
                    let meh = (triangle_worthy.includes(key) ? (key + "&nbsp;" +"<span>"+localStorage.getItem("triangle"))+"</span>" : (key + "&nbsp;" )  );
                       $("thead > tr").append(
                            "<th scope='col' class='table-primary'><button type='button' class='btn-md btn  m-1 waves-effect'>" + meh +"</button></th>"
                        );
                });
                let boo = 0;
                $("thead > tr > th").on( "click", function(event) {
                        sortTable(0);
                        localStorage.clear();
                        let el = event.target.querySelector("span");
                    if (boo){
                         localStorage.setItem("triangle",'▲');
                         boo=0;
                         el.innerHTML = ( "<span>"+localStorage.getItem("triangle") +"</span>" );
                         return;
                        } else {
                            localStorage.setItem("triangle",'▼');
                            boo = 1;
                            el.innerHTML = ( "<span>"+localStorage.getItem("triangle") +"</span>" );
                            return;
                        }
                    }); 
                   $.each(data.dogs, function (index) {
                   
                    let indy = index+1;
                    let age = (string) => { 
                        return new Date().getFullYear() - new Date(string).getFullYear() 
                    };
                    let sizer = data.dogs[index].size;
                    $(".modal-body").append(data.dogs[index].owners);
                    $(".modal-body2").append("<span>" + data.dogs[index].notes+ "</span>");
                    $("tbody").append(
                            "<tr>" + "<th scope='row'>" + indy + 
                            "</th>" +
                            "<td>" + data.dogs[index].name + "</td>" +
                            "<td>" + data.dogs[index].breed +  "</td>" +
                            "<td>" + data.dogs[index].sex.toUpperCase() + "</td>" +
                            "<td>" + age(data.dogs[index].age) + "</td>" +
                            "<td>" + (data.dogs[index].neutered == 1 ? "Yes"
                            : "No") + "</td>" +
                            "<td>" + (data.dogs[index].declawed == 1 ? "Yes"
                            : "No") + "</td>" +
                            "<td>" + (data.dogs[index].shots == 1 ? "Yes"
                            : "No") + "</td>" +
                            "<td>" + (sizer < 20 ? "S" : (sizer > 19 && sizer < 50) ? "M" 
                            : (sizer > 49 && sizer < 100 ) ? "L" : (sizer > 100) ? "G" : "G") + "</td>" +
                            "<td>" + "<button type='button' class='btn btn-primary' data-toggle='modal' data-target='#Center'>" 
                            + "Owners Info" +"</button>" + "</td>" +
                            "<td>" + "<button type='button' class='btn btn-primary' data-toggle='modal' data-target='#Center'>" 
                            + "Notes" +"</button></td>"+
                            "</tr>")
                    })
                }
            });
            
            
    $("#myInput").on("keyup", function() {
        let value = $(this).val().toLowerCase();
        $("#myTable tr").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
});
    </script>
</body>

</html>
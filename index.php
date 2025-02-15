<?php
    include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="row g-0">

        <div class="col-md-2 d-flex flex-column p-3 text-white bg-dark" style="height: inherit; min-height: 100vh;">
            <a class="d-flex text-align-center text-white text-decoration-none" href="#"> <span class="fw-bold fs-3">ServerMC</span> </a>
            <br>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                    <a href="" id="hm" class="nav-link text-white fs-6 active"> <i class="bi bi-house-door me-2"></i>Home</a>
                </li>
                <li class="nav-item">
                    <a href="#" id="pj" class="nav-link text-white fs-6" > <i class="bi bi-boxes me-2"></i>Master Project</a>
                </li>
                <li class="nav-item">
                    <a href="#" id="ms" class="nav-link text-white fs-6"><i class="bi bi-book-half me-2"></i>Master Service</a>
                </li>
            </ul>
            <hr>
            <div class="dropdown">
                <button class="btn dropdown-toggle text-white" data-bs-toggle="dropdown" aria-expanded="false">
                  <i class="bi bi-gear me-1"></i>Admin
                </button>
                <ul class="dropdown-menu dropdown-menu-light">
                  <li><a class="dropdown-item" href="#">Profile</a></li>
                  <li><a class="dropdown-item" href="#">Log Out</a></li>
                </ul>
            </div>
        </div>
        
        <div class="col-md-10 bg-white">
          <div class="container-fluid" id="c-fluid">
            <div class="row p-3">
              <h3 class="fw-bold">Main Data</h3>
            </div>
            
            <div class="row">

              <!-- Tabel Data -->
              <div class="col-md-8">
                <div class="card shadow">
                  <div class="card-header">
                    <h6>Data Project</h6>
                  </div>
                  <div class="card-body ">
                    <table id="tabel" class="table table-responsive">
                      <thead>
                          <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Client</th>
                            <th scope="col">Service Name</th>
                            <th scope="col">Description</th>
                            <th scope="col" style="width: 30%;">Date</th>
                            <th scope="col">Action</th>
                          </tr>
                      </thead>
                      <tbody id="body-tabel">
                      <tr>
                          <?php
                          include 'koneksi.php';
                          $x= 1;
                              $query = mysqli_query($connect, "SELECT * FROM project");
                              while ($project = mysqli_fetch_array($query)) {
                          ?>
                          <td> <?php echo $x++ ?></td>
                          <td> <?php echo $project['client'] ?></td>
                          <td> <?php echo $project['service'] ?></td>
                          <td> <?php echo $project['description'] ?></td>
                          <td> <?php echo $project['date'] ?></td>
                          <td>
                              <a href="edit.php?id=<?php echo $project['no'];?>"><i class="bi bi-pencil-square" ></i></a>
                              <a href="delete.php?no=<?php echo $project['no'];?>"onclick="return confirm('You sure want to delete this?')"><i class="bi bi-trash3"></i></a>
                          </td>
                          </tr>
                      </tbody> <?php } ?>
                    </table>
                  </div>
                </div>  
              </div>

              <!-- Tabel Form -->
              <div class="col-md-4">
                <div class="card shadow">
                  <div class="card-header">
                    <h6>Form</h6>
                  </div>
                  <div class="card-body"> 
                    <form action="add.php" method="POST" enctype="multipart/form-data">
                      <label class="form-label" for="">Users Email</label>
                      <input id="input-email" name="client" class="form-control" type="text" placeholder="user@gmail.com" required>
                      <div class="input-group mt-3">
                        <label class="input-group-text" for="inputGroupSelect01">Service</label>
                        <select class="form-select" id="inputGroupSelect01" name="service">
                          <option value="null">Choose...</option>
                          <option value="UI/UX Design">UI/UX Design</option>
                          <option value="Web Development">Web Developtment</option>
                          <option value="Mobile Apps Development">Mobile Apps Development</option>
                        </select>
                      </div>
                      <label class="form-label" for="">Date</label>
                      <input class="form-control" type="date" id="date" name="date">
                      <label for="" >Picture</label>
                      <div>
                      <input type="file" name="pictu" id="pictu" value="pictu" accept="image/*" onchange="preview_image(event)" required>
                        <br>
                        <br>
                        <img id="output_img" width="50%">
                        <br>
                      </div>
                      <label class="form-label" for="">Description</label>
                      <textarea class="form-control" id="text-area" name="description"></textarea>
                      <div class="text-center mt-3">
                        <button class="btn btn-secondary" id="btn-submit" type="submit" name="submit">Submit</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
              
            </div>

            
          </div>

          <div id="card" class="card-pj">
            <h3 class="m-3 fw-bold">Master Project</h3>
            <hr>
            <div class="container d-flex gap-3 mt-3">
              <div id="in-card" class="card" style="width: 18rem;">
                <img src="https://media.istockphoto.com/id/1341415561/vector/web-ui-ux-design-web-development-3d-concept.jpg?s=612x612&w=0&k=20&c=fuQZC3NmQDViKiWOte0e7a54LMmk3st3m2v-sVIS1Ks=" class="card-img-top" alt="wb">
                <div class="card-body">
                  <h5 class="card-title">Project 1</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-secondary">Maintance</a>
                </div>
              </div>
              <div id="in-card" class="card" style="width: 18rem;">
                <img src="https://media.istockphoto.com/id/1362508194/vector/modern-3d-illustration-of-web-development.jpg?s=612x612&w=0&k=20&c=FzoSgPjIPiPV7wFtCHCFDOehKVgOkDWVdgtZb8N797s=" class="card-img-top" alt="wb">
                <div class="card-body">
                  <h5 class="card-title">Project 3</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-secondary">Maintance</a>
                </div>
              </div>
            </div>
          </div>

          <div id="servis" class="col-md-10 m-3">
            <div class="row">
              <h3 class="fw-bold">Our Service</h3>
            </div>
            <hr>
            <div class="row">
              <div class="card m-3">
                <div class="card-header">
                  <h6>This Is Our List's Service</h6>
                </div>
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="card">
                        <div class="card-body">
                          <h5 class="card-title">UI/UX Design</h5>
                          <p class="card-text">We provide services to assist in creating an attractive and easy-to-use appearance.</p>
                          <a href="#" class="btn btn-primary">Call us</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="card">
                        <div class="card-body">
                          <h5 class="card-title">Web Developtment</h5>
                          <p class="card-text">Website development with the help of frameworks to make work faster and more efficient in maintenance</p>
                          <a href="#" class="btn btn-primary">Call us</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <div class="card">
                        <div class="card-body">
                          <h5 class="card-title">Mobile Apps Development</h5>
                          <p class="card-text">Mobile based application development</p>
                          <a href="#" class="btn btn-primary">Call us</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="card">
                        <div class="card-body">
                          <h5 class="card-title">Database</h5>
                          <p class="card-text">Teknologi yang kita gunakan adalah mysql</p>
                          <a href="#" class="btn btn-primary">Call us</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
          </div>
          </div>
        </div>

    </div>

    <!-- Modal Edit -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="staticBackdropLabel">Edit Description</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <textarea name="" id="popup-desc" class="form-control w-100">

            </textarea>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" data-bs-dismiss="modal" id="add-edit">Save</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal Description -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Description</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Culpa illum laudantium optio adipisci, quam expedita vitae reprehenderit exercitationem quis unde dicta praesentium fuga dolorum odio rem, architecto vero aspernatur explicabo.
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <script type='text/javascript'>

      function preview_image(event) {
        var reader = new FileReader();
        reader.onload = function(){
          var output = document.getElementById('output_img');
          output.src = reader.result;
        }
        reader.readAsDataURL(event.target.files[0]);
      }
      
    </script>
    

    <script src="main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
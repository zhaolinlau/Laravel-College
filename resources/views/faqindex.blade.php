<!DOCTYPE html>
<html>
    <head>
        <title>FAQ</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

        <script src="https://kit.fontawesome.com/6b5e8c15a7.js" crossorigin="anonymous"></script>

    </head>

    <body>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

        @if(session('success'))
        <div class="alert alert-primary" role="alert">
            {{session('success')}}
        </div>
        @endif

        <div class="container">
            <div class="row">
                <h1>FAQ</h1>

                <div class="col-6" style="width:30%; border:1px solid red;">
                    <table class="table table-hover">
                        <tr>
                            <td>Programme</td>
                        </tr>
                        <tr>
                            <td>Admissions</td>
                        </tr>
                    </table>
                </div>

                <div class="col-6" style="border:1px solid red;">
                    <!-- PROGRAMME -->
                    <table class="table table-hover" style="margin-bottom:40px;">
                        <tr>
                            <td colspan=2>Programme</td>
                            <td colspan=2>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#exampleModal1">
                                Add FAQ
                                </button>
                            </td>
                        </tr>
                        @foreach($data_faqprogramme as $faq_programme)
                        <tr>
                            <td style="width:60px;">{{$faq_programme->id}}</td>
                            <td style="width:460px;">{{$faq_programme->Question}}</td>
                            <td><a href="faqdata/{{$faq_programme->id}}/editProgramme"><i class="fa-solid fa-angle-right"></i></a></td>
                            <td><a href="faqdata/{{$faq_programme->id}}/deleteProgramme" onclick="return confirm('Confirm delete ?')"><i class="fa-solid fa-trash"></i></a></td>
                        </tr>
                        @endforeach
                    </table>

                    <!-- ADMISSIONS -->
                    <table class="table table-hover">
                        <tr>
                            <td colspan=2>Admissions</td>
                            <td colspan=2>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                                Add FAQ
                                </button>
                            </td>
                        </tr>
                        @foreach($data_faqadmission as $faqadmission)
                        <tr>
                            <td style="width:60px;">{{$faqadmission->id}}</td>
                            <td style="width:460px;">{{$faqadmission->Question}}</td>
                            <td><a href="faqdata/{{$faqadmission->id}}/editAdmission"><i class="fa-solid fa-angle-right"></i></a></td>
                            <td><a href="faqdata/{{$faqadmission->id}}/deleteAdmission" onclick="return confirm('Confirm delete ?')"><i class="fa-solid fa-trash"></i></a></td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>

<!-- Modal 1-->
<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Add New FAQ for Programme</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <form action="/faqdata/createProgramme" method="POST">
        {{csrf_field()}}
            <div class="form-floating" style="margin-bottom:20px;">
                <textarea name="Question" class="form-control" placeholder="Enter question here" id="floatingtextarea"></textarea>
                <label for="floatingtextarea">Question</label>
            </div>
            <div class="form-floating" style="margin-bottom:20px;">
                <textarea name="Answer" class="form-control" placeholder="Enter answer here" id="floatingtextarea"></textarea>
                <label for="floatingtextarea">Answer</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Modal 2-->
<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Add New FAQ for Admission</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <form action="/faqdata/createAdmission" method="POST">
        {{csrf_field()}}
            <div class="form-floating" style="margin-bottom:20px;">
                <textarea name="Question" class="form-control" placeholder="Enter question here" id="floatingtextarea"></textarea>
                <label for="floatingtextarea">Question</label>
            </div>
            <div class="form-floating" style="margin-bottom:20px;">
                <textarea name="Answer" class="form-control" placeholder="Enter answer here" id="floatingtextarea"></textarea>
                <label for="floatingtextarea">Answer</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>

    </body>
</html>
</html>

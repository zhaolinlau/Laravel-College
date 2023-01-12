<!DOCTYPE html>
<html>
    <head>
        <title>FAQ | UPDATE PROGRAMME</title>

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
                <h1 style="padding:10px; margin-bottom: 40px;">Update FAQ for Programme</h1>

                <div class="col-6" style="margin:auto;">
                    <form action="/faqdata/{{$data_faqprogramme->id}}/updateProgramme" method="POST">
                    {{csrf_field()}}
                        <div class="form-floating" style="margin-bottom:20px;">
                            <textarea name="Question" class="form-control" placeholder="Enter question here" id="floatingtextarea" style="min-height:100px;">{{$data_faqprogramme->Question}}</textarea>
                            <label for="floatingtextarea">Question</label>
                        </div>
                        <div class="form-floating" style="margin-bottom:20px;">
                            <textarea name="Answer" class="form-control" placeholder="Enter answer here" id="floatingtextarea" style="min-height:300px;">{{$data_faqprogramme->Answer}}</textarea>
                            <label for="floatingtextarea">Answer</label>
                        </div>
                        <button type="submit" class="btn btn-primary" style="background-color: #3a9b8c; border:none;">UPDATE</button>
                    </form>
                </div>
            </div>
        </div>

    </body>
</html>
</html>

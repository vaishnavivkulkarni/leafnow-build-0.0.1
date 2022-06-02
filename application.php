<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>CV</title>
  </head>
  <body class="bg-info">
    <form action="cv.php" method="POST" enctype="multipart/form-data">
    <div class="container">
      <div class="row">
        <h1 id="cv_heading">
          Leaf Now
        </h1>
        <div class="col-md-6 bg-primary shadow p-4">
          <div class="mb-3">
            <label>Fullname</label>
            <input type="text" name="fullname" placeholder="for example: John Smith" class="form-control">
          </div>
          <div class="mb-3">
            <label>Profession</label>
            <input type="text" name="profession" placeholder="for example: Horticulturist/Fresh Graduate/Student" class="form-control">
          </div>
          <div class="mb-3">
            <label>Picture</label>
            <input type="file" name="picture" class="form-control">
          </div>
          <div class="mb-3">
            <label>Objective</label>
            <textarea class="form-control" name="objective" rows="3">To grow plants in an open environment. To raise healthy and disease free plants. To encourage people to grow plants.
            </textarea>
          </div>
          <div class="mb-3">
            <label>Personal Information</label>
            <input class="form-control" type="text" name="father" placeholder="Father Name">
            <input class="form-control" type="text" name="gender" placeholder="Gender">
            <input class="form-control" type="date" name="dob" placeholder="DOB">
            <input class="form-control" type="text" name="nationality" placeholder="Nationality">
          </div>
          <div class="mb-3">
            <label>Conatct</label>
            <input type="text" name="address" placeholder="for example: xyzplace Bangalore, Karnataka, India" class="form-control">
            <input type="email" name="email" placeholder="for example: abc@gmail.com" class="form-control">
            <input type="text" name="mobile" placeholder="for example: +919876543210" class="form-control">
          </div>
          <div class="mb-3">
            <label>Education</label>
            <textarea class="form-control" name="education" id="edu">Education</textarea>
          </div>
        </div>
        <div class="col-md-6 bg-primary shadow p-4">
          <div class="mb-3">
            <div class="mb-3">
            <label>Experience</label>
            <textarea class="form-control" name="experience" id="cv">[Fresh] or if you have any experience then write details</textarea>
          </div>
          </div>
          <div class="mb-3">
            <label>Your motivation or tips for growing plants</label>
            <textarea class="form-control" name="skills" id="skill">
            Motivation/Tips:</textarea>
          </div>
          <div class="mb-3">
            <label>Plant Description</label>
            <input type="text" name="plant1" placeholder="Plantname,quantity" class="form-control">
            <input type="text" name="plant2" placeholder="Plantname,quantity" class="form-control">
            <input type="text" name="plant3" placeholder="Plantname,quantity" class="form-control">
          </div>
          <div class="mb-3">
            <label>Languages Known</label>
            <input type="text" name="language1" placeholder="Language" class="form-control">
            <input type="text" name="language2" placeholder="Language" class="form-control">
            <input type="text" name="language3" placeholder="Language" class="form-control">
          </div>
          <div class="mb-3">
            <input type="submit" name="btn" class="btn btn-dark" value="Generate PDF">
          </div>
        </div>
      </div>
    </div>
    </form>

    <!-- Online CDN Links --> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>
    <script>
         CKEDITOR.replace( 'cv',{removeButtons: 'Underline,Strike,Subscript,Superscript,Anchor,Styles,Specialchar,PasteFromWord,Blockquote,Undo,Redo,Unlink,Image,Source,About,Indent,Paste,Cut,Copy,RemoveFormat,Link,Scayt'});
         CKEDITOR.replace( 'skills',{removeButtons: 'Underline,Strike,Subscript,Superscript,Anchor,Styles,Specialchar,PasteFromWord,Blockquote,Undo,Redo,Unlink,Image,Source,About,Indent,Paste,Cut,Copy,RemoveFormat,Link,Scayt'});
         CKEDITOR.replace( 'education',{removeButtons: 'Underline,Strike,Subscript,Superscript,Anchor,Styles,Specialchar,PasteFromWord,Blockquote,Undo,Redo,Unlink,Image,Source,About,Indent,Paste,Cut,Copy,RemoveFormat,Link,Scayt'});
    </script>
  </body>
</html>